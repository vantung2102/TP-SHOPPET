<?php

    class Admin_Model extends Base_Model{

        protected $table_admin = 'admin_account';
        protected $table_user = 'user'

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

        public function loadData()
        {
            $query = "select * from {$this->table_user}";
            $sth = $this->db->prepare($query);
            $sth->execute();
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }
    }