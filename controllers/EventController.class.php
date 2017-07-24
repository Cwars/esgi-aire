<?php

class EventController
{

    public function eventAction($params) {

        $event = new Event();

        $search = ["title","description","date","dateInserted","author"];
        $res = $event->getObj($search,$params[0],NB_ITEM_FRONT);

        if($params[0]>0 && $params[0]<=$res[1]){
            $v = new View("event");
            $v->assign("search", $search);
            $v->assign("result", $res[0]);
            $v->assign("nbPage", $res[1]);
        } else {
            $v = new View("page404");
        }
    }


}
