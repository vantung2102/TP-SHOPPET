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
            
            $ids_string = getPostParameter('id');
            $data = [
                'ids' => $ids_string,
            ];
            return to_api_json('$status', '$message', $data);
            return to_api_json(API_ERROR,"message", $ids_string);
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