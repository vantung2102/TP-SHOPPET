<?php

    class Admin_Controller extends Base_Controller{

        function __construct(){

            parent::__construct();
            $this->layout->setLayout('admin');
            $this->model->load_model('admin','admin');
            if (!isset($_SESSION['is_admin'])) {
                $this-> login();
                return;
            }
        }

        function login(){
            $this->layout->setLayout('adminLoginDefault');
            $this->view->load_view('admin/login');
        }

        function processLogin() {

            if(empty($_POST['email']) || empty($_POST['password']))
            {
                redirect('admin/login?failure=0');
            }  
            else
            {
                $data = [
                    'email'=> $_POST['email'],
                    'password'=> $_POST['password']
                ];

                $check = $this->model->admin->checkAdminExist($data);

                if($check == false) {
                    redirect('admin/login?failure=1');
                }
                else{
                    $_SESSION['id'] = $check['id'];
                    $_SESSION['is_admin'] = 'admin';

                    // if remember_me ? 
                    // $_COOKIE['id'] = $check['id'];
                    // $_COOKIE['email'] = $check['email'];
                    
                    // setcookie($_COOKIE['id'], $_COOKIE['email'], time() + 2*60*60, '/');
                    redirect('admin/index'); 
                }
            }
        }

        function logout(){
            session_destroy();
            redirect('admin/login');
        }  

        function index(){

            $data = [
                'pets' => $this->model->admin->loadDataPet(),
            ];
            $this->view->load_view('admin/admin', $data);
        }  

        function user() {
            $data = [
                'user' => $this->model->admin->loadDataUser(),
            ];
            $this->view->load_view('admin/user', $data);
        } 
        
        function product() {
            $data = [
                'product' => $this->model->admin->loadDataProduct(),
            ];
            $this->view->load_view('admin/product', $data);
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