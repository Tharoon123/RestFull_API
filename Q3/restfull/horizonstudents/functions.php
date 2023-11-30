<?php

    //Using DELETE Method
    function deleteCustomer($getId){
        include ('dbconn.php');
        //var_dump($getId);
        //echo $idnum;
        
        if($getId==NULL){
            echo "Empty ID number. Please Re-Enter";

        }else{
            $idnum=$getId['idnum'];
            $sql="DELETE FROM horizonstudents WHERE idnum=$idnum";
            $result=$conn->exec($sql);
            if($result){
                echo "Row Effected Successfully.";
            }else{
                echo "Error in the Deletion...";
            }
        }
        
       

    }

    //Using PUT Method
    function updateCustomer($getData, $getDetails){
        include ('dbconn.php');
        //var_dump ($getData);
        //var_dump($getDetails);

        if($getData==NULL || $getDetails==NULL){
            echo "Error Occured.... Please Re-Update Details";
            
        }else{
            $idnum=$getDetails['idnum'];
            $fname=$getData['fname'];
            $lname=$getData['lname'];
            $city=$getData['city'];
            $district=$getData['district'];
            $prov=$getData['prov'];
            $email=$getData['email'];
            $tpnum=$getData['tpnum'];

            $sql="UPDATE horizonstudents SET 
            fname='$fname', 
            lname= '$lname',
            city='$city',
            district='$district',
            prov='$prov',
            email='$email',
            tpnum='$tpnum' WHERE idnum=$idnum";
            $result=$conn->exec($sql);

            if($result){
                echo "Row Effected Successfully.";
            }else{
                echo "Error in the Update...";
            }

        }

        
        
    }

    //Using POST Method
    function insertCustomer($getData){
        include ('dbconn.php');
        
        if ($getData==NULL){
            echo "Empty Column Please Re-Fill...";
        }else{
            $fname=$getData['fname'];
            $lname=$getData['lname'];
            $city=$getData['city'];
            $district=$getData['district'];
            $prov=$getData['prov'];
            $email=$getData['email'];
            $tpnum=$getData['tpnum'];

            $sql="INSERT INTO horizonstudents(fname,lname,city,district,prov,email,tpnum) VAlUES(
                '$fname', '$lname', '$city', '$district', '$prov', '$email', '$tpnum')";
            $conn->exec($sql);
            echo "Row Effected.";

        }
        
    }

    //Using GET Method
    function readAllData(){
        include ('dbconn.php');
        $sql= "SELECT * FROM horizonstudents";
        $query = $conn->prepare($sql);
        $query->execute();
        while($fetch = $query->fetch()){
            $users[]=array(
                'idnum'	=> $fetch['idnum'],
                'fname'	=> $fetch['fname'],
                'lname'	=> $fetch['lname'],
                'city'	=> $fetch['city'],
                'district'=> $fetch['district'],	
                'prov'	=> $fetch['prov'],
                'email'	=> $fetch['email'],
                'tpnum'	=> $fetch['tpnum']
            );
        }
        
        $jEncode=json_encode($users);
        return $jEncode;
    }

    //Using GET Method
    function readSIngleData($getidnum){
        include ('dbconn.php');
        $users =array();


        if($getidnum==null){
            echo "Please Enter the ID Number ...";
        }else{
            $idnum=$getidnum['idnum'];
            $sql= "SELECT * FROM horizonstudents WHERE idnum='$idnum'";

            $query = $conn->prepare($sql);
            $query->execute();
            while($fetch = $query->fetch()){
                $users[]=array(
                    'idnum'	=> $fetch['idnum'],
                    'fname'	=> $fetch['fname'],
                    'lname'	=> $fetch['lname'],
                    'city'	=> $fetch['city'],
                    'district'=> $fetch['district'],	
                    'prov'	=> $fetch['prov'],
                    'email'	=> $fetch['email'],
                    'tpnum'	=> $fetch['tpnum']
                );
    
            }

            if($users==null){
                echo "ID Number Not Found";
            }else{
                $jEncode=json_encode($users);
                return $jEncode; 
            }

              

        }



    }
    

?>