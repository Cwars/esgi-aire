    <?php

    //$id
    //$title
    //$description
    //$path
    //$type
    //$idParent
    //$typeParent
    //$isDeleted
    //$dateInserted
    //$dateUpdated
    //$idChild;
    //$typeChild;

    if( !empty($_POST['title']) && !empty($_POST['description'])) {
        $mediafile = new Mediafile();

        $title = htmlentities($_POST['title']);
        $description = htmlentities($_POST['description']);
        $now = date("Y-m-d H:i:s");

        $error = false;
        $listOfErrors = [];

        //title est déjà utilisé
        if ($mediafile->populate(['title' => $title])){
            //Le titre est déja utilisé
            $listOfErrors[] = "titleUsed";
            $error = true;
        }

        if (strlen($title) == 0) {
            //Le nom d'utilisateur doit faire au moins 2 caractères
            $listOfErrors[] = "1";
            $error = true;
        }

        if ($error === false) {
            $fileType = ["png", "jpg", "jpeg", "gif","mp3","wav","mp4","mov"];
            $limitSize = 100000000;

            if(empty($_FILES['mediafile'])){
                $listOfErrors[]='NoMediafile';
                $error = true;
            }else if($_FILES['mediafile']["error"] > 0){

                $error = true;
                switch ($_FILES["mediafile"]["error"]) {
                    case UPLOAD_ERR_INI_SIZE:
                    $listOfErrors[]='NoMediafile';
                    break;
                    case UPLOAD_ERR_FORM_SIZE:
                    $listOfErrors[]='NoMediafile';
                    break;
                    case UPLOAD_ERR_PARTIAL:
                    $listOfErrors[]='NoMediafile';
                    break;
                    case UPLOAD_ERR_NO_FILE:
                    $listOfErrors[]='NoMediafile';
                    break;
                    case UPLOAD_ERR_NO_TMP_DIR:
                    $listOfErrors[]='NoMediafile';
                    break;
                    case UPLOAD_ERR_CANT_WRITE:
                    $listOfErrors[]='NoMediafile';
                    break;
                    case UPLOAD_ERR_EXTENSION:
                    $listOfErrors[]='NoMediafile';
                    break;
                    default:
                    $listOfErrors[]='NoMediafile';
                    break;
                }
            }else{
                $infoFile = pathinfo($_FILES["mediafile"]["name"]);

                if(!in_array( strtolower($infoFile["extension"]) , $fileType)){
                    $listOfErrors[]="10";
                    $error = true;
                }

                if($_FILES["mediafile"]["size"]>$limitSize){
                    $listOfErrors[]="11";
                    $error = true;
                }

                switch (strtolower($infoFile["extension"])){
                    case "png":
                    case "jpg":
                    case "jpeg":
                    case "gif":
                    $type = "image";
                    break;
                    case "mp3":
                    case "wav":
                    $type = "musique";
                    break;
                    case "mp4":
                    case "mov":
                    $type = "vidéo";
                    break;
                }

            //Est ce que le dossier upload existe
                $pathUpload =$_SERVER['DOCUMENT_ROOT'].DS."esgi-aire".DS."images".DS."upload";

                if( !file_exists($pathUpload) ){
                //Sinon le créer
                    mkdir($pathUpload);
                }
            //Déplacer l'avatar dedans
                $nameFile = uniqid().".". strtolower($infoFile["extension"]);
                move_uploaded_file($_FILES["mediafile"]["tmp_name"], $pathUpload.DS.$nameFile);

                $mediafile->setTitle($title);
                $mediafile->setDescription($description);
                $mediafile->setIsDeleted(0);
                $mediafile->setPath($pathUpload.DS.$nameFile);
                $mediafile->setType($type);
                $mediafile->setDateInserted($now);
                $mediafile->setDateUpdated($now);

                $mediafile->save();
            }
        }else{
            $_SESSION["form_error"] = $listOfErrors;
            $_SESSION["form_post"] = $_POST;
        }
    } else{
        $listOfErrors[] = "allRequired";
        $_SESSION["form_error"] = $listOfErrors;
        $_SESSION["form_post"] = $_POST;
    }

    if( isset($_SESSION["form_error"]) ){
        foreach ($_SESSION["form_error"] as $error) {
            echo "<li>".$msgError[$error];
        }
    }
    unset($_SESSION["form_post"]);
    unset($_SESSION["form_error"]);

    ?>


