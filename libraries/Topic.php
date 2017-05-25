<?php class Topic{

    //initialize DB Variable
    private $db;

    /*
    *   Constructor
    */
    public function __construct(){
        $this->db = new Database;
    }

    /*
    *   Get all topics
    */
    public function getAllTopics(){
        $this->db->query("SELECT topics.*, users.username, users.avatar, categories.name
         FROM topics INNER JOIN users ON topics.user_id = users.id
         INNER JOIN categories ON topics.category_id = categories.id
         ORDER BY create_date DESC");

         //Assign results
         $result = $this->db->resultset();

        return $result;
    }

    /*
    *   Get Total # of Topics
    */
    public function getTotalTopics(){
        $this->db->query('SELECT * FROM topics');
        $rows = $this->db->resultset();
        return $this->db->rowCount();
    }

    /*
    *   Get Total # of Categories
    */
    public function getTotalCategories(){
        $this->db->query('SELECT * FROM categories');
        $rows = $this->db->resultset();
        return $this->db->rowCount();
    }

    /*
    *   Get Total # of Replies
    */
    public function getTotalReplies($topic_id){
        $this->db->query('SELECT * FROM replies WHERE topic_id = '.$topic_id);
        $rows = $this->db->resultset();
        return $this->db->rowCount();
    }
}?>