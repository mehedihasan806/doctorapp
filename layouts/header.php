<style type="text/css">
header{
	background:#4c7e8f;
	display: block;
}
.social-icon li{
	padding: 0 10px;
}
.menu ul li a{
	color: #ffffff !important;
	font-size: 15px;
}
.bg-one{
	background-color: #4c7e8f !important;
}
@media (min-width: 768px) and (max-width: 991.98px) {
	.menu ul li a{
	font-size: 12px;
}

}

</style>


  	<header>
  		<div class="container">
  			<nav class="navbar navbar-expand-md navbar-dark">
  				<!-- <a class="navbar-brand" href="#">Navbar</a> -->
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  					<span class="navbar-toggler-icon"></span>
  				</button>

  				<div class="collapse navbar-collapse menu" id="navbarSupportedContent">
  					<ul class="navbar-nav mr-auto">
  						<li class="nav-item">
  							<a class="nav-link" href="index.php?pages=home">HOME</a>
  						</li>
  						<li class="nav-item">
  							<a class="nav-link" href="index.php?pages=about-us">ABOUT</a>
  						</li>
  						<li class="nav-item">
  							<a class="nav-link" href="index.php?pages=find-doctors">FIND DOCTORS</a>
  						</li>
  						<li class="nav-item">
  							<a class="nav-link" href="index.php?pages=patient-tracking">PATIENT TRACKING</a>
  						</li>
  						<li class="nav-item">
  							<a class="nav-link" href="index.php?pages=contact-us">CONTACT US</a>
  						</li>
  						
					<?php if(isset($_GET['pages']) && $_GET['pages']=='patient-tracking'){?>
					<li class="nav-item"><a class="nav-link" href="index.php?pages=login">LOG OUT</a></li>
					<?php }?>

  					</ul>
  					<ul class="navbar-nav social-icon">
  						<li class="nav-item"><a href="https://www.facebook.com/stopdengue19/">
  							<img src="public/images/facebook.png" alt="facebook" />
  						</a></li>
  						<li class="nav-item">
  							<a href="#">
  								<img src="public/images/twitter.png" alt="twiteer" />
  							</a>
  						</li>
  						<li class="nav-item">
  							<a href="https://www.youtube.com/results?search_query=dengue">
  								<img src="public/images/youtube.png"
  								alt="youtube" />
  							</a>
  						</li>
  					</ul>
  				</div>
  			</nav>
  		</div>	
  	</header>
	


