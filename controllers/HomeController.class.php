<?php

class HomeController
{
    public function homeAction() {
        $v = new View("home");

        $page=((new Page())->populate(['title' => "Home"]));

        $title = $page->getTitle();
        $content = $page->getContent();

        $v->assign("title", $title);
        $v->assign("content", $content);

        $isNews = $page->getHasNews();
        $isEvent = $page->getHasEvent();

        if($isNews == 0){
            $searchNews = ["id","title","author","content","type","dateInserted","pathChild","typeChild"];
            $resNews =(new News())-> getRecentElement($searchNews,1);
            $v->assign("resultNews", $resNews);
        }

        if($isEvent == 0){
            $searchEvent = ["id","title","description","date","dateUpdated","author"];
            $resEvent = (new Event())->getRecentEvent($searchEvent,NB_ITEM_FRONT);
            $v->assign("resultEvent", $resEvent);
        }
    }

}
