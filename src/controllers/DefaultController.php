<?php   

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index() {
        $this->render('login');
    }

    public function login() {
        $this->render('login');
    }

    public function register() {
        $this->render('register');
    }

    public function roulette() {
        $this->render('roulette');
    }

    public function recover() {
        $this->render('recover');
    }
}

?>