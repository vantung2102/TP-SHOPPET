<?php
    class Cart_Model extends Base_Model{
        protected $table_order = 'orders';
        protected $table_orderDetail = 'orderDetail';

        function insertCarts($data = '') {
            $query = "insert into {$this->table_order} (user_id, name, email, phone, order_date, status, total_money)
                    value(:user_id, :name, :email, :phone, :order_date, :status, :total_money)
                    where user_id = :id";

            $sth = $this->db->prepare($query);
            $sth->execute([

            ]);
            $sth->closeCursor();
        }
    }
