<?php

class user
{
    public function __construct() {}
    public function login()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = strtoupper($_POST['username']);
            $password = strtolower($_POST['password']);
        }
        include_once "./views/login.php";
    }
}
