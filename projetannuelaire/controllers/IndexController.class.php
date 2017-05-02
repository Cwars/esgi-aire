<?php

/**
 *
 */
class IndexController
{

    public function IndexAction($params) {

        $user2 = new User();

        // $user2 = $user2->populate(['id' => 8]);
        //
        // echo "<pre>";
        // print_r($user2);
        // echo "</pre>";

        $pseudo = "guillaume";
        $v = new View();
        $v->assign("pseudo", $pseudo);
        $v->assign("form", $user2->getForm());
    }

    public function welcomeAction($params) {
        $article1 = new News();

        $v = new View("welcome");
        $v->assign("form", $article1->getForm());
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
