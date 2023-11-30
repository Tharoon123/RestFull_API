<?php
    require 'dbconn.php';
    include('functions.php');

    $rqMethod=$_SERVER["REQUEST_METHOD"];

    if($rqMethod=="DELETE"){
        
        $deleteCust= deleteCustomer($_GET);
        echo $deleteCust;
        
    }else{
        echo "ERROR: 405 => Method Not Found";
    }

?>