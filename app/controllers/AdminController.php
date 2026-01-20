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

    public function competitions_show() {
        require_once('app/views/admin/competitions/show.php');
    }

    public function rules() {
        require_once('app/views/admin/rules/index.php');
    }

    public function rules_add() {
        require_once('app/views/admin/rules/add.php');
    }

    public function species() {
        require_once('app/views/admin/species/index.php');
    }

    public function species_add() {
        require_once('app/views/admin/species/add.php');
    }

    public function catches_pending() {
        require_once('app/views/admin/catches/pending.php');
    }

    public function catches_review() {
        require_once('app/views/admin/catches/review.php');
    }

    public function rankings_competition() {
        require_once('app/views/admin/rankings/competition.php');
    }

    public function fishers() {
        require_once('app/views/admin/fishers/index.php');
    }

    public function fishers_show() {
        require_once('app/views/admin/fishers/show.php');
    }

    public function moderation_comments() {
        require_once('app/views/admin/moderation/comments.php');
    }
}
