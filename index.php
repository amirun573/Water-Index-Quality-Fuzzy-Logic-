<html>
	<Title> Water Quality Index </Title>
	<Head>
		<h2 style="text-align: center">Water Quality Index Calculation</h2>
		<br>
		<br>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<style>
		#form{
			text-align: center;
			width: 80px
			height:300px;
		}
		.row{
			text-align: center;
			margin-left: auto;
			margin-right: auto;
			background: LightBlue;
			width: 50%;
			padding-top: 15px;
		}

		.row:first-child
		{
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
		}

		.row:last-child
		{
			border-bottom-left-radius: 10px;
			border-bottom-right-radius: 10px;
			padding-bottom: 15px;
		}

		body{
			background-image: url("bg.jpg");
		}
		h2{
			color: white;
		}

		.row strong{
			color: black;
		}
		</style>
	</Head>
	<body>
		<form method="post" action="result.php">
			<div id="form">
			<div class="row">
			<div class="col-xs-12">
			<strong>Dissolved Oxygen Sat(%)</strong> <br>
			<input class="form-control" placeholder="Dissolved Oxygen Saturation..." type="number" name= "disOxy" title="Sample Input: 90,110,150 " required /><br>
		  </div>
			</div>

			<div class="row">
			<div class="col-xs-12">
			<strong>Fecal Coli</strong> <br>
			<input type="number" placeholder="Fecal Coliform..." class="form-control" name= "feColi" title="Sample Input: 1000,2500,3000" required /><br>
			</div>
		  </div>

			<div class="row">
			<div class="col-xs-12">
			<strong>pH</strong> <br>
			<input type="text" placeholder="pH..." class="form-control" name= "ph" title="Sample Input: 3.5,7, 8.9" required/><br>
			</div>
		</div>

		 <div class="row">
			<div class="col-xs-12">
			<strong>BOD</strong> <br>
			<input type="number" placeholder="Biochemical Oxygen Demand..." class="form-control" name= "bod" title="Range of Input: [0,10]. The lower, the better" required /><br>
		  </div>
		</div>

		 <div class="row">
		 	<div class="col-xs-12">
			<strong>Nitrate</strong> <br>
			<input type="number" class="form-control" placeholder="Nitrate.." name= "nit" title="Sample Input 2,5,13,15. The lower, the better" required/><br>
			</div>
		<!--</div>-->

		<input type="submit" class="btn btn-primary " />
		</div>
	</div>



		</form>
	<?php

		//$disOxy=(double)$_POST['disOxy'];
		//$feColi=(double)$_POST['feColi'];
		//$ph=(double)$_POST['ph'];



	?>


	</body>
</html>
