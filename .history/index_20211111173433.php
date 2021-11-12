<?php

    session_start();
    
    define('BASE_PATH',__DIR__);
    define('IMG_PATH','public/images/');
    define('BASE_URL','http://localhost/tp&shoppet');
    define('APP_PATH',BASE_PATH.'/app/frontend');
 
    require BASE_PATH.'/core/Common.php';

    load_app();
     
    