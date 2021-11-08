<?php

    class Home_Controller extends Base_Controller{

        function __construct(){

            parent::__construct();
            $this->model->load_model('home','home');
        }

        function index()
        {
            $this->view->load_view('home/index');
        }

        
    }