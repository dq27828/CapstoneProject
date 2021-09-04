
<!DOCTYPE html>   
 <?php
        include("header.php");
        include("db_connect.php");
        $sessionid=session_id();

?>
<html lang="en">

<head>

<link rel="stylesheet" href="css/style.css">

<head>
<style>
.payment-form{
	padding-bottom: 50px;
	font-family: 'Montserrat', sans-serif;
}

.payment-form.dark{
	background-color: #f6f6f6;
}

.payment-form .content{
	box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
	background-color: white;
}

.payment-form .block-heading{
    padding-top: 50px;
    margin-bottom: 40px;
    text-align: center;
}

.payment-form .block-heading p{
	text-align: center;
	max-width: 420px;
	margin: auto;
	opacity:0.7;
}

.payment-form.dark .block-heading p{
	opacity:0.8;
}

.payment-form .block-heading h1,
.payment-form .block-heading h2,
.payment-form .block-heading h3 {
	margin-bottom:1.2rem;
	color: #3b99e0;
}

.payment-form form{
	border-top: 2px solid #5ea4f3;
	box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
	background-color: #ffffff;
	padding: 0;
	max-width: 600px;
	margin: auto;
}

.payment-form .title{
	font-size: 1em;
	border-bottom: 1px solid rgba(0,0,0,0.1);
	margin-bottom: 0.8em;
	font-weight: 600;
	padding-bottom: 8px;
}

.payment-form .products{
	background-color: #f7fbff;
    padding: 25px;
}

.payment-form .products .item{
	margin-bottom:1em;
}

.payment-form .products .item-name{
	font-weight:600;
	font-size: 0.9em;
}

.payment-form .products .item-description{
	font-size:0.8em;
	opacity:0.6;
}

.payment-form .products .item p{
	margin-bottom:0.2em;
}

.payment-form .products .price{
	float: right;
	font-weight: 600;
	font-size: 0.9em;
}

.payment-form .products .total{
	border-top: 1px solid rgba(0, 0, 0, 0.1);
	margin-top: 10px;
	padding-top: 19px;
	font-weight: 600;
	line-height: 1;
}

.payment-form .card-details{
	padding: 25px 25px 15px;
}

.payment-form .card-details label{
	font-size: 12px;
	font-weight: 600;
	margin-bottom: 15px;
	color: #79818a;
	text-transform: uppercase;
}

.payment-form .card-details button{
	margin-top: 0.6em;
	padding:12px 0;
	font-weight: 600;
}

.payment-form .date-separator{
 	margin-left: 10px;
    margin-right: 10px;
    margin-top: 5px;
}

@media (min-width: 576px) {
	.payment-form .title {
		font-size: 1.2em; 
	}

	.payment-form .products {
		padding: 40px; 
  	}

	.payment-form .products .item-name {
		font-size: 1em; 
	}

	.payment-form .products .price {
    	font-size: 1em; 
	}

  	.payment-form .card-details {
    	padding: 40px 40px 30px; 
    }

  	.payment-form .card-details button {
    	margin-top: 2em; 
    } 
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
</head>
<body>
<main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2>Payment</h2>
        </div>
          <div class="products">
            <h3 class="title">Checkout</h3>
            <?php


              $query = "select * from orderdetails,product where orderdetails.productid=product.productid and sessionid='$sessionid'";
              $result=mysqli_query($conn,$query);
              $total=0;
              while($row=mysqli_fetch_object($result))
              {
              echo" <div class='item'>"; 
              echo "<a class='price' href=deleteitem.php?productid=".$row->productid.">Remove</a>"; 
              echo "<span class='price'>".$row->unitprice."€  |  </span>";
            echo" <p class='item-name'>".$row->productname."</p>";

            echo "</div>";
                $total+=$row->unitprice;
                
              }
              echo "<div class='total'>Total<span class='price'>".$total."€</span></div>";


            ?>
            
            
          </div>
          

          <form method="POST" action="checkoutinfo.php">
          <div>
          <div class="card-details">
            <h3 class="title">Shipping Address</h3>
            
        <div class="row">
            
              <div class="form-group col-sm-6">
                <label for="card-holder">First Name</label>
                <input id="card-holder" name="firstname" type="text" class="form-control" placeholder="Enter name" aria-label="First Name" aria-describedby="basic-addon1" required>
              </div>
              <div class="form-group col-sm-6">
                <label for="">Last Name</label>
                <div class="input-group expiration-date">
                <input id="card-holder" name="lastname" type="text" class="form-control" placeholder="Enter last name" aria-label="Last Name" aria-describedby="basic-addon1" required>
                </div>
              </div>
              <div class="form-group col-sm-8">
                <label for="card-number">Email Address</label>
                <input id="card-number" name="eaddress" type="email" class="form-control" placeholder="Enter email address" aria-label="eAddress" aria-describedby="basic-addon1" required>
              </div>
              <div class="form-group col-sm-8">
                <label for="card-number">Address</label>
                <input id="card-number" name="address" type="text" class="form-control" placeholder="Enter address" aria-label="Address" aria-describedby="basic-addon1" required>
              </div>
              <div class="form-group col-sm-8">
                <label for="card-number">City</label>
                <input id="card-number" name="city" type="text" class="form-control" placeholder="Enter city" aria-label="City" aria-describedby="basic-addon1" required>
              </div>
              <div class="form-group col-sm-8">
                <label for="card-number">Postal Code</label>
                <input id="card-number" name="postal" type="text" class="form-control" placeholder="Enter postal code" aria-label="Postal Code" aria-describedby="basic-addon1" required>
              </div>
              
            </div>
          </div>
          <div class="card-details">
            <h3 class="title">Credit Card Details</h3>
            <div class="row">
              <div class="form-group col-sm-7">
                <label for="card-holder">Card Holder</label>
                <input id="card-holder" name="cardname" type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="basic-addon1" required>
              </div>
              <div class="form-group col-sm-5">
                <label for="">Expiration Date</label>
                <div class="input-group expiration-date">
                  <input type="text" name="expmonth" class="form-control" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1" required>
                  <span class="date-separator">/</span>
                  <input type="text" name="expyear" class="form-control" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1" required>
                </div>
              </div>
              <div class="form-group col-sm-8">
                <label for="card-number">Card Number</label>
                <input id="card-number" name="cardnumber" type="text" class="form-control" placeholder="Card Number" aria-label="Card Holder" aria-describedby="basic-addon1" required>
              </div>
              <div class="form-group col-sm-4">
                <label for="cvc">CVC</label>
                <input id="cvc" name="cvc" type="text" class="form-control" placeholder="CVC" aria-label="Card Holder" aria-describedby="basic-addon1" required><br>
              </div>
              <div class="form-group col-sm-12">
                <input type="submit" class="btn btn-primary btn-block" value="Proceed">
              </div>
              
            </div>
            
          </div>
          
    </div>
    </form>
     
    </section>
  </main>

    <?php
    include("footer.php");
    ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <!--  isotope plugin cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

    <!-- Custom Javascript -->
    <script src="index.js"></script>
</body>
</html>