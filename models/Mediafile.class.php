<?php

    class Mediafile extends BaseSql  {

        protected $id = -1;
        protected $name;
        protected $description;
        protected $path;
        protected $isDeleted;
        protected $dateInserted;
        protected $dateUpdated;


        public function __construct($id = -1, $description = null, $path = null, $status = 0) {
            parent::__construct();
        }

        public function setId($id) {
            $this->id = $id;
        }


        public function getId() {
            return $this->id;
        }

        public function setName($name) {
            $this->name = trim($name);
        }

        public function getName() {
            return $this->name;
        }

        public function setDescription($description) {
            $this->description = trim($description);
        }

        public function getDescription() {
            return $this->description;
        }

        public function setPath($path) {
            $this->path = trim($path);
        }

        public function getPath() {
            return $this->path;
        }

        public function setIsDeleted($isDeleted) {
            $this->isDeleted = $isDeleted;
        }

        public function getStatus() {
            return $this -> status;
        }

        public function getdate_inserted() {
            return $this-> dateInserted;
        }

        public function getdate_updated() {
            return $this-> dateUpdated;
        }

        public function getFormMediafile()
        {
            return [
                "options" => [
                    "method" => "POST",
                    "action" => "ActionAdd",
                    "class" => "add-form",
                    "id" => "Register"
                ],
                "struct" => [
                    "title" => [
                        "type" => "text",
                        "placeholder" => "title",
                        "required" => true
                    ],
                    "description" => [
                        "type" => "text",
                        "placeholder" => "Description",
                        "required" => true
                    ],
                    "mediafile" => [
                        "type" => "file",
                        "placeholder" => "Votre image",
                        "required" => true
                    ],
                ]
            ];
        }

    }