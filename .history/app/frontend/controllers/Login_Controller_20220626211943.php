<?php

class Login_Controller extends Base_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('userLogin');
        $this->model->load_model('login', 'login');
    }

    function login()
    {
        $this->view->load_view('login/login');
    }

    function checkValidateEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    function processRegister()
    {
        if (empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['re_password'])) {
            redirect('login/login?registration=0');
        } else {

            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            }

            if ($this->model->login->checkEmail($_POST['email']) == true) {
                redirect('login/login?registration=3');
            } else {

                if (strlen($_POST['password']) < 6) {
                    redirect('login/login?registration=4');
                } else {

                    $password =  hash_password_md5($_POST['password']);
                    $re_password = hash_password_md5($_POST['re_password']);
                    if ($password == $re_password) {
                        $data = [
                            'name' => $_POST['name'],
                            'email' => $_POST['email'],
                            'phone' => $_POST['phone'],
                            'password' => hash_password_md5($_POST['password']),
                        ];
                        $this->model->login->insertUser($data);
                        redirect('login/login?registration=2');
                    } else {
                        redirect('login/login?registration=1');
                    }
                }
            }
        }
    }

    function processLogin()
    {
        $data = [
            'email' => $_POST['email'],
            'password' => hash_password_md5($_POST['password']),
        ];

        $check = $this->model->login->checkUserExist($data);
        if ($check == false) {
            redirect('login/login?success=1');
        } else {
            $_SESSION['id'] = $check['id'];
            redirect('home/index?success=2');
        }
    }

    function logout()
    {
        session_destroy();
        redirect('login/login?success=3');
    }
}
