<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Vollkorn">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Aladin" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<title> Syntank | Welcome</title>
	</head>

	<body>
		<header>
			<div class="container">
				<div id="logo">
					<h1> <span class="highlight">S</span>yntank</h1>
					<div class="handle"></div>
				</div>
				
				<nav>
					<ul>
						<li class="current"> <a href="index.php">Home</a></li>
						<li> <a href="about.php">About</a></li>
						<li> <a href="signup.php">Sign up</a></li>
						<li> <a href="login.php">Log in</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<section id="banner">
			<div class="container">
				<h1>A platform to develop your skills</h1>

				<p>Syntank is an educational platform that enriches value of skill development with curriculum learning. A platform to learn your basics and develop your skills.</p>

				<button>Create an account</button>
			</div>
		</section>

		<section id="box">
			<div class="container">

				<a href="workshop.php" class="block" id="first-block">
					<div class="boxes">
						<img src="images/workshop.png">
						<h3>Workshops</h3>
						<p>Don't just read concepts but learn practical applications. Register your school with us to have session for class 5th to 10th.<br /><span>Register for Workshop</span></p>
					</div>
				</a>

				<a href="project-studio.php" class="block">
					<div class="boxes">
						<img src="images/projects.png">
						<h3>Project Studio</h3>
						<p>If you're looking for something that can make learning interesting and entertaining then Syntank Project Kits would be best for you.<br /><span>Buy Projects</span></p>
					</div>
				</a>

				<a href="internship.php" class="block">
					<div class="boxes">
						<img src="images/internship.png">
						<h3>Internship Placement</h3>
						<p>Get some experience before you get job. Fruitful internships could give you juicy jobs. Apply for internship based on your field.<br /><span>Get Placed</span></p>
					</div>
				</a>

				<a href="reward.php" class="block">
					<div class="boxes">
						<img src="images/workhouse.png">
						<h3>Get Rewarded</h3>
						<p>Earn points everyday and get rewarded while learning on Syntank.<br /><span>Join Syntank</span></p>
					</div>
				</a>

			</div>
		</section>

		<section id="debate-forum">
			<div id="debate-container">
				
				<a href="social-learning.php" id="social-learning">
					<img src="images/social-learning.png">
					<h3>Social Learning</h3>
					<p>Debate on topics with outstanding students. Make friends while learning.<br /><span>Join Now</span></p>
				</a>

				<div id="forum">
					<a class="debate" href="debate-registration.php">
						<h3>Debate and Learn</h3>
					</a>
					
					<div class="title">
						<!-- <h3><a href="#"></a></h3> -->

						<p><img style="border-radius: 50%" src="images/avatar1.png" align="left">Restrictions for cars based on emission testing and level of pollution should be mandatory in India...<a href="#" style="color: #1d30e0; text-decoration: underline;">(more)</a></p>
					</div>

					<div class="title">
						<!--<h3><a href="#"></a></h3> -->

						<p><img style="border-radius: 50%" src="images/avatar1.png" align="left">Is global warming real...<a href="#" style="color: #1d30e0; text-decoration: underline;">(more)</a></p>
					</div>

					<div class="title">
						<!--<h3><a href="#"></a></h3>-->

						<p><img style="border-radius: 50%" src="images/avatar1.png" align="left">Is chocolate a sleep inducer?<a href="#" style="color: #1d30e0; text-decoration: underline;">(more)</a></p>
					</div>

					<a class="debate" href="debate-registration.php" style="margin-top: 30px;">
						<h3>Ongoing debate topics</h3>
					</a>
					
					<div class="title">
						<!-- <h3><a href="#"></a></h3> -->

						<p><img style="border-radius: 50%" src="images/avatar1.png" align="left">Restrictions for cars based on emission testing and level of pollution should be mandatory in India...<a href="#" style="color: #1d30e0; text-decoration: underline;">(more)</a></p>
					</div>

					<div class="title">
						<!--<h3><a href="#"></a></h3> -->

						<p><img style="border-radius: 50%" src="images/avatar2.png" align="left">Is global warming real...<a href="#" style="color: #1d30e0; text-decoration: underline;">(more)</a></p>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div id="footer-container">
				<div id="copyright">
					<p>Copyright &copy; Syntank Educational Services, 2018</p>
					<p>All rights reserved.</p>
				</div>

				<div id="links">
					<h3>Syntank</h3>

					<a href="contact.php"><p>Contact us</p></a>
					<a href="job.php"><p>Work with us</p></a>
					<a href="privacy.php"><p>Privacy Policy</p></a>
					<a href="terms.phpp"><p>Terms &amp; Condition</p></a>
				</div>

				<div id="social-media">
					<h3>Social Media</h3>
					<p><a href="#">Facebook<img src="images/facebook.png"></a></p>
					<p><a href="#">Twitter<img src="images/twitter.png"></a></p>
					<p><a href="#">Whatsapp<img src="images/whatsapp.png"></a></p>
					<p><a href="#">Instagram<img src="images/instagram.png"></a></p>
				</div>
			</div>
		</footer>

		<script>
			$('.handle').on('click', function(){
				$('nav').toggleClass('showing');
			});
		</script>
	</body>
</html>
