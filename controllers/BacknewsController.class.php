<?php

/**
 *
 */
class BacknewsController
{

    public function NewsMenuAction($params) {
        $datanews = new News();

        $type = "news";
        $search = ["id","title","author","content","type","dateInserted"];
        $res = $datanews->getObj($search,$params[0],NB_ITEM_BACK);

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

    public function NewsMenuRestoreAction() {
        $datanews = new News();
        $v = new View("menuRestore");

        $type = "news";
        $search = ["id","title","author","content","type","dateInserted"];
        $res = $datanews->getArchive($search);

        $v->assign("search", $search);
        $v->assign("result", $res);
        $v->assign("type", $type);
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