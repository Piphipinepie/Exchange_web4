<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exchange Money</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style-main-4.css">
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


		<div class="cover-input"> 
			
			<h2 class="text-center"> แปลงสกุลเงิน </h2>

		


				  <form class="cover-money" action="process_api.php" method="POST">


				    <div class="input-group col-md-4">
				      <span class="input-group-addon">ไทย</span>
				      <input id="money" type="text" class="form-control" name="money" placeholder="บาทไทย (THB)">
				    </div>

					<div class="select">	

						<div class="radio">
						  <label><input type="radio" name="coin" value="1">เกาหลีวอน (KRW)</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="coin" value="2">ปอนด์ (GBP)</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="coin" value="3">เงินเยนของญี่ปุ่น (JPY)</label>
						</div>
					</center>
					<br>


					<button type="submit" class="btn btn-success btn-md col-md-4" value="Convert">แปลงค่าเงิน</button>


				  </form> 




		</div> <!--  end cover-input  -->








		<footer class="text-center">Copyright &copy; www.ExChange-Money.com</footer>

	</div> <!--  end container  -->



</body>
</html>