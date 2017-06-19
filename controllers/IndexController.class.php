<?php

/**
 *
 */
class IndexController
{

    public function welcomeAction() {
        $param = new Param();
        $v = new View("welcome");
        $v->assign("form", $param->getForm());
    }

    public function actionNewsAddAction() {
        $v = new View("actionNewsAdd");
    }

    public function contactAction() {
        $v = new View("contact");
    }
}
