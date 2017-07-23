<?php

/**
 *
 */
class BackeventController
{

    public function EventMenuAction() {
        $v = new View("eventMenu");
        $event = new Event();

        $search = ["id","title","description","date","dateUpdated","author"];
        $res = $event->getObj($search);

        $v->assign("search", $search);
        $v->assign("result", $res);
    }

    public function EventMenuRestoreAction() {
        $v = new View("eventMenuRestore");
        $event = new Event();

        $search = ["id","title","description","date","dateUpdated","author"];
        $res = $event->getArchive($search);

        $v->assign("search", $search);
        $v->assign("result", $res);
    }

    public function EventAddAction() {
        $event = new Event();
        $v = new View('eventAdd');
        $v->assign("formEvent", $event->getFormEvent());
    }

    public function EventActionAddAction($params) {
        $v = new View("eventActionAdd");
        $username = $_SESSION['username'];

        $v->assign("username", $username);
    }

    public function EventActionUpdateAction($params) {
        $v = new View("eventActionUpdate");

        $event=((new Event())->populate(['id' => $params[0]]));

        $title = $event->getTitle();
        $dateI = $event->getDateInserted();

        $v->assign("username", $username);
        $v->assign("idUpdate",$params[0]);
        $v->assign("titleUpdate",$title);
        $v->assign("dateI",$dateI);
    }

    public function EventUpdateAction($params) {
        $v = new View("eventUpdate");

        $event=((new Event())->populate(['id' => $params[0]]));
        $id = $params[0];

        $title = $event->getTitle();
        $description = $event->getDescription();
        $date = $event->getDate();

        $v->assign("FormEventUpdate", $event->getFormEventUpdate($id,$title,$description,$date));
    }

    public function EventActionDeleteAction($params) {
        $v = new View("eventActionDelete");
        $v->assign("idDelete",$params);
    }

    public function EventActionRestoreAction($params) {
        $v = new View("eventActionRestore");
        $v->assign("idRestore",$params);
    }


}