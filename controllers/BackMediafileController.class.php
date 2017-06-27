<?php

/**
 *
 */
class BackMediafileController
{
    public function MediafileMenuAction() {
        $datausers = new Mediafile();

        $v = new View("mediafileMenu");
        $search = ["id","name","description","path","dateInserted"];
        $res = $datausers->getObj($search);

        $v->assign("search", $search);
        $v->assign("result", $res);

    }

    public function MediafileAddAction() {
        $media = new Mediafile();
        $v = new View('mediafileAdd');
        $v->assign("FormMediafile", $media->getFormMediafile());
    }

    public function MediafileActionAddAction() {
        $v = new View('mediafileActionAdd');
    }
}