<?php

class userConfirmationController
{
    public function userConfirmationAction($params) {
        $v = new View("userConfirmation");

        // On populate user avec l'id récupérer en parametre dans l'url
        $user=((new User())->populate(['id' => $params[0]]));

        $firstname = $user->getFirstname();
        $lastname = $user->getLastname();
        $username = $user->getUsername();

        // On envoie ces données à la page userConfirmation
        $v->assign("newLastname",$lastname);
        $v->assign("newUsername",$username);
        $v->assign("newFirstname",$firstname);

    }
}