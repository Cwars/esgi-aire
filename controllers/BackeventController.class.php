<?php

/**
 *
 */
class BackeventController
{

    public function EventMenuAction($params) {
        $event = new Event();

        $type = "event";
        $search = ["id","title","description","date","dateUpdated","author"];
        $res = $event->getObj($search,$params[0],NB_ITEM_BACK);

        if($params[0]>0 && $params[0]<=$res[1]){
            $v = new View("menu");
            $v->assign("search", $search);
            $v->assign("result", $res[0]);
            $v->assign("nbPage", $res[1]);
            $v->assign("type", $type);
        } else {
            $v = new View("page404");
        }
    }

    public function EventMenuRestoreAction() {
        $v = new View("menuRestore");
        $event = new Event();

        $type = "event";
        $search = ["id","title","description","date","dateUpdated","author"];
        $res = $event->getArchive($search);

        $v->assign("search", $search);
        $v->assign("result", $res);
        $v->assign("type", $type);
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