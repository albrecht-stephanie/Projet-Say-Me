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
    public $textView;
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
    /**
     * 
     * @var type int
     */
    public $statut;
    
    /* le constructeur des avis utilisateurs*/
    public function __construct($_title = '', $_textView = '', $_note = '', $_publishDate = '', $_id_users = '', $_id_articles = '', $_statut = '0') {
        $this->title = $_title;
        $this->textView = $_textView;
        $this->note = $_note;
        $this->publishDate= $_publishDate;
        $this->id_users = $_id_users;
        $this->id_articles = $_id_articles;
        $this->statut = $_statut;
        $this->db = Database::getInstance();
    }
    
    public function create() {
        $sql = 'INSERT INTO `views`(`title`,`textView`,`note`,`publishDate`,`id_users`,`id_articles`,`statut`) VALUES (:title, :textView, :note, :publishDate ,:id_users ,:id_articles, :statut )';
        $req = $this->db->prepare($sql);
        $req->bindValue(':title', $this->title, PDO::PARAM_STR);
        $req->bindValue(':textView', $this->textView, PDO::PARAM_STR);
        $req->bindValue(':note', $this->note, PDO::PARAM_INT);
        $req->bindValue(':publishDate', $this->publishDate, PDO::PARAM_STR);
        $req->bindValue(':id_users', $this->id_users, PDO::PARAM_INT);
        $req->bindValue(':id_articles', $this->id_articles, PDO::PARAM_INT);
        $req->bindValue(':statut', $this->statut, PDO::PARAM_INT);
        $req->execute();
    }
    
    public function update() {
        $sql = 'UPDATE `views` SET `title`= :title, `textView`= :textView, `note`= :note, `publishDate`= :publishDate  WHERE `id` = :id';
        $sth = $this->db->prepare($sql);
        $sth->bindValue(':title', $this->title, PDO::PARAM_STR);
        $sth->bindValue(':textView', $this->textView, PDO::PARAM_STR);
        $sth->bindValue(':note', $this->note, PDO::PARAM_STR);
        $sth->bindValue(':publishDate', $this->publishDate, PDO::PARAM_STR);
        $sth->bindValue(':id', $this->id, PDO::PARAM_INT);
        if ($sth->execute()) {
            return $this;
        }
        return false;
    }

    public function getAll() {
    // le code sélectionnant tous les avis d'un article
        $sql = 'SELECT `id`,`name`,`textView`,`note`,DATE_FORMAT(`publishDate`, \'%d.%m.%Y %H:%i\') AS `publishDate` FROM `views` WHERE `id_articles` = :id_articles';
        $req = $this->db->prepare($sql);
        $req->bindValue(':id_articles', $this->id_articles, PDO::PARAM_INT);

        if ($req->execute()) {
            $views = $req->fetch(PDO::FETCH_OBJ);
            $this->title = $views->name;
            $this->textView = $views->textView;
            $this->note = $views->note;
            $this->publishDate = $views->publishDate;
            return $this;
        }
    }

    public function threeLastViews(){
        //Le code sélectionnant les 3 dernier aavis enregistrés
        $sql = 'SELECT `id`,`title`,`textView`,`note`, DATE_FORMAT(`publishDate`, \'%d.%m.%Y %H:%i\') AS `publishDate`, `id_articles`, `id_users` FROM `views` WHERE `publishDate` ORDER BY `id` DESC LIMIT 3 ';
        $threeLastViews = [];
        $sth = $this->db->query($sql);
        if ($sth instanceof PDOStatement) {
            $threeLastViews = $sth->fetchAll(PDO::FETCH_ASSOC);
        }
        return $threeLastViews;
    }

    public function delete() {
        $sql = 'DELETE FROM `views` WHERE `id` = :id';
        $sth = $this->db->prepare($sql);
        $sth->bindValue(':id', $this->id, PDO::PARAM_INT);
        if ($sth->execute()) {
            return $this;
        }
        return false;
    }
}
