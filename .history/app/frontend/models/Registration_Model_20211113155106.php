<?php

    class Registration_Model extends Base_Model {

        protected $table = 'users';


        function insertUser($data = []){
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
    }