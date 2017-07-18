<?php

class News extends BaseSql  {

    protected $id = -1;
    protected $content;
    protected $author;
    protected $title;
    protected $type;
    protected $isDeleted;
    protected $dateInserted;
    protected $dateUpdated;


    public function __construct($id = -1, $content = null, $author = null, $type = null) {
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
        if (strlen($author)<55){
            $this->author = trim($author);
        }
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setTitle($title) {
        if (strlen($title)<55){
            $this->title = trim($title);
        }
    }

    public function getTitle() {
        return $this->title;
    }

    public function setType($type) {
        $this->type = trim($type);
    }

    public function getType() {
        return $this->type;
    }

    public function getDateInserted() {
        return $this->dateInserted;
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

    public function setIsDeleted($isDeleted) {
        $this->isDeleted = $isDeleted;
    }

    public function getIsDeleted() {
        return $this->isDeleted;
    }

    public function getFormNews() {
        return [
            "options" => [
                "method" => "POST",
                "action" => "ActionAdd",
                "class" => "form-group",
                "id" => "Register",
                "optionName" => "type"
            ],
            "struct" => [
                "title" => [
                    "type" => "text",
                    "placeholder" => "Titre de l'article",
                    "required" => true,
                ],
                "content" => [
                    "type" => "textarea",
                    "placeholder" => "Contenu de l'article",
                    "required" => true,
                ],
                "Option" => [
                    "optionName" => "type",
                    "type" => "select",
                    "option" => [
                        "option1" => "Blog",
                        "option2" => "News",
                        "option3" => "Music"
                    ]
                    ],
                "titleImage" => [
                    "type" => "text",
                    "placeholder" => "title du fichier",
                    "required" => true
                    ],
                "description" => [
                    "type" => "text",
                    "placeholder" => "Description du fichier",
                    "required" => false
                    ],
                "mediafile" => [
                    "type" => "file",
                    "placeholder" => "Votre fichier",
                    "required" => true
                    ],
            ]
        ];
    }

    public function getFormUpdate($id,$title,$content,$type)
    {
        return [
            "options" => [
                "method" => "POST",
                "action" => "../ActionUpdate/".$id,
                "class" => "form-group",
                "id" => "addNews"
            ],
            "struct" => [
                "title" => [
                    "type" => "text",
                    "placeholder" => "Titre",
                    "required" => true,
                    "value" => "".$title."",
                ],
                "content" => [
                    "type" => "textarea",
                    "placeholder" => "Contenu",
                    "required" => true,
                    "value" => "".$content."",
                ],
                "Option" => [
                    "optionName" => "type",
                    "type" => "select",
                    "option" => [
                        "option1" => "Blog",
                        "option2" => "News",
                        "option3" => "Music"
                    ],
                    "value" => "".$type."",
                ],

            ]
        ];
    }
}