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
    public $status;
    
    /* le constructeur des avis utilisateurs*/
    public function __construct($_title = '', $_textView = '', $_note = '', $_publishDate = '', $_id_users = '', $_id_articles = '', $_status = '0') {
        $this->title = $_title;
        $this->textView = $_textView;
        $this->note = $_note;
        $this->publishDate= $_publishDate;
        $this->id_users = $_id_users;
        $this->id_articles = $_id_articles;
        $this->status = $_status;
        $this->db = Database::getInstance();
    }
    
    public function create() {
        $sql = 'INSERT INTO `views`(`title`,`textView`,`note`,`publishDate`,`id_users`,`id_articles`,`status`) VALUES (:title, :textView, :note, :publishDate ,:id_users ,:id_articles, :status )';
        $req = $this->db->prepare($sql);
        $req->bindValue(':title', $this->title, PDO::PARAM_STR);
        $req->bindValue(':textView', $this->textView, PDO::PARAM_STR);
        $req->bindValue(':note', $this->note, PDO::PARAM_INT);
        $req->bindValue(':publishDate', $this->publishDate, PDO::PARAM_STR);
        $req->bindValue(':id_users', $this->id_users, PDO::PARAM_INT);
        $req->bindValue(':id_articles', $this->id_articles, PDO::PARAM_INT);
        $req->bindValue(':status', $this->status, PDO::PARAM_INT);
        $req->execute();
    }
    
    public function validStatus() {
        $sql = 'UPDATE `views` SET  `status` = 1 WHERE `id` = :id ' ;
        $sth = $this->db->prepare($sql);
        $sth->bindValue(':id', $this->id, PDO::PARAM_INT);
        $sth->execute();
    
        return false;
    }

    public function getAllValidate() {
        // le code sélectionnant tous les avis d'un article de status 0
            //$sql = 'SELECT `id`,`title`,`textView`,`note`,DATE_FORMAT(`publishDate`, \'%d.%m.%Y %H:%i\') AS `publishDate` FROM `views` WHERE  `status` = 0';
            //$sql = 'SELECT v.id,`title`,`textView`,`note`,a.name ,DATE_FORMAT(v.publishDate, \'%d.%m.%Y %H:%i\') AS `publishDate` FROM views v LEFT JOIN `articles` a ON v.id_articles = a.id WHERE `status` = 0 ' ;
            $sql = 'SELECT v.id,`title`,`textView`,`note`,a.name,u.lastname, u.firstname ,DATE_FORMAT(v.publishDate, \'%d.%m.%Y %H:%i\') AS `publishDate` FROM views v INNER JOIN `articles` a ON v.id_articles = a.id INNER JOIN `users` u ON v.id_users = u.id  WHERE `status` = 0';
            $req = $this->db->prepare($sql);             
            if ($req->execute()) {
                $allValidate= $req->fetchall(PDO::FETCH_ASSOC);
                if($allValidate){
                    return $allValidate;
                }
            }
        }
        //SELECT v.id,`title`,`textView`,`note`,u.lastname, u.firstname ,DATE_FORMAT(v.publishDate, \'%d.%m.%Y %H:%i\') AS `publishDate` FROM views v  INNER JOIN `users` u ON v.id_users = u.id  WHERE `status` = 1
    public function getAll() {
    // le code sélectionnant tous les avis d'un article
        $sql = 'SELECT v.id,`title`,`textView`,`note`,u.lastname, u.firstname ,DATE_FORMAT(v.publishDate, \'%d.%m.%Y %H:%i\') AS `publishDate` FROM views v  INNER JOIN `users` u ON v.id_users = u.id  WHERE `status` = 1 AND `id_articles` = :id_articles';
        $req = $this->db->prepare($sql);
        $req->bindValue(':id_articles', $this->id_articles, PDO::PARAM_INT);

        if ($req->execute()) {
            $allViews= $req->fetchall(PDO::FETCH_ASSOC);
            if($allViews){
                return $allViews;
            }
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
