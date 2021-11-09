<?php

    class Admin_Model extends Base_Model{

        function checkAdminExist($data = []){
            $query = "select id from {$this->table} where email = :email and password = :password";

            $sth = $this->db->prepare($query);
            $sth->execute([
                'email' => $data['email'],
                'password' => $data['password']
            ]);

            $data = $sth->fetch(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }
    }