<?php

/**
 *
 */
class IndexController
{

    public function IndexAction($params) {

        $user2 = new User();
        $v = new View();
    }

    public function welcomeAction($params) {
        $param = new Param();
        $v = new View("welcome");
        $v->assign("form", $param->getForm());
    }

    public function homeAction($params) {
            $v = new View("home");
    }

    public function actionNewsAddAction($params) {
        $v = new View("actionNewsAdd");
    }

    public function contactAction($params) {
        $v = new View("contact");
    }
}
