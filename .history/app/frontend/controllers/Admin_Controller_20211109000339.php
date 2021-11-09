<?php

    class Admin_Controller extends Base_Controller{

        function __construct(){

            parent::__construct();
            $this->layout->setLayout('admin');
            $this->layout->setLayout('adminLoginDefault');
            $this->model->load_model('admin','admin');
        }

        
        function adminLogin(){
            $this->view->load_view('admin/adminLogin');
        }

        function processLoginAdmin() {

            if(empty($_POST['email']) || empty($_POST['password']))
            {
                redirect('admin/adminLogin?failure');
            }  
            else
            {
                $data = [
                    'email'=> $_POST['email'],
                    'password'=> $_POST['password']
                ];

                $check = $this->model->login->checkUserExist($data);

                if($check == false)
                {
                    redirect('admin/adminLogin?failure=1');
                }
                else
                {
                    $_SESSION['id'] = $check['id'];
                    redirect('admin/adminLogin?success'); 
                }
            }

            
        }

        function pet(){
            if($this->view->load_view('admin/adminLogin')){

                $this->view->load_view('admin/pet');
            }
        }  

        function user() {
            $this->view->load_view('admin/user');
        } 
        
        function product() {
            $this->view->load_view('admin/product');
        } 

        function mail() {
            $this->view->load_view('admin/mail');
        } 

        function order() {
            $this->view->load_view('admin/order');
        } 

        function orderDetail() {
            $this->view->load_view('admin/orderDetail');
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