<?php

    class Product extends Base_Controller{

        function __construct(){
            parent::__construct();
            $this->load->load_model('product','product');
        }

        function product(){
            $this->load->load_view('product/product')
        }
    }