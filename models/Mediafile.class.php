<?php

    class Mediafile extends BaseSql  {

        protected $id = -1;
        protected $name;
        protected $description;
        protected $path;
        protected $isDeleted;
        protected $date_inserted;
        protected $date_updated;


        public function __construct($id = -1, $description = null, $path = null, $status = 0) {
            parent::__construct();
        }

        public function setId($id) {
            $this->id = $id;
        }


        public function getId() {
            echo $this->id;
        }

        public function setname($name) {
            $this->name = trim($name);
        }

        public function getname() {
            echo $this->name;
        }

        public function setdescription($description) {
            $this->description = trim($description);
        }

        public function getdescription() {
            echo $this->description;
        }

        public function setpath($path) {
            $this->path = trim($path);
        }

        public function getpath() {
            echo $this->path;
        }

        public function setIsDeleted($isDeleted) {
            $this->isDeleted = $isDeleted;
        }

        public function getStatus() {
            return $this -> $status;
        }

        public function getdate_inserted() {
            echo $this->date_inserted;
        }

        public function getdate_updated() {
            echo $this->date_updated;
        }

        public function getFormMediafile()
        {
            return [
                "options" => [
                    "method" => "POST",
                    "action" => "backActionMediafileAdd",
                    "class" => "add-form",
                    "id" => "Register"
                ],
                "struct" => [
                    "name" => [
                        "type" => "text",
                        "placeholder" => "Nom",
                        "required" => true
                    ],
                    "description" => [
                        "type" => "text",
                        "placeholder" => "Description",
                        "required" => true
                    ],
                    "file" => [
                        "type" => "file",
                        "required" => true
                    ],
                ]
            ];
        }

    }