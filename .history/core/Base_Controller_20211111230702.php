<?php

    class Base_Controller extends Core_Controller {
        function __destruct()
        {
            $this-> renderLayout();
        }

        function renderLayout() {

            ob_start();

            $this->view->show();

            $content = ob_get_contents();

            ob_end_clean();

            $this->layout->load_layout([
                'NoiDung'=> $content
            ]);

        }

        function checkImg($fileImg, $urlImg) {

            $typeImg = strtolower(pathinfo($urlImg,PATHINFO_EXTENSION));

            if(isset($_POST['submit'])){

                $check = getimagesize($fileImg["tmp_name"]);

                if($check === false) {
                    exit("Không phải là hình ảnh !");
                } 
            }

            // kiểm tra tồn tại file
            // if (file_exists($urlImg)) {
            //     echo "Sorry, file already exists.";
            //     $success = 0;
            // }

            if ($fileImg["size"] > 500000000) {
                exit("Sorry, your file is too large!"); 
            }

            if($typeImg != "jpg" && $typeImg != "png" && $typeImg != "jpeg" && $typeImg != "gif") {
                exit("file tệp không hợp lệ!");
            }

            if (!move_uploaded_file($fileImg["tmp_name"], $urlImg)) {
                exit("Xin lỗi, đã xảy ra lỗi khi tải tệp của bạn lên!"); 
            } 
            
        }
    }