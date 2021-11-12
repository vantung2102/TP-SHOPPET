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
                    echo "<script>alert('Không phải là hình ảnh!')</script>";
                } 
            }

            
            if (file_exists($urlImg)) {
                echo "<script>alert(Xin lỗi, Tập tin đã tồn tại!')</script>";
            }

            if ($fileImg["size"] > 500000000) {
                echo "<script>alert('Xin lỗi, tệp quá lớn!')</script>";
            }

            if($typeImg != "jpg" && $typeImg != "png" && $typeImg != "jpeg" && $typeImg != "gif") {
                echo `<script>alert('File tệp không hợp lệ!')</script>`;
                redirect('admin/index');
            }

            if (!move_uploaded_file($fileImg["tmp_name"], $urlImg)) {
                echo "<script>alert('Xin lỗi, đã xảy ra lỗi khi tải tệp của bạn lên!')</script>";
                redirect('admin/index');
            } 
            
        }
    }