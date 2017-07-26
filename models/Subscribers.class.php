<?php

    class Subscribers extends BaseSql  {

        protected $id = -1;
        protected $usernameSub = null;

        public function __construct($id = -1, $usernameSub = null) {
            parent::__construct();
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getUsernameSub() {
            return $this->usernameSub;
        }

        public function setUsernameSub($usernameSub) {
            $this->usernameSub = trim($usernameSub);
        }

    }