<?php

/**
 *
 */
class BackMediafileController
{
    public function MediafileMenuAction() {
        $datafile = new Mediafile();

        $v = new View("mediafileMenu");
        $search = ["id","type","title","description","path","dateInserted"];
        $res = $datafile->getObj($search);

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
        $title = $media->getTitle();
        $description = $media->getDescription();
        $mediafile = $media->getPath();

        $v->assign("FormMediafileUpdate", $media->getFormMediafileUpdate($id,$title,$description));

    }

    public function MediafileActionUpdateAction($params) {
        $v = new View("mediafileActionUpdate");
        $media=((new Mediafile())->populate(['id' => $params[0]]));

        $title = $media->getTitle();
        $mediafile = $media->getPath();
        $type = $media->getType();

        $v->assign("idUpdate",$params[0]);
        $v->assign("titleUpdate",$title);
        $v->assign("pathUpdate",$mediafile);
        $v->assign("typeUpdate",$type);
    }

    public function MediafileActionDeleteAction($params) {
        $v = new View("mediafileActionDelete");
        $v->assign("idDelete",$params);
    }

}