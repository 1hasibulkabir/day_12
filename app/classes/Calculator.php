<?php


namespace App\classes;
use App\classes\User;

class Calculator
{
    public $firstNumber;
    protected $secondNumber;
    private $operator;
    public $result;
    public $user;

    public function __construct($data)
    {
        //echo is_array($data) ? 'data is array' : 'data is single variable';
        $this->firstNumber=$data['first_number'];
        $this->secondNumber=$data['second_number'];
        $this->operator=$data['btn'];
    }

    public function index()
    {
       switch ($this->operator)
       {
           case '+':
               $this->result = $this->add();
               break;
           case '-':
               $this->result = $this->sub();
               break;
           case '*':
               $this->result =$this->multiply();
               break;
           case '/':
               $this->result =$this->divide();
               break;
           case '%':
               $this->result = $this->reminder();
               break;
       }
       return $this->result;
    }
    protected function add(){
        return $this->firstNumber+$this->secondNumber;
    }
    protected function sub(){
        return $this->firstNumber-$this->secondNumber;
    }
    protected function multiply(){
        return $this->firstNumber*$this->secondNumber;
    }
    protected function divide(){
        return $this->firstNumber/$this->secondNumber;
    }
    protected function reminder(){
        return $this->firstNumber/$this->secondNumber;
    }
    private function two(){
        echo 'in Three';
    }

}