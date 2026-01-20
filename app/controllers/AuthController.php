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
            require_once 'app/models/AdminModel.php';


            $db = Database::getInstance();

            $userModel = new Admin($db);
            
            $email = trim($_POST['email']);
            $password = $_POST['password'];
                
            $result = $userModel->login(
                $email,
                $password
            );

            if (!is_object($result)) {
                $error = $result ? $result : 'verify_credentials';
                header('Location: /fishmasters/auth/login?message=' . urlencode($error));
                exit;
            }

            $_SESSION['user'] = [
                'id' => $result->userid,
                'name' => $result->userfullname,
                'email' => $result->useremail,
                'role' => $result->userrole
            ];

            switch ($result->userrole) {
                case 'admin':
                    header('Location: /fishmasters/admin/index');
                    break;

                case 'fisher':
                    header('Location: /fishmasters/fisher/index');
                    break;

                case 'fan':
                    header('Location: /fishmasters/home/index');
                    break;

                default:
                    header('Location: /fishmasters/auth/login?error=role');
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
                header('Location: /fishmasters/auth/login');
            } else {
                header('Location: /fishmasters/auth/register?error=failed');
            }
        }
    }
}
