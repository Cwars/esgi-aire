<?php

/**
 *
 */
class NewsController
{

    public function newsAction($params)
    {

        $news = new News();

        if ($params) {

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

                //Renvoi les données à la page
                $v->assign("title", $title);
                $v->assign("author", $author);
                $v->assign("content", $content);
                $v->assign("dateInserted", $dateInserted);

            } else {
                $v = new View("page404");
            }
        }
    }

}
