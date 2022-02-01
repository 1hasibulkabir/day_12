<?php


namespace App\classes;


class User
{
    public $city = 'Dhaka';
    protected $country = 'Bangladesh';
    private $area = 'KarwanBazar';

    public function login(){
        echo 'in login';
    }
    protected function logout(){
        echo 'in logout';
    }
    private function profile(){
        echo 'in profile';
    }
}