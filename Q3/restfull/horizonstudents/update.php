<?php
    require 'dbconn.php';
    include('functions.php');

    $rqMethod=$_SERVER["REQUEST_METHOD"];

    if($rqMethod=="PUT"){
        
        $indata=json_decode(file_get_contents("php://input"),true);

        if(empty($indata)){ 
            $updateCust= updateCustomer($_POST,$_GET);
        }else{
            $updateCust= updateCustomer($indata,$_GET);   
        }

        echo $updateCust;
        
    }else{
        echo "ERROR: 405 => Method Not Found";
    }

?>