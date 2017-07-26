<?php

    class Comment extends BaseSql  {

        protected $id = -1;
        protected $title;
        protected $content;
        protected $author;
        protected $parentID;
        protected $parentType;
        protected $isDeleted;
        protected $dateInserted;
        protected $dateUpdated;

        public function __construct($id = -1, $description = null, $author = null) {
            parent::__construct();
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }

        public function setTitle($title) {
            if (strlen($title)<55){
                $this->title = trim($title);
            }
        }

        public function getTitle() {
            return $this->title;
        }


        public function setContent($content) {
            $this->content = trim($content);
        }

        public function getContent() {
            return $this->content;
        }

        public function setAuthor($author) {
            $this->date = trim($author);
        }

        public function getAuthor() {
            return $this->author;
        }

        public function setIsDeleted($isDeleted) {
            $this->isDeleted = $isDeleted;
        }

        public function getIsDeleted() {
            return $this ->isDeleted;
        }

        public function getDateInserted() {
            return $this->dateInserted;
        }

        public function getDateUpdated() {
            return $this->dateUpdated;
        }

        public function setDateInserted($dateInserted) {
            $this->dateInserted = $dateInserted;
        }

        public function setDateUpdated($dateUpdated) {
            $this->dateUpdated = $dateUpdated;
        }

        public function getFormComFront() {
            return [
                "options" => [
                    "method" => "POST",
                    "action" => "ActionAdd",
                    "class" => "form-group",
                    "id" => "commentform",
                    "optionName" => "type"
                ],
                "struct" => [
                    "title" => [
                        "type" => "text",
                        "placeholder" => "Titre",
                        "required" => true,
                    ],
                    "content" => [
                        "type" => "textarea",
                        "placeholder" => "Contenu du commentaire",
                        "required" => true,
                    ]
                ]
            ];
        }

        public function getFormContact() {
            return [
                "options" => [
                    "method" => "POST",
                    "action" => "contactAction",
                    "class" => "form-group",
                    "id" => "Contactform",
                    "optionName" => "type"
                ],
                "struct" => [
                    "name" => [
                        "type" => "text",
                        "placeholder" => "Nom",
                        "required" => true,
                    ],
                    "subject" => [
                        "type" => "text",
                        "placeholder" => "Objet",
                        "required" => true,
                    ],
                    "mail" => [
                        "type" => "text",
                        "placeholder" => "Adresse mail",
                        "required" => true,
                    ],
                    "content" => [
                        "type" => "textarea",
                        "placeholder" => "Que voulez-vous ?",
                        "required" => true,
                    ]
                ]
            ];
        }

    }