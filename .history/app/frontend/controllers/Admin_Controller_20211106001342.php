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
                [
                    "id" => 7,
                    "name" => "A"

                ],
                [
                    "id" => 8,
                    "name" => "A"

                ],
                [
                    "id" => 9,
                    "name" => "A"

                ],
                [
                    "id" => 10,
                    "name" => "A"

                ],
                [
                    "id" => 11,
                    "name" => "A"

                ],
            ];
            $page = 1;
            $per_page = 10;
            $total_pages = ceil(count($rows) / $per_page);
            $data = [
                'total_pages' => $total_pages,
                'categories' => $rows
            ];
            $this->view->load_view('admin/category', $data);
        }

    }