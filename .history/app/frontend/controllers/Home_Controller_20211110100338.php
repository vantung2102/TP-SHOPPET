<?php

    class Home_Controller extends Base_Controller{

        function __construct(){

            parent::__construct();
            $this->model->load_model('home','home');
            $this->model->load_model('admin','admin');
        }

        function index()
        {
            $data = [
                'pet'=>$this->model->admin->loadDataPetPopular(),
                'product'=>$this->model->admin->loadDataProductPopular(),
            ];
            $this->view->load_view('home/index', $data);
        }  
    }