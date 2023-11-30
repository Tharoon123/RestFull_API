<?php
    $code=$_GET['q'];
    //echo $code,"<hr>";
    $url="https://restcountries.com/v3.1/alpha/$code";

    $data=file_get_contents($url);
    $cont=json_decode($data,true);

    //var_dump ($cont);
    $name=$cont[0]['name']['official'];
    $flag=$cont[0]['flags']['png'];
    $capital=join(",",$cont[0]['capital']);
    $region=$cont[0]['region'];
    $subregion=$cont[0]['subregion'];

    $currArr=array();
    $currArr=$cont[0]['currencies'];

    $cCode=$cont[0]['cca2'];
    $pop=number_format($cont[0]['population']);
    $area=number_format($cont[0]['area']);

    $bordArr=array();
    
    $map=$cont[0]['maps']['googleMaps'];
    
    //My Personal API----->>>>>  AIzaSyCUc1lEijuIPXwA89f3FdINyApePFZQDyA
    
?>
<html>
    <head>
    <link rel="stylesheet" href="Q2.css">
        
    </head>
    <body>
        <div>
            <h2>
                <center>
                    <?php echo $name;?>
                </center>
            </h2>
            <hr>
        </div>

        <table border="3" class="table table-stripped table-warning">
            
            <tr>
                <td colspan="2">
                    <center>
                        <img src="<?php echo $flag;?>">
                    </center>

                </td>
            </tr>
            <tr>
                <td>Country Name </td>
                <td><?php echo $name;?></td>
            </tr>
            <tr>
                <td>Capital</td>
                <td><?php 
                    if($capital==""){
                    echo "No Capital";
                    }else{
                        echo $capital;
                    }
                    ?>
                    
                </td>
            </tr>
            <tr>
                <td>Country Code</td>
                <td><?php echo $cCode;?></td>
            </tr>
            <tr>
                <td>currency</td>
                <td>
                    <?php 
                        foreach($currArr as $a=>$b){
                            
                            $CurrName=$cont[0]['currencies'][$a]['name'];
                            echo $CurrName;
                        }
                    ?></td>
            </tr>
            <tr>
                <td>Region</td>
                <td><?php echo $region;?></td>
            </tr>
            <tr>
                <td>Sub-Region</td>
                <td><?php echo $subregion;?></td>
            </tr>
            <tr>
                <td>Population</td>
                <td><?php echo $pop;?></td>
            </tr>
            <tr>
                <td>Area</td>
                <td><?php echo $area;?></td>
            </tr>
            <tr>
                <td>Borders</td>
                <td>
                    <?php
                        $bordArr=$cont[0];
                        //var_dump($bordArr);
                        foreach($bordArr as $a=>$b){
                            //echo $a, " , ";
                            if($a=="borders"){
                                $bord=join(",",$cont[0]['borders']);
                                echo $bord;
                                break;
                            }
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Google Map</td>
                <td>
                    <a href="<?php echo $map;?>"><?php echo $map;?></a>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                        <iframe
                        width="100%"
                        height="200"
                        frameborder="1" style="border:1"
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCUc1lEijuIPXwA89f3FdINyApePFZQDyA&q=<?php echo $name; ?>&zoom=12" allowfullscreen>
                        </iframe>
                        </div>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUc1lEijuIPXwA89f3FdINyApePFZQDyA&callback=myMap">
                        </script>
                </td>
            </tr>
        </table>
    </body>
</html>
