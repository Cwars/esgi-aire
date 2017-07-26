<?php

class NewsItemController
{

    public function newsItemAction($params)
    {

        $news = new News();
        $img = new Mediafile();
        //Si News n'existe pas ou si supprimé (!=0)
        if ($news->populate(['id' => $params[0]]) && $news->populate(['id' => $params[0]])->getIsDeleted() == 0) {

            //Crée la "page"
            $v = new View("news");
            //Populate $news par rapport à l'id contenu dans l'url
            $news = $news->populate(['id' => $params[0]]);
            //Récupère les données
            $title = $news->getTitle();
            $author = $news->getAuthor();
            $content = $news->getContent();
            $dateInserted = $news->getDateInserted();
            $path = $news->getPathChild();

            $img = $img->populate(['path' => $path]);
            $isDeleted = $img->getIsDeleted();
            $type = $img->getType();

            //Renvoi les données à la page
            $v->assign("title", $title);
            $v->assign("author", $author);
            $v->assign("content", $content);
            $v->assign("dateInserted", $dateInserted);

            if($isDeleted == 0)
                $v->assign("path", $path);
                $v->assign("type", $type);

            } else {
                $v = new View("page404");
        }

    }
}
