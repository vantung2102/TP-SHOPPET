<?php

    class Admin_Controller extends Base_Controller{

        function __construct(){

            parent::__construct();
            $this->layout->setLayout('admin');
            $this->model->load_model('admin','admin');
        }

        function admin(){
            // if(isset($_COOKIE['id']) && isset($_COOKIE['email']))
            // {
                $this->view->load_view('admin/admin');
            // } 
            // else {
            //     redirect('adminLogin/adminLogin');
            // }
        }  

        function user() {
            if(isset($_COOKIE['id']) && isset($_COOKIE['email']))
            {
                $this->view->load_view('admin/user');
            } 
            else {
                redirect('adminLogin/adminLogin');
            }
        } 
        
        function product() {
            if(isset($_COOKIE['id']) && isset($_COOKIE['email']))
            {
                $this->view->load_view('admin/product');
            } 
            else {
                redirect('adminLogin/adminLogin');
            }
        } 

        function order() {
            if(isset($_COOKIE['id']) && isset($_COOKIE['email']))
            {
                $this->view->load_view('admin/order');
            } 
            else {
                redirect('adminLogin/adminLogin');
            }
        } 

        function orderDetail() {
            if(isset($_COOKIE['id']) && isset($_COOKIE['email']))
            {
                $this->view->load_view('admin/orderDetail');
            } 
            else {
                redirect('adminLogin/adminLogin');
            }
        } 

        function category() {
            $rows = [
                [
                    "id" => 1,
                    "name" => "A"

                ],
                [
                    "id" => 2,
                    "name" => "A"

                ],
                [
                    "id" => 3,
                    "name" => "A"

                ],
                [
                    "id" => 4,
                    "name" => "A"

                ],
                [
                    "id" => 5,
                    "name" => "A"

                ],
                [
                    "id" => 6,
                    "name" => "A"

                ],
            ];
            // limit , offset 

            $page = getGetParameter('page') == '' ? 1 : getGetParameter('page');
            $per_page = 3;
            $total_pages = ceil(count($rows) / $per_page);
            $data = [
                'total_pages' => $total_pages,
                'categories' => $rows,
                'page' => $page,
            ];
            $this->view->load_view('admin/category', $data);
        }

    }