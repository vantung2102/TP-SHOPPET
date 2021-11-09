<?php

    class AdminLogin_Controller extends Base_Controller{

        function __construct(){

            parent::__construct();
            $this->layout->setLayout('adminLoginDefault');
            $this->model->load_model('adminLogin','adminLogin');
        }

        function adminLogin(){
            $this->view->load_view('adminLogin/adminLogin');
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

    }