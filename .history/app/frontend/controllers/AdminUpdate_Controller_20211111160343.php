<?php

    class Admin_Controller extends Admin_Controller{

        function __construct(){

            parent::__construct();
            $this->layout->setLayout('admin');
            $this->model->load_model('admin','admin');
            if (!isset($_SESSION['is_admin'])) {
                $this-> login();
                return;
            }
        }
    }