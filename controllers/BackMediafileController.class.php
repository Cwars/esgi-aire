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

    public function MediafileUpdateAction($params) {
        $v = new View("mediafileUpdate");

        $media=((new Mediafile())->populate(['id' => $params[0]]));
        $id = $params[0];
        $title = $media->getName();
        $description = $media->getDescription();
        $mediafile = $media->getPath();

        $v->assign("FormMediafileUpdate", $media->getFormMediafileUpdate($id,$title,$description,$mediafile));
    }

    public function MediafileActionUpdateAction($params) {
        $v = new View("mediafileActionUpdate");
        $media=((new Mediafile())->populate(['id' => $params[0]]));

        $name = $media->getName();
        $v->assign("idUpdate",$params[0]);
        $v->assign("nameUpdate",$name);
    }

    public function MediafileActionDeleteAction($params) {
        $v = new View("mediafileActionDelete");
        $v->assign("idDelete",$params);
    }

}