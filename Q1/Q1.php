<?php
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://covid-19-statistics.p.rapidapi.com/provinces?iso=CHN",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: covid-19-statistics.p.rapidapi.com",
		"X-RapidAPI-Key: 24ebf8320emsha4891e2023f7051p1f1dd2jsn448b3f39d444"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	//echo $response;

	$data=json_decode($response,true);
	$arr1=$data['data'];
	
}

?>
<html>
    <head>
        <title>
            Question 01
        </title>
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="Q1.css">
    </head>
    <body>
		
        <div class="container">
            <div class="row">
                <div class="col-md-3"> </div>
                <div class="col-md-6"> 
				<h2>Provinces in China </h2> 
				<hr>
					<table class="table table-striped">
						<thead class="table-dark">
						<tr>
							<th>
								Province
							</th>
							<th>
								Latitude
							</th>
							<th>
								Longitude
							</th>
						</tr>
						</thead>
						<tbody class="table-primary ">
						<?php 
							foreach($arr1 as $v){ 
								$name=$v['iso'];
								if($name=='CHN'){
									$prov=$v['province'];
									$lat=$v['lat'];
									$long=$v['long'];

									if($prov=="Unknown"){

									}else{

						?>
						<tr>
							<td>
								<?php echo $prov;?>
							</td>
							<td>
								<?php echo $lat;?>
							</td>
							<td>
								<?php echo $long;?>
							</td>
						</tr>
						<?php } } }?>
						</tbody>
					</table>
				</div>
                <div class="col-md-3"> </div>
            </div>
        </div>
    </body>
</html>


