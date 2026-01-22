<?php
session_start();

function requireRole($role) {
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== $role) {
        header('Location: /fishmasters/auth/login?message=unauthorized');
        exit;
    }
}

function requireRoles(array $roles) {
    if (!isset($_SESSION['user']) || !in_array($_SESSION['user']['role'], $roles)) {
        header('Location: /fishmasters/auth/login?message=unauthorized');
        exit;
    }
}
