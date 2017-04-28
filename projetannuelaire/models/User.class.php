<?php

    class User extends BaseSql {

        private $id = -1;
        private $email;
        private $pwd;
        private $firstname;
        private $Username;
        private $lastname;
        private $status;
        private $birthday;
        private $age;
        private $profil;
        private $permission;
        private $date_inserted;
        private $date_updated;


        public function __construct($id = -1, $email = null, $pwd = null, $firstname = null, $lastname = null, $status = 0, $permission = 0) {
            parent::__construct();

            // $this->setId($id);
            // $this->setEmail($email);
            // $this->setPwd($pwd);
            // $this->setFirstname($firstname);
            // $this->setLastname($lastname);
            // $this->setStatus($status);
            // $this->setPermission($permission);
        }

        public function setId($id) {
            $this->id = $id;
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

        public function getForm() {
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
/*                    "user_category" => [
                        "type" => "???", // Comme plus bas select ou text
                        "placeholder" => "Type d'utilisateur",
                        "required" => true
                    ],*/
                    "newsletter" => [
                        "type" => "checkbox", // Comme plus bas select ou text
                        "placeholder" => "Inscrire à la newsletter",
                        "required" => false
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
                    "article_name" => [
                        "type" => "text",
                        "placeholder" => "Titre de l'article",
                        "required" => true
                    ],
/*                    "category" => [
                        "type" => "???", // Faire un select avec des catégorie pré enregistrée/ajoutée par l'utilisateur ou un champs text ?
                        "placeholder" => "Votre mot de passe",
                        "required" => true
                    ],*/
                    "date" => [
                        "type" => "time",
                        "placeholder" => "(Laisser vide pour date actuelle)",
                        "required" => true
                    ],
                    "description" => [
                        "type" => "text",
                        "placeholder" => "Contenu de votre article",
                        "required" => true
                    ],
                    "image" => [
                        "type" => "file",
                        "placeholder" => "Image à ajouté",
                        "required" => true
                    ],
                    "image-title" => [
                        "type" => "text",
                        "placeholder" => "Image à ajouté",
                        "required" => true
                    ],
                    "image-author" => [
                        "type" => "text",
                        "placeholder" => "Image à ajouté",
                        "required" => true
                    ],
                    "image-description" => [
                        "type" => "text",
                        "placeholder" => "Image à ajouté",
                        "required" => true
                    ],
                    "event_name" => [
                        "type" => "text",
                        "placeholder" => "Nom de l'évenement",
                        "required" => true
                    ],
                    "date_start" => [
                        "type" => "date",
                        "placeholder" => "Début de l'évene ment",
                        "required" => true
                    ],
                    "date_end" => [
                        "type" => "date",
                        "placeholder" => "Fin de l'évenement",
                        "required" => true
                    ],
                    "event_details" => [
                        "type" => "text",
                        "placeholder" => "Détails sur l'évenement",
                        "required" => true
                    ],
                    "artists_list" => [
                        "type" => "text",
                        "placeholder" => "Artistes présent lors de l'évenement",
                        "required" => false
                    ]
                ]
            ];
        }

    }