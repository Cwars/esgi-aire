<?php

/**
 *
 */
class BackNewsController
{

    public function NewsAddAction() {
        $news = new News();
        $v = new View('add');
        $v->assign("formNews", $news->getFormNews());
    }

    public function NewsActionAddAction($params) {
        $v = new View("actionadd");
    }

    public function NewsActionUpdateAction($params) {
        $v = new View("actionupdate");
    }

}