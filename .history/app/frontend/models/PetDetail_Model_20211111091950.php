<?php

    class PetDetail_Model extends Base_Model
    {
        protected $table_pet = 'pets';
        
        function getPetDetail($id){
            $query = "select * from {$this->table_pet} where id = :id";
            $sth = $this->db->prepare($query);
            $sth->execute([
	        	':id' => $id,
	        ]);
	        $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            var_dump($data);exit;

            return $data;
        }
    }