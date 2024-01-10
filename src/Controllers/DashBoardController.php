<?php
namespace App\Controllers;

use App\Models\UserModel;

class DashboardController extends Controller
{
    public function index()
    {
        $user = (new UserModel())->showUser();
        var_dump($user);
        $this->render('dashboard', ["user" => $user]);
    }

}
