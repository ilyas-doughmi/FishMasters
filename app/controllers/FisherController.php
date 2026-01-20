<?php

class FisherController {
    
    public function index() {
        require_once('app/views/fisher/dashboard.php');
    }

    public function catches_add() {
        require_once('app/views/fisher/catches/add.php');
    }

    public function vcompetitions() {
        require_once('app/views/fisher/competitions/index.php');
    }

    public function profile() {
        require_once('app/views/fisher/profile.php');
    }

    public function classement() {
        require_once('app/views/fisher/classement/classement.php');
    }
}
