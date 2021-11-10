<?php

    class Pet_Model extends Base_Model{

        protected $table_pet = 'pets';

        public function loadDataPetPagination()
        {
            $query = "select * from {$this->table_pet} limit 4";
            $sth = $this->db->prepare($query);
            $sth->execute();
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }
    }