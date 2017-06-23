<?php

/**
 *
 */
class BackPageController
{

    public function PageMenuAction() {
        $v = new View("pageMenu");
    }

    public function PageAddAction() {
        $page = new Page();
        $v = new View('pageAdd');
        $v->assign("formPage", $news->getFormPage());
    }

    public function PageActionAddAction($params) {
        $v = new View("pageActionadd");
    }

    public function PageActionUpdateAction($params) {
        $v = new View("pageActionupdate");
        $page=((new Page())->populate(['id' => $params[0]]));

//        $username = $user->getUsername();
//        $v->assign("idUpdate",$params[0]);
//        $v->assign("usernameUpdate",$username);
    }

//    public function UserUpdateAction($params) {
//        $v = new View("userUpdate");
//
//        $user=((new User())->populate(['id' => $params[0]]));
//        $id = $params[0];
//        $username = $user->getUsername();
//        $firstname = $user->getfirstname();
//        $lastname = $user->getlastname();
//        $email = $user->getEmail();
//
//        $v->assign("formUpdate", $user->getFormUpdate($id,$username,$firstname,$lastname,$email));
//    }

    public function PageActionDeleteAction($params) {
        $v = new View("pageActionDelete");
        $v->assign("idDelete",$params);
    }

    public function PageActionRestoreAction($params) {
        $v = new View("pageActionRestore");
        $v->assign("idRestore",$params);
    }


}