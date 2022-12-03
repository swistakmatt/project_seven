<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';

class SecurityController extends AppController {
    public function login() {   
        $user = new User('admin@seven.com', 'admin', 'admin', 'admin');

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['Nie isnieje użytkownik o takim adresie email!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Podano niepoprawne hasło!']]);
        }

        return $this->render('login', ['messages' => ['Zalogowano pomyślnie!']]);
        // $url = "http://$_SERVER[HTTP_HOST]";
        // header("Location: {$url}/roulette");
    }
}