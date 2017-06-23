<?php

/**
 *
 */
class BackEventController
{

    public function EventMenuAction() {
        $v = new View("eventMenu");
    }

    public function EventAddAction() {
        $event = new Event();
        $v = new View('eventAdd');
        $v->assign("formEvent", $event->getFormEvent());
    }

    public function EventActionAddAction($params) {
        $v = new View("eventActionadd");
    }

    public function EventActionUpdateAction($params) {
        $v = new View("eventActionupdate");
        $news=((new News())->populate(['id' => $params[0]]));

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

    public function EventActionDeleteAction($params) {
        $v = new View("eventActionDelete");
        $v->assign("idDelete",$params);
    }

    public function EventActionRestoreAction($params) {
        $v = new View("eventActionRestore");
        $v->assign("idRestore",$params);
    }


}