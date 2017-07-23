<?php

    class Comment extends BaseSql  {

        protected $id = -1;
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


    }