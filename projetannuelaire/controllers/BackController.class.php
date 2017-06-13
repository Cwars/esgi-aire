<?php

/**
 *
 */
class BackController
{

    public function IndexAction($params) {

    }

    /* ****************************  Home ***********************************/
    public function backhomeAction($params) {
        $v = new View("backhome");
    }

    public function backActionConnectionAction($params) {
        $v = new View("backActionConnection");
    }

    public function backConnectionAction($params) {
        $user = new User();
        $v = new View("backconnection");
        $v->assign("formConnection", $user->getFormConnection());
    }

    /* ****************************  User ***********************************/
    public function backUserAddAction() {
        $user = new User();
        $v = new View('backUserAdd');
        $v->assign("formRegister", $user->getFormRegister());
    }

    public function backActionUserAddAction($params) {
        $v = new View("backActionUserAdd");
    }

    public function backActionUserUpdateAction($params) {
        $v = new View("backActionUserUpdate");

    }

    /* **************************** Menu  ***********************************/
    public function backmenuAction($params) {
        $v = new View("backmenu");
    }


}