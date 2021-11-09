<?php

    class Admin_Controller extends Base_Controller{

        function __construct(){

            parent::__construct();
            $this->layout->setLayout('admin');
            $this->layout->setLayout('adminLoginDefault');
            $this->model->load_model('admin','admin');
        }}