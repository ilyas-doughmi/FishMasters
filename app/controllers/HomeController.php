<?php

class HomeController {
    public function index() {
        require_once 'app/views/home/index.php';
    }

    public function competitions() {
        require_once 'app/views/visitor/competitions.php';
    }

    public function fishers() {
        require_once 'app/views/visitor/fishers.php';
    }

    public function rankings() {
        require_once 'app/views/visitor/rankings.php';
    }

    public function fisher_profile() {
        require_once 'app/views/visitor/fisher_profile.php';
    }

    public function competition_detail() {
        require_once 'app/views/visitor/competition_detail.php';
    }
}