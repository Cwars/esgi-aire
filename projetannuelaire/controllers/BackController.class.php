<?php

/**
 *
 */
class BackController
{

    public function IndexAction($params) {

    }


    public function backhomeAction($params) {
        $v = new View("backhome");
    }

    public function backConnectionAction($params) {
        $user = new User();
        $v = new View("backconnection");
        $v->assign("formConnection", $user->getFormConnection());
    }

    public function backUserAddAction() {

        $user = new User();

        $v = new View('backUserAdd');
        $v->assign("formRegister", $user->getFormRegister());
    }


    public function backmenuAction($params) {
        $v = new View("backmenu");
}

    public function backActionConnectionAction($params) {
        $v = new View("backActionConnection");
    }

    public function backActionUserAddAction($params) {
        $v = new View("backActionUserAdd");
    }

}