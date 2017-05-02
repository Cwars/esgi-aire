<?php

/**
 *
 */
class NewsController
{

    public function newsAdd($content,$Title,$Type) {

        $article = new News();

        $article -> setContent($content);
        $article -> setTitle($Title);

        $article ->save();
    }

    public function newsDelete(){

    }

    public function newsUpdate(){

    }


}
