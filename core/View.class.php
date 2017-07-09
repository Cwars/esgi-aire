<?php

class View {

    private $view;
    private $template;
    private $cat;
    private $data = array();

    public function __construct($view = "index") {
        $this->setViewFront($view);
        $this->setViewBack($view);
        $this->setTemplate();
    }

    public function setViewFront($view)
    {
        $directory = "views/front/";
        $folders = glob($directory . "*");
        foreach ($folders as $folder) {
            if (is_dir($folder)) {
                $obj = explode("/", $folder);
                    if(file_exists($directory . $obj[2] . "/" . $view . ".view.php")) {
                        $this->view = "front/" . $obj[2] . "/" . $view;
                        $this->cat = "front";
                    }
                    if(file_exists($directory . $obj[2] . "/action/" . $view . ".view.php")) {
                        $this->view = "front/" . $obj[2] . "/action/" . $view;
                        $this->cat = "front";
                    }
                }
            }
    }

    public function setViewBack($view) {
        $directory = "views/back/";
        $folders = glob($directory."*");
        foreach ($folders as $folder) {
            if(is_dir($folder)){
                $obj = explode("/", $folder);
                    if(file_exists($directory.$obj[2]."/" . $view . ".view.php")) {
                        $this->view = "back/" . $obj[2] . "/" . $view;
                        $this->cat = "back";
                    }
                    if(file_exists($directory.$obj[2]."/action/" . $view . ".view.php")) {
                        $this->view = "back/" . $obj[2] . "/action/" . $view;
                        $this->cat = "back";
                    }
                }
        }

    }

    public function setTemplate() {
        if ($this->view != "back/user/userConnection" && $this->view != "back/user/action/userActionConnection"){
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
        } else {
            $this->template = "connection";
        }
    }

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
        global $msgError;
        global $msgSuccess;

        extract($this->data);
        include "views/".$this->template.".view.php";
    }


}
