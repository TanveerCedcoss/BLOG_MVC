<?php
class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUsers()
    {
        $this->db->query("SELECT * FROM users");

        $result = $this->db->resultSet();

        return $result;
    }
    public function addUsers()
    {
        $this->db->prepare("INSERT INTO `Users`(`user_id`, `user_name`, `user_email`, `password`, `joined_date`)
        VALUES (?, ?, ?, ?, ?)");
    }
    public function get($data)
    {
        print_r($data);
    }
}
