<?php

class AuthController {
    public function login() {
        require_once 'app/views/auth/login.php';
    }

    public function register() {
        require_once 'app/views/auth/register.php';
    }

    public function logout() {
        session_destroy();
        header('Location: /fishmasters/home/index');
    }
}
