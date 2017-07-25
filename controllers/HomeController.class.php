<?php

class HomeController
{
    public function homeAction() {
        // Création de la page esgi-aire.com/home
        $v = new View("home");

        $page=((new Page())->populate(['title' => "Home"]));

        $title = $page->getTitle();
        $content = $page->getContent();

        $v->assign("title", $title);
        $v->assign("content", $content);

        $isNews = $page->getHasNew();
        $isEvent = $page->getHasEvent();

        if($isNews == 0){
            $searchNews = ["id","title","author","content","type","dateInserted"];
            $resNews = $page -> getRecentElement($searchNews,1,"news");
            $v->assign("resultNews", $resNews);
        }

        if($isEvent == 0){
            $searchEvent = ["id","title","description","date","dateUpdated","author"];
            $resEvent = $page ->getRecentEvent($searchEvent,NB_ITEM_FRONT,"event");
            $v->assign("resultEvent", $resEvent);
        }
    }

}
