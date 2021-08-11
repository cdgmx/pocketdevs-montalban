<?php

    class Post{
        private $db;
        public function __construct(){
            $this->db = new Database;
        }

        public function getAllPosts(){ 
            $this->db->query("SELECT * FROM posts");

            $results = $this->db->resultSet();
            return $results;
        }

        public function getAllUserPosts($user_id){
            // $this->db->query("SELECT posts.*, users.username FROM users
            // INNER JOIN posts ON posts.user_id = $user_id
            // ");
            
        
                $this->db->query("SELECT posts.* FROM posts
                WHERE posts.user_id = $user_id 
                ");
                $results = $this->db->resultSet();
            
         
            return $results;
           
        }
        public function deleteUserPost($post_id, $user_id){
            $this->db->query("DELETE FROM posts
                WHERE posts.post_id = $post_id AND posts.user_id = $user_id
            ");
        }
    }

?>