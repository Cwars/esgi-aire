<?php

class NewsController
{

    public function newsAction($params)
    {

        $news = new News();

            $search = ["id","pathChild","title","author","content","dateInserted"];
            $res = $news->getObj($search,$params[0],NB_ITEM_FRONT);

            if($params[0]>0 && $params[0]<=$res[1]){
                $v = new View("listNews");
                $v->assign("search", $search);
                $v->assign("result", $res[0]);
                $v->assign("nbPage", $res[1]);
            } else {
                $v = new View("page404");
            }


    }

}
