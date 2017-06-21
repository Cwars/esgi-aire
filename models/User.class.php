<?php

    class User extends BaseSql {

        protected $id = -1;
        protected $email;
        protected $pwd;
        protected $username;
        protected $firstname;
        protected $lastname;
        protected $status;
       // protected $birthday;
        protected $isDeleted;
        protected $dateInserted;
        protected $dateUpdated;


        public function __construct($id = -1, $email = null, $pwd = null, $username = null, $firstname = null, $lastname = null, $status = null) {
            parent::__construct();
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }

        public function setEmail($email) {
            $this->email = trim($email);
        }

        public function getEmail() {
            return $this->email;
        }

        public function setPwd($pwd) {
            $this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
        }

        public function setFirstname($firstname) {
            $this->firstname = trim($firstname);
        }

        public function setLastname($lastname) {
            $this->lastname = trim($lastname);
        }

        public function setUsername($username) {
            $this->username = trim($username);
        }

        public function getUsername() {
            return $this->username;
        }

        public function getFirstname() {
            return $this->firstname;
        }

        public function getLastname() {
            return $this->lastname;
        }

        public function setStatus($status) {
            $this->status = trim($status);
        }

        public function getStatus() {
            return $this->status;
        }

        public function getDateInserted() {
            return $this->dateInserted;
        }

        public function getDateUpdated() {
            return $this->dateUpdated;
        }

        public function setIsDeleted($isDeleted) {
            $this->isDeleted = $isDeleted;
        }

        public function setPassword($pwd) {
            $this->pwd = password_hash($pwd, PASSWORD_DEFAULT);;
        }

        public function getPassword(){
            return $this->pwd;
        }

       /* public function setBirthday($birthday)
        {
        //     $date = DateTime::createFromFormat(
        //         (strstr($birthday, "/") ? 'd/m/Y' : "Y-m-d")
        //         , $birthday);
        //     $DateError = DateTime::getLastErrors();

        //     if ($DateError["warning_count"] + $DateError["error_count"] == 0) {

        //         $dateNow = new DateTime("now");
        //         $this->age = date_diff($date, $dateNow)->format('%y');
        //     }
                $this->birthday->$birthday;
        }
        */

        // public function getAge() {
        //     return $this->age ;
        // }


        // Création d'un formulatire pour l'inscription d'un utilisateur pour le front
        public function getFormRegisterback()
        {
            return [
                "options" => [
                    "method" => "POST",
                    "action" => "ActionAdd",
                    "class" => "add-form",
                    "id" => "Register"
                ],
                "struct" => [
                    "username" => [
                        "type" => "text",
                        "placeholder" => "Nom d'utilisateur",
                        "required" => true
                    ],
                    "Option" => [
                        "optionName" => "statut",
                        "type" => "select",
                        "option" => [
                            "option1" => "Admin",
                            "option2" => "User"
                        ]
                    ],
                    "firstname" => [
                        "type" => "text",
                        "placeholder" => "Prénom",
                        "required" => true
                    ],
                    "lastname" => [
                        "type" => "text",
                        "placeholder" => "Nom",
                        "required" => true
                    ],
                    "email" => [
                        "type" => "email",
                        "placeholder" => "Adresse email",
                        "required" => true
                    ],
                    "pwd" => [
                        "type" => "password",
                        "placeholder" => "Mot de passe",
                        "required" => true
                    ],
                    "pwd2" => [
                        "type" => "password",
                        "placeholder" => "Confirmation mot de passe",
                        "required" => true
                    ],
                ]
            ];
        }

        // Création d'un formulatire pour l'inscription d'un utilisateur pour le front
        public function getFormUpdate($id,$username,$firstname,$lastname,$email)
        {
            return [
                "options" => [
                    "method" => "POST",
                    "action" => "../ActionUpdate/".$id,
                    "class" => "add-form",
                    "id" => "Register"
                ],
                "struct" => [
                    "username" => [
                        "type" => "text",
                        "placeholder" => "Nom d'utilisateur",
                        "required" => true,
                        "value" => "".$username."",
                    ],
                    "firstname" => [
                        "type" => "text",
                        "placeholder" => "Prénom",
                        "required" => true,
                        "value" => "".$firstname."",
                    ],
                    "lastname" => [
                        "type" => "text",
                        "placeholder" => "Nom",
                        "required" => true,
                        "value" => "".$lastname."",
                    ],
                    "email" => [
                        "type" => "email",
                        "placeholder" => "Adresse email",
                        "required" => true,
                        "value" => "".$email."",
                    ],
                    "Option" => [
                        "optionName" => "statut",
                        "type" => "select",
                        "option" => [
                            "option1" => "Admin",
                            "option2" => "User"
                        ]
                    ],
                    "pwd" => [
                        "type" => "password",
                        "placeholder" => "Mot de passe",
                        "required" => true,
                        "value" => "",
                    ],
                    "pwd2" => [
                        "type" => "password",
                        "placeholder" => "Confirmation mot de passe",
                        "required" => true,
                        "value" => "",
                    ]
                ]
            ];
        }

        // Création d'un formulatire pour la connection d'un utilisateur pour le front
        public function getFormConnection() {
                return [
                    "options" => [
                        "method" => "POST",
                        "action" => "ActionConnection",
                        "class" => "login-form",
                        "id" => "Connection"
                    ],
                    "struct" => [
                        "username" => [
                            "type" => "text",
                            "placeholder" => "Nom d'utilisateur",
                            "required" => true
                        ],
                        "pwd" => [
                            "type" => "password",
                            "placeholder" => "Mot de passe",
                            "required" => true
                        ],
                    ]
                ];
        }

    }