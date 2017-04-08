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

        $user2->save();
        $user2->getEmail();

        $pseudo = "guillaume";
        $v = new View();
        $v->assign("pseudo", $pseudo);
        $v->assign("form", $user2->getForm());
    }

    public function welcomeAction($params) {
        $pseudo = "guillaume";
        $v = new View("welcome");
        $v->assign("pseudo", $pseudo);
    }

        public function homeAction($params) {
            $v = new View("home");
    }

}
