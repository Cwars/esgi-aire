
<div class="content-wrapper">
    <h1>{Title}</h1>

    <?php
    if( !empty($_POST['title']) && !empty($_POST['description'])) {
        $mediafile = new Mediafile();
        $title = htmlentities($_POST['title']);
        $description = htmlentities($_POST['description']);

        $error = false;
        $listOfErrors = [];
        //title est déjà utilisé
        if (strlen($title) == 0) {
            //Le nom d'utilisateur doit faire au moins 2 caractères
            $listOfErrors[] = "1";
            $error = true;
        }
        //Vérifier le description
        if (strlen($description) == 0) {
            //Le nom doit faire au moins 2 caractères
            $listOfErrors[] = "2";
            $error = true;
        }

        $avatarFileType = ["png", "jpg", "jpeg", "gif"];
        $avatarLimitSize = 10000000;

        if(empty($_FILES["mediafile"])){
            $listOfErrors[]="8";
            $error = true;
        }else if($_FILES["mediafile"]["error"] > 0){
            $error = true;
            switch ($_FILES["file"]["error"]) {
                case UPLOAD_ERR_INI_SIZE:
                    $listOfErrors[]="9";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $listOfErrors[]="9";
                    break;
                case UPLOAD_ERR_PARTIAL:
                    $listOfErrors[]="9";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $listOfErrors[]="9";
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    $listOfErrors[]="9";
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    $listOfErrors[]="9";
                    break;
                case UPLOAD_ERR_EXTENSION:
                    $listOfErrors[]="9";
                    break;
                default:
                    $listOfErrors[]="9";
                    break;
            }
        }else{
            $path = pathinfo($_FILES["mediafile"]["name"]);

            if(!in_array( strtolower($path["extension"]) , $avatarFileType)){
                $listOfErrors[]="10";
                $error = true;
            }

            if($_FILES["mediafile"]["size"]>$avatarLimitSize){
                $listOfErrors[]="11";
                $error = true;
            }
        }

        //Est ce que le dossier upload existe
        $pathUpload = __DIR__.DS."upload";
        if( !file_exists($pathUpload) ){
            //Sinon le créer
            mkdir($pathUpload);
        }
        //Déplacer l'avatar dedans
        $nameAvatar = uniqid().".". strtolower($path["extension"]);
        move_uploaded_file($_FILES["file"]["tmp_name"], $pathUpload.DS.$nameAvatar);

        if ($error === false) {
            $user->setTitle($title);
            $user->setDescription($description);
            $user->setPath($pathUpload.DS.$nameAvatar);
            // $user -> setBirthday($username);
            $user->save();
        }else{
            $_SESSION["form_error"] = $listOfErrors;
            $_SESSION["form_post"] = $_POST;
        }

    } else{
        $listOfErrors[] = "7";
        $_SESSION["form_error"] = $listOfErrors;
        $_SESSION["form_post"] = $_POST;
    }

    echo "<div class=\"content-wrapper\">";
    if( isset($_SESSION["form_error"]) ){
        foreach ($_SESSION["form_error"] as $error) {
            echo "<li>".$msgError[$error];
        }
    }
    unset($_SESSION["form_post"]);
    unset($_SESSION["form_error"]);
    echo "</div>";

    ?>

</div>
<!-- .content-wrapper -->

