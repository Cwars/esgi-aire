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

    public function setIsDeleted($isDeleted) {
        $this->isDeleted = $isDeleted;
    }

    public function getFormNews() {
        return [
            "options" => [
                "method" => "POST",
                "action" => "ActionAdd",
                "class" => "form-group",
                "id" => "addNews",
                "optionName" => "type"
            ],
            "struct" => [
                "title" => [
                    "type" => "text",
                    "placeholder" => "Titre de l'article",
                    "required" => true
                ],
                "author" => [
                    "type" => "text",
                    "placeholder" => "Auteur de l'article",
                    "required" => true
                ],
                "content" => [
                    "type" => "text",
                    "placeholder" => "Contenu de l'article",
                    "required" => true
                ],
                "Option" => [
                    "optionName" => "type",
                    "type" => "select",
                    "option" => [
                        "option1" => "Blog",
                        "option2" => "News",
                        "option3" => "Music"
                    ]

                ]
            ]
        ];
    }

    public function getFormUpdate($id,$title,$author,$content)
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
                "author" => [
                    "type" => "text",
                    "placeholder" => "Auteur",
                    "required" => true,
                    "value" => "".$author."",
                ],
                "content" => [
                    "type" => "text",
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
                    ]
                ],

            ]
        ];
    }
}