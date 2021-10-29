
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Horoscope | Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
	<link rel="stylesheet" href="assets/vendor/owl.carousel/assets/owl.carousel.css"> 
	<link rel="stylesheet" href="assets/vendor/wow/animate.css"> 

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="assets/vendor/wow/wow.min.js"></script>
	<link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
	<script>
	new WOW().init();
	  wow = new WOW(
		{
		  boxClass:     'wow',      // default
		  animateClass: 'animated', // default
		  offset:       0,          // default
		  mobile:       true,       // default
		  live:         true        // default
		}
		)
		wow.init();
		
       
	</script>





<script>
///////////
///////// DATE generator    /////////
function date_time(id){
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        h = date.getHours();
        if(h<10){h = "0"+h;}
      m = date.getMinutes();
        if(m<10){m = "0"+m;}
       s = date.getSeconds();
        if(s<10){s = "0"+s;}
       result = ''+days[day]+' '+months[month]+' '+d+' '+year;
        document.getElementById(id).innerHTML = result;
        setTimeout('date_time("'+id+'");','1000');
        return true;
}
///////// end DATE Generator /////////
//////////////////////////////////////
/////////// Time Generator ///////////
function tS(){ x=new Date(); x.setTime(x.getTime()); return x; } 
function lZ(x){ return (x>9)?x:'0'+x; } 
function tH(x){ if(x==0){ x=12; } return (x>12)?x-=12:x; } 
function dT(){ if(fr==0){ fr=1; document.write('<font size=3 face=Arial><b><span id="tP">'+eval(oT)+'</span></b></font>'); } document.getElementById('tP').innerHTML=eval(oT); setTimeout('dT()',1000); } 
function aP(x){ return (x>11)?'pm':'am'; } 
var fr=0,oT="' '+tH(tS().getHours())+':'+lZ(tS().getMinutes())+':'+lZ(tS().getSeconds())+' '+aP(tS().getHours())";
///////// end Time Generator /////////
/////////
</script>











	
</head>
<body>


<header class="header-area">
	<!-- Top Header -->
	<div class="top-header">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-8 col-md-12">
					<ul class="top-header-contact-info">
						<li><i class="fa fa-envelope-o"></i>contact@palmastroveda.com`</li>
						<!-- <li><i class="fa fa-phone"></i> Emergancy Helpline: <a href="tel:+44587154756">+91 123 456-7890</a></li> -->
					</ul>
				</div>
				
				<!-- <div class="col-lg-4 col-md-12">
					<ul class="top-header-social header_account">
						<li><a href="login.php"><i class="fa fa-sign-in"></i> Login <span>/</span></a> </li>
						<li><a href="register.php"><i class="fa fa-pencil-square-o"></i> Register</a></li>
					</ul>
				</div> -->

			</div>
		</div>
	</div>
	<!-- End Top Header -->

	<!-- Start Navbar Area -->
	<div class="navbar-area">
		<div class="astrology-responsive-nav">
			<div class="container-fluid">
				<div class="row">
					<div class="astrology-responsive-menu">
						<div class="logo">
							<a href="index.php">
								<img src="assets\image\logo\logo.png" alt="logo">
							</a>
						</div>
						
						
						<!-- <div class="others-option align-items-center">
									<div class="option-item">
										<div class="cart-btn">
											<a href="cart.php"><i class="fa fa-shopping-cart"></i><span>1</span></a>
										</div>
									</div>

									<div class="option-item">
										<div class="search-btn-box">
											<a href="#search"><i class="search-btn fa fa-search"></i></a>
										</div>
									</div>

									<div class="option-item">
										<a href="contact_us.php" class="btn"> Appointment</a>
									</div>
								</div> -->


					<!--mobile Menu  -->

					<div id="mySidenav" class="sidenav">
						<div class="menu_slid_bg">
							<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
							
								<div class="col-sm-12" style="padding:0px;">
									<h3>Categories</h3>
									
									<ul class="accordion" id="accordion-category">
										<li class="panel mobile_menu_li">
											<a href="index.php" class=""></i> Home</a>
										</li>
										<li class="panel mobile_menu_li">
											<a href="about_us.php" class=""></i> about us</a>
										</li>
										
										
										<li class="panel mobile_menu_li">
											<a href="#" class="">Our Services</a>
												<span class="head"><a style="" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category83" aria-expanded="false">
												<span class="plus">+</span><span class="minus">-</span></a></span>
												<div id="category83" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
													<ul>
														<li>
															 <a href="services.php">Services</a>
														</li>
														<li>
															 <a href="full_services_page.php">Services Full Page</a>
														</li>
													</ul>
												</div>
										</li>
										
										
										<!-- <li class="panel mobile_menu_li">
											<a href="#" class="">Forecast</a>
												<span class="head"><a style="" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category84" aria-expanded="false">
												<span class="plus">+</span><span class="minus">-</span></a></span>
												<div id="category84" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
													<ul>
														<li>
															 <a href="Aries.php">Aries</a>
														</li>
														<li>
															 <a href="Aries.php">Taurus</a>
														</li>
														<li>
															 <a href="Aries.php">Gemini</a>
														</li>
														<li>
															 <a href="Aries.php">Cancer</a>
														</li>
														<li>
															 <a href="Aries.php">leo</a>
														</li>
														<li>
															 <a href="Aries.php">Virgo</a>
														</li>
														<li>
															 <a href="Aries.php">Libra</a>
														</li>
														<li>
															 <a href="Aries.php">Scorpio</a>
														</li>
														<li>
															 <a href="Aries.php">Sagittairus</a>
														</li>
														<li>
															 <a href="Aries.php">Capricorn</a>
														</li>
														<li>
															 <a href="Aries.php">Aquarius</a>
														</li>
														<li>
															 <a href="Aries.php">Pisces</a>
														</li>
													</ul>
												</div>
										</li>
										
										<li class="panel mobile_menu_li">
											<a href="#" class="">Shop</a>
												<span class="head"><a style="" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category85" aria-expanded="false">
												<span class="plus">+</span><span class="minus">-</span></a></span>
												<div id="category85" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
													<ul>
														<li>
															 <a href="services.php">Products List</a>
														</li>
														<li>
															 <a href="cart.php">Cart</a>
														</li>
														<li>
															 <a href="checkout.php">Checkout</a>
														</li>
														<li>
															 <a href="single-products.php">Products Details</a>
														</li>
														<li>
															 <a href="404.php">404</a>
														</li>
													</ul>
												</div>
										</li>
										
										<li class="panel mobile_menu_li">
											<a href="#" class="">Blog</a>
												<span class="head"><a style="" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category86" aria-expanded="false">
												<span class="plus">+</span><span class="minus">-</span></a></span>
												<div id="category86" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
													<ul>
														<li>
															 <a href="blog.php">Blog Grid</a>
														</li>
														<li>
															 <a href="blog-left.php">Blog Grid View Left</a>
														</li>
														<li>
															 <a href="blog-right.php">Blog Grid View right</a>
														</li>
														<li>
															 <a href="blog-details.php">Blog Details</a>
														</li>
													</ul>
												</div>
										</li>
										
										<li class="panel mobile_menu_li">
											<a href="#" class="">my Account</a>
												<span class="head"><a style="" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category87" aria-expanded="false">
												<span class="plus">+</span><span class="minus">-</span></a></span>
												<div id="category87" class="panel-collapse collapse" style="clear: both; height: 0px;" aria-expanded="false">
													<ul>
														<li>
															 <a href="login.php"> Login </a>
														</li>
														<li>
															 <a href="register.php"> Register</a>
														</li>
													</ul>
												</div>
										</li> -->

										<li class="panel mobile_menu_li">
											<a href="contact_us.php" class=""> Contact Us</a>
										</li>
									</ul>
							<div class="clear"></div>
							</div>
							 
						</div>
					</div>

					<span class="menu_open" onclick="openNav()">&#9776; Menu</span>








					<!-- mobile Menu  end-->
					</div>
				</div>
			</div>
		</div>

		<div class="astrology-nav">
			<div class="container-fluid">
				<div class="row">
					<div class="header_menu_wrapper">
						<nav class="navbar navbar-expand-md navbar-light">
							<a class="navbar-brand" href="index.php">
								<img src="assets/image/logo/logo.png" alt="logo">
							</a>

							<div class="collapse navbar-collapse mean-menu" style="display: block;">
								<ul class="navbar-nav">
									<li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
									
									<li class="nav-item"><a href="about_us.php" class="nav-link">About Us</a></li>

									<li class="nav-item"><a href="" class="nav-link">Our Services <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu">
											<li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
											<li class="nav-item"><a href="full_services_page.php" class="nav-link">Services Full Page</a></li>

										</ul>
									</li>
<!-- 									
									<li class="nav-item"><a href="#" class="nav-link">Forecast <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu">
											<li class="nav-item"><a href="Aries.php" class="nav-link">Aries</a></li>

											<li class="nav-item"><a href="Aries.php" class="nav-link">Taurus</a></li>

											<li class="nav-item"><a href="Aries.php" class="nav-link">Gemini</a></li>

											<li class="nav-item"><a href="Aries.php" class="nav-link">Cancer</a></li>
											<li class="nav-item"><a href="Aries.php" class="nav-link">leo</a></li>
											<li class="nav-item"><a href="Aries.php" class="nav-link">Virgo</a></li>
											<li class="nav-item"><a href="Aries.php" class="nav-link">Libra</a></li>
											<li class="nav-item"><a href="Aries.php" class="nav-link">Scorpio</a></li>
											<li class="nav-item"><a href="Aries.php" class="nav-link">Sagittairus</a></li>
											<li class="nav-item"><a href="Aries.php" class="nav-link">Capricorn</a></li>
											<li class="nav-item"><a href="Aries.php" class="nav-link">Aquarius</a></li>
											<li class="nav-item"><a href="Aries.php" class="nav-link">Pisces</a></li>

										</ul>
									</li> 
									<li class="nav-item"><a href="#" class="nav-link">Pages <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu">

											<li class="nav-item"><a href="#" class="nav-link">Shop <i class="fa fa-angle-right"></i></a>
												<ul class="dropdown-menu">
													<li class="nav-item"><a href="products.php" class="nav-link">Products List</a></li>

													<li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>

													<li class="nav-item"><a href="checkout.php" class="nav-link">Checkout</a></li>

													<li class="nav-item"><a href="single-products.php" class="nav-link">Products Details</a></li>
												</ul>
											</li>

											<li class="nav-item"><a href="404.php" class="nav-link">404</a></li>
										</ul>
									</li>

									<li class="nav-item"><a href="#" class="nav-link">Blog <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu">
											<li class="nav-item"><a href="blog.php" class="nav-link">Blog Grid</a></li>
											
											<li class="nav-item"><a href="blog-left.php" class="nav-link">Blog Grid View Left</a></li>
											
											<li class="nav-item"><a href="blog-right.php" class="nav-link">Blog Grid View right</a></li>

											<li class="nav-item"><a href="blog-details.php" class="nav-link">Blog Details</a></li>
										</ul>
									</li> -->

									<li class="nav-item"><a href="contact_us.php" class="nav-link">Contact</a></li>
								</ul>
<!-- 
								<div class="others-option align-items-center">
									<div class="option-item">
										<div class="cart-btn">
											<a href="cart.php"><i class="fa fa-shopping-cart"></i><span>1</span></a>
										</div>
									</div>

									<div class="option-item">
										<div class="search-btn-box">
											<a href="#search"><i class="search-btn fa fa-search"></i></a>
										</div>
									</div>

									<div class="option-item">
										<a href="contact_us.php" class="btn"> Appointment</a>
									</div>
								</div> -->
							</div>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Navbar Area --> 
<div id="search" class="input-group header">
	<span class="close">x</span>
		<form>
			<input value="" name="search" type="search" placeholder="Search">
			 <span class="input-group-btn">
				<button type="button" class="btn"><i class="fa fa-search"></i></button>
			</span>
			<div class="clear"></div>
		</form>
</div>	
</header>
<!-- Header End -->
























