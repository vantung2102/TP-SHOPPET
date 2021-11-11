<?php

    class ProductDetail_Controller extends Base_Controller{
        
        function __construct(){
            parent::__construct();
            $this->model->load_model('productDetail','productDetail');
        }

        function productDetail() {

            $id = $_GET['id_product'];
            $data = [
                'detail' => $this->model->petDetail->getPetDetail($id)
            ];

            $this->view->load_view('productDetail/productDetail', $data);
        }
    }