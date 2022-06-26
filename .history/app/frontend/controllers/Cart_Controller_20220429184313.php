<?php

class Cart_Controller extends Base_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->model->load_model('cart', 'cart');
    }

    function cart()
    {
        $this->view->load_view('cart/cart');
    }

    function processPay()
    {
        var_dump($_POST['name']);
    }

    function get_product_ajax()
    {
        $this->layout->setLayout(null);

        $message = '';
        $status = 1;
        if (!isset($_SESSION['id'])) {
            $status = 401;
            $message = 'Authorization Required';
            $data = null;
            return to_api_json('401', $message, $data);
        } else {
            $carts = json_decode(getPostParameter('carts'));

            if (empty($carts)) {
                $status = 0;
                $message = 'Cart is empty !';
                $data = null;
            } else {
                $status = 1;
                $message = 'Cart has products !';

                $this->model->cart->insertOrders();
                // var_dump($id);exit;
                $order_id = $this->model->cart->getIdOrder();
                $this->model->cart->insertOrderDetail($carts, (int)$order_id['id']);
                // $this->cart();

            }
            // return to_api_json($status, $message, $carts[0]->id);
            return to_api_json($status, $message, $carts);
        }
    }
}