<?php
    $url="https://restcountries.com/v3.1/all";
    $data=file_get_contents($url);
    $cont=json_decode($data,true);

    $cname=array();

    foreach($cont as $v){
        
        $code=$v['cca2'];
        $cname[$code]=$v['name']['common'];
    }

?>
<html>
    <head>
        <title>
            Question 02
        </title>
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
        <script>
            function showCont(str){
                if (str==""){
                    document.getElementById('txt').innerHTML="Please Select a Country";
                    return;
                }else{
                    var xmlhttp=new XMLHttpRequest();
                    xmlhttp.onreadystatechange=function(){
                        if(this.readyState== 4 && this.status==200){
                            document.getElementById('txt').innerHTML=this.responseText;
                        }
                    }
                    xmlhttp.open("GET","Q2DisplayCont.php?q="+str,true);
                    xmlhttp.send();
                }
            };
        </script>
        <link rel="stylesheet" href="Q2.css">
    </head>
    <body class="bg-success">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>
                        Select a Country
                    </h2>
                    <select name="code" onChange="showCont(this.value)">
                        <option value="">
                            Select a country
                        </option>
                        <?php 
                            foreach($cname as $a=>$b){

                        ?>    
                            <option value="<?php echo $a;?>">
                                <?php echo $b;?>
                            </option>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-8" id='txt'> 
                    <h2>
                        Details
                    </h2>
                    <hr>
                </div>
            </div>
        </div>
    </body>
</html>