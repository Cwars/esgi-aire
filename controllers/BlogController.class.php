<?php

class BlogController
{

    public function blogAction($params)
    {

        $news = new News();

            $search = ["titleChild","title","author","content","dateInserted"];
            $res = $news->getObjByCat($search,$params[0],NB_ITEM_FRONT,"Blog");

            if($params[0]>0 && $params[0]<=$res[1]){
                $v = new View("blog");
                $v->assign("search", $search);
                $v->assign("result", $res[0]);
                $v->assign("nbPage", $res[1]);
            } else {
                $v = new View("page404");
            }
    }

}
