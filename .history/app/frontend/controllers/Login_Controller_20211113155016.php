<?php
    class Login_Controller extends Base_Controller{
        function __construct()
        {
            parent::__construct();
            $this->layout->setLayout('userLogin');
            $this->model->load_model('login', 'login');
            $this->model->load_model('Registration', 'registration');
        }
        
        function login()
        {
            $this->view->load_view('login/login');
        }

        function processRegister()
        {
            if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['re_password'])){
                redirect('login/login?registration=0');
            }
            else
            {
                $password =  hash_password_md5($_POST['password']);
                $re_password = hash_password_md5($_POST['re_password']);
                if($password == $re_password)
                {
                    $data = [
                        'name'=> $_POST['name'],
                        'email'=> $_POST['email'],
                        'phone'=> $_POST['phone'],
                        'password'=> hash_password_md5($_POST['password']),
                    ];
                    $this->model->login->insertUser($data);
                    redirect('login/login?registration=2');
                }
                else
                {
                    redirect('login/login?registration=1');
                }
            }
        }
        
        function processLogin()
        { 
            if(empty($_POST['email']) || empty($_POST['password']))
            {
                redirect('login/login?success=0');
            }  
            else
            {
                $data = [
                    'email'=> $_POST['email'],
                    'password'=> hash_password_md5($_POST['password']),
                ];

                $check = $this->model->login->checkUserExist($data);
                if($check == false){
                    redirect('login/login?success=2');
                }
                else{
                    $_SESSION['id'] = $check['id'];
                    redirect('home/index?success=1'); 
                }
            }
        }

        function logout(){
            session_destroy();
            redirect('login/login?success=3');
        }
    }