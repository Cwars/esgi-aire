<?php

/**
 *
 */
class BackMediafileController
{
    public function MediafileAction() {
        $v = new View("menu");
    }

    public function MediafileAddAction() {
        $media = new Mediafile();
        $v = new View('add');
        $v->assign("FormMediafile", $media->getFormMediafile());
    }

    public function MediafileActionAddAction() {
        $v = new View('ActionAdd');
    }
}