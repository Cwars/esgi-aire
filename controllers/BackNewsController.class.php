<?php

/**
 *
 */
class BackNewsController
{

    public function NewsMenuAction() {
        $datanews = new News();
        $v = new View("newsMenu");

        $search = ["id","title","author","content","type","dateInserted"];
        $res = $datanews->getObj($search);

        $v->assign("search", $search);
        $v->assign("result", $res);
    }

    public function NewsAddAction() {
        $news = new News();
        $v = new View('newsAdd');
        $v->assign("formNews", $news->getFormNews());
    }

    public function NewsActionAddAction() {
        $v = new View("newsActionAdd");
    }

    public function NewsUpdateAction($params) {
        $v = new View("newsUpdate");

        $news=((new News())->populate(['id' => $params[0]]));
        $id = $params[0];
        $title = $news->getTitle();
        $author = $news->getAuthor();
        $content = $news->getContent();

        $v->assign("formUpdate", $news->getFormUpdate($id,$title,$author,$content));
    }
    public function NewsActionUpdateAction($params) {
        $v = new View("newsActionUpdate");
        $news=((new News())->populate(['id' => $params[0]]));

        $title = $news->getTitle();
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