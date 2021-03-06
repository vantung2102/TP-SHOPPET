<?php
class Cart_Model extends Base_Model
{
    protected $table_order = 'orders';
    protected $table_orderDetail = 'order_details';

    function getUser()
    {
        $query = "select * from users where (id = :id)";
        $sth = $this->db->prepare($query);

        $sth->execute([
            ':id' => $_SESSION['id'],
        ]);

        $data = $sth->fetch(PDO::FETCH_ASSOC);
        $sth->closeCursor();
        return $data;
    }

    function insertOrders()
    {
        $query = "insert into {$this->table_order} (user_id, name, email, phone, address, order_date, status)
                    values(:user_id, :name, :email, :phone, :address, :order_date, :status)";
        $dataUser = $this->getUser();
        $sth = $this->db->prepare($query);

        $sth->execute([
            ":user_id" => $dataUser['id'],
            ":name" => $dataUser['name'],
            ":email" => $dataUser['email'],
            ":phone" => $dataUser['phone'],
            ":address" => $dataUser['address'],
            ":order_date" => date('d.m.y'),
            ":status" => 1,
        ]);
        $sth->closeCursor();
    }

    function getIdOrder()
    {

        $query = "select * from {$this->table_order} where ( user_id = :user_id) ORDER BY id DESC LIMIT 1";
        $sth = $this->db->prepare($query);
        $sth->execute([
            ':user_id' => $_SESSION['id']
        ]);
        $id = $sth->fetch(PDO::FETCH_ASSOC);
        $sth->closeCursor();
        return $id;
    }

    function insertOrderDetail($carts, $order_id)
    {
        $query = "insert into {$this->table_orderDetail} (order_id, pet_id, product_id, name, num, price, total_money)
            values(:order_id, :pet_id, :product_id, :name, :num, :price, :total_money)";
        foreach ($carts as $data) {
            $sth = $this->db->prepare($query);

            $sth->execute([
                ":order_id" => $order_id,
                ":pet_id" => $data->id,
                ":product_id" => 1,
                ":name" => $data->name,
                ":num" => $data->number,
                ":price" => $data->price_new,
                ":total_money" => ($data->number) * ($data->price_new)
            ]);
        }
        $sth->closeCursor();
    }
}
