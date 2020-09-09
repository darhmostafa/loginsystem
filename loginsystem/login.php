<?php

session_start();

$username = 'mostafa';
$password = '12345';


if($username == $_POST['username'] && $password == $_POST['password'])
{
    $_SESSION['userdata'] = $_POST['username'];
    header('LOCATION:home.php');
} else 
{
    header('LOCATION:index.html');
}































/*
$number = [10,11,5,34,93,7];
    $res = $number[0];
    
    for($i=0;$i<count($number);$i++)
    {
        if($res < $number[$i])
        {
            $res = $number[$i];
        }   
        
    }
    echo $res;
    
    echo "<br>";
    echo "<br>";
    echo "<br>";


    function larg($number)
    {
        echo max($number);
    }
    
    larg($number);

    function small($number)
    {
        echo min($number);
    }
    echo "<br>";
    
    small($number);
    */
    