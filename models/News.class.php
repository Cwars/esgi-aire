<?php

    class News extends BaseSql  {

        protected $id = -1;
        protected $content;
        protected $author;
        protected $isDeleted;
        protected $date_inserted;
        protected $date_updated;
        protected $title;
        protected $typeNews;



        public function __construct($id = -1, $content = null, $author = null, $status = 0) {
            parent::__construct();
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setTypeNews($typeNews) {
            $this->typeNews = $typeNews;
        }

        public function setContent($content) {
            $this->content = trim($content);
        }

        public function getContent() {
            return $this->content;
        }

        public function setAuthor($author) {
            if (strlen($author)<55){
                $this->author = trim($author);
            }
        }

        public function getAuthor() {
            return $this->author;
        }

        public function setIsDeleted() {
            $this->isDeleted = 1;
        }

        public function getIsDeleted() {
            return $this->isDeleted;
        }

        public function getTitle() {
            return $this->title;
        }

        public function setTitle($title) {
            if (strlen($title)<55){
                $this->title = trim($title);
            }
        }

        public function getdate_inserted() {
            return $this->date_inserted;
        }

        public function getdate_updated() {
            return $this->date_updated;
        }

        public function getFormNews() {
            return [
                "options" => [
                    "method" => "POST",
                    "action" => "actionAdd",
                    "class" => "form-group",
                    "id" => "addNews",
                    "optionName" => "type"
                ],
                "struct" => [
                    "title" => [
                        "type" => "text",
                        "placeholder" => "Titre de l'article",
                        "required" => true
                    ],
                    "author" => [
                        "type" => "text",
                        "placeholder" => "Auteur de l'article",
                        "required" => true
                    ],
                    "content" => [
                        "type" => "text",
                        "placeholder" => "Contenu de l'article",
                        "required" => true
                    ],
                    "Option" => [
                        "type" => "select",
                        "option" => [
                            "option1" => "Blog",
                            "option2" => "News"
                        ]

                    ]
                ]
            ];
        }

    }