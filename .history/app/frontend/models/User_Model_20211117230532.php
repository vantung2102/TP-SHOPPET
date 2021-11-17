<?php

    class User_Model extends Base_Model{

        protected $table_user = 'users';

        function checkPass($id_user){

            $query = "select password from {$this->table_user} where id = :id";

            $sth = $this->db->prepare($query);
            $sth->execute([
                'id' => $id_user,
            ]);

            $data = $sth->fetch(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }

        function checkAdminExist($data = []){
            $query = "select * from {$this->table_admin} where email = :email and password = :password";

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