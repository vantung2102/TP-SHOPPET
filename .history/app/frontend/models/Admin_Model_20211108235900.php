<?php

    class Admin_Model extends Base_Model{

        protected $table = "admin_account";

        function checkAdminExist($data = []){
            $query = "select id from {$this->table} where email = :email and password = :password";
        }
    }