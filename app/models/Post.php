<?php

    class Post
    {
        // EXAMPLE ON HOW TO CREATE MODEL
        private $db;
        public function __construct()
        {
            $this->db = new Db;
        }

        public function getPosts()
        {
            $this->db->query("SELECT * FROM posts");
            return $this->db->resultSet();
        }
       
    }