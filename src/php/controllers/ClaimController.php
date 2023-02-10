<?php

require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../controllers/SessionController.php';
require_once __DIR__ . '/../repository/UserBalanceRepository.php';

class ClaimController extends AppController
{
    private $userRepository;
    private $userBalanceRepository;
    private $sessionController;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->userBalanceRepository = new UserBalanceRepository();
        $this->sessionController = new SessionController();
    }

    public function submitBet()
    {
        $email = $this->sessionController->get('email');
        if ($email == null) {
            return $this->render('coinflip', ['messages' => ['Musisz się zalogować!']]);
        }
        $user = $this->userRepository->getUser($email);
        $balance = $this->userBalanceRepository->getBalance($user->getEmail());
        $amount = $_GET['bet'];
        $choice = $_GET['side'];
        if ($balance < $amount) {
            return $this->render('coinflip', ['messages' => ['Nie posiadasz tylu punktów na swoim koncie!']]);
        }
        $result = rand(0, 1) == 0 ? 'heads' : 'tails';
        if ($result == $choice) {
            $this->userBalanceRepository->setBalance($user->getEmail(), $balance + $amount);
            $this->sessionController->set('balance', $balance + $amount);
            print('Wygrałeś ' . $amount * 2 . ' punktów!');
        } else {
            $this->userBalanceRepository->setBalance($user->getEmail(), $balance - $amount);
            $this->sessionController->set('balance', $balance - $amount);
            print('Przegrałeś ' . $amount . ' punktów!');
        }
    }
}
