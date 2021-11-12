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

        function checkImg($url_img) {

            $type_img = strtolower(pathinfo($url_img,PATHINFO_EXTENSION));
            $success = 1;

            // kiểm tra có phải file IMG
            if(isset($_POST['submit'])){

                $check = getimagesize($_FILES["avatar"]["tmp_name"]);
                if($check === false) {
                    echo "Không phải là hình ảnh.";
                    $success = 0;
                } 
            }

            // kiểm tra tồn tại file
            // if (file_exists($url_img)) {
            //     echo "Sorry, file already exists.";
            //     $success = 0;
            // }

            // kiểm tra kích cở
            if ($_FILES["avatar"]["size"] > 500000000) {
                echo "Sorry, your file is too large.";
                $success = 0;
            }

            // Cho phép các định dạng tệp nhất định
            if($type_img != "jpg" && $type_img != "png" && $type_img != "jpeg" && $type_img != "gif") {
                echo "file tệp không hợp lệ.";
                $success = 0;
            }

            if ($success == 0) {
                echo "Xin lỗi file của bạn không thể cập nhật.";
            } 
            else {
                if (!move_uploaded_file($_FILES["avatar"]["tmp_name"], $url_img)) {
                    echo "Xin lỗi, đã xảy ra lỗi khi tải tệp của bạn lên.";
                } 
            }
        }
    }