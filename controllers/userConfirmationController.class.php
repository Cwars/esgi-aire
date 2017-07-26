<?php

class userConfirmationController
{
    public function userConfirmationAction($params) {
        $v = new View("userConfirmation");

        // On populate user avec l'id récupérer en parametre dans l'url
        $user=((new User())->populate(['username' => $params[0]]));

        $status = $user->getStatus();
        $firstname = $user->getFirstname();
        $lastname = $user->getLastname();
        $email = $user->getEmail();
        $pwd = $user->getPwd();
        $id = $user->getId();
        $username = $params[0];

        // On envoie ces données à la page userConfirmation
        $v->assign("newUsername",$username);
        $v->assign("newLastname",$lastname);
        $v->assign("newFirstname",$firstname);
        $v->assign("newStatus",$status);
        $v->assign("newEmail",$email);
        $v->assign("newPwd",$pwd);
        $v->assign("newId",$id);

    }
}