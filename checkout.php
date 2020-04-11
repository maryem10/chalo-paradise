<!DOCTYPE html>
<html>
<head>
	<title>Finaliser la commande</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
	<script src="js/jquery-331.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>
	<script src="jss/uikit-icons.min.js"></script>
	<script src="js/uikit.min.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/util.js"></script>
  	<script src="js/jquery.exzoom.js"></script>
  	<script src="js/jquery.steps.js"></script>
	<script src="js/script.js"></script>

	<link rel="stylesheet" href="styles/bootstrap-337.min.css">
	<link rel="stylesheet" href="icons/font-awsome/css/font-awesome.min.css">
	<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/uikit.min.css">
  	<link rel="stylesheet" type="text/css" href="css/jquery.exzoom.css">
  	<link rel="stylesheet" type="text/css "href="css/file.css">
  	<link rel="stylesheet" type="text/css "href="css/jquery.steps.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


</head>
<style type="text/css">


</style>
<body>
	<?php
		include("include/header.php"); 
	?>
	
	<div class=" container-fluid">
		<div class="col-md-9">
			
				<form action="checkout.php" method="post" style="width: 562px;text-align: center;padding: 3px 18px 13px 18px;border: 1px solid lightgrey">

					<div class="col-md-12">
						
							<h2>form</h2>
							<div class="form-group">
								<label for="fname"><i class="fa fa-user"></i>Nom et Prénom</label>
		            			<input type="text" id="fname" name="firstname" class="form-control" placeholder="John M. Doe">
							</div>
							
							<div class="form-group">
								<label for="email"><i class="fa fa-envelope"></i> Email</label>
        						<input type="text" id="email" name="email" class="form-control" placeholder="john@example.com">
							</div>

							<div class="form-group">
								<label for="adr"><i class="fa fa-address-card-o"></i> Addresse</label>
            					<input type="text" id="adr" name="address" class="form-control" placeholder="542 W. 15th Street">
							</div>
							
							<div class="form-group">
								<label for="city"><i class="fa fa-institution"></i> Ville</label>
            					<input type="text" id="city" name="city" class="form-control" placeholder="New York">
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="state">Region</label>
                						<input type="text" id="state" name="state" class="form-control" placeholder="NY">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="zip">Code Postale</label>
					                	<input type="text" id="zip" name="zip" class="form-control" placeholder="10001">	
									</div>
					            </div>								
							</div>
						
						
					</div>
					<div class="col-md-12">
						<h3>Payement</h3>

						<div class="form-group">
							<label for="fname">Accepted Cards</label>
				            <div class="icon-container" style="margin-bottom: 20px;padding: 7px 0;font-size: 24px;">
				              <i class="fa fa-cc-visa" style="color:navy;"></i>
				              <i class="fa fa-cc-amex" style="color:blue;"></i>
				              <i class="fa fa-cc-mastercard" style="color:red;"></i>
				              <i class="fa fa-cc-discover" style="color:orange;"></i>
				            </div>
						</div>

						<div class="form-group">
							<label for="cname">Name on Card</label>
            				<input type="text" id="cname" name="cardname" class="form-control" placeholder="John More Doe">
						</div>

						<div class="form-group">
							<label for="ccnum">Credit card number</label>
           		 			<input type="text" id="ccnum" name="cardnumber" class="form-control" placeholder="1111-2222-3333-4444">
						</div>

						<div class="form-group">
							<label for="expmonth">Exp Month</label>
            				<input type="text" id="expmonth" name="expmonth" class="form-control" placeholder="September">
						</div>

						<div class="row">
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="expyear">Exp Year</label>
                					<input type="text" id="expyear"  class="form-control" name="expyear" placeholder="2018">
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="cvv">CVV</label>
                					<input type="text" id="cvv"  class="form-control" name="cvv" placeholder="352">
								</div>
							</div>

						</div>

					</div>
					<div>
						<a href="checkout.php" class="btn btn-success" style="">                                   
							Finaliser votre commande 
						</a>
					</div>
					
				</form>
			
		</div>
		
		<div class="col-md-3">
			<div id="order-summary" class="box">
				<div class="box-hearder">
					<h3>Votre Commande</h3>
				</div>
				
				<h4>Panier <span class="price" style=" float: right;color: grey;color:black"><i class="fa fa-shopping-cart"></i> <b>3</b></span></h4>
			    <p><a href="#">Produit1</a> <span class="price">150 DH</span></p>
			    <p><a href="#">Produit1</a> <span class="price">150 DH</span></p>
			    <p><a href="#">Produit1</a> <span class="price">150 DH</span></p>

			    <hr style="border: 1px solid lightgrey;">
			    <p>Total <span class="price" style="color:black"><b>750 DH</b></span></p>
			</div>
		</div>
	</div>



	<?php include("include/footer.php");
	?>
</body>
</html>