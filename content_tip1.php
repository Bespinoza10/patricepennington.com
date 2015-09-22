<?php

$target_aud = $_GET['t_aud'];

if($target_aud == "blogging"){

	$css_file = "enterprise-header.css";
	$h_title = "Cyber Space";
	$h_subtitle = "The Final Frontier";
	$logo = '<img src="I/terrenceLongLogoW.png">';

}elseif($target_aud == "lifehack"){

	$css_file = "pdev.css";
	$h_title = "Pennington Tips";
	$h_subtitle = "Sharing Success";
	$logo = '<img src="I/terrenceLongLogo.png">';

}elseif($target_aud == "marketing"){
  $css_file = "mark.css";
  $h_article = "";
  $logo = '<img src="I/terrenceLongLogo.png">';
}elseif($target_aud == "life_guidance"){
  $css_file = "guide.css";
  $h_title = "Success Fertilizer";
  $h_subtitle = "Ideas for Personal Development";
  $logo = '<img src="I/terrenceLongLogoW.png">';
}




?>

<!DOCTYPE html>

	<html class="no-js" lang="en" xml:lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1"><!-- this is only for responsive design to zoom 100%-->
	  <meta name="description" content="Great HTML5 Bootstrap template by ThemeStreet.Net">
	  <meta name="author" content="ThemeStreet.Net">
	  <link rel="stylesheet" href="css/bootstrap.css">
	  <link rel="stylesheet" href="css/dust.css">
	  <link rel="stylesheet" href="css/<?php echo $css_file;?>">
	  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>
	  <script src="js/libs/modernizr-2.7.1.min.js"></script>

	  <link rel="icon" type="image/png" href="favicon.png" />
	  <title>Berliner - Creative HTML5 Bootstrap Template</title>
	</head>

	<body>

		<div id="preloader"></div>

		<div class="layout">

			<!-- BEGIN POPUP -->

			<div class="popup-email">
		      <div class="element">
		        <button id="btn" class="btn1 blue-btn medium" type="button">OK <span class="fa fa-check"></span></button>
		      </div>
		    </div>

			<!-- END POPUP -->

			<!-- BEGIN HEADER -->

			<header>

				 <div class="container">

					<a href="#subheader" class="logo left">

<!--
						<svg role="img" fill="currentColor" class="main-logo">
			                <use xlink:href="icons/icons.svg#main-logo"></use>
			            </svg>

			            <svg role="img"  class="small-logo">
			                <use xlink:href="icons/icons.svg#small-logo"></use>
			            </svg>
-->
         <a href="http://penningtontips.com"><?php echo $logo ?></a>

					</a>

					<span class="icon-menu_320 hide bars">

						<svg role="img">
			                <use xlink:href="icons/icons.svg#icon-menu_320"></use>
			            </svg>

					</span>
					<span class="icon-menu_768 hide bars">

						<svg role="img">
			                <use xlink:href="icons/icons.svg#icon-menu_768"></use>
			            </svg>

					</span>
					<nav class="right ">
						<ul class="list-inline">
					      <li>
				            <a href="#about">ARTICLES</a>
				          </li><!--
				           --><li>
				            <a href="#filter">PROJECT</a>
				          </li><!--
				           --><li>
				            <a href="#pricing">PRICING</a>
				          </li><!--
				           --><li class="clients">
				            <a href="#customers">CLIENTS</a>
				          </li><!--
				           --><li>
				            <a href="#team">TEAM</a>
				          </li><!--
				           --><li>
				            <a href="#contact">CONTACT</a>
				          </li>
					    </ul>
					</nav>

				 </div>

			</header>

			<!-- BEGIN MAIN -->

			<main id="page-content">

  			<section id="team" class="team-section">

		  			<article class="background-blog">
			  			<div class="container">

			  			<h3 style="text-align: left;"><strong><?php echo $h_title?></strong></h3>
							<p class="left" style="margin-top: -20px;">
  							<div style="color:#fff; left: 20%; padding-left: 50px;"><span><?php echo $h_subtitle?></span></div></p>

			  			</div>
		  			</article>
  			</section>



  			<!-- END SOCIAL -->

		  		<section class="social">

		  			<div class="container">

		  				<div class="row">

							<div class="col-md-8">

								<form action="#">
									<label>
                		<input id="email" class="gray" name="email" type="email">

              			<span>EMAIL</span>
            			</label>
            			<button type="submit" class="btn1 btn--white medium inline">SUBSCRIBE <span></span>
									</button>
								</form>
							</div>
							<div class="col-md-4">
                  <p class="subsText"><span class="subs">Subscribe</span> Today!</p>
              </div>

		  				</div>

		  			</div>

		  		</section>

		  		<!-- END SOCIAL -->


		  		<!-- BEGIN ABOUT -->

		  		<section id="about" class="about-section">
				  	<div class="container" style="padding-top: 50px; padding-bottom: 50px;">

						<h3 class="dark-gray"><strong>Great Tips</strong></h3>
						<p class="center">Please Select One of the Tips Below </p>

						<div class="row">

							<div class="col-sm-6 col-sm-offset-0 col-md-offset-2 col-md-4 col-lg-3 col-lg-offset-0 about__item">
								<a href="http://www.strategic-onlinemarketing.com/developing-a-blogging-website/" target="_blank"><img class="img-responsive squares" src="I/blog_intro_squares/the first Step.png"></a>
						        <h6><strong>Developing a Blogging Website</strong></h6>
						        <p>About 2 1/2 years ago when I began my very first blog, I searched and searched for information online Googling for “how-to” guides on building blogging web sites. I discovered the information extremely challenging to follow, and the technical abilities needed were, extremely frustrating...</p>
							</div>
							<div class="col-sm-6 col-sm-offset-0 col-md-offset-1 col-md-4 col-lg-3 col-lg-offset-0 about__item">
                  <a href="http://www.strategic-onlinemarketing.com/how-to-begin-a-blog-post-with-the-end-in-mind-2/" target="_blank"><img class="img-responsive squares" src="I/blog_intro_squares/endinmind.png"></a>
						        <h6><strong>Begin a Blog Post with the End in Mind</strong></h6>
						        <p>What It Means to Begin with the End in Mind? Dr. Steven Covey, author of “Seven Habits of Highly Effective People” defined it very nicely.  He said “To begin with the end in mind means to start with a clear understanding of your destination...</p>
							</div>
							<div class="col-sm-6 col-sm-offset-0 col-md-offset-2 col-md-4 col-lg-3 col-lg-offset-0 about__item">
								  <a href="http://www.strategic-onlinemarketing.com/how-successful-bloggers-conduct-keyword-research-part-1/" target="_blank"><img class="img-responsive squares" src="I/blog_intro_squares/research1.png"></a>
				          		<h6><strong>Keyword Research – Part 1</strong></h6>
				          		<p>Successful people making money blogging know 11 key things, and one of the essential things they know how to do is keyword research. I began online in 2013. I really struggled when I first started online, and as I look back I think my biggest struggle did not understand the dynamics of keyword research...</p>
							</div>
							<div class="col-sm-6 col-sm-offset-0 col-md-offset-1 col-md-4 col-lg-3 col-lg-offset-0 about__item">
								<a href="http://www.strategic-onlinemarketing.com/how-successful-bloggers-conduct-keyword-research-part-2/" target="_blank"><img class="img-responsive squares" src="I/blog_intro_squares/worryChronic_1.png"></a>
						        <h6><strong>Keyword Research – Part 2</strong></h6>
						        <p>Today, I want to discuss how we begin the process of getting keyword ideas and then using our first free tool to begin to drill down and collect those initial ideas. Tool Number 1 Google AdWords Keyword Planner...</p>
							</div>
						</div>


					</div>


		  		</section>

		  		<!-- END ABOUT -->


		  		<!-- BEGIN HEADING-SLOGAN -->

<!--
		  		<section id="heading-slogan" class="heading-slogan-section">
		  			<div class="container ">
		  				<h4 class="inline">Here you can type a subtitle.</h4>
		  				<h2 class="inline"><strong>Awesome heading slogan!</strong></h2>
		  				<a href="#" class="btn1 btn--white-blue big">FINDOUT MORE
		  					<span>
		  						<svg role="img" fill="currentColor">
					                <use xlink:href="icons/icons.svg#arrow-down"></use>
					            </svg>

		  					</span>
		  				</a>
		  			</div>

		  		</section>
-->

		  		<!-- END HEADING-SLOGAN -->


		  		<!-- BEGIN CONTACT -->

		  		<section id="contact" class="contact-section dark-grey">

					<div class="container">

						<h3 class="white-gray"><strong>STAY IN TOUCH</strong></h3>


			            <form class="contact-form" action="form_data.php">

			              	<div class="main-form">

			                	<div class="row">

			                  		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			                  			<label>
					                  		<input class="gray" name="name" type="text">
											<i>
					                  			<svg role="img" fill="currentColor">
									                <use xlink:href="icons/icons.svg#name-icon"></use>
									            </svg>
					                  		</i>
					              			<span>NAME</span>
					          			</label>

			                  		</div>

					                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					                	<label>
                			                <input class="gray" name="mail" type="text">
                							<i>
                		                  		<svg role="img" fill="currentColor">
									                <use xlink:href="icons/icons.svg#mail-icon"></use>
									            </svg>

                		                  	</i>
                		                	<span>EMAIL</span>
                	                	</label>

					                </div>

			                  		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			                  			<label>
          			                  		<input class="gray" name="subject" type="text">
          									<i>
          				                  		<svg role="img" fill="currentColor">
									                <use xlink:href="icons/icons.svg#text-icon"></use>
									            </svg>
          				                  	</i>
          			              			<span>SUBJECT</span>
          			          			</label>

				              		</div>

			                	</div>

			                	<div class="row">

				                  	<div class="col-lg-12">
				                  		<label>
						                  	<textarea name="message" ></textarea>
											<i>
					          					<svg role="img" fill="currentColor">
									                <use xlink:href="icons/icons.svg#text-icon"></use>
									            </svg>
					          				</i>
					                  		<span>MESSAGE</span>
					              		</label>

				                  	</div>

			                	</div>

			              	</div>


			              	<div class="human-test">
					            <div class="test">
					              <p>Please select number : <strong><span class="blink"></span></strong></p>
					            </div>
					            <div>
					              <label class="" >
					                <input type="radio" name="rand" value="one"><span>1</span>
					              </label>
					              <label class="">
					                <input type="radio" name="rand" value="two"><span>2</span>
					              </label>
					              <label class="">
					                <input type="radio" name="rand" value="three"><span>3</span>
					              </label>
					              <label class="">
					                <input type="radio" name="rand" value="four"><span>4</span>
					              </label>
					              <label class="">
					                <input type="radio" name="rand" value="five"><span>5</span>
					              </label>
					            </div>
					            <button class="btn1 btn--white big right" type="submit">SEND MESSAGE
							  		<span>
							  			<svg role="img" fill="currentColor">
							                <use xlink:href="icons/icons.svg#arrow-down"></use>
							            </svg>

							  		</span>
							  	</button>
					            <div class="clearfix"></div>
					        </div>

			            </form>

					</div>

		  		</section>

		  		<!-- END CONTACT -->

			</main>



			<!-- END MAIN -->

			<div class='layout_footer'></div>
		</div>

		<!-- BEGIN FOOTER -->

		<footer class='footer-main center'>

			<div class="container">

				<small><a href="http://www.themestreet.net">ThemeStreet.Net</a> © 2015. All rights reserved.</small>

			</div>

		</footer>

		<!-- END FOOTER -->

		<a id="top" href="#subheader">
			<span>
				<svg role="img" fill="currentColor">
	                <use xlink:href="icons/icons.svg#back-top"></use>
	            </svg>
			</span>
		</a>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js"></script>
		<script src="js/libs/jquery.autosize.js"></script>
		<script src="js/jquery.validate.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.smooth-scroll.min.js"></script>
		<script src="js/jquery.inview.min.js"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/jquery.mb.YTPlayer.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<!-- initial scripts -->
		<script src="js/init.js"></script>


		<!--[if (gte IE 6)&(lte IE 8)]>
			<script src="js/libs/selectivizr-min.js"></script>
		<![endif]-->
		<!--[if lt IE 9]>
		    //Make visible media queries to IE7 , IE8 (visible only on server or localhost)

		    <link href="http://externalcdn.com/respond-proxy.html" id="respond-proxy" rel="respond-proxy" />
		    <script src="js/libs/respond.src.js"></script>
		<![endif]-->




	</body>

</html>