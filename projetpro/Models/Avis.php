<?php
/**
 * Description of View
 *
 * @author albrecht
 */
class View {
    
    /**
     *
     * @var type integer
     */
    public $id;
    /**
     *
     * @var type string
     */
    public $title;
    /**
     *
     * @var type string
     */
    public $texte;
    /**
     *
     * @var type integer
     */
    public $note;
    /**
     *
     * @var type date
     */
    public $pubishDate;
    /**
     *
     * @var type int
     */
    public $id_user;
    /**
     *
     * @var type int
     */
    public $id_articles;
    
    /* le constructeur des avis utilisateurs*/
    public function __construct($_title = '', $_texte = '', $_note = '', $_publishDate = '', $_id_users = '', $_id_articles = '') {
        $this->title = $_title;
        $this->texte = $_texte;
        $this->note = $_note;
        $this->publishDate= $_publishDate;
        $this->id_users = $_id_users;
        $this->id_articles = $_id_articles;
        $this->db = Database::getInstance();
    }
    
    public function create() {
        $sql = 'INSERT INTO `views`(`title`,`texte`,`note`,`publishDate`, `id_users`, `id_articles`) VALUES (:title, :texte, :note, :publishDate, :id_users, :id_articles)';
        $req = $this->db->prepare($sql);
        $req->bindValue('::title', $this->title, PDO::PARAM_STR);
        $req->bindValue(':texte', $this->texte, PDO::PARAM_STR);
        $req->bindValue(':note', $this->note, PDO::PARAM_INT);
        $req->bindValue(':publishDate', $this->publishDate, PDO::PARAM_INT);
        $req->bindValue(':id_users', $this->id_users, PDO::PARAM_INT);
        $req->bindValue(':id_articles', $this->id_articles, PDO::PARAM_INT);
         
        $req->execute();
    }
    
    public function getAllOneArticle() {
        $sql = 'SELECT `id`,`name`,`texte`,`note`,DATE_FORMAT(`publishDate`, \'%d.%m.%Y %H:%i\') AS `publishDate` FROM `views` WHERE `id_articles` = :id_articles';
        $req = $this->db->prepare($sql);
        $req->bindValue(':id_articles', $this->id_articles, PDO::PARAM_INT);

        if ($req->execute()) {
            $views = $req->fetch(PDO::FETCH_OBJ);
            $this->name = $views->name;
            $this->texte = $views->texte;
            $this->note = $views->note;
            $this->publishDate = $views->publishDate;
            return $this;
        }
    }
}
