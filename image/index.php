<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IMAGE</title>
	<link rel="stylesheet" type="text/css" href="inp.php">
</head>
<body>
	<h1>IMAG<span class="h">E</span></h1>
	<div class="bg-image"></div>
	<form class="form" method="POST">
		<div class="input1">
			<input id="trans" type="text" name="q" autocomplete="off" required>
			<label for="q" class="label-name">
				<span class="content-name">want to look at the great barrier reef? or something else....</span>
			</label>
		</div>
		<input type="submit" name="submit" id="submit" value="SEARCH">
	</form>
</body>
</html>
<?php 
	session_start();
?>
<?php 
		if(isset($_POST['submit'])) {
			$q = $_POST['q'];
			
			if(!isset($q) || $q == false || empty($q)) {
				$p = "coral reef";
				// echo $p;
			}
			else {
				$p = $q;
				// echo $p;
			}
		$p = strtolower($p);
		$p = trim($p);
		$_SESSION['keyword'] = $p; 
		header('Location: show.php');
		return ;
		}

	// 	$keyword = $p;

	// $url = "https://www.bing.com/images/search?sp=-1&pq=".str_replace(" ","+",$keyword)."&sc=8-8&cvid=F770D815EA5A4BABB35A7EC125B777D9&q=".str_replace(" ","+",$keyword)."&qft=+filterui:imagesize-medium+filterui:photo-photo&form=IRFLTR&first=1&scenario=ImageBasicHover";
	
	// $output = get($url);
	// preg_match_all('#<a class="thumb" target="_blank" href="(.*?)"#', $output, $url_matches);


	// for($i = 0; $i < count($url_matches[1]); $i++) {
	// 	preg_match_all("#.*?/#", $url_matches[1][$i],$matches);
	// 	$last_part = end($matches[0]);
	// 	preg_match_all("#$last_part(.*?.jpg)#", $url_matches[1][$i], $match);
	// 	$image_name = str_replace("+", "-", $match[1]);
	// 	$image_url = $url_matches[1][$i];
	// 	$image_data = get($image_url);
	// 	echo "<img src = '".$image_url."' style='height=200px; width = 200px;' >";
	// 	}
	// }
	// function get( $url ) {
	// 	$curl = curl_init();
	// 	curl_setopt($curl, CURLOPT_URL, $url);
	// 	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	// 	$output = curl_exec($curl);
	// 	curl_close($curl);
	// 	return $output;
	// }
?>	