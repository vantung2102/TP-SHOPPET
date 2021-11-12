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

            $url_img = BASE_IMG . 'pet/' . basename($_FILES['avatar']['name']);
            $type_img = strtolower(pathinfo($url_img,PATHINFO_EXTENSION));
            $success = 1;

            // kiểm tra có phải file IMG
            if(isset($_POST['submit'])){

                $check = getimagesize($_FILES["avatar"]["tmp_name"]);
                if($check === false) {
                    echo "Không phải là hình ảnh.";
                    $success = 0;
                } 
            }

            // kiểm tra tồn tại file
            // if (file_exists($url_img)) {
            //     echo "Sorry, file already exists.";
            //     $success = 0;
            // }

            // kiểm tra kích cở
            if ($_FILES["avatar"]["size"] > 500000000) {
                echo "Sorry, your file is too large.";
                $success = 0;
            }

            // Cho phép các định dạng tệp nhất định
            if($type_img != "jpg" && $type_img != "png" && $type_img != "jpeg" && $type_img != "gif") {
                echo "file tệp không hợp lệ.";
                $success = 0;
            }

            if ($success == 0) {
                echo "Xin lỗi file của bạn không thể cập nhật.";
            } 
            else {
                if (!move_uploaded_file($_FILES["avatar"]["tmp_name"], $url_img)) {
                    echo "Xin lỗi, đã xảy ra lỗi khi tải tệp của bạn lên.";
                } 
            }
            $this->model->admin->processUpdate();
        }
    }