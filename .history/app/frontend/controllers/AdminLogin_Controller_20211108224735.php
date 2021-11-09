<?php

    class AdminLogin_Controller extends Base_Controller{

        function construct() {

            parent::__construct(){
                this->layout->setLayout('adminLogin');

            }

        }
    }