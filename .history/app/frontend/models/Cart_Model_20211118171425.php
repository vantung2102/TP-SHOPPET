<?php
    class Cart_Model extends Base_Model{
        protected $table_order = 'orders';
        protected $table_orderDetail = 'orderDetail';

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

        function getIdOrder(){

            $query = "select id  from {$this->table_order} where ( = :)";
            $sth=$this->db->prepare($query);
            $sth->execute();
            $data = $sth->fetch(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }

        function insertCarts($data = '') {
            $query = "insert into {$this->table_order} (user_id, name, email, phone, order_date, status, total_money)
                    value(:user_id, :name, :email, :phone, :order_date, :status, :total_money)";


            $query_2 = "insert into {$this->table_orderDetail} (order_id, pet_id, Product_id, price, num, total_money)
                        value(:order_id, :pet_id, :Product_id, :price, :num, :total_money)";

            $dataUser = $this->getUser();

            $sth = $this->db->prepare($query);
            $sth_2 = $this->db->prepare($query_2);

            $sth->execute([
                ":user_id"=> $_SESSION['id'],
                ":name" => $dataUser['name'],
                ":email" =>$dataUser['email'],
                ":phone" =>$dataUser['phone'],
                ":order_date" =>" ",
                ":status" =>1,
                ":total_money"=>$data['carts']['price']*$data['carts']['number']
            ]);
            $sth->closeCursor();

            $sth_2->execute([
                ":order_id" => ,
                ":pet_id" => $data['carts']['id'],
                ":product_id" =>"" ,
                ":price" =>$data['carts']['price'],
                ":num" => $data['carts']['number'] ,
                ":total_money" => $data['carts']['price']*$data['carts']['number']
            ]);

        }

    }
