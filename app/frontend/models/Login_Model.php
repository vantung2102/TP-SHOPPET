<?php

class Login_Model extends Base_Model
{

    protected $table = 'users';

    function insertUser($data = [])
    {
        $query = "insert into {$this->table}(name, email, phone, password) values (:name, :email, :phone, :password)";
        $sth = $this->db->prepare($query);
        $sth->execute([
            ':name' => $data['name'],
            ':phone' => $data['phone'],
            ':email' => $data['email'],
            ':password' => $data['password'],

        ]);
        $sth->closeCursor();
    }

    function checkUserExist($data = [])
    {
        $query = "select id from {$this->table} where (email = :email and password = :password)";
        $sth = $this->db->prepare($query);

        $sth->execute([
            ':email' => $data['email'],
            ':password' => $data['password'],
        ]);

        $data = $sth->fetch(PDO::FETCH_ASSOC);
        $sth->closeCursor();
        return $data;
    }
}