<?php

    class Event extends BaseSql  {

        protected $id = -1;
        protected $title;
        protected $description;
        protected $date;
        protected $isDeleted;
        protected $dateInserted;
        protected $dateUpdated;
        protected $author;


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

        public function setAuthor($author) {
            $this->author = trim($author);
        }

        public function getAuthor() {
            return $this->author;
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

        public function setIsDeleted($isDeleted) {
            $this->isDeleted = $isDeleted;
        }

        public function getIsDeleted($isDeleted) {
            return $this->isDeleted;
        }

        public function getDateInserted() {
            return $this->isDeleted;
        }

        public function getDateUpdated() {
            return $this->dateUpdated;
        }

        public function setDateInserted($dateInserted) {
            $this->dateInserted = trim($dateInserted);
        }

        public function setDateUpdated($dateUpdated) {
            $this->dateUpdated = trim($dateUpdated);
        }


        public function getFormEvent()
        {
            return [
                "options" => [
                    "method" => "POST",
                    "action" => "ActionAdd",
                    "class" => "add-form",
                    "id" => "addEvent"
                ],
                "struct" => [
                    "title" => [
                        "type" => "text",
                        "placeholder" => "title",
                        "required" => true
                    ],
                    "description" => [
                        "type" => "textarea",
                        "placeholder" => "Description",
                        "required" => true
                    ],
                    "date" => [
                        "type" => "date",
                        "placeholder" => "ex : 2011-01-13",
                        "required" => true
                    ],
                ]
            ];
        }

        public function getFormEventUpdate($id,$title,$description,$date)
        {
            return [
                "options" => [
                    "method" => "POST",
                    "action" => "../ActionUpdate/".$id,
                    "class" => "form-group",
                    "id" => "updateEvent"
                ],
                "struct" => [
                    "title" => [
                        "type" => "text",
                        "placeholder" => "Titre",
                        "required" => true,
                        "value" => "".$title."",
                    ],
                    "description" => [
                        "type" => "textarea",
                        "placeholder" => "description",
                        "required" => true,
                        "value" => "".$description."",
                    ],
                    "date" => [
                        "type" => "date",
                        "placeholder" => "date",
                        "required" => true,
                        "value" => "".$date."",
                    ],

                ]
            ];
        }

    }