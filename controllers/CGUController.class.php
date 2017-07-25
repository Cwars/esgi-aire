<?php

class CGUController
{
    public function CGUAction()
    {
        // Création de la page esgi-aire.com/home
        $v = new View("CGU");

        $page = ((new Page())->populate(['title' => "CGU"]));

        $title = $page->getTitle();
        $content = $page->getContent();

        $v->assign("title", $title);
        $v->assign("content", $content);
    }
}
