<?php

    class User_Controller extends Base_Controller{

        function __construct(){
            parent::__construct();
        }

        function user(){
            $this->view->load_view('user/user');
        }

        function changeUser(){

        }

        function changePassword(){
            $old_password=$_POST["old_pass"];
            $new_password=$_POST["old_pass"];
            $renew_password=$_POST["old_pass"];

            $checkPass = $this->model->user->checkPass($old_password);
            if($old_password != $checkPass){
                echo "<script>alert('Mật khẩu cũ sai')</script>";
                $this->user;
            }
        }

        
    }