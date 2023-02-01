<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';

class SecurityController extends AppController
{

    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function login()
    {
        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $user = $this->userRepository->getUser($email);

        if (!$user) {
            return $this->render('login', ['messages' => ['Nie isnieje użytkownik o takim adresie email!']]);
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['Nie isnieje użytkownik o takim adresie email!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Podano nieprawidłowe hasło!']]);
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/roulette");
    }

    public function register()
    {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        $nickname = $_POST['nickname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirm-password'];


        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Hasła nie są identyczne!']]);
        }

        $user = new User($nickname, $email, md5($password));

        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['Zostałeś zarejestrowany!']]);
    }
}
