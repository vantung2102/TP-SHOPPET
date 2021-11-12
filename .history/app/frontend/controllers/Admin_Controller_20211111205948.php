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

        function delete() {
            $id = $_GET['id_pet'];

            $this->model->admin->delete($id);
            $this->index();
        }

        function update() {
            $id = $_GET['id_pet'];
            $data = $this->model->admin->update($id);
            
            $this->view->load_view('admin/update', $data);
        }

        function processUpdate(){

            $nameImg = basename($_FILES['avatar']['name']);
            $urlImg = BASE_IMG . 'pet/' . $nameImg;
            var_dump($_FILES['avatar']);exit;
            $this->checkImg($urlImg, $nameImg);

            var_dump($_GET['id_pet']);exit;
            $data =[
                'id' => $_GET['id_pet'],
                'avatar' => $nameImg,
                'name' => $_POST['name'],
                'id_pet' => $_POST['id_pet'], 
                'count' => $_POST['count'], 
                'specie' => $_POST['specie'], 
                'description' => $_POST['description'],
                'color' => $_POST['color'], 
                'age' => $_POST['age'], 
                'sex' => $_POST['sex'],
                'old_price' => $_POST['old_price'], 
                'new_price' => $_POST['new_price'],
            ];
            $this->model->admin->processUpdate($data);
            
        }
    }