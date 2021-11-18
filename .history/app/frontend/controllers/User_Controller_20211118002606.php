<?php

    class User_Controller extends Base_Controller{

        function __construct(){
            parent::__construct();
            $this->model->load_model('user','user');
        }

        function user(){
            $data = $this->model->user->loadUser();
            $this->view->load_view('user/user', $data);
        }

        function changeUser(){

        }

        function changePassword(){

            if(empty($_POST["old_pass"]) || empty($_POST["new_pass"]) || empty($_POST["renew_pass"])){
                echo "<script>alert('Vui lòng nhập đủ thông tin !')</script>";
                $this->user();
            } 
            else{
                $old_password = hash_password_md5($_POST["old_pass"]);
                $id_user = $_SESSION['id'];

                $checkPass = $this->model->user->checkPass($id_user, $old_password);

                if($checkPass == false){
                    echo "<script>alert('Mật khẩu cũ sai !')</script>";
                    $this->user();
                }
                else{
                    $new_password = hash_password_md5($_POST["new_pass"]);
                    $renew_password = hash_password_md5($_POST["renew_pass"]);

                    if($new_password != $renew_password){
                        echo "<script>alert('Nhập không đúng mật khẩu!')</script>";
                        $this->user();
                    }
                    else{
                        $this->model->user->changePassword($id_user, $new_password);
                        echo "<script>alert('Đỗi mật khẩu thành công !')</script>";
                        $this->user();
                    }

                }
            }
            
        }

        
    }