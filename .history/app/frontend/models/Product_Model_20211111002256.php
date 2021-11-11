<?php

    class Product_Model extends Base_Model{

        protected $table_product = 'products';

        public function loadDataProductPagination($offset,  $per_page)
        {
            $query = "select * from {$this->table_product} limit $offset, $per_page";
            $sth = $this->db->prepare($query);
            $sth->execute();
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }

        function getProductDetail($id){
            $query = "select * from {$this->table_product} join products on {$this->table_product}.product_id = products.id where product_id = :product_id";
            $sth = $this->db->prepare($query);
            $sth->execute([
	        	':product_id' => $id,
	        ]);
	        $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
    }