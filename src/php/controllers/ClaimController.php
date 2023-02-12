<?php

require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../controllers/SessionController.php';
require_once __DIR__ . '/../repository/UserBalanceRepository.php';
require_once __DIR__ . '/../repository/UserClaimPointsRepository.php';

class ClaimController extends AppController
{
    private $userRepository;
    private $userBalanceRepository;
    private $sessionController;
    private $userClaimPointsRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->userBalanceRepository = new UserBalanceRepository();
        $this->sessionController = new SessionController();
        $this->userClaimPointsRepository = new UserClaimPointsRepository();
    }

    public function checkClaimAvailability()
    {

        date_default_timezone_set('Europe/Warsaw');

        $user_id = $this->userRepository->getUser($this->sessionController->get('email'))->getId();
        $timestamp = strtotime($this->userClaimPointsRepository->getClaimPoints($user_id)->getTimestamp());
        $currentTimestamp = strtotime(date('Y-m-d H:i:s'));

        $difference = $currentTimestamp - $timestamp;
        if ($difference >= 3600) {
            $this->userClaimPointsRepository->setClaimPoints($user_id);
            return true;
        }
        return false;
    }

    public function claimPoints()
    {
        $email = $this->sessionController->get('email');
        if ($email == null) {
            print('Musisz się zalogować!');
            return;
        }

        if ($this->checkClaimAvailability()) {
            $balance = $this->userBalanceRepository->getBalance($email);
            $this->userBalanceRepository->setBalance($email, $balance + 1000);
            $this->sessionController->set('balance', $balance + 1000);
            print('Otrzymałeś 1000 punktów!');
        } else {
            print('Nie możesz jeszcze odebrać punktów!');
        }
    }
}
