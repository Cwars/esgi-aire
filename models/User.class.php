<?php

    class User extends BaseSql {

        protected $id = -1;
        protected $email;
        protected $pwd;
        protected $username;
        protected $firstname;
        protected $lastname;
        protected $status;
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
            $this->email = htmlentities($email);
        }

        public function getEmail() {
            return $this->email;
        }

        public function setPwd($pwd) {
            $this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
        }

        public function getPwd() {
            return $this->pwd;
        }

        public function setPwdUpdate($pwd) {
            $this->pwd = $pwd;
        }

        public function setFirstname($firstname) {
            $this->firstname = htmlentities($firstname);
        }

        public function setLastname($lastname) {
            $this->lastname = htmlentities($lastname);
        }

        public function setUsername($username) {
            $this->username = htmlentities($username);
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
            $this->status = htmlentities($status);
        }

        public function getStatus() {
            return $this->status;
        }

        public function getDateInserted() {
            return $this->dateInserted;
        }

        public function getDateUpdated() {
            return $this-> dateUpdated;
        }

        public function setDateInserted($dateInserted) {
            $this-> dateInserted = $dateInserted;
        }

        public function setDateUpdated($dateUpdated) {
            $this-> dateUpdated = $dateUpdated;
        }

        public function setIsDeleted($isDeleted) {
            $this->isDeleted = $isDeleted;
        }

        public function getIsDeleted() {
            return $this->isDeleted;
        }

        public function setPassword($pwd) {
            $this->pwd = password_hash($pwd, PASSWORD_DEFAULT);;
        }

        public function getPassword(){
            return $this->pwd;
        }

        // Création d'un formulaire pour l'inscription d'un utilisateur pour le front
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
                    "Option" => [
                        "optionName" => "status",
                        "type" => "select",
                        "option" => [
                            "option1" => "Admin",
                            "option2" => "User",
                            "option3" => "Modérateur"
                        ]
                    ],
                ]
            ];
        }

        // Création d'un formulaire pour l'inscription d'un utilisateur pour le back
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
                        "optionName" => "status",
                        "type" => "select",
                        "option" => [
                            "option1" => "Admin",
                            "option2" => "User"
                        ]
                    ]
                ]
            ];
        }

        // Création d'un formulaire pour l'inscription d'un utilisateur pour le back
        public function getFormUpdateFront($id,$username,$firstname,$lastname,$email)
        {
            return [
                "options" => [
                    "method" => "POST",
                    "action" => "../userUpdate/".$id,
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
                    "newsletter" => [
                        "type" => "checkbox",
                        "name" => "newsletter",
                        "label" => "S'abonner à la Newsletter",
                        "required" => false
                    ],
                ]
            ];
        }

        // Création d'un formulaire pour la connection d'un utilisateur pour le back
        public function getFormConnection() {
                return [
                    "options" => [
                        "method" => "POST",
                        "action" => "Connection",
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

        // Création d'un formulaire pour la connection d'un utilisateur pour le front
        public function getFormConnectionFront() {
            return [
                "options" => [
                    "method" => "POST",
                    "action" => "login",
                    "class" => "login-form",
                    "id" => "Connexion"
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

        public function getFormRegisterfront()
        {
            return [
                "options" => [
                    "method" => "POST",
                    "action" => "registerAction",
                    "class" => "add-form",
                    "id" => "Register"
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
                    "cgu" => [
                        "type" => "checkbox",
                        "name" => "cgu",
                        "label" => "Acceptez les conditions générales d'utilisation",
                        "required" => true
                    ],
                    "newsletter" => [
                        "type" => "checkbox",
                        "name" => "newsletter",
                        "label" => "S'abonner à la Newsletter",
                        "required" => false
                    ],
                ]
            ];
        }
//        // Formulaire de modification des infos de l'utilisateur
//        public function getFormSetting($id,$firstname,$lastname,$email)
//        {
//            return [
//                "options" => [
//                    "method" => "POST",
//                    "action" => "../ActionSetting/".$id,
//                    "class" => "add-form",
//                    "id" => "Register"
//                ],
//                "struct" => [
//                    "firstname" => [
//                        "type" => "text",
//                        "placeholder" => "Prénom",
//                        "required" => true,
//                        "value" => "".$firstname."",
//                    ],
//                    "lastname" => [
//                        "type" => "text",
//                        "placeholder" => "Nom",
//                        "required" => true,
//                        "value" => "".$lastname."",
//                    ],
//                    "email" => [
//                        "type" => "email",
//                        "placeholder" => "Adresse email",
//                        "required" => true,
//                        "value" => "".$email."",
//                    ],
//                    "pwd" => [
//                        "type" => "password",
//                        "placeholder" => "Mot de passe",
//                        "required" => true,
//                        "value" => "",
//                    ],
//                    "pwd2" => [
//                        "type" => "password",
//                        "placeholder" => "Confirmation mot de passe",
//                        "required" => true,
//                        "value" => "",
//                    ]
//                ]
//            ];
//        }
    }