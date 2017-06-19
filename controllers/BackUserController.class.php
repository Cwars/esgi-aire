<?php

/**
 *
 */
class BackUserController
{

    public function UserMenuAction() {
        $v = new View("menu");
    }

    public function UserAddAction() {
        $user = new User();
        $v = new View('add');
        $v->assign("formRegister", $user->getFormRegister());
    }

    public function UserActionAddAction() {
        $v = new View("actionadd");
    }

    public function UserUpdateAction($params) {
        $v = new View("Update");

        $user=((new User())->populate(['id' => $params[0]]));
        $id = $params[0];
        $username = $user->getUsername();
        $firstname = $user->getfirstname();
        $lastname = $user->getlastname();
        $email = $user->getEmail();

        $v->assign("formUpdate", $user->getFormUpdate($id,$username,$firstname,$lastname,$email));
    }

    public function UserActionUpdateAction($params) {
        $v = new View("ActionUpdate");
        $user=((new User())->populate(['id' => $params[0]]));

        $username = $user->getUsername();
        $v->assign("idUpdate",$params[0]);
        $v->assign("usernameUpdate",$username);
    }


    public function UserActionDeleteAction($params) {
        $v = new View("ActionDelete");
        $v->assign("idDelete",$params);
    }

    public function UserActionRestoreAction($params) {
        $v = new View("ActionRestore");
        $v->assign("idRestore",$params);
    }

    public function UserActionConnectionAction() {
        $v = new View("ActionConnection");
    }

    public function UserConnectionAction() {
        $user = new User();
        $v = new View("connection");
        $v->assign("formConnection", $user->getFormConnection());
    }
}
