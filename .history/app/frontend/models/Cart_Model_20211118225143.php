<?php
    class Cart_Model extends Base_Model{
        protected $table_order = 'orders';
        protected $table_orderDetail = 'order_details';

        function getUser(){
            $query = "select * from users where (id = :id)";
            $sth = $this->db->prepare($query);
           
	        $sth->execute([
	        	':id' => $_SESSION['id'],
	        ]);
            
            $data = $sth->fetch(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }

        function insertOrders() {
            $query = "insert into {$this->table_order} (user_id, name, email, phone, order_date, status, total_money)
                    values(:user_id, :name, :email, :phone, :order_date, :status, :total_money)";
            $dataUser = $this->getUser();
            $sth = $this->db->prepare($query);
            // var_dump($sth);exit;

            $sth->execute([
                ":user_id"=> $dataUser['id'],
                ":name" => $dataUser['name'],
                ":email" =>$dataUser['email'],
                ":phone" =>$dataUser['phone'],
                ":order_date" => date('d.m.y'),
                ":status" =>1,
                ":total_money"=>""
            ]);
            $sth->closeCursor();
        }

        function getIdOrder(){

            $query = "select id from {$this->table_order} where ( user_id = :user_id) ORDER BY id DESC LIMIT 1";
            $sth=$this->db->prepare($query);
            $sth->execute([
                ':user_id' => $_SESSION['id']
            ]);
            $id = $sth->fetch(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $id;
        }

        function insertOrderDetail($data){
            // $query = "insert into {$this->table_orderDetail} (order_id, pet_id, product_id, price, num, total_money)
            // values(:order_id, :pet_id, :product_id, :price, :num, :total_money)";
            $query = "INSERT INTO `order_details`(`order_id`, `pet_id`, `product_id`, `price`, `num`, `total_money`) VALUES (:order_id, :pet_id, :product_id , :price, :num , :total_money)";
            // var_dump($query);exit;
            $sth = $this->db->prepare($query);
            $id = $this->getIdOrder();
            var_dump($id);
           var_dump($data);
            $sth->execute([
                ":order_id" =>$id ,
                ":pet_id" => $data->id,
                ":product_id" => 1,
                ":price" =>$data->price_new,
                ":num" => $data->number,
                ":total_money" => ($data->price_new)*($data->number)
            ]);
            $sth->closeCursor();
        }
    }
