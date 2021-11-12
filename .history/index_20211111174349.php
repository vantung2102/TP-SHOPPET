<?php

    session_start();
    
    define('BASE_PATH',__DIR__);
    define('BASE_IMG','public/images/');
    define('BASE_URL','http://localhost/tp&shoppet');
    define('APP_PATH',BASE_PATH.'/app/frontend');
 
    require BASE_PATH.'/core/Common.php';

    load_app();
     
    