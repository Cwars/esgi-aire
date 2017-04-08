<?php

    class Events extends BaseSql  {

        public $id = -1;
        public $description;
        public $date;
        public $status;
        public $date_inserted;
        public $date_updated;


        public function __construct($id = -1, $description = null, $date = null, $status = 0) {
            parent::__construct();
        }

        public function setId($id) {
            $this->id = $id;
        }


        public function getId($id) {
            echo $this->id;
        }

        public function setdescription($description) {
            $this->description = trim($description);
        }

        public function getdescription() {
            echo $this->description;
        }

        public function setdate($date) {
            $this->date = $date;
        }

        public function getdate() {
            echo $this->date;
        }

        public function setStatus($status) {
            $this->status = $status;
        }

        public function getStatus() {
            return $this -> $status;
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