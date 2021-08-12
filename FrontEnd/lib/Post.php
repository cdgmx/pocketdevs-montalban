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

            $results = $this->db->execute();

            return  $results ;
            // $results = $this->db->execute();
        }

        public function addUserPost($data){
           
            $this->db->query("INSERT INTO posts (title,img_link,content,user_id)
            VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')");

            $results = $this->db->execute();
            return  $results ;

        }

        public function updateUserPost($data){
           
            $this->db->query("UPDATE posts SET title='$data[0]',img_link='$data[1]',content='$data[2]'
            WHERE posts.user_id = '$data[3]'");

            $results = $this->db->execute();
            return  $results ;

        }
    }

?>