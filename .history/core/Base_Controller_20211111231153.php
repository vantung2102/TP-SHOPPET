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
            $success = 1;

            if(isset($_POST['submit'])){

                $check = getimagesize($fileImg["tmp_name"]);
                if($check === false) {
                    echo "<script>alert(Không phải là hình ảnh.)</script>";
                    $success = 0;
                } 
            }

            // kiểm tra tồn tại file
            // if (file_exists($urlImg)) {
            //     echo "Sorry, file already exists.";
            //     $success = 0;
            // }

            if ($fileImg["size"] > 500000000) {
                echo "Sorry, your file is too large.";
                $success = 0;
            }

            if($typeImg != "jpg" && $typeImg != "png" && $typeImg != "jpeg" && $typeImg != "gif") {
                echo "<script>alert('file tệp không hợp lệ.!')</script>";
                echo "file tệp không hợp lệ.";
                $success = 0;
            }

            if ($success == 0) {
                echo "Xin lỗi file của bạn không thể cập nhật.";
            } 
            else {
                if (!move_uploaded_file($fileImg["tmp_name"], $urlImg)) {
                    echo "Xin lỗi, đã xảy ra lỗi khi tải tệp của bạn lên.";
                } 
            }
        }
    }