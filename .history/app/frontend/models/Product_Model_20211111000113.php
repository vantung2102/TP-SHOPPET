<?php

    class Product_Model extends Base_Model{

        protected $table_product = 'products';

        public function loadDataProductPagination($offset,  $per_page)
        {
            $query = "select * from {$this->table_pet} limit $offset, $per_page";
            $sth = $this->db->prepare($query);
            $sth->execute();
            
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }
    }