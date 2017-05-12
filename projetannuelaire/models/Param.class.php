<?php

    class Param extends BaseSql  {

        protected $id = -1;
        protected $content;
        protected $author;

        public function __construct($id = -1, $content = null, $author = null) {
            parent::__construct();
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setContent($content) {
            $this->content = $content;
        }

        public function getContent() {
            return $this->content;
        }

        public function setAuthor($author) {
                $this->author = $author;
        }

        public function getAuthor() {
            return $this->author;
        }

        public function getForm() {
            return [
                "options" => [
                    "method" => "POST",
                    "action" => "actionNewsAdd",
                    "class" => "form-group",
                    "id" => "addNews",
                    "optionName" => "type"
                ],
                "struct" => [
                    "author" => [
                        "type" => "text",
                        "placeholder" => "auteur de l'article",
                        "required" => true
                    ],
                    "content" => [
                        "type" => "text",
                        "placeholder" => "Contenu de votre article",
                        "required" => true
                    ],

                    ]
            ];
        }

    }