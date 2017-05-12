<?php

    class Comments extends BaseSql  {

        protected $id = -1;
        protected $content;
        protected $author;
        protected $parentID;
        protected $parentType;
        protected $status;
        protected $date_inserted;
        protected $date_updated;


        public function __construct($id = -1, $description = null, $author = null, $status = 0) {
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
            $this->date = $author;
        }

        public function getauthor() {
            echo $this->author;
        }

        public function setStatus($status) {
            $this->status = $status;
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

    }