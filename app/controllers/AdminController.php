<?php

class AdminController {
    
    public function index() {
        require_once('app/views/admin/dashboard.php');
    }

    public function competitions() {
        require_once('app/views/admin/competitions/index.php');
    }

    public function competitions_add() {
        require_once('app/views/admin/competitions/add.php');
    }
}
