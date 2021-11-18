<?php
    class Cart_Model extends Base_Model{
        protected $table_order = 'orders';
        protected $table_orderDetail = 'order)_details';

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

        function insertOrders($data = []) {
            $query = "insert into {$this->table_order} (user_id, name, email, phone, order_date, status, total_money)
                    value(:user_id, :name, :email, :phone, :order_date, :status, :total_money)";
            // var_dump($data);exit;
            $dataUser = $this->getUser();

            $sth = $this->db->prepare($query);
            $sth->execute([
                ":user_id"=> $_SESSION['id'],
                ":name" => $dataUser['name'],
                ":email" =>$dataUser['email'],
                ":phone" =>$dataUser['phone'],
                ":order_date" => date('d.m.y'),
                ":status" =>1,
                // ":total_money"=>((int)$data['carts']['price_new'])*((int)$data['carts']['number'])
            ]);
            $sth->closeCursor();
        }

        function getIdOrder(){

            $query = "select id  from {$this->table_order} where ( user_id = :user_id) ORDER BY id DESC LIMIT 1";
            $sth=$this->db->prepare($query);
            $sth->execute([
                ':user_id' => $_SESSION['id']
            ]);
            $id = $sth->fetch(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $id;
        }

        function insertOrderDetail($data){
            $query = "insert into {$this->table_orderDetail} (order_id, pet_id, Product_id, price, num, total_money)
            value(:order_id, :pet_id, :Product_id, :price, :num, :total_money)";
            $sth = $this->db->prepare($query);
var_dump($data->id); exit;
            $id = $this->getIdOrder();

            $sth->execute([
                ":order_id" => $id ,
                ":pet_id" => $data->id,
                ":product_id" =>"" ,
                ":price" =>$data->price,
                ":num" => $data->number,
                ":total_money" => ($data->price)*($data->number)
            ]);
            $sth->closeCursor();
        }
    }
