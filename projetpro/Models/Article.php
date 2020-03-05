<?php
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
    public $describ;
    /**
     *
     * @var type date
     */
    public $publishDate;
            
    
    /* le constructeur des articles */
    public function __construct($_name = '', $_describ = '', $_publishDate = '', $_id_users = '', $_id_categories = '') {
        $this->title = $_name;
        $this->texte = $_describ;
        $this->note = $_publishDate;
        $this->id_users = $_id_users;
        $this->id_articles = $_id_categories;
        $this->db = Database::getInstance();
        
    }
    
    
}
