<?php

    class User_Controller extends Base_Controller{

        function __construct(){
            parent::__construct();
            $this->model->load_model('user','user');
        }

        function user(){
            $this->view->load_view('user/user');
        }

        function changeUser(){

        }

        function changePassword(){
            $old_password = $_POST["old_pass"];
            $id_user = $_SESSION['id'];
            $new_password = $_POST["old_pass"];
            $renew_password = $_POST["old_pass"];

            $checkPass = $this->model->user->checkPass($id_user);
            var_dump($old_password);
            if(!isset($old_password) || !isset($new_password) || !isset($renew_password)){
                echo "<script>alert('Vui lòng nhập đủ thông tin')</script>";
            }
            // if($old_password != $checkPass){
            //     echo "<script>alert('Mật khẩu cũ sai')</script>";
            //     $this->user();
            // }
        }

        
    }