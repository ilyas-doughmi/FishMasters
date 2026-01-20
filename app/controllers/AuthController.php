<?php

class AuthController
{
    public function login()
    {
        require_once 'app/views/auth/login.php';
    }

    public function register()
    {
        require_once 'app/views/auth/register.php';
    }

    public function logout()
    {
        session_destroy();
        header('Location: /fishmasters/home/index');
    }

    public function authenticate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            require_once 'app/core/Database.php';
            require_once 'app/models/UserModel.php';

            session_start();

            $db = Database::getInstance();

            $userModel = new User();

            $result = $userModel->login(
                $_POST['email'],
                $_POST['password']
            );

            if (!$result) {
                header('Location: ../login?error=invalid');
                exit;
            }

            $_SESSION['user'] = $result;

            switch ($result->userRole) {
                case 'admin':
                    header('Location: ../admin/dashboard');
                    break;

                case 'fisher':
                    header('Location: ../fisher/dashboard');
                    break;

                case 'fan':
                    header('Location: ../Home');
                    break;

                default:
                    header('Location: ../login?error=role');
            }

            exit;
        }
    }


    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require_once 'app/core/Database.php';
            require_once 'app/models/UserModel.php';

            $db = Database::getInstance();

            $client = new user();

            $client->fullname = $_POST['full_name'];
            $client->email = $_POST['email'];
            $client->password = $_POST['password'];
            $client->photo = $_POST['photo'];
            $client->club = $_POST['club'];
            $client->region = $_POST['region'];
            $client->favouritPeche = $_POST['favouritPeche'];

            if ($client->register()) {
                header('Location: ../login');
            } else {
                header('Location: ../register?error=failed');
            }
        }
    }
}
