<?php
namespace App\Model;

use App\Core\Sql;

class Forum extends Sql
{
    protected $id = null;   
    protected $title = null;
    protected $description = null;
    protected $category_id = null;
    protected $user_id = null;

    public function __construct()
    {
        echo "constructeur du Model Forum";
        parent::__construct();
    }

    /**
     * @return null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getTitleForum(): ?string
    {
        return $this->title;
    }

    public function setTitleForum(?string $title): void
    {
        $this->title = ucwords(strtolower(trim($title)));
    }

    public function getDescriptionForum(): ?string
    {
        return $this->description;
    }

    public function setDescriptionForum(?string $description): void
    {
        $this->description = ucwords(strtolower(trim($description)));
    }

    public function getCategoryId(): ?int
    {
        return $this->category_id;
    }

    public function setCategoryId($category_id){
        $this->category_id = $category_id;
    }


    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId($user_id){
        $this->user_id = $user_id;
    }

    public function getForumForm($categorie_data): array
    {
        return [
            "config"=>[
                "method"=>"POST",
                "action"=>"",
                "id"=>"formForum",
                "class"=>"formForum",
                "submit"=>"Valider"
            ],
            "inputs"=>[
                "title"=>[
                    "placeholder"=>"Titre",
                    "type"=>"text",
                    "id"=>"nameForum",
                    "class"=>"formForum",
                    "value"=>"",
                    "required"=>true,
                    "min"=>2,
                    "max"=>25,
                    "error"=>"Votre titre doit faire entre 2 et 25 caractères",
                ],
                "description"=>[
                    "label"=> "Description: ",
                    "type"=>"textarea",
                    "id"=>"descriptionForum",
                    "class"=>"formForum",
                    "rows"=>"5",
                    "cols"=>"33",
                    "text"=>"",
                    "required"=>true,
                    "min"=>2,
                    "max"=>25,
                    "error"=>"Votre titre doit faire entre 2 et 25 caractères",
                ],
                "categories"=> [
                    "type"=> "select",
                    "id"=>"picture",
                    "option"=>$categorie_data,
                    "defaultValue"=>"",
                ]
            ]
        ];
    }

    public function editParamForum($forum_data, $categorie_data): array
    {
        return [
            "config"=>[
                "method"=>"POST",
                "action"=>"",
                "id"=>"formForum",
                "class"=>"formForum",
                "submit"=>"Valider"
            ],
            "inputs"=>[
                "editTitle"=>[
                    "placeholder"=>"Titre",
                    "type"=>"text",
                    "id"=>"nameForum",
                    "class"=>"formForum",
                    "value"=>$forum_data['title'],
                    "required"=>true,
                ],
                "editDescription"=>[
                    "label"=>"Description: ",
                    "type"=>"textarea",
                    "id"=>"descriptionForum",
                    "class"=>"formForum",
                    "rows"=>"5",
                    "cols"=>"33",
                    "text"=>$forum_data['description'],
                    "required"=>false,
                ],
                "categories"=> [
                    "type"=> "select",
                    "id"=>"picture",
                    "option"=>$categorie_data,
                    "defaultValue"=>$forum_data['category_id'],
                ]
            ]
        ];
    }
}