<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>

<link rel="stylesheet" href="css/style.css">
<head>
    <style>
   .asd{
     text-align: center;
     text-align: left;
     margin-right: 23%;
     margin-left: 20%;
   }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
	<title>Admin page</title>
</head>
<body>

   

<br><br>

<div class="container-fluid">
		<div class="container">
			<h2 class="text-center" id="title">Administrator login</h2>
			 <p class="text-center">
				 
			</p>
 			<hr>
			<div class="row">
				<div style="margin-left:38%;">
 					<form role="form" method="POST" action="adminlogin.php">
						<fieldset>							
							<p class="text-uppercase pull-center"> Please log in admin</p>	
							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address"required>
							</div>
							<div class="form-group">
								<input type="password" name="password" id="passwordi" class="form-control input-lg" placeholder="Password"required>
							</div>
								
                <br/>
 									  <input type="submit" class="btn btn-lg btn-secondary" name="register" style="margin-left:40%;" value="Log in">
                    
 							</div>
						</fieldset>
					</form>
				</div>
				
				<div class="col-md-2">
					<!-------null------>
				</div>
				
			
			</div>
		</div>
	</div>
</body>