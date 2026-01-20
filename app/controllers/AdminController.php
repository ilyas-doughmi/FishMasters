<?php

class AdminController {
    
    public function index() {
        require_once('app/views/admin/dashboard.php');
    }

    // --- Competitions ---
    public function competitions() {
        require_once('app/views/admin/competitions/index.php');
    }

    public function competitions_add() {
        require_once('app/views/admin/competitions/add.php');
    }

    public function competitions_show() {
        require_once('app/views/admin/competitions/show.php');
    }

    // --- Scoring & Rules ---
    public function rules() {
        require_once('app/views/admin/rules/index.php');
    }

    public function rules_add() {
        require_once('app/views/admin/rules/add.php');
    }

    // --- Species ---
    public function species() {
        require_once('app/views/admin/species/index.php');
    }

    public function species_add() {
        require_once('app/views/admin/species/add.php');
    }

    // --- Catches ---
    public function catches_pending() {
        require_once('app/views/admin/catches/pending.php');
    }

    public function catches_review() {
        require_once('app/views/admin/catches/review.php');
    }

    // --- Rankings ---
    public function rankings_competition() {
        require_once('app/views/admin/rankings/competition.php');
    }

    public function rankings_championship() {
        require_once('app/views/admin/rankings/championship.php');
    }

    // --- Fishers ---
    public function fishers() {
        require_once('app/views/admin/fishers/index.php');
    }

    public function fishers_show() {
        require_once('app/views/admin/fishers/show.php');
    }

    // --- Moderation ---
    public function moderation_comments() {
        require_once('app/views/admin/moderation/comments.php');
    }

    // --- Stats & Reports ---
    public function stats() {
        require_once('app/views/admin/stats/global.php');
    }

    public function reports_generate() {
        require_once('app/views/admin/reports/generate.php');
    }

    // --- Emails & Notifications ---
    public function emails_send() {
        require_once('app/views/admin/emails/send.php');
    }

    public function notifications() {
        require_once('app/views/admin/notifications/index.php');
    }
}
