<?php

    class PetDetail_Controller extends Base_Controller{

        function __construct(){
            parent::__construct();
            $this->model->load_model('petDetail','PetDetail');
        }

        function petDetail() {

            $id = $_GET['id_pet'];
            $data = [
                'detail' => $this->model->petDetail->getPetDetail($id),
            ];
            $data = [
                'detail' => $this->model->productDetail->getProductDetail($id)
            ];

            $this->view->load_view('petDetail/petDetail', $data);
        }
    }