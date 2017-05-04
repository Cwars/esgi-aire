<?php

/**
 *
 */
class ArticleController
{

    public function articleAdd($content,$Title) {

        $article = new Article();

        $article -> setContent($content);
        $article -> setTitle($Title);
        $article ->save();
    }

    public function articleDelete(){

    }

    public function articleUpdate(){

    }


}
