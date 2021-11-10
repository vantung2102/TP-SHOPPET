<?php

    class Pet_Model extends Base_Model{

        protected $table_pet = 'pets';

        public function loadDataPetPagination($offset,  $per_page)
        {
            $query = "select * from {$this->table_pet} limit :offset, :per_page";
            $sth = $this->db->prepare($query);
            $sth->execute([
                ':offset' => $offset,
                ':per_page' => $per_page
            ]);
            
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }
    }