<?php

    class Mediafile extends BaseSql  {

        protected $id = -1;
        protected $title;
        protected $description;
        protected $path;
        protected $type;
        protected $isDeleted;
        protected $dateInserted;
        protected $dateUpdated;


        public function __construct($id = -1, $description = null, $path = null, $type = null , $status = 0, $idParent = 0, $isDeleted = 0) {
            parent::__construct();
        }

        public function setId($id) {
            $this->id = $id;
        }


        public function getId() {
            return $this->id;
        }

        public function setTitle($title) {
            $this->title = trim($title);
        }

        public function getTitle() {
            return $this->title;
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

        public function setType($type) {
            $this->type = trim($type);
        }

        public function getType() {
            return $this->type;
        }

        public function setIsDeleted($isDeleted) {
            $this->isDeleted = $isDeleted;
        }

        public function getIsDeleted() {
            return $this->isDeleted;
        }

        public function getDateInserted() {
            return $this-> dateInserted;
        }

        public function getDateUpdated() {
            return $this-> dateUpdated;
        }

        public function setDateInserted($dateInserted) {
            $this-> dateInserted = $dateInserted;
        }

        public function setDateUpdated($dateUpdated) {
            $this-> dateUpdated = $dateUpdated;
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
                        "placeholder" => "Votre fichier",
                        "required" => true
                    ],
                ]
            ];
        }

        public function getFormMediafileUpdate($id,$title,$description)
        {
            return [
                "options" => [
                    "method" => "POST",
                    "action" => "../ActionUpdate/".$id,
                    "class" => "add-form",
                    "id" => "Register"
                ],
                "struct" => [
                    "title" => [
                        "type" => "text",
                        "placeholder" => "title",
                        "required" => true,
                        "value" => "".$title."",
                    ],
                    "description" => [
                        "type" => "text",
                        "placeholder" => "Description",
                        "required" => true,
                        "value" => "".$description."",
                    ],
                    "mediafile" => [
                        "type" => "file",
                        "placeholder" => "Votre fichier",
                        "required" => true,
                    ],
                ]
            ];
        }

    }