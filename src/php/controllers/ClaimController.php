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

        $email = $this->sessionController->get('email');
        $user = $this->userRepository->getUser($email);
        $timestamp = $this->userClaimPointsRepository->getTimestamp($user->getId());
        $currentTimestamp = date('Y-m-d H:i:s');
        if ($timestamp == null) {
            $this->userClaimPointsRepository->setTimestamp($user->getId(), $currentTimestamp);
            return true;
        }
        $timestamp = strtotime($timestamp);
        $currentTimestamp = strtotime($currentTimestamp);
        $difference = $currentTimestamp - $timestamp;
        if ($difference >= 3600) {
            $this->userClaimPointsRepository->setTimestamp($user->getId(), $currentTimestamp);
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
        $user = $this->userRepository->getUser($email);
        $balance = $this->userBalanceRepository->getBalance($user->getEmail());

        if (!$this->checkClaimAvailability()) {
            print('Nie możesz jeszcze odebrać punktów!');
        } else {
            $this->userBalanceRepository->setBalance($user->getEmail(), $balance + 1000);
            $this->sessionController->set('balance', $balance + 1000);
            print('Otrzymałeś 1000 punktów!');
        }
    }
}
