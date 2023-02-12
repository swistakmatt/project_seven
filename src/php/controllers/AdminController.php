<?php

require_once 'AppController.php';
require_once __DIR__ . '/../repository/AdminDataRepository.php';

class AdminController extends AppController
{
    private $adminDataRepository;

    public function __construct()
    {
        parent::__construct();
        $this->adminDataRepository = new AdminDataRepository();
    }

    public function adminData()
    {
        //TODO: zabezpieczyć to jakoś
        print_r($this->adminDataRepository->getAdminData());
    }
}
