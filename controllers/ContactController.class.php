<?php

class ContactController
{

    public function contactAction() {
        $v = new View("contact");
        $coms = new Comment();
        // Création de la page esgi-aire.com/contact

        $page=((new Page())->populate(['title' => "Contact"]));

        $title = $page->getTitle();
        $content = $page->getContent();

        $v->assign("title", $title);
        $v->assign("content", $content);
        $v->assign("formContact", $coms->getFormContact());
    }


}
