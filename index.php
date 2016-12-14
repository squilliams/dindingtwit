<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Dinding Sosial</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/animasi.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
  <script src="js/app.js"></script>
</head>
<body class= "bg">
	<div class="row input-text" id="hideable"> 
		<form action="index.php">
			<input id="search" type="text" name="q">
			<input class="" type="hidden">
        </form>
	</div>
	<div>
<?php
	require "twitteroauth/autoload.php";

	use Abraham\TwitterOAuth\TwitterOAuth;

	define('CONSUMER_KEY', '2RKpxEXkTDYQKI6mWawoJshUB'); 
	define('CONSUMER_SECRET', 'CYM2cwx2fGFoFOs2PAljrwZsvNLZQtRasvxic22tH1L0pCio99'); 
	define('ACCESS_TOKEN', '35653131-N94pSSJG6ap7ZfLdzwKBvLcTXRs6o4F278tYtustG'); 
	define('ACCESS_TOKEN_SECRET', 'GkUGD7YL5kS194mLWmy4j0mcD7UVT9RptOnb0DHdpWHAc'); 

	function search($query)
	{
	  $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
	  return $connection->get('search/tweets', $query);
	}

	if (isset($_GET['q'])) {
    	$query = $_GET['q'];
	}
	$query1 = array(
	  "q" => $query,
	  "count"=>35
	);

	$query2 = array(
	  "q" => $query,
	  "count"=>36
	);

	$results = search($query1);
	echo "<div class = 'row'>";
	echo "<div class = 'col s6'>";
	foreach ($results->statuses as $result) {
	  echo "<div class='tweet marquee'><span class='warna-text'>" . $result->text . "</span></div>";
	}
	$results2 = search($query2);

	echo "</div><div class = 'col s6'>";
	foreach ($results2->statuses as $result2) {
		echo "<div class='tweet marquee2'><span class='warna-text'>" . $result2->text . "</span></div>";
	}
	echo "</div>";

?>
	</div>
  </body>
</html>
