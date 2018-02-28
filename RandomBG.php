<?php
	$bg = array('differentiate_1.jpeg', 'desktop-background-3061483_960_720.jpg', 'milky-way-2695569_960_720.jpg', 'maxresdefault.jpg');// images to choose from
	$i = rand(0, count($bg)-1);// generate random number size of the array
	$selectedBg = $bg[$i]; // set variable equal to which random filename was chosen
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>RandomBG</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css">
		body{
			background-image: url('IMG/<?php echo $selectedBg; ?>');
			background-repeat: no-repeat;
			background-size: 100%;
			text-align: center;
			color: #fff;
	    }
	</style>
</head>
<body>
	<h1>Amazing Quotes</h1>
		

  	<?php
  		$Quotes = [
  			"Steve Jobs" => "My favorite things in life don’t cost any money. It’s really clear that the most precious resource we all have is time.",
  			"Neale Donald Walsch" => "Life begins at the end of your comfort zone",
  			"Ram Dass" => "The quieter you become, the more you can hear",
  			"Mark Zuckerberg" => "Unless you are breaking stuff, you are not moving fast enough"
  		];
	  	$key = array_rand($Quotes);
		$value = $Quotes[$key];
		echo "<h2><i>$value</i></h2>";
  	?>
  	<br><br><br>
  	<h1>By</h1>
  	<br><br><br>
  	<h1>
  	<?php
		echo "$key";
	?>
	</h1>
</body>
</html>



