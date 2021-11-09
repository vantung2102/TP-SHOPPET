<?php

    class AdminLogin_Controller extends Base_Controller{

        function __construct(){

            parent::__construct();
            $this->layout->setLayout('adminLoginDefault');
            $this->model->load_model('adminLogin','adminLogin');
        }

        function processLoginAdmin() {

            if(empty($_POST['email']) || empty($_POST['password']))
            {
                redirect('admin/adminLogin?failure=0');
            }  
            else
            {
                $data = [
                    'email'=> $_POST['email'],
                    'password'=> $_POST['password']
                ];

                $check = $this->model->admin->checkAdminExist($data);

                if($check == false) {
                    redirect('admin/adminLogin?failure=1');
                }
                else{
                    $_SESSION['id'] = $check['id'];
                    redirect('admin/adminLogin?success'); 
                }
            }

            
        }
    }