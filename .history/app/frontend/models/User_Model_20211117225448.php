<?php

    class User_Model extends Base_Model{

        protected $table_user = 'user';

        function checkPass($old_password, $id_user){

            $query = "select password from {$this->table_user} where id = :id";

            $sth = $this->db->prepare($query);
            $sth->execute([
                ':id' => $id_user,
            ]);

            $data = $sth->fetch(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }
    }