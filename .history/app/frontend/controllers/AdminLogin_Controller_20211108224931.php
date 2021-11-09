<?php

    class AdminLogin_Controller extends Base_Controller{

        function __construct(){

            parent::__construct();
            $this->layout->setLayout('adminLogin');
            $this->model->load_model('adminLogin','adminLogin');
        }

        function adminLogin(){
            $this->view->load_view('adminLogin/adminLogin');
        }
    }