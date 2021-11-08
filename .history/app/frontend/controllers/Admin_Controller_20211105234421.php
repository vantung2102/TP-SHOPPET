<?php

    class Admin_Controller extends Base_Controller{

        function __construct(){

            parent::__construct();
            $this->layout->setLayout('admin');
            $this->model->load_model('admin','admin');
        }

        function admin()
        {
            $this->view->load_view('admin/admin');
        }  
    }