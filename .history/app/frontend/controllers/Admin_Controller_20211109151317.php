<?php

    class Admin_Controller extends Base_Controller{

        function __construct(){

            parent::__construct();
            $this->layout->setLayout('admin');
            $this->model->load_model('admin','admin');
        }

        function login(){
            $this->layout->setLayout('adminLoginDefault');
            $this->view->load_view('admin/login');
        }

        function processLoginAdmin() {

            if(empty($_POST['email']) || empty($_POST['password']))
            {
                redirect('adminLogin/adminLogin?failure=0');
            }  
            else
            {
                $data = [
                    'email'=> $_POST['email'],
                    'password'=> $_POST['password']
                ];

                $check = $this->model->adminLogin->checkAdminExist($data);

                if($check == false) {
                    redirect('adminLogin/adminLogin?failure=1');
                }
                else{
                    $_SESSION['id'] = $check['id'];
                    
                    $_COOKIE['id'] = $check['id'];
                    $_COOKIE['email'] = $check['email'];
                    setcookie($_COOKIE['id'], $_COOKIE['email'], time() + 2*60*60, '/');
                    redirect('adminLogin/adminLogin?success'); 
                }
            }
        }

        function logout(){
            session_destroy();
            redirect('adminLogin/adminLogin');
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