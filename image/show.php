<?php
	session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="showcss.php">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div class="head">
		<h1><a href="index.php">IMAG<span class="h">E</span></a></h1>
		<div class="layout">
			<a  class="grid" href="#">GRID</a>
			<a class="list" href="#">LIST</a>
		</div>
	</div>

	<div class="image_header">
		<h1><?php if(isset($_SESSION['keyword'])) { echo $_SESSION['keyword'];} ?></h1>
	</div>

	<div class="results-grid">
		<!-- <p class="grid"><img src="./images/ganapati/1.jpg"></p>
		<p class="grid"><img src="./images/ganapati/2.jpg"></p>
		<p class="grid"><img src="./images/ganapati/3.jpg"></p>
		<p class="grid"><img src="./images/ganapati/4.jpg"></p>
		<p class="grid"><img src="./images/ganapati/5.jpg"></p> -->
<?php
	if(isset($_SESSION['keyword'])) {
	$keyword = $_SESSION['keyword'];

	// $keyword = $p;

	$url = "https://www.bing.com/images/search?sp=-1&pq=".str_replace(" ","+",$keyword)."&sc=8-8&cvid=F770D815EA5A4BABB35A7EC125B777D9&q=".str_replace(" ","+",$keyword)."&qft=+filterui:imagesize-medium+filterui:photo-photo&form=IRFLTR&first=1&scenario=ImageBasicHover";
	
	$output = get($url);
	preg_match_all('#<a class="thumb" target="_blank" href="(.*?)"#', $output, $url_matches);


	for($i = 0; $i < count($url_matches[1]); $i++) {
		preg_match_all("#.*?/#", $url_matches[1][$i],$matches);
		$last_part = end($matches[0]);
		preg_match_all("#$last_part(.*?.jpg)#", $url_matches[1][$i], $match);
		$image_name = str_replace("+", "-", $match[1]);
		$image_url = $url_matches[1][$i];
		$image_data = get($image_url);
		echo "<p class='grid'><img src = '".$image_url."'></p>";
		}
	}
	function get( $url ) {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec($curl);
		curl_close($curl);
		return $output;
	}
?> 

	</div>
	<div class="result-list">
		<!-- <p class="list"><img src="./images/ganapati/1.jpg"></p>
		<p class="list"><img src="./images/ganapati/2.jpg"></p>
		<p class="list"><img src="./images/ganapati/3.jpg"></p>
		<p class="list"><img src="./images/ganapati/4.jpg"></p>
		<p class="list"><img src="./images/ganapati/5.jpg"></p> -->
<?php
	if(isset($_SESSION['keyword'])) {
	$keyword = $_SESSION['keyword'];

	// $keyword = $p;

	$url = "https://www.bing.com/images/search?sp=-1&pq=".str_replace(" ","+",$keyword)."&sc=8-8&cvid=F770D815EA5A4BABB35A7EC125B777D9&q=".str_replace(" ","+",$keyword)."&qft=+filterui:imagesize-medium+filterui:photo-photo&form=IRFLTR&first=1&scenario=ImageBasicHover";
	
	$output = get($url);
	preg_match_all('#<a class="thumb" target="_blank" href="(.*?)"#', $output, $url_matches);


	for($i = 0; $i < count($url_matches[1]); $i++) {
		preg_match_all("#.*?/#", $url_matches[1][$i],$matches);
		$last_part = end($matches[0]);
		preg_match_all("#$last_part(.*?.jpg)#", $url_matches[1][$i], $match);
		$image_name = str_replace("+", "-", $match[1]);
		$image_url = $url_matches[1][$i];
		$image_data = get($image_url);
		echo "<div class='list'><img src = '".$image_url."'></div>";
		
		}

			}
	// function get( $url ) {
	// 	$curl = curl_init();
	// 	curl_setopt($curl, CURLOPT_URL, $url);
	// 	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	// 	$output = curl_exec($curl);
	// 	curl_close($curl);
	// 	return $output;
	// }
?>
	</div>


	<div class="footer">
		<p>copyright &copy; 2002 | IMAGE.INC | All rights reserved</p>
	</div>
</body>
</html>
<?php session_destroy(); ?>
