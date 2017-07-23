<?php

/**
 *
 */
class BacknewsController
{

    public function NewsMenuAction() {
        $datanews = new News();
        $v = new View("newsMenu");

        $search = ["id","title","author","content","type","dateInserted"];
        $res = $datanews->getObj($search);

        $v->assign("search", $search);
        $v->assign("result", $res);
    }

    public function NewsMenuRestoreAction() {
        $datanews = new News();
        $v = new View("newsMenuRestore");

        $search = ["id","title","author","content","type","dateInserted"];
        $res = $datanews->getArchive($search);

        $v->assign("search", $search);
        $v->assign("result", $res);
    }

    public function NewsAddAction() {
        $news = new News();
        $v = new View('newsAdd');

        $v->assign("formNews", $news->getFormNews());
    }

    public function NewsActionAddAction() {
        $username = $_SESSION['username'];
        $v = new View("newsActionAdd");

        $v->assign("username",$username);
    }

    public function NewsUpdateAction($params) {
        $v = new View("newsUpdate");


        $news=((new News())->populate(['id' => $params[0]]));
        $id = $params[0];
        $title = $news->getTitle();
        $content = $news->getContent();
        $type = $news->getType();

        $v->assign("formUpdate", $news->getFormUpdate($id,$title,$content,$type));
    }
    public function NewsActionUpdateAction($params) {
        $v = new View("newsActionUpdate");
        $username = $_SESSION['username'];

        // Récupère les données pour la news
        $news=((new News())->populate(['id' => $params[0]]));
        $title = $news->getTitle();
        $v->assign("username",$username);
        $v->assign("idUpdate",$params[0]);
        $v->assign("titleUpdate",$title);
    }

    public function NewsActionDeleteAction($params) {
        $v = new View("newsActionDelete");
        $v->assign("idDelete",$params);
    }

    public function NewsActionRestoreAction($params) {
        $v = new View("newsActionRestore");
        $v->assign("idRestore",$params);
    }


}