<?php
namespace App\Controllers;

class UserAdminController
{
    public function index()
    {
        require __DIR__ . '/../views/administrator_control_pages/users/index.php';
    }

}