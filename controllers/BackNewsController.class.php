<?php

/**
 *
 */
class BackNewsController
{

    public function NewsAddAction() {
        $news = new News();
        $v = new View('newsAdd');
        $v->assign("formNews", $news->getFormNews());
    }

    public function NewsActionAddAction($params) {
        $v = new View("newsActionadd");
    }

    public function NewsActionUpdateAction($params) {
        $v = new View("newsActionupdate");
    }

}