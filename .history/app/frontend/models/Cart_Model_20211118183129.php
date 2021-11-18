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

        function insertOrders($data) {
            $query = "insert into {$this->table_order} (user_id, name, email, phone, order_date, status, total_money)
                    value(:user_id, :name, :email, :phone, :order_date, :status, :total_money)";

            $dataUser = $this->getUser();

            $sth = $this->db->prepare($query);
            $sth->execute([
                ":user_id"=> $_SESSION['id'],
                ":name" => $dataUser['name'],
                ":email" =>$dataUser['email'],
                ":phone" =>$dataUser['phone'],
                ":order_date" => date('m/d/Y h:i:s a', time());,
                ":status" =>1,
                ":total_money"=>$data['carts']['price']*$data['carts']['number']
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
            $id = $this->getIdOrder();
            var_dump($id);

            $sth->execute([
                ":order_id" => $id ,
                ":pet_id" => $data['carts']['id'],
                ":product_id" =>"" ,
                ":price" =>$data['carts']['price'],
                ":num" => $data['carts']['number'] ,
                ":total_money" => $data['carts']['price']*$data['carts']['number']
            ]);
            $sth->closeCursor();
        }

        public function addNewOrder($user_id, $total_money, $email, $name, $phone, $address) {
            $ordersArray = array();
            $result = $this->db->con->query("INSERT INTO orders VALUES(null, '$user_id', now(), 0, '$total_money', '$email', '$name', '$phone', '$address')");
            if (!$result) {
                die($this->db->con->error);
            }
            else {
                $orders = $this->db->con->query("SELECT * FROM orders WHERE user_id = $user_id ORDER BY id DESC LIMIT 1");
                if (!$orders) {
                    echo "Query failed";
                }
                else {
                    $ordersArray = $orders->fetch_assoc();
                }
            }
            return $ordersArray["id"];
        }

        public function addOrderDetail($order_id, $product_id, $product_num, $product_price) {
            $result = $this->db->con->query("INSERT INTO order_details VALUES(null, $order_id, $product_id, $product_num, $product_price * $product_num)");
            if (!$result) {
                echo "Query failed";
            }
        }

    }
