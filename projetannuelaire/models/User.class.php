<?php

    class User extends BaseSql {

        protected $id = -1;
        protected $email;
        protected $pwd;
        protected $firstname;
        protected $Username;
        protected $lastname;
        protected $status;
        protected $birthday;
        protected $age;
        protected $profil;
        protected $permission;
        protected $date_inserted;
        protected $date_updated;


        public function __construct($id = -1, $email = null, $pwd = null, $firstname = null, $lastname = null, $status = 0, $permission = 0) {
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
            echo "Son mail : ".$this->email;
        }

        public function setPwd($pwd) {
            $this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
        }

        public function setFirstname($firstname) {
            $this->firstname = ($firstname);
        }

        public function setLastname($lastname) {
            $this->lastname = ($lastname);
        }

        public function setUsername($Username) {
            $this->Username = ($Username);
        }

        public function getUsername($Username) {
            return $this->Username;
        }               

        public function setStatus($status) {
            $this->status = $status;
        }

        public function setPermission($permission) {
            $this->permission = $permission;
        }

        public function setPassword($pwd) {
            $this->pwd = password_hash($pwd, PASSWORD_DEFAULT);;
        }

        public function setAge($birthday)
        {
            $date = DateTime::createFromFormat(
                (strstr($birthday, "/") ? 'd/m/Y' : "Y-m-d")
                , $birthday);
            $DateError = DateTime::getLastErrors();

            if ($DateError["warning_count"] + $DateError["error_count"] == 0) {

                $dateNow = new DateTime("now");
                $this->age = date_diff($date, $dateNow)->format('%y');
            }
        }

        public function getAge() {
            return $this->age ;
        }


        // Création d'un formulatire pour l'inscription d'un utilisateur pour le front
        public function getFormRegister()
        {
            return [
                "options" => [
                    "method" => "POST",
                    "action" => "#",
                    "class" => "form-group",
                    "id" => "monformulaire"
                ],
                "struct" => [
                    "username" => [
                        "type" => "text",
                        "placeholder" => "Nom d'utilisateur",
                        "required" => true
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
                    "email2" => [
                        "type" => "email",
                        "placeholder" => "Confirmation email",
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


        // Création d'un formulatire pour la connection d'un utilisateur pour le front
        public function getFormConnection() {
                return [
                    "options" => [
                        "method" => "POST",
                        "action" => "user/add",
                        "class" => "form-group",
                        "id" => "monformulaire"
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