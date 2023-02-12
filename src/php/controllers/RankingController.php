<?php

require_once 'AppController.php';
require_once __DIR__ . '/../repository/UserRankingRepository.php';

class RankingController extends AppController
{
    private $userRankingRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRankingRepository = new UserRankingRepository();
    }

    public function rankingData()
    {
        print_r($this->userRankingRepository->getRanking());
    }
}
