<?php
require_once('contact-php/config.php');

if (isset($_POST['submit'])) {
    $message = "";
    session_start();
    if (!empty($_SESSION['_contact_form_error'])) {
        $message = "Error: Your message couldn't sent, Please try again.";
    }
    if (!empty($_SESSION['_contact_form_success'])) {
        $message = "Your message was sent successfully!";
    }
    echo "<script type='text/javascript'>alert($message);</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Togrul Jafar / Web Developer</title>
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animation.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
</head>
<body>
	<div class="preloader">
		<div class="prelaoder-inner">
			<img src="img/285.gif" alt="">
			<div class="loader">
				<div class="load"></div>
			</div>
		</div>
	</div>
	<header class="head-wrap">
		<div class="head-block">
			<a href="#" class="left-wrap">
				<img class="logo" src="img/logo3.png" alt="">
			</a>
			<div class="right-wrap">
				<ul class="social-media">
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
			<div class="hamburger-menu">
				<div class="line line-1"></div>
				<div class="line line-2"></div>
				<div class="line line-3"></div>		
			</div>
		</div>
		<div class="nav-menu">
			<div class="hamburger-menu">
				<div class="line line-1"></div>
				<div class="line line-2"></div>
				<div class="line line-3"></div>		
			</div>
			<div class="upsec">
				<i class="fas fa-globe-asia" style="color: #fff"></i>
				<ul class="lang">
					<li>
						<a lang="en-US" hreflang="en-US" href="#">ENG</a>
					</li>
					<li>
						<a lang="fr-FR" hreflang="fr-FR" href="#">FRA</a>
					</li>
					<li>
						<a lang="de-DE" hreflang="de-DE" href="#">DEU</a>
					</li>
				</ul>
			</div>
			<p class="opn-menu_headText">HELLO THERE!</p>
			<div class="opn-menu_pic">
				<img src="img/person.jpg" alt="">
			</div>
			<p class="opn-menu_mainText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse nisi deserunt quod tempore nemo blanditiis laborum nihil molestiae minus. Reprehenderit, eaque.</p>
			<ul class="nav-item">
				<li class="nav-list"><a class="nav-link" href="#startpage">HOME</a></li>
				<li class="nav-list"><a class="nav-link-psv">PAGES  <i class="fas fa-angle-double-down"></i></a></li>
				<li class="nav-list"><a class="nav-link" href="#about">ABOUT</a></li>
				<li class="nav-list"><a class="nav-link" href="#service">SERVICES</a></li>
				<li class="nav-list"><a class="nav-link" href="#skill">SKILLS</a></li>
				<li class="nav-list"><a class="nav-link" href="#portfolio">PORTFOLIO</a></li>
				<li class="nav-list"><a class="nav-link" href="#testimonials">REVIEWS</a></li>
				<li class="nav-list"><a class="nav-link" href="#client">CLIENTS</a></li>
				<li class="nav-list"><a class="nav-link" href="blog.html">BLOG</a></li>
				<li class="nav-list"><a class="nav-link" href="#contact">CONTACT</a></li>
			</ul>
			<p class="copywrt">© Mumbrass 2020. All Rights Resevered Development by Me</p>
			<ul class="social-media">
				<li>
					<div class="crc">
						<div class="line"></div>
						<div class="icon">
							<a href="" class="up-arw"><i class="fab fa-twitter"></i></a>
						</div>
					</div>
				</li>
				<li>
					<div class="crc">
						<div class="line"></div>
						<div class="icon">
							<a href="" class="up-arw"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</li>
				<li>
					<div class="crc">
						<div class="line"></div>
						<div class="icon">
							<a href="" class="up-arw"><i class="fab fa-facebook-f"></i></a>
						</div>
					</div>
				</li>
				<li>
					<div class="crc">
						<div class="line"></div>
						<div class="icon">
							<a href="" class="up-arw"><i class="fab fa-github"></i></a>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="layout-nm">
			<div id="prevBtn" class="crc">
				<div class="line"></div>
				<div class="icon">
					<a class="up-arw"><i class="fas fa-angle-double-left"></i></a>
				</div>
			</div>
			<ul id="headerNav-nm" class="nm">
				<li><a href="#startpage">01</a></li>
				<li><a href="#about">02</a></li>
				<li><a href="#service">03</a></li>
				<li><a href="#skill">04</a></li>
				<li><a href="#portfolio">05</a></li>
				<li><a href="#testimonials">06</a></li>
				<li><a href="#client">07</a></li>
				<li><a href="#contact">08</a></li>
			</ul>
			<div id="nextBtn" class="crc">
				<div class="line"></div>
				<div class="icon">
					<a class="down-arw"><i class="fas fa-angle-double-right"></i></a>
				</div>
			</div>
		</div>
	</header>
	<main id="fullpage">
		<section id="startpage" class="top-page hero section">
			<div class="hero-wrap">
				<div class="hero-inner">
					<figure></figure>
					<div class="aos-wrp" data-aos="zoom-in">
						<div class="section-wrap container">
							<div class="top-page-wrap">
								<p class="hola-txt"><i class="far fa-handshake"></i>HELLO THERE</p>
								<p class="main-txt">AWESOME SOLUTIONS<br/>FOR YOUR BUSSINESS</p>
								<svg x="0px" y="0px" viewBox="0 0 100 19.5" class="svg-line">
					            	<g>
					                	<polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 
					                    40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3"></polygon>
					            	</g>
					            </svg><br>
					            <div class="btn-box">
									<a href="#contact" class="btn-filling">START A PROJECT</a>
									<a href="#portfolio" class="btn-empty">SEE MY WORKS</a>
								</div>
							</div>
						</div>
					</div>
					<div class="particles" id="particles-js"></div>
				</div>
			</div>
		</section>
		<section id="about" class="about-sec hero section" >
			<div class="hero-wrap">
				<div class="hero-inner">
					<figure></figure>
					<div class="aos-wrp" data-aos="zoom-in">
						<p class="vertical-sm-title"><i class="far fa-question-circle" style="color: #579BB2;"></i>&nbsp WHO I'M?</p>
						<div class="section-wrap row">
							<div class="col-lg-6 col-sm-12">
								<h2 class="head-lg-title">About Me</h2>
								<svg x="0px" y="0px" viewBox="0 0 100 19.5" class="svg-line">
					            	<g>
					                	<polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 
					                    40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3"></polygon>
					            	</g>
				            	</svg>
				            	<p class="info-text">I have much experience in developing landing pages, online stores, corporate sites, home pages; experience in developing profitable business on the example of my clients, I know a lot of nuances that must a web site contain, and the elements, which significantly affect the conversion.</p>
				            	<p class="under-txt"><i class="far fa-gem" style="color: #579BB2"></i> MY CODE ALWAYS HIGH QUALITY, HAND-CODED<br/>FF</p>
				            	<a href="#contact" class="btn-filling">BECOME MY CLIENT</a>
							</div>
							<div class="col-lg-6 col-sm-12 right-sec">
								<div class="img-wrapper">
									<div class="dots up">
										<img src="img/dots.svg" alt="">
									</div>
									<div class="dots down">
										<img src="img/dots.svg" alt="">
									</div>
									<img src="img/person.jpg" alt="" class="person">
								</div>
								<h2 class="head-lg-title">1 Years of Experience</h2>
							</div>
						</div>
					</div>
					<div class="overlay"></div>
				</div>
			</div>
		</section>
		<section id="service" class="service hero section">
			<div class="hero-wrap">
				<div class="hero-inner">
					<figure></figure>
					<div class="aos-wrp" data-aos="zoom-in">
						<div class="section-wrap row justify-content-between">
							<div class="col-lg-6 col-sm-12">
								<p class="head-sm-title"><i class="far fa-gem" style="color: #579BB2"></i> MY SPECIALIZATIONS</p>
								<h2 class="head-lg-title">My Best Services</h2>
								<svg x="0px" y="0px" viewBox="0 0 100 19.5" class="svg-line" >
					            	<g>
					                	<polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 
					                    40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3"></polygon>
					            	</g>
				            	</svg>
				            	<p class="info-text">In my work I using a variety of techniques and instruments like: HTML5, CSS3, Jquery, Responsive Design, Bootstrap Framework. I'm using the latest technologies and the latest trends in web development.</p>
				            	<a href="#contact" class="btn-filling">START A PROJECT</a>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="slide-block">
									<div class="row slide">
										<div class="card col-6">
											<i class="fab fa-wordpress card-back"></i>
											<div class="face1">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum voluptate dolorem voluptatum possimus!</p>
											</div>
											<div class="face2">
												<i class="fab fa-wordpress edit-icon"></i>
												<h3 class="card-title" >Wordpresss</h3>
											</div>	
										</div>
										<div class="card col-6">
											<i class="fab fa-css3 card-back"></i>
											<div class="face1">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum voluptate dolorem voluptatum possimus!</p>
											</div>
											<div class="face2">
												<i class="fab fa-css3 edit-icon"></i>
												<h3 class="card-title" >CSS&HTML</h3>
											</div>	
										</div>
										<div class="card col-6">
											<i class="fab fa-opencart card-back"></i>
											<div class="face1">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum voluptate dolorem voluptatum possimus!</p>
											</div>
											<div class="face2">
												<i class="fab fa-opencart edit-icon"></i>
												<h3 class="card-title" >OpenCart</h3>
											</div>	
										</div>
										<div class="card col-6">
											<i class="fab fa-connectdevelop card-back"></i>
											<div class="face1">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum voluptate dolorem voluptatum possimus!</p>
											</div>
											<div class="face2">
												<i class="fab fa-connectdevelop edit-icon"></i>
												<h3 class="card-title" >Support</h3>
											</div>	
										</div>
									</div>
									<div class="row slide">
										<div class="card col-6">
											<i class="fab fa-wordpress card-back"></i>
											<div class="face1">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum voluptate dolorem voluptatum possimus!</p>
											</div>
											<div class="face2">
												<i class="fab fa-wordpress edit-icon"></i>
												<h3 class="card-title" >Word</h3>
											</div>	
										</div>
										<div class="card col-6">
											<i class="fab fa-css3 card-back"></i>
											<div class="face1">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum voluptate dolorem voluptatum possimus!</p>
											</div>
											<div class="face2">
												<i class="fab fa-css3 edit-icon"></i>
												<h3 class="card-title" >java</h3>
											</div>	
										</div>
										<div class="card col-6">
											<i class="fab fa-opencart card-back"></i>
											<div class="face1">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum voluptate dolorem voluptatum possimus!</p>
											</div>
											<div class="face2">
												<i class="fab fa-opencart edit-icon"></i>
												<h3 class="card-title" >sldie</h3>
											</div>	
										</div>
										<div class="card col-6">
											<i class="fab fa-connectdevelop card-back"></i>
											<div class="face1">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum voluptate dolorem voluptatum possimus!</p>
											</div>
											<div class="face2">
												<i class="fab fa-connectdevelop edit-icon"></i>
												<h3 class="card-title" >Support</h3>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="overlay"></div>
				</div>
			</div>
		</section>
		<section id="skill" class="my-skills hero section">
			<div class="hero-wrap">
				<div class="hero-inner">
					<figure></figure>
					<div class="aos-wrp" data-aos="zoom-in">
						<p class="vertical-sm-title"><i class="fas fa-code" style="color: #579BB2"></i>&nbspWHAT I DO</p>
						<div class="section-wrap row">
							<div class="col-12 d-flex">
								<div class="col-lg-6 col-sm-12">
									<h2 class="head-lg-title">My Skills</h2>
									<svg x="0px" y="0px" viewBox="0 0 100 19.5" class="svg-line">
						            	<g>
						                	<polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 
						                    40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3"></polygon>
						            	</g>
						        	</svg>
									<div>
						            	<p class="info-text">I do my job well and on time - is unshakable principle is more important than which can not be even money.
										<b>Just check my portfolio and let's work together!</b></p>
						            	<p class="skl-item">01 <span style="color: #579BB2">-</span> front end development</p>
						            	<p class="skl-item">02 <span style="color: #579BB2">-</span> Back end and Databases</p>
						            	<p class="skl-item">03 <span style="color: #579BB2">-</span> WORDPRESS INTEGRATION</p>
						            	<p class="skl-item">04 <span style="color: #579BB2">-</span> FULLY RESPONSIVE DESIGN</p>
						            	<p class="skl-item">05 <span style="color: #579BB2">-</span> GIT (Code Versioning)</p>
									</div>
								</div>
								<div class="col-lg-6 col-sm-12 skill-status">
									<div class="col-12 skill-per">
										<div class="skill-up-item">
											<p>HTML&CSS</p>
											<p class="skill_percent">85%</p>
										</div>
										<div class="skill-down-item">
											<div class="per-bar"></div>
											<div class="per-circle"></div>
										</div>
									</div>
									<div class="col-12 skill-per">
										<div class="skill-up-item">
											<p>JAVASCRIPT</p>
											<p class="skill_percent">70%</p>
										</div>
										<div class="skill-down-item">
											<div class="per-bar"></div>
											<div class="per-circle"></div>
										</div>
									</div>
									<div class="col-12 skill-per">
										<div class="skill-up-item">
											<p>WordPress</p>
											<p class="skill_percent">75%</p>
										</div>
										<div class="skill-down-item">
											<div class="per-bar"></div>
											<div class="per-circle"></div>
										</div>
									</div>
									<div class="col-12 skill-per">
										<div class="skill-up-item">
											<p>PHP&MYSQL</p>
											<p class="skill_percent">75%</p>
										</div>
										<div class="skill-down-item">
											<div class="per-bar"></div>
											<div class="per-circle"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="overlay"></div>
				</div>
			</div>
		</section>
		<section id="portfolio" class="portfolio hero section">
			<div class="hero-wrap">
				<div class="hero-inner">
					<figure></figure>
					<div class="aos-wrp" data-aos="zoom-in">
						<p class="vertical-sm-title"><i class="fas fa-rocket" ></i>&nbsp MY LATEST BEST WORKS</p>
						<div class="section-wrap">
							<div class="col-12">
								<ul class="nav nav-tabs work-header">
								  	<li class="nav-item">
								    	<a class="nav-link active" data-toggle="tab" href="#all">ALL</a>
								  	</li>
								  	<li class="nav-item">
								    	<a class="nav-link" data-toggle="tab" href="#frontend">Front-End</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#backend">Back-End</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#others">others project</a>
									</li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane container active" id="all">
										<div class="row col-12">
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product1.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio1</a></div>
											</div>
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product2.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio2</a></div>
											</div>
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product3.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio3</a></div>
											</div>
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product4.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio4</a></div>
											</div>
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product5.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio5</a></div>
											</div>
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product6.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio6</a></div>
											</div>
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product7.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio7</a></div>
											</div>
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product8.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio8</a></div>
											</div>
										</div>
									</div>
									<div class="tab-pane container" id="frontend">
										<div class="row col-12">
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product4.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio1</a></div>
											</div>
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product2.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio2</a></div>
											</div>
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product8.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio3</a></div>
											</div>
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product5.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio4</a></div>
											</div>
										</div>
									</div>
									<div class="tab-pane container" id="backend">
										<div class="row col-12">
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product1.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio1</a></div>
											</div>
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product3.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio2</a></div>
											</div>
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product6.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio3</a></div>
											</div>
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product7.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio4</a></div>
											</div>
										</div>
									</div>
									<div class="tab-pane container" id="others">
										<div class="row col-12">
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product3.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio1</a></div>
											</div>
											<div class="col-lg-3 col-6 portfolio-item boxes">
												<img class="item-box" src="img/product8.jpg" alt="">
												<div class="overlay"><a href="#" class="nav-link">Portfolio2</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="overlay"></div>
				</div>
			</div>
		</section>
		<section id="testimonials" class="testimonials hero section">
			<div class="hero-wrap">
				<div class="hero-inner">
					<figure></figure>
					<div class="aos-wrp" data-aos="zoom-in">
						<p class="vertical-sm-title"><i class="far fa-comment-dots"></i>&nbsp CLIENTS SAY ABOUT ME</p>
						<div class="section-wrap">
							<div class="testimonials-wrap">
								<div class="col-12">
									<h2 class="head-lg-title">Testimonials</h2>
									<svg x="0px" y="0px" viewBox="0 0 100 19.5" class="svg-line">
						            	<g>
						                	<polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 
						                    40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3"></polygon>
						            	</g>
						        	</svg>
								</div>
								<div class="slick-track">
									<div class="slick-inner">
										<div class="testimonial-item">
											<div class="profile-pic">
												<img src="img/person.jpg" alt="">
											</div>
											<span class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half"></i>
											</span>
											<p class="sortby">Tessa Jhon</p>
											<p class="comment">Fell in love with the design at first sight. Amazing work. I also want to express my great gratitude for the support and help in setting up. I also helped add more features! Thank you so much!</p>
										</div>
										<div class="testimonial-item">
											<div class="profile-pic">
												<img src="img/person.jpg" alt="">
											</div>
											<span class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half"></i>
											</span>
											<p class="sortby">Wilson Winter</p>
											<p class="comment">Fell in love with the design at first sight. Amazing work. I also want to express my great gratitude for the support and help in setting up. I also helped add more features! Thank you so much! I also want to express my great gratitude for the support and help in setting up. I also helped add more features!</p>
										</div>
										<div class="testimonial-item">
											<div class="profile-pic">
												<img src="img/person.jpg" alt="">
											</div>
											<span class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half"></i>
											</span>
											<p class="sortby">Tessa Winter</p>
											<p class="comment">Fell in love with the design at first sight. Amazing work. I also want to express my great gratitude for the support and help in setting up. I also helped add more features! Thank you so much!</p>
										</div>
										<div class="testimonial-item">
											<div class="profile-pic">
												<img src="img/person.jpg" alt="">
											</div>
											<span class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half"></i>
											</span>
											<p class="sortby">Michael Simpson</p>
											<p class="comment">Fell in love with the design at first sight. Amazing work. I also want to express my great gratitude for the support and help in setting up. I also helped add more features! Thank you so much!</p>
										</div>
										<div class="testimonial-item">
											<div class="profile-pic">
												<img src="img/person.jpg" alt="">
											</div>
											<span class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half"></i>
											</span>
											<p class="sortby">Wilson Winter</p>
											<p class="comment">Fell in love with the design at first sight. Amazing work. I also want to express my great gratitude for the support and help in setting up. I also helped add more features! Thank you so much!</p>
										</div>
										<div class="testimonial-item">
											<div class="profile-pic">
												<img src="img/person.jpg" alt="">
											</div>
											<span class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half"></i>
											</span>
											<p class="sortby">Tessa Winter</p>
											<p class="comment">Fell in love with the design at first sight. Amazing work. I also want to express my great gratitude for the support and help in setting up. I also helped add more features! Thank you so much!</p>
										</div>
									</div>
								</div>
								<form action="#" class="testimonials-director">
									<div id="leftBtn" class="crc">
										<div class="line"></div>
										<div class="icon">
											<a id="up-arw" class="up-arw"><i class="fas fa-angle-double-left"></i></a>
										</div>
									</div>
									<ul id="testimonial-nm" class="nm">
										
									</ul>
									<div id="rightBtn" class="crc">
										<div class="line"></div>
										<div class="icon">
											<a id="down-arw" class="down-arw"><i class="fas fa-angle-double-right"></i></a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="overlay"></div>
				</div>
			</div>
		</section>
		<section id="client" class="client hero section">
			<div class="hero-wrap">
				<div class="hero-inner">
					<figure></figure>
					<div class="aos-wrp" data-aos="zoom-in">
						<p class="vertical-sm-title"><i class="far fa-heart" style="color: #579BB2"></i>&nbspEXPENSICE</p>
						<div class="section-wrap row">
							<div class="col-lg-6 col-sm-12">
								<div>
									<h2 class="head-lg-title">My Clients</h2>
									<svg x="0px" y="0px" viewBox="0 0 100 19.5" class="svg-line">
						            	<g>
						                	<polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 
						                    40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3"></polygon>
						            	</g>
					            	</svg>
					            	<p class="info-text">i'm seize every opportunity to develop long term business partnerships with companies who are leaders in their sector. I'm work closely with our network partners in order to deliver the best solutions available to our clients.</p>
					            	<a href="#contact" class="btn-filling">BECOME MY CLIENT</a>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 right-sec">
								<div class="img-wrapper">						
									<div class="dots up">
										<img src="img/dots.svg" alt="">
									</div>
									<div class="dots down">
										<img src="img/dots.svg" alt="">
									</div>
									<div class="slide-block">
										<div class="client-slide">
											<div class="clnt-block">
												<img src="img/partner.png" alt="">
											</div>
											<div class="clnt-block">
												<img src="img/partner2.png" alt="">
											</div>
											<div class="clnt-block">
												<img src="img/partner3.png" alt="">
											</div>
											<div class="clnt-block">
												<img src="img/partner4.png" alt="">
											</div>
											<div class="clnt-block">
												<img src="img/partner5.png" alt="">
											</div>
											<div class="clnt-block">
												<img src="img/partner6.png" alt="">
											</div>
										</div>
										<div class="client-slide">
											<div class="clnt-block">
												<img src="img/partner2.png" alt="">
											</div>
											<div class="clnt-block">
												<img src="img/partner4.png" alt="">
											</div>
											<div class="clnt-block">
												<img src="img/partner.png" alt="">
											</div>
											<div class="clnt-block">
												<img src="img/partner6.png" alt="">
											</div>
											<div class="clnt-block">
												<img src="img/partner3.png" alt="">
											</div>
											<div class="clnt-block">
												<img src="img/partner5.png" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="overlay"></div>
				</div>
			</div>
		</section>
		<section id="contact" class="contact hero section">
			<div class="hero-wrap">
				<div class="hero-inner">
					<figure></figure>
					<div class="aos-wrp" data-aos="zoom-in">
						<p class="vertical-sm-title"><i class="far fa-bell"></i>&nbspCONTACT WITH ME</p>
						<div class="section-wrap row">
							<div class="col-12">
								<p class="head-lg-title">Say Hello</p>
								<svg x="0px" y="0px" viewBox="0 0 100 19.5" class="svg-line">
					            	<g>
					                	<polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 
					                    40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3"></polygon>
					            	</g>
					            </svg>
							</div>
							<div class="col-lg-4 col-sm-12 responsive-margin">
								<div class="row">
									<div class="connect-info-box col-sm-6 col-12 col-lg-12">
										<div class="crc crc-pd">
											<div class="line"></div>
											<div class="icon">
												<i class="fas fa-phone-alt"></i>
											</div>
										</div>	
										<div class="info-text">
											<p class="head-sm-title">CALL ME ANYTIME</p>
											<p>+994 (077) 642 50 42</p>
										</div>
									</div>
									<div class="connect-info-box col-sm-6 col-12 col-lg-12">
										<div class="crc crc-pd">
											<div class="line"></div>
											<div class="icon">
												<i class="fas fa-envelope"></i>
											</div>
										</div>
										<div class="info-text">
											<p class="head-sm-title">EMAIL ME</p>
											<p style="word-break: break-all;">togrul.cafarli99@gmail.com</p>
										</div>
									</div>
									<div class="connect-info-box col-sm-6 col-12 col-lg-12">
										<div class="crc crc-pd">
											<div class="line"></div>
											<div class="icon">
												<i class="fas fa-home"></i>
											</div>
										</div>
										<div class="info-text">
											<p class="head-sm-title">ADDRESS</p>
											<p>Baku city, Yasamal avenue</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-sm-12">
								<form action="contact-php/submit.php" class="cont-form" method="POST">
									<div class="nameBlock">
										<input name="name" type="text" class="name" placeholder="Your Name *">
										<i class="far fa-user"></i>
									</div>
									<div class="mailBlock">
										<input name="mail" type="text" class="urmail" placeholder="Your Mail *">
										<i class="fas fa-at"></i>
									</div>
									<textarea class="msg col-12" name="message" id="" cols="30" rows="10" placeholder="Your Message *"></textarea>
									<input type="submit" class="send-msg" value="SEND A MESSAGE">
								</form>
							</div>
						</div>
					</div>
					<div class="overlay"></div>
				</div>
			</div>
		</section>
	</main>
	<!-- particles -->
	<script src="js/particles.js"></script>
	<script src="js/particlesOwn.js"></script>
	<!-- javascript files -->
	<script src="js/jquery-3.5.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- my js scripts -->
	<script src="js/main.js"></script>
</body>
</html>