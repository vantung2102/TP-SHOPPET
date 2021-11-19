<?php

    class Admin_Controller extends Base_Controller{

        function __construct(){

            parent::__construct();
            $this->layout->setLayout('admin');
            $this->model->load_model('admin','admin');
        }

        function before_login() {
            if (!isset($_SESSION['is_admin'])) {
                redirect('admin/login');
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
                    'password'=> hash_password_md5($_POST['password']) 
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

        function processAll(){
            $search =[
                'id' => $_POST['id_pet'],
                'name' => $_POST['name'],
                'specie' => $_POST['specie'],
                'price' => $_POST['price'],
                'age' => $_POST['age'],
            ];
        
            $data = [
                'pets' => $this->model->admin->processSearch($search)
            ];
            $this->view->load_view('admin/index', $data);
        }

        function logout(){
            session_destroy();
            redirect('admin/login');
        }  

        function index(){    
            $this->before_login();      
            $data = [
                'pets' => $this->model->admin->loadDataPet(),
            ];
            $this->view->load_view('admin/index', $data);
        }  

        function user() {
            $this->before_login();      
            $data = [
                'user' => $this->model->admin->loadDataUser(),
            ];
            $this->view->load_view('admin/user', $data);
        } 
        
        function product() {
            $this->before_login();      
            $data = [
                'product' => $this->model->admin->loadDataProduct(),
            ];
            $this->view->load_view('admin/product', $data);
        } 

        function order() {
            // $data = [ 'order' => $this->model->admin->loadOrder()];
            $this->view->load_view('admin/order');
        } 

        function orderDetail() {
            // $order_id = $_GET['id'];
            // $data =[ 'orderDetail' => $this->model->admin->loadOrderDetail($order_id)];
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

        function checkImg($fileImg, $urlImg) {

            $typeImg = strtolower(pathinfo($urlImg,PATHINFO_EXTENSION));

            if(isset($_POST['submit'])){

                $check = getimagesize($fileImg["tmp_name"]);

                if($check === false) {
                    echo "<script>alert('Không phải là hình ảnh!')</script>";
                } 
            }

            
            if (file_exists($urlImg)) {
                echo "<script>alert(Xin lỗi, Tập tin đã tồn tại!')</script>";
            }

            if ($fileImg["size"] > 500000000) {
                echo "<script>alert('Xin lỗi, tệp quá lớn!')</script>";
            }

            if($typeImg != "jpg" && $typeImg != "png" && $typeImg != "jpeg" && $typeImg != "gif") {
                echo `<script>alert('File tệp không hợp lệ!')</script>`;
            }

            if (!move_uploaded_file($fileImg["tmp_name"], $urlImg)) {
                echo "<script>alert('Xin lỗi, đã xảy ra lỗi khi tải tệp của bạn lên!')</script>";
            } 
            
        }

        function processUpdate(){

            $fileImg = $_FILES['avatar'];
            $nameImg = basename($fileImg['name']);
            $urlImg = BASE_IMG . 'pet/' . $nameImg;

            $this->checkImg($fileImg, $urlImg);

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
            $this->index();
        }

        function processUpload(){
            
            $fileImg = $_FILES['avatar'];
            $nameImg = basename($fileImg['name']);
            $urlImg = BASE_IMG . 'pet/' . $nameImg;

            $this->checkImg($fileImg, $urlImg);

            $data =[
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

            $this->model->admin->processUpload($data);
            $this->index();
        }
    }