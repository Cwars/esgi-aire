
  <div class="content-wrapper">
        <h1>{Title}</h1>

<?php 

            $user = new User();
            $username = $_POST['username'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];
            $pwd2 = $_POST['pwd2'];
            //Birthday

        if ($pwd === $pwd2){
            $user -> setUsername($username);
            $user -> setFirstname($firstname);
            $user -> setLastname($lastname);
            $user -> setEmail($email);
            $user -> setPwd($pwd);
            $user -> setStatus("Admin");
            $user -> setIsDeleted(0);
            // $user -> setBirthday($username);

            var_dump($user);

            $user ->save();
        } else {
            echo "Les mots de passe sont différents !";
        }

?>

    </div>
    <!-- .content-wrapper -->

