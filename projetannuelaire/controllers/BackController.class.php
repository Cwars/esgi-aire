<?php

/**
 *
 */
class BackController
{

    public function IndexAction() {

    }

    /* ****************************  Home ***********************************/
    public function backhomeAction() {
        $v = new View("backhome");
    }

    public function backActionConnectionAction() {
        $v = new View("backActionConnection");
    }

    public function backConnectionAction() {
        $user = new User();
        $v = new View("backconnection");
        $v->assign("formConnection", $user->getFormConnection());
    }

    /* ****************************  News ***********************************/
    public function backNewsAddAction() {
        $news = new News();
        $v = new View('backNewsAdd');
        $v->assign("formNews", $news->getFormNews());
    }

    public function backActionNewsAddAction($params) {
        $v = new View("backActionNewsAdd");
    }

    public function backActionNewsUpdateAction($params) {
        $v = new View("backActionNewsUpdate");
    }

    /* ****************************  User ***********************************/
    public function backUserAction() {
        $v = new View("backuser");
    }


    public function backUserAddAction() {
        $user = new User();
        $v = new View('backUserAdd');
        $v->assign("formRegister", $user->getFormRegister());
    }

    public function backActionUserAddAction() {
        $v = new View("backActionUserAdd");
    }

    public function backActionUserUpdateAction($params) {
        $v = new View("backActionUserUpdate");
        $v->assign("idUpdate",$params[0]);
    }

    public function backUserUpdateAction($params) {
        $v = new View("backUserUpdate");

        $user=((new User())->populate(['id' => $params[0]]));
        $id = $params[0];
        $username = $user->getUsername();
        $firstname = $user->getfirstname();
        $lastname = $user->getlastname();
        $email = $user->getEmail();

        $v->assign("formUpdate", $user->getFormUpdate($id,$username,$firstname,$lastname,$email));
    }

    public function backActionUserDeleteAction($params) {
        $v = new View("backActionUserDelete");
        $v->assign("idDelete",$params);
    }

    public function backActionUserRestoreAction($params) {
        $v = new View("backActionUserRestore");
        $v->assign("idRestore",$params);
    }

    /* **************************** Menu  ***********************************/
    public function backmenuAction() {
        $v = new View("backmenu");
    }

    /* **************************** News  ***********************************/
    public function backNewsAddAction() {
        $news = new News();
        $v = new View('backNewsAdd');
        $v->assign("formRegister", $news->getFormRegister());
    }

    public function backActionNewsAddAction() {
        $v = new View("backActionNewsAdd");
    }

    public function backActionNewsUpdateAction() {
        $v = new View("backActionNewsUpdate");

    }

    /* **************************** Mediafile  ***********************************/

    public function backMediafileAction() {
        $v = new View("backmediafile");
    }

    public function backMediafileAddAction() {
        $media = new Mediafile();
        $v = new View('backmediafileAdd');
        $v->assign("FormMediafile", $media->getFormMediafile());
    }
}