<?php
namespace App\Controllers;

use App\Models\UserModel;

class UserController extends Controller
{

    public function signup()
    {
        $new = new UserModel();
        $this->render('signup');
    }
    public function login()
    {
        $new = new UserModel();
        $this->render('login');
    }
    public function signupAction()
    {
        $viewmodel = new UserModel();

        // Get form data
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $Firstname = $_POST['firstname'];
        $Lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        // Hash the password securely
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user record into the database
        $userFields = [
            'firstname' => $Firstname,
            'lastname' => $Lastname,
            'address' => $address,
            'email' => $email,
            'password' => $hashedPassword,
        ];

        $viewmodel->insertRecord("user", $userFields);

        echo 'User inserted successfully';

    }
}