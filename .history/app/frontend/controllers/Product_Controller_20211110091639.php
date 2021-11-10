<?php

    class Product_Controller extends Base_Controller{

        function __construct(){
            parent::__construct();
            $this->model->load_model('pet','pet');
            $this->model->load_model('admin','admin');
        }

        function product(){
            $data = [
                'product'=>$this->model->admin->loadDataProduct()
            ];
            $this->view->load_view('product/product', $data);
        }
    }