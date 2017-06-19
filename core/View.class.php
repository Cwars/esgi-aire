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
                switch (true) {
                    case (file_exists($directory . $obj[2] . "/" . $view . ".view.php")):
                        $this->view = "front/" . $obj[2] . "/" . $view;
                        $this->cat = "front";
                        break;
                    case (file_exists($directory . $obj[2] . "/action/" . $view . ".view.php")):
                        $this->view = "front/" . $obj[2] . "/action/" . $view;
                        $this->cat = "front";
                        break;
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
                switch (true) {
                    case (file_exists($directory.$obj[2]."/" . $view . ".view.php")):
                        $this->view = "back/".$obj[2]."/" . $view;
                        $this->cat = "back";
                        break;
                    case (file_exists($directory.$obj[2]."/action/" . $view . ".view.php")):
                        $this->view = "back/".$obj[2]."/action/" . $view;
                        $this->cat = "back";
                        break;
                }
            }
        }

    }

    public function setTemplate() {
        if ($this->view != "back/user/connection"){
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

    public function page404() {

        $directory = "projetannuelaire";
        $url = "http://".$_SERVER['HTTP_HOST']."/".$directory;

        die("
            <link rel=\"stylesheet\" href=\"$url/assets/back/css/style.css\"> 
            <div class=\"bg-notf\">
             <div class=\"not-found\">
                <h1>Erreur</h1>
                <div class='backpage' ><a href=\"javascript:history.go(-1)\">Revenir à la page précédente</a></div>
             </div>
            </div>
        ");
    }

    public function __destruct() {
        global $msgError;

        extract($this->data);
        include "views/".$this->template.".view.php";
    }


}
