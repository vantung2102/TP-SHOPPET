<?php

    class User_Model extends Base_Model{

        protected $table_user = 'users';

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
            $query = "update {$this->table_admin} set password = :password where id = :id";

            $sth = $this->db->prepare($query);
            $sth->execute([
                'id' => $id_user,
                'password' => $new_password
            ]);

            $sth->closeCursor();
        }
    }