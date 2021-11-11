<?php

    class ProductDetail_Controller extends Base_Controller{
        
        function __construct(){
            parent::__construct();
            $this->model->load_model('productDetail','productDetail');
        }

        function productDetail() {

            $id = $_GET['id_product'];
            $data = $this->model->productDetail->getProductDetail($id);

            var_dump($data['img']);
           
            
            exit;
            $this->view->load_view('productDetail/productDetail', $data);
        }
    }