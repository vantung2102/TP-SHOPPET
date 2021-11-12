<?php

    class Layout_Loader{

        protected $layout = 'default';

        function setLayout($_layout){
            $this->layout = $_layout;
        }

        function load_layout($data = []){
            extract($data);

            if($this->layout === null){
                exit;
            }

            if (isset($_SESSION['is_admin'])) {
                $this->layout = 'admin';
            }
            
            $layout_path = APP_PATH . "/views/layout/{$this->layout}.php";

            if(!file_exists($layout_path)){
                exit("$layout_path not found !");
            }

            require_once($layout_path);
        }
    }