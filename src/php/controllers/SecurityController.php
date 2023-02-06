<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../controllers/SessionController.php';

class SecurityController extends AppController
{

    private $userRepository;
    private $sessionController;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->sessionController = new SessionController();
    }

    public function login()
    {

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->userRepository->getUser($email);

        if (!$user) {
            return $this->render('login', ['messages' => ['Nie isnieje użytkownik o takim adresie email!']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['Nie isnieje użytkownik o takim adresie email!']]);
        }

        $verify = password_verify($password, $user->getPassword());

        if (!$verify) {
            return $this->render('login', ['messages' => ['Podano nieprawidłowe hasło!']]);
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/roulette");

        $this->sessionController->set('nickname', $user->getNickname());
        $this->sessionController->set('email', $user->getEmail());
        $this->sessionController->set('balance', $user->getBalance());
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

        if ($password === $confirmedPassword) {
            $user = new User($nickname, $email, password_hash($password, PASSWORD_BCRYPT));

            $this->userRepository->addUser($user);

            return $this->render('login', ['messages' => ['Zostałeś zarejestrowany!']]);
        }
    }

    public function logout()
    {
        $this->sessionController->clear();
        $this->sessionController->destroy();
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/roulette");
    }
}
