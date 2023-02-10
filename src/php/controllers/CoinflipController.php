<?php

require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../controllers/SessionController.php';
require_once __DIR__ . '/../repository/UserBalanceRepository.php';
require_once __DIR__ . '/../repository/CoinflipDrawRepository.php';

class CoinflipController extends AppController
{
    private $userRepository;
    private $userBalanceRepository;
    private $sessionController;
    private $coinflipDrawRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->userBalanceRepository = new UserBalanceRepository();
        $this->sessionController = new SessionController();
        $this->coinflipDrawRepository = new CoinflipDrawRepository();
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
        $draw = rand(0, 1) == 0 ? 'heads' : 'tails';
        if ($draw == $choice) {
            $this->userBalanceRepository->setBalance($user->getEmail(), $balance + $amount);
            $this->sessionController->set('balance', $balance + $amount);
            print('Wygrałeś ' . $amount * 2 . ' punktów!');
            $result = 1;
            $coinflipDraw = new CoinflipDraw($user->getId(), $result, $amount * 2, $choice);
            $this->coinflipDrawRepository->addDraw($coinflipDraw);
        } else {
            $this->userBalanceRepository->setBalance($user->getEmail(), $balance - $amount);
            $this->sessionController->set('balance', $balance - $amount);
            print('Przegrałeś ' . $amount . ' punktów!');
            $result = 0;
            $coinflipDraw = new CoinflipDraw($user->getId(), $result, -$amount, $choice);
            $this->coinflipDrawRepository->addDraw($coinflipDraw);
        }
    }
}
