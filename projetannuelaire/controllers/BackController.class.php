<?php

/**
 *
 */
class BackController
{

    public function IndexAction($params) {

        $user2 = new User();
        $pseudo = "guillaume";
        $v = new View();
        $v->assign("pseudo", $pseudo);
        $v->assign("form", $user2->getForm());
    }


    public function backhomeAction($params) {
        $v = new View("backhome");
    }

    public function backconnectionAction($params) {
        $v = new View("backconnection");

        $user2 = new User();
        $v->assign("formRegister", $user2->getFormRegister());

        $user3 = new User();
        $v->assign("formConnection", $user3->getFormConnection());
    }

        public function backmenuAction($params) {
        $v = new View("backmenu");
    }

}
