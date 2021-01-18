<?php
    require_once '../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!--
		Basic
	-->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<title>Pankaj Jha - Web Developer and Enthusiast </title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="pankaj jha pankajjha145" />
	<meta name="keywords" content="pankajjha jha developer freelancer" />
	<meta name="author" content="pankajjha" />
	
	<!--
		Load Fonts
	-->
	<link rel="preload" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"></noscript>
	
	<link rel="preload" href="//use.fontawesome.com/releases/v5.8.0/css/all.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="//use.fontawesome.com/releases/v5.8.0/css/all.css"></noscript>
	
	<!--
		Load CSS
	-->
	<link rel="preload" href="css/basic.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="css/basic.css"></noscript>
	
	<link rel="preload" href="css/layout.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="css/layout.css"></noscript>
	
	<link rel="preload" href="css/blogs.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="css/blogs.css"></noscript>
	
	<link rel="preload" href="css/ionicons.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="css/ionicons.css"></noscript>
	
	<link rel="preload" href="css/magnific-popup.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="css/magnific-popup.css"></noscript>
	
	<link rel="preload" href="css/animate.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="css/animate.css"></noscript>
	
	<link rel="preload" href="css/owl.carousel.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="css/owl.carousel.css"></noscript>

	<!--
		Background Gradient
	-->
	<link rel="preload" href="css/gradient.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="css/gradient.css"></noscript>
	
	<!--
		Template New-Skin
	-->
	<link rel="preload" href="css/new-skin/new-skin.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="css/new-skin/new-skin.css"></noscript>

	<!--
		Template RTL
	-->
	<!--<link rel="stylesheet" href="css/rtl.css" />-->
	
	<!--
		Template Colors
	-->
	<link rel="preload" href="css/template-colors/green.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="css/template-colors/green.css"></noscript>
	<!--<link rel="stylesheet" href="css/template-colors/blue.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/orange.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/pink.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/purple.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/red.css" />-->

	<!--
		Template Dark
	-->
	<!--<link rel="stylesheet" href="css/template-dark/dark.css" />-->
	

	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!--
		Favicons
	-->
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
	<link rel="manifest" href="images/favicons/site.webmanifest">

    <link rel="stylesheet" href="<?php echo mix('/css/app.css'); ?>" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155183199-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-155183199-1');
	</script>
	<script>
		// Check that service workers are supported
		if ('serviceWorker' in navigator) {
			// Use the window load event to keep the page load performant
			window.addEventListener('load', () => {
				navigator.serviceWorker.register('<?php echo mix('/js/sw.js'); ?>');
			});
		}
	</script>
</head>

<body>
	<div class="page new-skin">
		
		<!-- preloader -->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="double-bounce1"></div>
						<div class="double-bounce2"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- background -->
		<div class="background gradient">
			<ul class="bg-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
		</div>

		<!--
			Container
		-->
		<div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">

			<!--
				Header
			-->
			<header class="header">

				<!-- menu -->
				<div class="top-menu">
					<ul>
						<li class="active">
							<a href="#about-card">
								<span class="icon ion-person"></span>
								<span class="link">About</span>
							</a>
						</li>
						<li>
							<a href="#resume-card">
								<span class="icon ion-android-list"></span>
								<span class="link">Resume</span>
							</a>
						</li>
						<li>
							<a href="#works-card">
								<span class="icon ion-paintbrush"></span>
								<span class="link">Works</span>
							</a>
						</li>
						<li>
							<a href="#blog-card">
								<span class="icon ion-chatbox-working"></span>
								<span class="link">Blog</span>
							</a>
						</li>
						<li>
							<a href="#contacts-card">
								<span class="icon ion-at"></span>
								<span class="link">Contact</span>
							</a>
						</li>
					</ul>
				</div>

			</header>

			<!--
				Card - Started
			-->
			<div class="card-started" id="home-card">

				<!--
					Profile
				-->
				<div class="profile">

					<!-- profile image -->
					<div class="slide" style="background-image: url(images/bg.webp);"></div>

					<!-- profile photo -->
					<div class="image">
						<img src="images/IMG_4801%20-%20Copy.webp" class="lazyload" alt="pankaj jha" />
					</div>

					<!-- profile titles -->
					<div class="title">Pankaj Jha</div>
					<div class="subtitle">Web Developer</div>

					<!-- profile socials -->
					<div class="social border-line-h">
						<a target="_blank" href="https://facebook.com/pankajjha145"><span class="fab fa-facebook"></span></a>
						<a target="_blank" href="https://twitter.com/pankajjha_145"><span class="fab fa-twitter"></span></a>
						<a target="_blank" href="https://github.com/pankajjha"><span class="fab fa-github"></span></a>
						<a target="_blank" href="https://linkedin.com/in/pankajjha145"><span class="fab fa-linkedin"></span></a>
						<a target="_blank" href="https://stackoverflow.com/users/5884560/pankaj-jha"><span class="fab fa-stack-overflow"></span></a>
						<a target="_blank" href="https://pankajjha145.wordpress.com/"><span class="fab fa-wordpress"></span></a>
						<a target="_blank" href="http://pankajjha145.blogspot.com/"><span class="fab fa-blogger-b"></span></a>
						<a target="_blank" href="https://instagram.com/pankajjha145"><span class="fab fa-instagram"></span></a>
					</div>

                    <div>
                        <a title="Realtime application protection" href="https://www.sqreen.com/?utm_source=badge"><img style="width:109px;height:36px" src="https://s3-eu-west-1.amazonaws.com/sqreen-assets/badges/20171107/sqreen-mono-badge.svg" alt="Sqreen | Runtime Application Protection" /></a>
                    </div>
					<!-- profile buttons -->
					<div class="lnks">
						<!-- Calendly link widget begin -->
						<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
						<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
						<a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/pankaj_jha/free-consultation?text_color=000000'});return false;" class="lnk"><span class="text">Book Free Call</span><span class="ion ion-android-calendar"></span></a>
						<!-- Calendly link widget end -->
					
						<a href="#" class="lnk">
							<span class="text">Download CV</span>
							<span class="ion ion-archive"></span>
						</a>
						<a href="#" class="lnk discover">
							<span class="text">Contact Me</span>
							<span class="arrow"></span>
						</a>
					
					</div>

				</div>

			</div>

			<!-- 
				Card - About
			-->
			<div class="card-inner animated active" id="about-card">
				<div class="card-wrap">

					<!-- 
						About 
					-->
					<div class="content about">

						<!-- title -->
						<div class="title">About Me</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="text-box">
									<p>
										I am Pankaj Jha, Web Developer from India, Delhi. I have rich experience in 
										web site design and development, also I am good at PHP, Wordpress, Laravel and node.JS. 
										I love to talk with you about our unique project.
									</p>
								</div>
							</div>
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="info-list">
									<ul>
										<li><strong>Age . . . . .</strong> 27</li>
										<li><strong>Residence . . . . .</strong> India</li>
										<li><strong>Freelance . . . . .</strong> Available</li>
										<li><strong>Address . . . . .</strong> Delhi, India</li>
									</ul>
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

					<!--
						Services
					-->
					<div class="content services">

						<!-- title -->
						<div class="title">My Services</div>

						<!-- content -->
						<div class="row service-items border-line-v">

							<!-- service item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-h">
								<div class="service-item">
									<div class="icon"><span class="ion ion-code"></span></div>
									<div class="name">Web Development</div>
									<p>
										Being a professional full-stack developer, I am expert in building projects in PHP, NodeJS, Wordpress, Laravel, Zend... I love to work on new ideas because that's where creativity can be applied beautifully, But I am always ready to jump into any existing project and take it forward.
									</p>
								</div>
							</div>

							<!-- service item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-h">
								<div class="service-item">
									<div class="icon"><span class="ion ion-music-note"></span></div>
									<div class="name">Project Management</div>
									<p>
										I have completed many projects successfully, where I acted as a bridge between the Client and the end-Developer.
										As a client it is not always easy to convey ideas to the developer. There's so much gap in understanding, so I do the heavy work of managing the developers on your behalf.
									</p>
								</div>
							</div>

							<!-- service item -->
							<div class="col col-d-6 col-t-6 col-m-12">
								<div class="service-item">
									<div class="icon"><span class="ion ion-speakerphone"></span></div>
									<div class="name">Mobile App Development</div>
									<p>
										I have delivered many complex Android and IOS projects over the time. With me you don't have to go anywhere for your web development and mobile development, I can do both in an efficient way.
									</p>
								</div>
							</div>

							<!-- service item -->
							<div class="col col-d-6 col-t-6 col-m-12">
								<div class="service-item">
									<div class="icon"><span class="ion ion-ios-game-controller-b"></span></div>
									<div class="name">Digital Marketing and SEO</div>
									<p>
										I have pretty good experienced with Digital marketing and SEO. You don't have to worry on promoting your brand when I am handling your project, It comes FREE with the project.
									</p>
								</div>
							</div>

							<div class="clear"></div>
						</div>

					</div>

					<!--
						Price Tables
					-->
					<div class="content pricing">

						<!-- title -->
						<div class="title">Pricing</div>
						<div class="name">You can book free consultation call for your project</div>

						<!-- content -->
						<div class="row pricing-items">

							<!-- pricing item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="pricing-item">
									<div class="icon"><i class="ion ion-speedometer speed-basic"></i></div>
									<div class="name">Basic</div>
									<div class="amount">
										<span class="dollar">$</span>
										<span class="number">10</span>
										<span class="period">hour</span>
									</div>
									<div class="feature-list">
										<ul>
											<li>Troubleshooting</li>
											<li>Bug Fixing</li>
											<li>Web Development</li>
											<li>Website SEO & Review</li>
											<li class="disable">Android Apps Development</li>
											<li class="disable">IOS Apps Development</li>
											<li class="disable">Node.js Development</li>
										</ul>
									</div>
								</div>
							</div>

							<!-- pricing item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="pricing-item">
									<div class="icon"><i class="ion ion-speedometer"></i></div>
									<div class="name">Pro</div>
									<div class="amount">
										<span class="dollar">$</span>
										<span class="number">15</span>
										<span class="period">hour</span>
									</div>
									<div class="feature-list">
										<ul>
											<li>Complex Web Development</li>
											<li>Advanced Troubleshooting & Bugfixing</li>
											<li>IOS & Android App Development</li>
											<li>Node.js Development</li>
											<li>Advanced Collaboration</li>
											<li>Site Promotion & Digital Marketing</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="clear"></div>
						</div>

					</div>

					<!--
						Fun Fact
					-->
					<div class="content fuct">

						<!-- title -->
						<div class="title">Fun Fact</div>

						<!-- content -->
						<div class="row fuct-items">

							<!-- fuct item -->
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="fuct-item">
									<div class="icon"><span class="ion ion-disc"></span></div>
									<div class="name">50+ Projects Created</div>
								</div>
							</div>

							<!-- fuct item -->
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="fuct-item">
									<div class="icon"><span class="ion ion-trophy"></span></div>
									<div class="name">20+ Clients Satisfied</div>
								</div>
							</div>

							<!-- fuct item -->
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="fuct-item">
									<div class="icon"><span class="ion ion-coffee"></span></div>
									<div class="name">30+ Languages and Techs known</div>
								</div>
							</div>

							<!-- fuct item -->
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="fuct-item">
									<div class="icon"><span class="ion ion-flag"></span></div>
									<div class="name">$0 Charge for Consulatation</div>
								</div>
							</div>

							<div class="clear"></div>
						</div>

					</div>

					<!--
						Clients
					-->
					<!-- <div class="content clients"> -->

						<!-- title -->
						<!-- <div class="title">Clients</div> -->

						<!-- content -->
						<!-- <div class="row client-items"> -->

							<!-- client item -->
							<!-- <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="client-item">
									<div class="image">
										<a target="_blank" href="https://www.google.com/">
											<img src="images/clients/client_1.webp" class="lazyload" alt="" />
										</a>
									</div>
								</div>
							</div> -->

							<!-- client item -->
							<!-- <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="client-item">
									<div class="image">
										<a target="_blank" href="https://www.google.com/">
											<img src="images/clients/client_2.webp" class="lazyload" alt="" />
										</a>
									</div>
								</div>
							</div> -->

							<!-- client item -->
							<!-- <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="client-item">
									<div class="image">
										<a target="_blank" href="https://www.google.com/">
											<img src="images/clients/client_3.webp" class="lazyload" alt="" />
										</a>
									</div>
								</div>
							</div> -->

							<!-- client item -->
							<!-- <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="client-item">
									<div class="image">
										<a target="_blank" href="https://www.google.com/">
											<img src="images/clients/client_4.webp" class="lazyload" alt="" />
										</a>
									</div>
								</div>
							</div> -->

							<!-- <div class="clear"></div> -->
						<!-- </div> -->

					<!-- </div> -->

					<!--
						Testimonials
					-->
					<!-- <div class="content testimonials"> -->

						<!-- title -->
						<!-- <div class="title">Testimonials</div> -->

						<!-- content -->
						<!-- <div class="row testimonials-items"> -->

							<!-- client item -->
							<!-- <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="revs-carousel default-revs">
									<div class="owl-carousel">
										<div class="item">
											<div class="revs-item">
												<div class="text">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
												</div>
												<div class="user">
													<div class="img"><img src="images/man1.webp" class="lazyload" alt="" /></div>
													<div class="info">
														<div class="name">Helen Floyd</div>
														<div class="company">Art Director</div>
													</div>
													<div class="clear"></div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="revs-item">
												<div class="text">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
												</div>
												<div class="user">
													<div class="img"><img src="images/man1.webp" class="lazyload" alt="" /></div>
													<div class="info">
														<div class="name">Robert Chase</div>
														<div class="company">CEO</div>
													</div>
													<div class="clear"></div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="revs-item">
												<div class="text">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
												</div>
												<div class="user">
													<div class="img"><img src="images/man1.webp" class="lazyload" alt="" /></div>
													<div class="info">
														<div class="name">Helen Floyd</div>
														<div class="company">Art Director</div>
													</div>
													<div class="clear"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> -->

							<!-- <div class="clear"></div> -->
						<!-- </div> -->

					<!-- </div> -->

				</div>
			</div>

			<!--
				Card - Resume
			-->
			<div class="card-inner" id="resume-card">
				<div class="card-wrap">

					<!--
						Resume
					-->
					<div class="content resume">

						<!-- title -->
						<div class="title">Resume</div>

						<!-- content -->
						<div class="row">

							<!-- experience -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="ion ion-briefcase"></i></div>
									<div class="name">Experience</div>
								</div>
								<div class="resume-items">
									<div class="resume-item border-line-h active">
										<div class="date">2020 - Present</div>
										<div class="name">Senior Software Engineer</div>
										<div class="company">Collegedunia Web Pvt. Ltd.</div>
										<p>
											Develop and Manage Complex Web Projects and API's while handling devOps work.
										</p>
									</div>
									<div class="resume-item border-line-h">
										<div class="date">2018 - 2020</div>
										<div class="name">Tech Lead</div>
										<div class="company">RS Sample Junction LLP.</div>
										<p>
											Handling all technical needs for organisation and developing internal applications related to Market Resarch Industry.
										</p>
									</div>
									<div class="resume-item border-line-h">
										<div class="date">2015 - 2018</div>
										<div class="name">Software Developer</div>
										<div class="company">TRS Software Solutions Pvt. Ltd.</div>
										<p>
											Developed complex web projects and api's in latest web technologies.
										</p>
									</div>
									<div class="resume-item">
										<div class="date">2014 - 2015</div>
										<div class="name">Digital Marketing Executive</div>
										<div class="company">CollegeDunia Web Pvt. Ltd</div>
										<p>
											Promotion of Brand and Products via different marketing strategies.
										</p>
									</div>
								</div>
							</div>

							<!-- education -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="ion ion-university"></i></div>
									<div class="name">Education</div>
								</div>
								<div class="resume-items">
									<div class="resume-item border-line-h">
										<div class="date">2014 - 2016</div>
										<div class="name">MCA</div>
										<div class="company">Paris</div>
										<p>
											Master's Degree in Computer Application Ignou, Delhi
										</p>
									</div>
									<div class="resume-item border-line-h">
										<div class="date">2010 - 2013</div>
										<div class="name">BCA</div>
										<div class="company">IGNOU</div>
										<p>
											Bachelor's Degree in Computer Application Ignou, Delhi
										</p>
									</div>
									
									<div class="resume-item">
										<div class="date">2008 - 2009</div>
										<div class="name">DCA</div>
										<div class="company">London</div>
										<p>
											Diploma in Computer Application, Delhi
										</p>
									</div>
								</div>
							</div>

							<div class="clear"></div>
						</div>

					</div>

					<!--
						Skills
					-->
					<div class="content skills">

						<!-- title -->
						<div class="title">My Skills</div>
					
						<!-- content -->
						<div class="row">
						
							<!-- skill item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="skills-list">
									<div class="skill-title border-line-h">
										<div class="icon"><i class="ion ion-easel"></i></div>
										<div class="name">Development</div>
									</div>
									<ul>
										<li class="border-line-h"> 
											<div class="name">PHP Development</div>
											<div class="progress">
												<div class="percentage" style="width:98%;"></div>
											</div>
										</li>
										<li class="border-line-h"> 
											<div class="name">Node.Js</div>
											<div class="progress">
												<div class="percentage" style="width:80%;"></div>
											</div>
										</li>
										<li class="border-line-h"> 
											<div class="name">MySql / Redis / MongoDB</div>
											<div class="progress">
												<div class="percentage" style="width:95%;"></div>
											</div>
										</li>
										<li>
											<div class="name">Web Designing</div>
											<div class="progress">
												<div class="percentage" style="width:85%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!-- skill item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="skills-list dotted">
									<div class="skill-title border-line-h">
										<div class="icon"><i class="ion ion-flag"></i></div>
										<div class="name">Technologies</div>
									</div>
									<ul>
										<li class="border-line-h"> 
											<div class="name">PHP</div>
											<div class="progress">
												<div class="percentage" style="width:90%;"></div>
											</div>
										</li>
										<li class="border-line-h"> 
											<div class="name">Node.Js</div>
											<div class="progress">
												<div class="percentage" style="width:85%;"></div>
											</div>
										</li>
										<li class="border-line-h"> 
											<div class="name">Database</div>
											<div class="progress">
												<div class="percentage" style="width:90%;"></div>
											</div>
										</li>
										<li class="border-line-h"> 
											<div class="name">Server & Scripting</div>
											<div class="progress">
												<div class="percentage" style="width:80%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!-- skill item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="skills-list circles">
									<div class="skill-title border-line-h">
										<div class="icon"><i class="ion ion-code"></i></div>
										<div class="name">Coding</div>
									</div>
									<ul>
										<li> 
											<div class="name">PHP / MySql</div>
											<div class="progress p90">
												<span>95%</span>
											</div>
										</li>
										<li> 
											<div class="name">Node.Js / Javasctipt</div>
											<div class="progress p75">
												<span>85%</span>
											</div>
										</li>
										<li> 
											<div class="name">Shell & Python Scripting</div>
											<div class="progress p85">
												<span>65%</span>
											</div>
										</li>
										<li> 
											<div class="name">HTML / CSS</div>
											<div class="progress p95">
												<span>95%</span>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!-- skill item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="skills-list list">
									<div class="skill-title border-line-h">
										<div class="icon"><i class="ion ion-android-list"></i></div>
										<div class="name">Knowledge</div>
									</div>
									<ul>
										<li> 
											<div class="name">PHP Development</div>
										</li>
										<li> 
											<div class="name">iOS & android apps</div>
										</li>
										<li> 
											<div class="name">API Development</div>
										</li>
										<li> 
											<div class="name">Web Designing</div>
										</li>
										<li> 
											<div class="name">Project Management</div>
										</li>
										<li> 
											<div class="name">Server Deployment & Hosting</div>
										</li>
										<li> 
											<div class="name">Bug Fixing & Troubleshooting</div>
										</li>
										<li> 
											<div class="name">Search engine marketing</div>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="clear"></div>
						</div>
						
					</div>

				</div>
			</div>

			<!--
				Card - Works
			-->
			<div class="card-inner" id="works-card">
				<div class="card-wrap">

					<!--
						Works
					-->
					<div class="content works">

						<!-- title -->
						<div class="title">Recent Works</div>

						<!-- filters -->
						<div class="filter-menu filter-button-group">
							<div class="f_btn active">
								<label><input type="radio" name="fl_radio" value="grid-item" />All</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="photo" />Web</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="video" />Mobile</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="music" />API</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="design" />Design</label>
							</div>
						</div>

						<!-- content -->
						<div class="row grid-items border-line-v">

							<!-- work item photo -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item photo border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="images/works/work1.webp" class="has-popup-image">
											<img src="images/works/work1.webp" class="lazyload" alt="" />
											<span class="info">
												<span class="ion ion-image"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="images/works/work1.webp" class="name has-popup-image">Keysearch</a>
										<div class="category">Web</div>
									</div>
								</div>
							</div>

							<!-- work item photo -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item photo border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="images/works/work1.webp" class="has-popup-image">
											<img src="images/works/work1.webp" class="lazyload" alt="" />
											<span class="info">
												<span class="ion ion-image"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="images/works/work1.webp" class="name has-popup-image">SJ Apace</a>
										<div class="category">Web</div>
									</div>
								</div>
							</div>

							<!-- work item photo -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item photo border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="images/works/work1.webp" class="has-popup-image">
											<img src="images/works/work1.webp" class="lazyload" alt="" />
											<span class="info">
												<span class="ion ion-image"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="images/works/work1.webp" class="name has-popup-image">SnyderGallery</a>
										<div class="category">Web</div>
									</div>
								</div>
							</div>

							

							<!-- work item video -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item video border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="https://vimeo.com/97102654" class="has-popup-video">
											<img src="images/works/work2.webp" class="lazyload" alt="" />
											<span class="info">
												<span class="ion ion-videocamera"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="https://vimeo.com/97102654" class="name has-popup-video">FootlooseNoMore</a>
										<div class="category">Video</div>
									</div>
								</div>
							</div>

							<!-- work item music -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item music border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="https://w.soundcloud.com/player/?visual=true&amp;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&amp;show_artwork=true" class="has-popup-music">
											<img src="images/works/work3.webp" class="lazyload" alt="" />
											<span class="info">
												<span class="ion ion-music-note"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#" class="name has-popup">SJ Panel</a>
										<div class="category">Music</div>
									</div>
								</div>
							</div>

							<!-- work item design -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item design border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="#popup-1" class="has-popup-media">
											<img src="images/works/work4.webp" class="lazyload" alt="" />
											<span class="info">
												<span class="ion ion-images"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#popup-1" class="name has-popup-media">Mobile Application</a>
										<div class="category">Design</div>
									</div>
									<div id="popup-1" class="popup-box mfp-fade mfp-hide">
										<div class="content">
											<div class="image">
												<img src="images/works/work4.webp" class="lazyload" alt="">
											</div>
											<div class="desc">
												<div class="post-box">
													<h1>Mobile Application</h1>						
													<div class="blog-detail">Design</div>
													<div class="blog-content">
														<p>
															So striking at of to welcomed resolved. Northward by described up household therefore 
															attention. Excellence decisively nay man yet impression for contrasted remarkably.
														</p>
														<p>
															Forfeited you engrossed but gay sometimes explained. Another as studied it to evident. 
															Merry sense given he be arise. Conduct at an replied removal an amongst. Remaining 
															determine few her two cordially admitting old.
														</p>
														<blockquote>
															Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia 
															Curae; Pellentesque suscipit.
														</blockquote>
														<p>
															Tiled say decay spoil now walls meant house. My mr interest thoughts screened of outweigh 
															removing. Evening society musical besides inhabit ye my. Lose hill well up will he over on. 
															Increasing sufficient everything men him admiration unpleasing sex.
														</p>
														<ul class="list-style">
															<li>Greatest properly off ham exercise all.</li>
															<li>Unsatiable invitation its possession nor off.</li>
															<li>All difficulty estimating unreserved increasing the solicitude.</li>
														</ul>
														<p>
															Unpleasant astonished an diminution up partiality. Noisy an their of meant. Death means 
															up civil do an offer wound of.
														</p>
													</div>
													<a href="#" class="button">
														<span class="text">View Project</span>
														<span class="arrow"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- work item photo -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item photo border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="images/works/work5.webp" class="has-popup-image">
											<img src="images/works/work5.webp" class="lazyload" alt="" />
											<span class="info">
												<span class="ion ion-image"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="images/works/work5.webp" class="name has-popup-image">Gereal Travels</a>
										<div class="category">Photo</div>
									</div>
								</div>
							</div>

							<!-- work item music -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item music border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="https://w.soundcloud.com/player/?visual=true&amp;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&amp;show_artwork=true" class="has-popup-music">
											<img src="images/works/work8.webp" class="lazyload" alt="" />
											<span class="info">
												<span class="ion ion-music-note"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#" class="name has-popup">Daylight Entrance</a>
										<div class="category">Music</div>
									</div>
								</div>
							</div>

							<!-- work item video -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item video border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="https://vimeo.com/97102654" class="has-popup-video">
											<img src="images/works/work6.webp" class="lazyload" alt="" />
											<span class="info">
												<span class="ion ion-videocamera"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="https://vimeo.com/97102654" class="name has-popup-video">Architecture</a>
										<div class="category">Video</div>
									</div>
								</div>
							</div>

							<!-- work item design -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item design border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="#popup-2" class="has-popup-media">
											<img src="images/works/work7.webp" class="lazyload" alt="" />
											<span class="info">
												<span class="ion ion-images"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#popup-2" class="name has-popup-media">Social Website</a>
										<div class="category">Design</div>
									</div>
									<div id="popup-2" class="popup-box mfp-fade mfp-hide">
										<div class="content">
											<div class="image">
												<img src="images/works/work7.webp" class="lazyload" alt="">
											</div>
											<div class="desc">
												<div class="post-box">
													<h1>Mobile Application</h1>						
													<div class="blog-detail">Design</div>
													<div class="blog-content">
														<p>
															So striking at of to welcomed resolved. Northward by described up household therefore 
															attention. Excellence decisively nay man yet impression for contrasted remarkably.
														</p>
														<p>
															Forfeited you engrossed but gay sometimes explained. Another as studied it to evident. 
															Merry sense given he be arise. Conduct at an replied removal an amongst. Remaining 
															determine few her two cordially admitting old.
														</p>
														<blockquote>
															Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia 
															Curae; Pellentesque suscipit.
														</blockquote>
														<p>
															Tiled say decay spoil now walls meant house. My mr interest thoughts screened of outweigh 
															removing. Evening society musical besides inhabit ye my. Lose hill well up will he over on. 
															Increasing sufficient everything men him admiration unpleasing sex.
														</p>
														<ul class="list-style">
															<li>Greatest properly off ham exercise all.</li>
															<li>Unsatiable invitation its possession nor off.</li>
															<li>All difficulty estimating unreserved increasing the solicitude.</li>
														</ul>
														<p>
															Unpleasant astonished an diminution up partiality. Noisy an their of meant. Death means 
															up civil do an offer wound of.
														</p>
													</div>
													<a href="#" class="button">
														<span class="text">View Project</span>
														<span class="arrow"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>

			<!--
				Card - Blog
			-->
			<div class="card-inner blog" id="blog-card">
				<div class="card-wrap">

					<!--
						Blog
					-->
					<div class="content blog">

						<!-- title -->
						<div class="title">Latest Posts</div>

						<!-- content -->
						<div class="row border-line-v">

							<!-- blog item -->
							<div class="col col-d-12 col-t-12 col-m-12 border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="blog-post-new.html">
											<img src="images/blog/blog1.webp" class="lazyload" alt="" />
											<span class="info">
												<span class="ion ion-document-text"></span>
											</span>
											<span class="date"><strong>20</strong>Jun</span>
										</a>
									</div>
									<div class="desc">
										<a href="blog-post-new.html" class="name">By spite about do of do allow blush</a>
										<div class="category">Design</div>
									</div>
								</div>
							</div>

							<!-- blog item -->
							<div class="col col-d-12 col-t-12 col-m-12 border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="blog-post-new.html">
											<img src="images/blog/blog2.webp" class="lazyload" alt="" />
											<span class="info">
												<span class="ion ion-document-text"></span>
											</span>
											<span class="date"><strong>19</strong>Jun</span>
										</a>
									</div>
									<div class="desc">
										<a href="blog-post-new.html" class="name">Two Before Arrow Not Relied</a>
										<div class="category">Coding</div>
									</div>
								</div>
							</div>

							<!-- blog item -->
							<div class="col col-d-12 col-t-12 col-m-12 border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="blog-post-new.html">
											<img src="images/blog/blog3.webp" class="lazyload" alt="" />
											<span class="info">
												<span class="ion ion-document-text"></span>
											</span>
											<span class="date"><strong>20</strong>Jun</span>
										</a>
									</div>
									<div class="desc">
										<a href="blog-post-new.html" class="name">By spite about do of do allow blush</a>
										<div class="category">Travel</div>
									</div>
								</div>
							</div>

							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>

			<!--
				Card - Contacts
			-->
			<div class="card-inner contacts" id="contacts-card">
				<div class="card-wrap">

					<!--
						Conacts Info
					-->
					<div class="content contacts">

						<!-- title -->
						<div class="title">Get in Touch</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="map" id="map"></div>
								<div class="info-list">
									<ul>
										<li><strong>Address . . . . .</strong> Delhi, India</li>
										<li><strong>Email . . . . .</strong> mail@pankajjha.me</li>
										<li><strong>Phone . . . . .</strong> +91 847 001 9003</li>
										<li><strong>Freelance . . . . .</strong> Available</li>
									</ul>
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

					<!--
						Contact Form
					-->
					<div class="content contacts">

						<!-- title -->
						<div class="title">Contact Form</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="contact_form">
									<form id="cform" method="post">
										<div class="row">
											<div class="col col-d-6 col-t-6 col-m-12">
												<div class="group-val">
													<input type="text" name="name" placeholder="Full Name" />
												</div>
											</div>
											<div class="col col-d-6 col-t-6 col-m-12">
												<div class="group-val">
													<input type="text" name="email" placeholder="Email Address" />
												</div>
											</div>
											<div class="col col-d-12 col-t-12 col-m-12">
												<div class="group-val">
													<textarea name="message" placeholder="Your Message"></textarea>
												</div>
											</div>
										</div>
										<div class="align-left">
											<a href="#" class="button" onclick="$('#cform').submit(); return false;">
												<span class="text">Send Message</span>
												<span class="arrow"></span>
											</a>
										</div>
									</form>
									<div class="alert-success">
										<p>Thanks, your message is sent successfully.</p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
	
	<!--
		jQuery Scripts
	-->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.2/lazysizes.min.js"></script>
	
	<!--
		Google map api
	-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATxaTQG0nWLRTMMVu8pNPXzv_gnv8DFiY"></script>
	
	<!--
		Main Scripts
	-->
	<script src="<?php echo mix('/js/scripts.js'); ?>"></script>
	<script src="<?php echo mix('/js/app.js'); ?>"></script>
	
	
</body>

</html>