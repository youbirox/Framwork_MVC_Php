<?php

class Home extends Controller
{
    public function index($name = '')
    {
        $test='Waa Khdééém';
        Controller::renderTemplate('home/index.html',[
            'test' => $test
        ]);
        //$this->view('home/index');
    }

    public function create()
    {
        User::create([
            'username' => $username,
            'email' => $email
        ]);
    }
}