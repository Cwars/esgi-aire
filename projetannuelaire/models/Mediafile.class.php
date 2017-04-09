<?php

    class Mediafile extends BaseSql  {

        public $id = -1;
        public $name;
        public $description;
        public $path;
        public $status;
        public $date_inserted;
        public $date_uppathd;


        public function __construct($id = -1, $description = null, $path = null, $status = 0) {
            parent::__construct();
        }

        public function setId($id) {
            $this->id = $id;
        }


        public function getId() {
            echo $this->id;
        }


        public function setname($name) {
            $this->name = trim($name);
        }

        public function getname() {
            echo $this->name;
        }

        public function setdescription($description) {
            $this->description = trim($description);
        }

        public function getdescription() {
            echo $this->description;
        }

        public function setpath($path) {
            $this->path = trim($path);
        }

        public function getpath() {
            echo $this->path;
        }

        public function setStatus($status) {
            $this->status = $status;
        }

        public function getStatus() {
            return $this -> $status;
        }

        public function getdate_inserted() {
            echo $this->$path_inserted;
        }

        public function getdate_uppathd() {
            echo $this->$path_uppathd;
        }

    }