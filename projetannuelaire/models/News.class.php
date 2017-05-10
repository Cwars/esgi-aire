<?php

    class News extends BaseSql  {

        private $id = -1;
        private $content;
        private $author;
        private $isDeleted;
        private $date_inserted;
        private $date_updated;
        private $title;
        private $typeNews;



        public function __construct($id = -1, $content = null, $author = null, $status = 0) {
            parent::__construct();
        }

        public function getId() {
            echo $this->id;
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
            echo $this->content;
        }

        public function setAuthor($author) {
            if (strlen($author)<55){
                $this->author = trim($author);
            }
        }

        public function getAuthor() {
            echo $this->author;
        }

        public function setIsDeleted() {
            $this->isDeleted = 1;
        }

        public function getIsDeleted() {
            return $this->isDeleted;
        }

        public function getTitle() {
            echo $this->title;
        }

        public function setTitle($title) {
            if (strlen($title)<55){
                $this->title = trim($title);
            }
        }

        public function getdate_inserted() {
            echo $this->date_inserted;
        }

        public function getdate_updated() {
            echo $this->date_updated;
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
                    "title" => [
                        "type" => "text",
                        "placeholder" => "Titre de l'article",
                        "required" => true
                    ],
                    "content" => [
                        "type" => "text",
                        "placeholder" => "Contenu de votre article",
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