<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../controllers/SessionController.php';
require_once __DIR__ . '/../repository/UserBalanceRepository.php';
require_once __DIR__ . '/../repository/UserClaimPointsRepository.php';

class SecurityController extends AppController
{

    private $userRepository;
    private $sessionController;
    private $userBalanceRepository;
    private $userClaimPointsRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->sessionController = new SessionController();
        $this->userBalanceRepository = new UserBalanceRepository();
        $this->userClaimPointsRepository = new UserClaimPointsRepository();
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
        $this->sessionController->set('role', $user->getRole());
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
            $user = new User($nickname, $email, password_hash($password, PASSWORD_BCRYPT), 1000);

            $this->userRepository->addUser($user);

            $user_id = $this->userRepository->getUser($email)->getId();
            $userClaim = new UserClaimPoints($user_id);
            $this->userClaimPointsRepository->addClaimPoints($userClaim);
            $this->userBalanceRepository->setBalance($email, 1000);

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
