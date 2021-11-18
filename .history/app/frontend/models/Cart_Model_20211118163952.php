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

        function insertCarts($data = '') {
            $query = "insert into {$this->table_order} (user_id, name, email, phone, order_date, status, total_money)
                    value(:user_id, :name, :email, :phone, :order_date, :status, :total_money)";

            $dataUser = $this->getUser();
            var_dump($dataUser);exit;
            $sth = $this->db->prepare($query);
            // $sth->execute([
            //     ":user_id"=> $data['id'],
            //     ":name" => ,
            //     ":email" =>,
            //     ":phone" =>,
            //     ":order_date" =>,
            //     ":status" =>,
            //     ":total_money"=>
            // ]);
            // $sth->closeCursor();
        }

    }
