<?php

    class Home_Model extends Base_Model
    {
        protected $table_pet = 'pets';
        protected $table_product = 'products';

        public function loadDataPetPopular()
        {
            $query = "select * from {$this->table_pet} limit 3";
            $sth = $this->db->prepare($query);
            $sth->execute();
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }

        public function loadDataProductPopular()
        {
            $query = "select * from {$this->table_product} limit 3";
            $sth = $this->db->prepare($query);
            $sth->execute();
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }

        function processSortDesc(){
            $query = "select * from {$this->table_pet} ORDER BY price DESC";
            $sth = $this->db->prepare($query);
            $sth->execute();
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }
    }