<?php
    require 'dbconn.php';
    include('functions.php');

    $rqMethod=$_SERVER["REQUEST_METHOD"];
    
    if($rqMethod=="GET"){

        if(isset($_GET['idnum'])){

            $singleData= readSIngleData($_GET);
            echo $singleData;

        }else{
            $readData= readAllData();
            echo $readData;

        }

    }else{
        echo "ERROR: 405 Method Not Found";
    }

?>