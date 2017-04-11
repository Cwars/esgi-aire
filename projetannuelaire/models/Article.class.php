<?php

    class Article extends BaseSql  {

        private $id = -1;
        private $content;
        private $author;
        private $status;
        private $date_inserted;
        private $date_updated;
        private $title;


        public function __construct($id = -1, $content = null, $author = null, $status = 0) {
            parent::__construct();
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getId() {
            echo $this->id;
        }

        public function setcontent($content) {
            $this->content = trim($content);
        }

        public function getcontent() {
            echo $this->content;
        }

        public function setauthor($author) {
            if (strlen($author)>55){
                $this->author = trim($author);
            }
        }

        public function getauthor() {
            echo $this->author;
        }

        public function setStatus($status) {
            $this->status = $status;
        }

        public function getTitle() {
            echo $this->title;
        }

        public function setTitle($title) {
            if (strlen($title)>55){
                $this->title = trim($title);
            }
        }

        public function getdate_inserted() {
            echo $this->date_inserted;
        }

        public function getdate_updated() {
            echo $this->date_updated;
        }

    }