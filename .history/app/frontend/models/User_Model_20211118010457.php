<?php

    class User_Model extends Base_Model{

        protected $table_user = 'users';

        function loadUser($id_user){
            $query = "select * from {$this->table_user} where id = :id ";

            $sth = $this->db->prepare($query);
            $sth->execute([
                'id' => $id_user,
            ]);

            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }

        function changeInfo($data = []){

            $query = "update {$this->table_user} set name = :name, birthday = :birthday sex = :sex where id = :id ";

            $sth = $this->db->prepare($query);
            var_dump($data);exit;

            $sth->execute([
                'id' => $data['id'],
                'name' => $data['name'],
                'birthday'=>$data['birthday'],
                'sex' => $data['gender']
            ]);

            $sth->closeCursor();
        }

        function checkPass($id_user, $old_password){

            $query = "select * from {$this->table_user} where id = :id and password = :password";

            $sth = $this->db->prepare($query);
            $sth->execute([
                'id' => $id_user,
                'password' => $old_password
            ]);

            $data = $sth->fetch(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }

        function changePassword($id_user, $new_password){
            $query = "update {$this->table_user} set password = :password where id = :id";

            $sth = $this->db->prepare($query);
            $sth->execute([
                'id' => $id_user,
                'password' => $new_password
            ]);

            $sth->closeCursor();
        }
    }