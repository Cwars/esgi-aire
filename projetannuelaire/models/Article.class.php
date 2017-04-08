<?php

    class Article extends BaseSql  {

        public $id = -1;
        public $text;
        public $author;
        public $status;
        public $date_inserted;
        public $date_updated;


        public function __construct($id = -1, $text = null, $author = null, $status = 0) {
            parent::__construct();
        }

        public function setId($id) {
            $this->id = $id;
        }


        public function getId() {
            echo $this->id;
        }

        public function settext($text) {
            $this->text = trim($text);
        }

        public function gettext() {
            echo $this->text;
        }

        public function setauthor($author) {
            $this->author = trim($author);
        }

        public function getauthor() {
            echo $this->author;
        }

        public function setStatus($status) {
            $this->status = $status;
        }

        public function getdate_inserted() {
            echo $this->$date_inserted;
        }

        public function getdate_updated() {
            echo $this->$date_updated;
        }

        public function getForm() {
            return [
                "options" => [
                    "method" => "POST",
                    "action" => "article/add",
                    "class" => "form-group",
                    "id" => "monformulaire"
                ],
                "struct" => [
                    "email" => [
                        "type" => "email",
                        "placeholder" => "Votre email",
                        "required" => true
                    ],
                    "pwd" => [
                        "type" => "password",
                        "placeholder" => "Votre mot de passe",
                        "required" => true
                    ]
                ]
            ];
        }

    }