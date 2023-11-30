<?php
    
    $dbhost="localhost";
    $dbname="restful";
    $dbuser="root";
    $pw="";
    $conn=new PDO("mysql:host=$dbhost; dbname=$dbname",$dbuser,$pw);
            
    if($conn){
        
    }else{
        echo "Error in Database Connection...!!";
    }
?>
