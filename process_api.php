<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exchange Money</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style-main-3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Comfortaa" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Athiti|Itim" rel="stylesheet">

</head>
<body>



	<div class="container">
		
		<div class="cover">

			<h1 class="text-center"> - Exchange Money - </h1>
			<p class="text-center">We Can Exchange Your Money Now!</p>

		</div> <!--  end cover  -->


		


		<div class="cover-php text-center">
		<?php

			$money = $_POST["money"];
			$coin = $_POST["coin"];

			$severname = "localhost";
			$username = "root";
			$password = "";

			switch ($coin) {
				case 1: 
					$coin_m=33;
    				$sum=$money*$coin_m;
    				echo "1 บาทไทย (THB) = ".$coin_m." เกาหลีวอน (KRW)"."<br><br>";
    				echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." เกาหลีวอน (KRW)";
    				break; 
				case 2: 
					$coin_m=0.02;
				    $sum=$money*$coin_m;
				    echo "1 บาทไทย (THB) = ".$coin_m." ปอนด์ (GBP)"."<br><br>";
				    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." ปอนด์ (GBP)";
				    break;    
				case 3: 
					$coin_m=3.58757333;
				    $sum=$money*$coin_m;
				    echo "1 บาทไทย (THB) = ".$coin_m."  เงินเยนของญี่ปุ่น (JPY)"."<br><br>";
				    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)."  เงินเยนของญี่ปุ่น (JPY)";
				    break;    
			}

		?>
		</div>








		<footer class="text-center">Copyright &copy; www.ExChange-Money.com</footer>

	</div> <!--  end container  -->



</body>
</html>
