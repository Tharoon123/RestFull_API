<?php
    require 'dbconn.php';
    include('functions.php');

    $rqMethod=$_SERVER["REQUEST_METHOD"];

    if($rqMethod=="POST"){
        
        $indata=json_decode(file_get_contents("php://input"),true);

        if(empty($indata)){ 
            $insertCust= insertCustomer($_POST);
        }else{
            $insertCust= insertCustomer($indata);   
        }
        echo $insertCust;
        
    }else{
        echo "ERROR: 405 => Method Not Found";
    }

?>