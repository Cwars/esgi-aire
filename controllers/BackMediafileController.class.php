<?php

/**
 *
 */
class BackMediafileController
{
    public function MediafileMenuAction() {
        $v = new View("mediafileMenu");
    }

    public function MediafileAction() {
        $v = new View("mediafileMenu");
    }

    public function MediafileAddAction() {
        $media = new Mediafile();
        $v = new View('mediafileAdd');
        $v->assign("FormMediafile", $media->getFormMediafile());
    }

    public function MediafileActionAddAction() {
        $v = new View('mediafileActionAdd');
    }
}