<?php

namespace App\Controllers;

use App\Controller;
use App\Model\UserModel;

class DashBoardController extends Controller
{
    public function index()
    {
        $user = (new UserModel)->showUser();
        var_dump($user);
        $this->render('dashboard', ["user" => $user]);
    }

}
