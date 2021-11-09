<?php

    class Product_Controller extends Base_Controller{

        function __construct(){
            parent::__construct();
            $this->model->load_model('product','product');
        }

        function product(){
            $this->view->load_view('product/product');
        }
    }