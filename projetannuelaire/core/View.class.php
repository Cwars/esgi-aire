<?php

class View {

    private $view;
    private $template;
    private $cat;

    public function __construct($view = "index") {
        $this->setView($view);
        $this->setTemplate();
    }

    public function setView($view) {
        if (file_exists("views/front/" . $view . ".view.php")) {
            $this->view = "front/".$view;
            $this->cat = "front"; 
        }
            elseif (file_exists("views/back/" . $view . ".view.php")) {
            $this->view = "back/".$view;
            $this->cat = "back";
        }
        else{
            //logs
            die("La view n'existe pas");
        }
    }

    public function setTemplate() {
        if ($this->cat === "back") {
            if (file_exists("views/backend.view.php")) {
                $this->template = "backend";
            } else {
                // logs
                die("Le template n'existe pas");
            }
        } else{
            if (file_exists("views/frontend.view.php")) {
                $this->template = "frontend";
            } else {
                // logs

                die("Le template n'existe pas");
            }
        }
    }

//    public function setTemplateBo($template) {
//        if (file_exists("views/".$template.".view.php")) {
//            $this->templateBack = $template;
//        } else {
//            // logs
//
//            die("Le template n'existe pas");
//        }
//    }

    public function assign($key, $value) {
        $this->data[$key] = $value;
    }

    public function includeModal($modal, $config) {
        if (file_exists("views/modals/".$modal.".mod.php")) {
            include "views/modals/".$modal.".mod.php";
        } else {
            // logs

            die("Le modal n'existe pas");
        }
    }

    public function __destruct() {
        extract($this->data);
        include "views/".$this->template.".view.php";
    }


}
