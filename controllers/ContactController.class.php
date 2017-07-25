<?php

class ContactController
{

    public function contactAction() {
        $v = new View("contact");
        $coms = new Comment();
        // Création de la page esgi-aire.com/contact

        $v->assign("formContact", $coms->getFormContact());
    }


}
