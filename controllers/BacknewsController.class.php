<?php

class BacknewsController
{

    public function NewsMenuAction($params) {
        $datanews = new News();

        $type = "news";
        $search = ["id","title","author","type","dateInserted","pathChild"];
        $res = $datanews->getObj($search,$params[0],NB_ITEM_BACK);
        $pageNum = (int)$params[0];
        $pageMax = (int)$res[1];

        if(!empty($params[0]) && $pageNum>0 && $pageNum <= $pageMax ){
            $v = new View("menu");
            $v->assign("search", $search);
            $v->assign("result", $res[0]);
            $v->assign("nbPage", $res[1]);
            $v->assign("type", $type);
        } else {
            $v = new View("page404");
        }
    }

    public function NewsMenuRestoreAction($params) {
        $datanews = new News();

        $type = "news";
        $search = ["id","title","author","type","dateInserted","pathChild"];
        $res = $datanews->getArchive($search,$params[0],NB_ITEM_BACK);
        $pageNum = (int)$params[0];
        $pageMax = (int)$res[1];

        if(!empty($params[0]) && $pageNum>0 && $pageNum <= $pageMax ){
            $v = new View("menuRestore");
            $v->assign("search", $search);
            $v->assign("result", $res[0]);
            $v->assign("nbPage", $res[1]);
            $v->assign("type", $type);
        } else {
            $v = new View("page404");
        }
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
        $pathChild = $news->getPathChild();

        echo $pathChild;

        $media=((new Mediafile())->populate(['path' => $pathChild]));
        var_dump($media);

        $titleMedia = $media->getTitle();
        $descriptionMedia = $media->getDescription();

        $v->assign("formUpdate", $news->getFormUpdate($id,$title,$content,$type,$titleMedia,$descriptionMedia));
    }
    public function NewsActionUpdateAction($params) {
        $v = new View("newsActionUpdate");
        $username = $_SESSION['username'];

        // Récupère les données pour la news
        $news=((new News())->populate(['id' => $params[0]]));
        $title = $news->getTitle();
        $pathChild = $news->getPathChild();

        $media=((new Mediafile())->populate(['path' => $pathChild]));
        $titleMedia = $media->getTitle();
        $path = $media->getPath();
        $type = $media->getType();
        $dateInserted = $media->getDateInserted();

        $v->assign("titleMedia",$titleMedia);
        $v->assign("pathUpdate",$path);
        $v->assign("typeUpdate",$type);
        $v->assign("username",$username);
        $v->assign("dateInsertedUpdate",$dateInserted);

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