<?php

    class ProductDetail_Controller extends Base_Controller{
        
        function __construct(){
            parent::__construct();
            $this->model->load_model('productDetail','productDetail');
        }

        function productDetail() {

            $data = [
                'detail' => $this->model->productDetail->getProductDetail($_GET['id_product'])
            ];
            var_dump($data['detail']);exit;
            $this->view->load_view('productDetail/productDetail', $data);
        }
    }