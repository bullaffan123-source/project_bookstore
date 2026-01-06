<?php
class User{
    private $db;

    public function __contruct(){
        $this->db = new Database();
    }

    public function register($name, $email, $password){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        return $this->db->query(
            "INSERT INTO users (name,email,password) VALUES (?,?,?)",
            [$name, $email, $hash]
        );
    }

    public function login($email){
        return $this->db->query(
            "SELECT * FROM users WHERE email=?",
            [$email]
        )->fetch();
    }
}