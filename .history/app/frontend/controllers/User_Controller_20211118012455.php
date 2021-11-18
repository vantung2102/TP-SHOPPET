<?php

    class User_Controller extends Base_Controller{

        function __construct(){
            parent::__construct();
            $this->model->load_model('user','user');
        }

        function user(){
            $id_user = $_SESSION['id'];
            $data =[
                'user' => $this->model->user->loadUser($id_user)
            ];
            $this->view->load_view('user/user', $data);
        }

        function changeInfo(){
            $id_user = $_SESSION['id'];
            $name = $_POST['name'];
            $birthday = $_POST['birthday'];
            $gender = $_POST['gender'];
             
            $data = [
                'id' => $id_user,
                'name' => $name,
                'birthday' => $birthday,
                'gender' => $gender
            ];
            $this->model->user->changeInfo($data);
            $this->user();
        }

        function changePhone(){
            $id_user = $_SESSION['id'];
            $phone = $_POST['phone'];

            $data = [
                'id' => $id_user,
                'phone' => $phone,
            ];
            $this->model->user->changePhone($data);
            $this->user();
        }

        function changeEmail(){
            $id_user = $_SESSION['id'];
            $email = $_POST['email'];

            $data = [
                'id' => $id_user,
                'email' => $email,
            ];
            $this->model->user->changePhone($data);
            $this->user();
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