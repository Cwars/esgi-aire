<?php

    class Event extends BaseSql  {

        protected $id = -1;
        protected $title;
        protected $description;
        protected $date;
        protected $isDeleted;
        protected $dateInserted;
        protected $dateUpdated;


        public function __construct($id = -1, $description = null, $date = null, $status = 0) {
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

        public function setDate($date) {
            $this->date = $date;
        }

        public function getDate() {
            return $this->date;
        }

        public function setIsDeleted($status) {
            $this->status = $status;
        }

        public function getIsDeleted($isDeleted) {
            $this->isDeleted = $isDeleted;
        }

        public function getDateInserted() {
            return $this->isDeleted;
        }

        public function getDateUpdated() {
            return $this->dateUpdated;
        }

        public function setDateInserted($dateInserted) {
            $this-> dateInserted = $dateInserted;
        }

        public function setDateUpdated($dateUpdated) {
            $this-> dateUpdated = $dateUpdated;
        }


        public function getFormEvent()
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
                    "date" => [
                        "type" => "date",
                        "placeholder" => "La date de l'évenement",
                        "required" => true
                    ],
                ]
            ];
        }

    }