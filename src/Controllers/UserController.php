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

        $result = $viewmodel->insertRecord("user", $userFields);

        if ($result) {
            echo '<script type="text/javascript">';
            echo 'window.location.href = "/login";';
            echo '</script>';
            exit();
        }
    }

    public function loginAction()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = $_POST['password'];

            $viewmodel = new UserModel();

            $user = $viewmodel->vrfyemail($email);


            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['firstname'] = $user['firstname'];
                    $_SESSION['lastname'] = $user['lastname'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['address'] = $user['address'];
                    $_SESSION['role_id'] = $user['role_id'];

                    if ($_SESSION['role_id'] == 2) {
                        echo '<script type="text/javascript">';
                        echo 'window.location.href = "/dashboard";';
                        echo '</script>';
                        exit();

                    } else {
                        echo '<script type="text/javascript">';
                        echo 'window.location.href = "/";';
                        echo '</script>';
                        exit();
                    }
                } else {
                    $_SESSION['passwordincorect'] = "Incorrect password";
                    header("Location: /login");

                }
            } else {
                $_SESSION['emailenco'] = "Email not found";
                header("Location: /login");
            }

        } else {
            echo "Please provide an email and password";
        }
    }

    public function logout()
    {
        session_destroy();
        echo '<script type="text/javascript">';
        echo 'window.location.href = "/login";';
        echo '</script>';
    }
}