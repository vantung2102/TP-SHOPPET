<?php

    class Pet_Controller extends Base_Controller{

        function __construct(){
            parent::__construct();
            $this->model->load_model('pet','pet');
            $this->model->load_model('admin','admin');
        }

        function pet(){
            $page = getGetParameter('page') == '' ? 1 : getGetParameter('page');
            $per_page = 8;
            $offset = ($page - 1) * $per_page;

            $limit = $this->model->pet->loadDataPetPagination($offset, $per_page);
            $rows = $this->model->admin->loadDataPet();

            $total_pages = ceil(count($rows) / $per_page);

            $data = [
                'total_pages' => $total_pages,
                'pet' => $limit,
                'page' => $page,
            ];
            // var_dump($data['total_pages']); exit;
            $this->view->load_view('pet/pet', $data);
        }

        function category() {
            $rows = [
                [
                    "id" => 1,
                    "name" => "A"

                ],
                [
                    "id" => 2,
                    "name" => "A"

                ],
                [
                    "id" => 3,
                    "name" => "A"

                ],
                [
                    "id" => 4,
                    "name" => "A"

                ],
                [
                    "id" => 5,
                    "name" => "A"

                ],
                [
                    "id" => 6,
                    "name" => "A"

                ],
            ];
            // limit , offset 

            $page = getGetParameter('page') == '' ? 1 : getGetParameter('page');
            $per_page = 3;
            $total_pages = ceil(count($rows) / $per_page);
            $data = [
                'total_pages' => $total_pages,
                'categories' => $rows,
                'page' => $page,
            ];
            $this->view->load_view('admin/category', $data);
        }
    }