<?php

class IndexController
{

    public function indexAction() {
        header("Location: ".PATH_RELATIVE."home");
    }
}
