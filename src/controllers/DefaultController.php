<?php   

require_once 'src/controllers/AppController.php';

class DefaultController extends AppController {

    public function login() {
        $this->render('login');
    }

    public function register() {
        $this->render('register');
    }

    public function roulette() {
        $this->render('roulette');
    }
}

?>