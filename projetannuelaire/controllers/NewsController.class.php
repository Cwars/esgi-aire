<?php

/**
 *
 */
class NewsController
{

    public function newsAdd($content,$title) {

        $article = new News();
        $article -> setContent($content);
        $article -> setTitle($title);
        $article ->save();
    }

    public function newsDelete(){

    }

    public function newsUpdate(){

    }


}
