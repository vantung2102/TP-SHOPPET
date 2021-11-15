<?php

    class Pet_Model extends Base_Model{

        protected $table_pet = 'pets';

        public function loadDataPetPagination($offset,  $per_page)
        {
            $query = "select * from {$this->table_pet} limit $offset, $per_page";
            $sth = $this->db->prepare($query);
            $sth->execute();
            
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }

        function processSortDesc(){
            $query = "select * from {$this->table_pet} ORDER BY new_price DESC limit $offset, $per_page";
            $sth = $this->db->prepare($query);
            $sth->execute();
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }
    }