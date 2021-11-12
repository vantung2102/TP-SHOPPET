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
                echo `<script>
                <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
                <div class="toast" style="position: absolute; top: 0; right: 0;">
                  <div class="toast-header">
                    <img src="..." class="rounded mr-2" alt="...">
                    <strong class="mr-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="toast-body">
                    Hello, world! This is a toast message.
                  </div>
                </div>
              </div>
                
                    </script>`;
            }

            if (!move_uploaded_file($fileImg["tmp_name"], $urlImg)) {
                echo `<script>
                <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
                <div class="toast" style="position: absolute; top: 0; right: 0;">
                  <div class="toast-header">
                    <img src="..." class="rounded mr-2" alt="...">
                    <strong class="mr-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="toast-body">
                    Hello, world! This is a toast message.
                  </div>
                </div>
              </div>
                
                    </script>`;
            } 
            
        }
    }