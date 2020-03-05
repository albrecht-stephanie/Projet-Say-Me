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
        $this->publishDAte= $_publishDate;
        $this->id_users = $_id_users;
        $this->id_articles = $_id_articles;
        $this->db = Database::getInstance();
    }
    
    public function create() {
        $sql = 'INSERT INTO `views`(`title`,`texte,`note`,`publishDate`, `id_users`, `id_articles`) VALUES (:title, :texte, :note, :publishDate, :id_users, :id_articles)';
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
        $sql = 'SELECT `id`,`name`,`text`,`note`,DATE_FORMAT(`dateHour`, \'%d.%m.%Y %H:%i\') `publishDate` FROM `views` WHERE `id` = :id_articles';
        $req = $this->db->prepare($sql);
        $req->bindValue(':id', $this->id, PDO::PARAM_INT);
        $req->bindValue(':email', $this->email, PDO::PARAM_STR);

        if ($req->execute()) {
            $user = $req->fetch(PDO::FETCH_OBJ);
            $this->firsname = $user->firstname;
            $this->lastname = $user->lastname;
            $this->email = $user->email;
            $this->password = $user->password;
            return $this;
        }
    }
}
