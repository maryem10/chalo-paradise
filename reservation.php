<!DOCTYPE html>
<html>
<head>
	<title>reservation</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
	<script src="js/jquery-331.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>
	<script src="jss/uikit-icons.min.js"></script>
	<script src="js/uikit.min.js"></script>
	<script src="js/uikit-icons.min.js"></script>

	<link rel="stylesheet" href="styles/bootstrap-337.min.css">
	<link rel="stylesheet" href="icons/font-awsome/css/font-awesome.min.css">
	<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/uikit.min.css">
	<link rel="stylesheet" type="text/css "href="css/file.css">
</head>
<style type="text/css">
	input {
		margin-bottom: 20px;
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
  }

</style>
<body>
	<?php
		include("include/header.php")
	?><br>
	<div class="container">
		<div class="col-12" align="center">
			<h2> Réserver votre rendez-vous </h2>
			<p>         Nous donnons toute l'attention à nos clients</p>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12-md">
					<form action="" method="post">
						<div class="row">
							<div class="col-md-12"><p>Informations Personnel</p></div>
							<div class="col-md-6 ">
								<input type="text" name="Prenom" placeholder="Prénom" class="form-control">
							</div>
							<div class="col-md-6">
								<input type="text" name="nom" placeholder="Nom" class="form-control">
							</div>
							<div class="col-md-6">
								<input type="email" name="email" placeholder="Email" class="form-control">
							</div>
							<div class="col-md-6">
								<input type="text" name="Télé" placeholder="Telephone" class="form-control">
							</div>
							<div class="col-md-12"><p>Date /Heur</p></div>
							<div class="col-md-6 ">
								<input type="date" name="Prenom" placeholder="Date" class="form-control">
							</div>
							<div class="col-md-6">
								<input type="time" name="nom" placeholder="heur" class="form-control">
							</div>
							<div class="col-md-12">
								<p>message</p>
							</div>
							<div class="col-md-12">
								<textarea style=" margin-bottom: 20px"class="form-control" name="msg" rows="5" cols="30" placeholder="Votre message .."></textarea>
							</div>
							<div class="col-md-12 " style="margin-bottom: 20px" align="center">
								<button class="btn btn-warning">Reserver</button>
							</div>
							
						</div>
					</form>
				</div>
			</div>
			
			
		</div>
	</div>
	<?php
		include("include/footer.php")
	?>
</body>
</html>