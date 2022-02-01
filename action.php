<?php
require_once 'vendor/autoload.php';
use App\classes\Calculator;

if (isset($_POST['btn']))
{
    $calculator = new Calculator($_POST);
    $calculator->index();
    $result = $calculator->index();
    include 'index.php';
}
else
{
    header('Location: index.php');
}


