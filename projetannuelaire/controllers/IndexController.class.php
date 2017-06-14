<?php

/**
 *
 */
class IndexController
{

    public function IndexAction() {

        $user2 = new User();
        $v = new View();
    }

    public function welcomeAction() {
        $param = new Param();
        $v = new View("welcome");
        $v->assign("form", $param->getForm());
    }

    public function homeAction() {
            $v = new View("home");
    }

    public function actionNewsAddAction() {
        $v = new View("actionNewsAdd");
    }

    public function contactAction() {
        $v = new View("contact");
    }
}
