<?php

/**
 *
 */
class PresentationController
{

    public function presentationAction() {
        $v = new View("presentation");
        // Création de la page esgi-aire.com/presentation

        $page=((new Page())->populate(['title' => "Presentation"]));

        $title = $page->getTitle();
        $content = $page->getContent();

        $v->assign("title", $title);
        $v->assign("content", $content);
    }


}
