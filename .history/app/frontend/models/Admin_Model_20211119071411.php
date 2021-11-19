<?php

    class Admin_Model extends Base_Model{

        protected $table_admin = 'admin_account';
        protected $table_user = 'users';
        protected $table_pet = 'pets';
        protected $table_product = 'products';
        protected $table_order = 'orders';
        protected $table_orderDetail = 'order_details';

        function findSql($table){
            $query = "select * from $table";
            $sth = $this->db->prepare($query); 
            $sth->execute();
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }

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

        public function loadDataUser()
        {
            $query = "select * from {$this->table_user}";
            $sth = $this->db->prepare($query);
            $sth->execute();
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }

        public function loadDataPet()
        {
            $query = "select * from {$this->table_pet}";
            $sth = $this->db->prepare($query);
            $sth->execute();
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }

        public function loadDataProduct()
        {
            $query = "select * from {$this->table_product}";
            $sth = $this->db->prepare($query);
            $sth->execute();
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }

        public function delete($id){

            $query = "delete from {$this->table_pet} where id = :id";
            $sth = $this->db->prepare($query);
            $sth->execute([
                ':id'=>$id
            ]);
            
            $sth->closeCursor();
        }

        public function update($id){

            $query = "select * from {$this->table_pet} where id = :id";
            $sth = $this->db->prepare($query);
            $sth->execute([
                ':id'=>$id
            ]);

            $data = $sth->fetch(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }

        public function processUpdate($data){
            
            $query = "update {$this->table_pet} set 
                        id_pet = :id_pet, 
                        name = :name, 
                        count = :count, 
                        age = :age, 
                        specie = :specie, 
                        age = :age, 
                        color = :color,
                        sex = :sex, 
                        description = :description,
                        img = :img,
                        old_price = :old_price, 
                        new_price = :new_price where id = :id";

            $sth = $this->db->prepare($query);
            $sth->execute([
                ':id' => $data['id'],
                ':img' => $data['avatar'],
                ':name' => $data['name'],
                ':id_pet' => $data['id_pet'], 
                ':count' => $data['count'], 
                ':specie' => $data['specie'], 
                ':description' => $data['description'],
                ':color' => $data['color'], 
                ':age' => $data['age'], 
                ':sex' => $data['sex'],
                ':old_price' => $data['old_price'], 
                ':new_price' => $data['new_price'],
            ]);
            $sth->closeCursor();
        }

        
        public function processUpload($data){
            
            $query = "insert into {$this->table_pet} (id_pet, name, count, color, sex, specie, age, old_price, new_price, img, description) 
            values (:id_pet, :name, :count, :color, :sex, :specie, :age, :old_price, :new_price, :img, :description)";

            $sth = $this->db->prepare($query);
            $sth->execute([
                ':img' => $data['avatar'],
                ':name' => $data['name'],
                ':id_pet' => $data['id_pet'], 
                ':count' => $data['count'], 
                ':specie' => $data['specie'], 
                ':description' => $data['description'],
                ':color' => $data['color'], 
                ':age' => $data['age'], 
                ':sex' => $data['sex'],
                ':old_price' => $data['old_price'], 
                ':new_price' => $data['new_price'],
            ]);
            $sth->closeCursor();
        }

        function compareName($name, $search)
        {
            $name = strtolower($name);
            $search = strtolower($search);
            return strpos($name, $search);
        }

        function searchProduct($search)
        {   
            $table = 'pets';

            $data = $this->findSql($table);
            $find = [];
            $j = 0;
            for($i=0; $i < count($data); $i++)
            {   
                $result = $this->compareName($data[$i]['name'], $search);
                if($result != "")
                {
                    $find[$j] = $data[$i];
                    $j++;
                }
            }
            return $find;
        }

        function loadOrder(){

            $query = "select * from {$this->table_order}";
            $sth = $this->db->prepare($query); 
            $sth->execute();
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }

        function loadOrderDetail($order_id){
            $query = "select * from {$this->table_orderDetail} where order_id = :order_id";
            $sth = $this->db->prepare($query); 
            $sth->execute([
                ":order_id" => $order_id
            ]);
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }
       
    }