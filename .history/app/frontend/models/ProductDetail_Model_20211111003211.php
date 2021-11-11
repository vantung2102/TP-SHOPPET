<?php

    class ProductDetail_Model extends Base_Model
    {
        protected $table_product = 'products';
        
        function getProductDetail($id){
            $query = "select * from {$this->table_product} join products on {$this->table_product}.id = products.id where id = :id";
            $sth = $this->db->prepare($query);
            $sth->execute([
	        	':id' => $id,
	        ]);
	        $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
    }