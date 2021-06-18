<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from astritbublaku.com/demos/sweetpick/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 May 2015 04:02:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>FEC_CART</title>

	<meta charset="utf-8">

	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,800,900,200,100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,400,200,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">	
	

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />

	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
	
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- Style Switch -->
	<link rel="alternate stylesheet" type="text/css" href="css/colors/yellow-black.css" title="yellow" media="screen" />
   	<link rel="alternate stylesheet" type="text/css" href="css/colors/violet-black.css" title="black" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/orange-black.css" title="orange" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/blue-black.css" title="blue" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors/red-black.css" title="red" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/green-black.css" title="green" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/pink-black.css" title="pink" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/pale-green-black.css" title="pale-green" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/cart.css" >	
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">


			<div class="upper-header">
				<div class="container">

				<!--	<div class="search-input">
						<form action="#">
							<input type="text" placeholder="Type and Search">
							<input type="submit" value="">
						</form>
					</div>-->

					<div class="logo">
						<a href="index.php"><img src="img/ICON.png" alt="" height="150" width="auto" style="margin-bottom: 100px;"></a>
					</div>
					
					<div class="clear"></div>

				</div>
				<!-- End container -->	
			</div>
			<!-- End Upper-header -->		
			
			<div class="container">
				<!-- Navigation -->
				<nav id="nav">
					<ul id="navlist" class="sf-menu clearfix">
						<li><a href="index.php">Home</a>
						</li>
						<li class="current"><a href="shop_page.php">Shop</a>
						</li>
						
					</ul>
				</nav>
		    	<!-- Navigation -->
			</div>
		

		</header>
		<!-- End Header -->


		<!-- content -->
		<div id="content">

			<div class="checkout">

				<div class="container">

					<div class="check-anchor clearfix mb40">
						<div class="holder">
							<ul>
								<li class="active"><a href="#"><i class="fa fa-star"></i> Cart<i class="fa fa-star"></i></a></li>
							</ul>
							<div class="holder-border"></div>
						</div>
					</div>

					<div class="check-infos">
						<div class="row">
							<div class="col-md-8">
								<div class="check-details">
									<table class="table">
								      
								      	<?php
								      	$d=0;
								      	if (is_array($_COOKIE['item']))
								      	{
								      		$d=$d+1;
								      	}
								      	if($d==0)
								      	{
								      		echo "no record avaible in cart";
								      	}
								      	else
								      	{
								      		?>
								      		<thead>
								        	<tr>
								          		<th></th>
								          		<th>Details</th>
								          		<th>Price</th>
								          		<th>Quantity</th>
								          		<th>Subtotal</th>
								          		<th></th>
								        	</tr>
								      		</thead>
								      		<tbody class="check-body">
								      			<?php
								      			foreach ($_COOKIE['item'] as $name => $value) 
                								{
                    								$value11=explode("__",$value);
                    								?>
                    								<tr>
								          				<td><img src="<?php echo $value11[0]; ?>" alt="xyz" style="width: 150px;height: 150px;"></td>
								          				<td><h6><?php echo $value11[1]; ?></h6>
								          				</td>
								         				<td>Rs.<?php echo $value11[2]; ?></td>
								          				<td><input type="text" placeholder="1" value="<?php echo $value11[3]; ?>"></td>
								          				<td>Rs.<?php echo $value11[4]; ?></td>
								          				<td><a href="#"><img src="img/delete.png" alt=""></a></td>
								        			</tr>
                    								<?php
                    							}

								      			?>

								      	 	

								      		</tbody>
								      		</table>
								      		
								      		<?php
								      		$tot=0;
								      		foreach ($_COOKIE['item'] as $name => $value) 
                								{
                    								$value11=explode("__",$value);
                    								$tot=$tot+$value11[4];
                    							}
                    							echo "<span id='colortotal' >Total amount : Rs.".$tot."</span>";

								      	}
										  ?>
										  <button id="checkou" onclick="checkout()"  type="submit" value="checkout">checkout</button>
										  <script type="text/javascript">
										  	function checkout(){
										  		window.location.href = "checkout.php";
										  	}
										  </script>
								      	
								       
								    

								   
								</div>
							</div>
							
						</div>
					</div>

				</div>
			</div>
			<!-- End Product Single -->


			
		</div>
		<!-- End content -->

		



		</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.superfish.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.html"></script>
	<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.html"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/jquery.countTo.js"></script>
	<script src="js/jquery.parallax.html"></script>
     <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

 	<!-- include jQuery + carouFredSel plugin -->
    <script type="text/javascript" src="js/jquery.carouFredSel.js"></script>

    <!-- optionally include helper plugins -->
    <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
	
    <!-- Style Switcher -->
	<script src="js/styleswitch.js"></script>
	<script src="js/style_switch_custom.js"></script>
</body>

<!-- Mirrored from astritbublaku.com/demos/sweetpick/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 May 2015 04:02:19 GMT -->
</html>