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
        $user = new User();
        $v = new View("welcome");
        $v->assign("form", $user->getFormRegister());
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
