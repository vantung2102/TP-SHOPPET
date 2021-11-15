<?php
     class Cart_Controller extends Base_Controller{
        function __construct()
        {
            parent::__construct();
            $this->model->load_model('cart','cart');
        }

        function cart()
        {
            //$data = ['cartProducts'=>$this->model->cart->find_All()];
            $this->view->load_view('cart/cart');
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
            $this->view->load_view('cart/cart',$data);
        }
    }
?>