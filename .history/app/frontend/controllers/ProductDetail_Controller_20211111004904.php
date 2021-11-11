<?php

    class ProductDetail_Controller extends Base_Controller{
        
        function __construct(){
            parent::__construct();
            $this->model->load_model('productDetail','productDetail');
        }

        function productDetail() {

            $data = $this->model->productDetail->getProductDetail($_GET['id_product']);
            $this->view->load_view('productDetail/productDetail', $data);
        }
    }