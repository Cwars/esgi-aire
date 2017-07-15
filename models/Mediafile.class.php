<?php

    class Mediafile extends BaseSql  {

        protected $id = -1;
        protected $title;
        protected $description;
        protected $path;
        protected $type;
        protected $idParent;
        protected $typeParent;
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

        public function setType($type) {
            $this->type = trim($type);
        }

        public function getType() {
            return $this->type;
        }

        public function setTypeParent($typeParent) {
            $this->type = trim($typeParent);
        }

        public function getTypeParent() {
            return $this->typeParent;
        }

        public function setIdParent($idParent) {
            $this->idParent = trim($idParent);
        }

        public function getIdParent() {
            return $this->idParent;
        }

        public function setIsDeleted($isDeleted) {
            $this->isDeleted = $isDeleted;
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

        public function getFormMediafileUpdate($id,$title,$description,$mediafile)
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
                        "placeholder" => "Votre image",
                        "required" => true,
                        "value" => "".$mediafile."",
                    ],
                ]
            ];
        }

    }