<?php

    class Pet_Controller extends Base_Controller{

        function __construct(){
            parent::__construct();
            $this->model->load_model('pet','pet');
            $this->model->load_model('admin','admin');
        }

        function pet(){
            $data = [
                'pet'=>$this->model->admin->loadDataPet()
            ];
            $this->view->load_view('pet/pet', $data);
        }
    }