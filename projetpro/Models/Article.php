<?php
require_once 'DataBase.php';
/**
 * Description of Article
 *
 * @author albrecht
 */
class Article {
    /**
     *
     * @var type integer
     */
    public $id;
    /**
     *
     * @var type string
     */
    public $name;
    /**
     * 
     * @var type string
     */
    public $image;
    /**
     * 
     * @var type string
     */
    public $startdescrib;
    /**
     *
     * @var type string
     */
    public $describ;
    /**
     *
     * @var type date
     */
    public $publishDate;
            
    
    /**
     *  
     * le constructeur des articles
    */ 
    public function __construct($_name = '', $_image = '', $_startdescrib = '', $_describ = '', $_publishDate = '', $_id_categories = '', $_id_marques = '') {
        $this->name = $_name;
        $this->image = $_image;
        $this->startdescrib = $_startdescrib;
        $this->describ = $_describ;
        $this->publishDate = $_publishDate;
        $this->publishDate = $_publishDate;
        $this->id_categories = $_id_categories;
        $this->id_marques = $_id_marques;
        $this->db = Database::getInstance();
    } 
    public function getOneById() {
        //Le code affichant un article
        $sql = 'SELECT `id`,`name`,`image`,`startdescrib`, `describ`, `publishDate` FROM `articles` WHERE `id` = :id';
        $req = $this->db->prepare($sql);
        $req->bindValue(':id', $this->id, PDO::PARAM_INT);
        
        if ($req->execute()) {
            $article = $req->fetch(PDO::FETCH_OBJ);
            $this->id = $article->id;
            $this->name = $article->name;
            $this->image = $article->image;
            $this->startdescrib = $article->startdescrib;
            $this->describ = $article->describ;
            $this->publishDate = $article->publishDate;
            return $this;
        }
    }
    public function getMarqueById() {
        //Le code sélectionnant tous les articles d'une meme marque
        $sql = 'SELECT `id`,`name`,`image`,`startdescrib`, `describ`, `publishDate` FROM `articles` WHERE `id_marques` = :id_marques';
        $oneMarque = [];
        $req = $this->db->prepare($sql);
        $req->bindValue(':id_marques', $this->id_marques, PDO::PARAM_INT);
        
        if ($req->execute()) {
            $oneMarque = $req->fetchAll(PDO::FETCH_ASSOC);
            
        }
           return $this;
        }
       
    public function getCathById() {
        //Le code sélectionnant tous les articles d'une meme cathégorie
        $sql = 'SELECT `id`,`name`,`image`,`startdescrib`, `describ`, `publishDate` FROM `articles` WHERE `id_categories` = id_categories';
        $articlesCathList = [];
        $sth = $this->db->query($sql);
        if ($sth instanceof PDOStatement) {
            $articlesCathList = $sth->fetchAll(PDO::FETCH_ASSOC);
        }
        return $articlesCathList;
    }
    public function threeLastPublish(){
        //Le code sélectionnant les 3 dernier articles enregistrés
        $sql = 'SELECT `id`,`name`,`image`,`startdescrib`, `describ`, `publishDate` FROM `articles` WHERE `publishDate` ORDER BY `id` DESC LIMIT 3 ';
        $threeLastPublish = [];
        $sth = $this->db->query($sql);
        if ($sth instanceof PDOStatement) {
            $threeLastPublish = $sth->fetchAll(PDO::FETCH_ASSOC);
        }
        return $threeLastPublish;
    }
    
}
    