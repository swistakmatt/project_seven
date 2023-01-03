<?php

require_once 'AppController.php';

class DefaultController extends AppController
{

    public function index()
    {
        $this->render('login');
    }

    public function login()
    {
        $this->render('login');
    }

    public function register()
    {
        $this->render('register');
    }

    public function roulette()
    {
        $this->render('roulette');
    }

    public function coinflip()
    {
        $this->render('coinflip');
    }

    public function recovery()
    {
        $this->render('recovery');
    }

    public function ranking()
    {
        $this->render('ranking');
    }
}
