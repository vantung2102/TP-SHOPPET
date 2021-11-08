<?php

    class Admin_Controller extends Base_Controller{

        function __construct(){

            parent::__construct();
            $this->model->load_model('home','home');
        }

        function admin()
        {
            $this->view->load_view('admin/admin');
        }  
    }