<?php

    class Product_Controller extends Base_Controller{

        function __construct(){
            parent::__construct();
            $this->model->load_model('product','product');
            $this->model->load_model('admin','admin');
        }

        function product(){

            $page = getGetParameter('page') == '' ? 1 : getGetParameter('page');
            $per_page = 8;
            $offset = ($page - 1) * $per_page;

            $limit = $this->model->pet->loadDataProductPagination($offset, $per_page);
            $rows = $this->model->admin->loadDataProduct();

            $total_pages = ceil(count($rows) / $per_page);

            $data = [
                'total_pages' => $total_pages,
                'product' => $limit,
                'page' => $page,
            ];
            $this->view->load_view('product/product', $data);
        }
    }