<?php

    class Product_Controller extends Base_Controller{

        function __construct(){
            parent::__construct();
            $this->model->load_model('product','product');
            $this->model->load_model('admin','admin');
        }

        function product(){
            $data = [
                'pet'=>$this->model->admin->loadDataPet()
            ];
            $this->view->load_view('product/product', $data);
        }
    }