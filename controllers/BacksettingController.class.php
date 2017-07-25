<?php

/**
 * Created by PhpStorm.
 * User: ilanz
 * Date: 25/07/2017
 * Time: 19:39
 */
class BacksettingController
{
    public function settingActionAddAction() {
        $v = new View("settingActionAdd");
    }
    public function settingAddAction() {

        $v = new View("settingAdd");
        $np = new Page();
        $v->assign("formStyle", $np->getFormStyle());
    }
}