<?php
     class Cart_Controller extends Base_Controller{
        function __construct()
        {
            parent::__construct();
            $this->model->load_model('cart','cart');
        }

        function cart()
        {
            $this->view->load_view('cart/cart');
        }

        function processPay(){
            var_dump($_POST['name']);
        }

        function get_product_ajax() {
            $this->layout->setLayout(null);
            
            $message = '';
            $status = 1;
            if(!isset($_SESSION['id'])){
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
                    var_dump($order_id['id']);
                        $this->model->cart->insertOrderDetail($carts, (int)$order_id);

                }
                // return to_api_json($status, $message, $carts[0]->id);
                return to_api_json($status, $message, $carts);
            }
        }

        function getProducts() {
            $this->layout->setLayout(null);
            $ids = getGetParameter("id");
            $status = API_SUCCESS;
            $message = '';
            $data = $this->model->cart->find_by_group($ids);
            
            if (empty($data)) {
                $status = API_ERROR;
                $message = 'Cart is empty !';
            } else {
                $status = API_SUCCESS;
                $message = 'Cart has products !';
            }
		    return to_api_json($status, $message, $data);
        }

        function showProducts() {
            //$this->layout->setLayout(null);
            $ids = getGetParameter('id');
            $data = ['cartProducts'=>$this->model->cart->find_by_group($ids)];
            $this->view->load_view('default', $data);
            $this->view->load_view('cart/cart',$data);
        }
    }
?>