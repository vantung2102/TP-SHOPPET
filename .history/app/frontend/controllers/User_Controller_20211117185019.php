<?php

    class User_Controller extends Base_Controller{

        function __construct(){
            parent::__construct();
        }

        function test(){

            
		    return to_api_json('$status', '$message', '$data');

        }
    }