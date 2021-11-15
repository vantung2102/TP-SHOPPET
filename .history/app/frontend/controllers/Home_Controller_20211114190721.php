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
                'pet'=>$this->model->home->loadDataPetPopular(),
                'product'=>$this->model->home->loadDataProductPopular(),
            ];
            $this->view->load_view('home/index', $data);
        }  

        function processSortDesc(){
            $data = [
                'pet' => $this->model->home->processSortDesc()
            ];
            var_dump($data);exit;

            $this->view->load_view('home/pet', $data);
        }
    }