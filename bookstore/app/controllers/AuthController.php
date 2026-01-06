<?php
class AuthController extends Controller {

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = $this->model('User')->login($_POST['email']);

            if ($user && password_verify($_POST['password'], $user['password'])) {
                $_SESSION['user'] = $user;
                header("Location: /bookstore_mvc/public/dashboard");
            }
        }
        $this->view('auth/login');
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model('User')->register(
                $_POST['name'],
                $_POST['email'],
                $_POST['password']
            );
            header("Location: /bookstore_mvc/public/auth/login");
        }
        $this->view('auth/register');
    }

    public function logout() {
        session_destroy();
        header("Location: /bookstore_mvc/public/auth/login");
    }
}
