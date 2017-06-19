<?php

/**
 *
 */
class BackController
{

    public function IndexAction() {

    }

    /* ****************************  Home ***********************************/
    public function backhomeAction() {
        $v = new View("backhome");
    }

    /* ****************************  News ***********************************/
    public function backNewsAddAction() {
        $news = new News();
        $v = new View('backNewsAdd');
        $v->assign("formNews", $news->getFormNews());
    }

    public function backActionNewsAddAction($params) {
        $v = new View("backActionNewsAdd");
    }

    public function backActionNewsUpdateAction($params) {
        $v = new View("backActionNewsUpdate");
    }

    /* **************************** Menu  ***********************************/
    public function backmenuAction() {
        $v = new View("backmenu");
    }

    /* **************************** Mediafile  ***********************************/

    public function backMediafileAction() {
        $v = new View("backmediafile");
    }

    public function backMediafileAddAction() {
        $media = new Mediafile();
        $v = new View('backmediafileAdd');
        $v->assign("FormMediafile", $media->getFormMediafile());
    }

    public function backActionMediafileAddAction() {
        $v = new View('backActionmediafileAdd');
    }
}