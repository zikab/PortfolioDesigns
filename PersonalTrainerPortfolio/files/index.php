<!doctype html>
<html>
  <head>
  	<link rel="icon" href="https://via.placeholder.com/5">
  	<link rel="stylesheet" type="text/css" href="css.css">
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
  	<script type='text/javascript' src="js.js"></script>
  </head>
  <body>
  	<div class="container">
  		<div id="intro" class="bigBox">
  			<div id="menuBar" class="smallBox">
  				<div class="smallBox">
  				<img src="icons/logo.png" id="logo"> 
  				<p id="logoName">logo name</p>
  				<img src="icons/hamburger.png" id="menuBtn">
	  			</div>
	  			<div id="menu" class="smallBox">
	  				<p id="homeMenuBtn" class="menuItem">Home</p>
	  				<p id="aboutmeMenuBtn" class="menuItem">About Me</p>
	  				<p id="workoutMenuBtn" class="menuItem">Workouts</p>
	  				<p id="packageMenuBtn" class="menuItem">Packages</p>
	  				<!-- <p id="articleMenuBtn" class="menuItem">Articles</p> -->
	  				<p id="contactmeMenuBtn" class="menuItem">Contact Me</p>
	  			</div>
  			</div>
  			<div id="motoBackground" class="smallBox">
  				<div class="smallBox center">
	  				<div id="moto">I BELIEVE IN YOU</div>
	  			</div>
  			</div>
  		</div>
  		<div id="column" class="bigBox" style="background: #9b9b9b;">
  			<div id="profileBox" class="smallBox">
	  			<div id="profilePic" class="smallBox">
		  		</div>
		  		<div class="width">
		  			<h1 id="name">FristName LastName</h1>
		  			<p id="aboutMeParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor. In sed mi eget dolor aliquam porttitor eget sit amet eros. Integer pretium cursus sagittis. Morbi at enim mattis nibh pharetra lacinia at in ipsum. Phasellus eu felis bibendum, congue dui vel, semper leo. In nisl urna, condimentum euismod porttitor id, efficitur bibendum eros.
						Nulla interdum quis nibh sed facilisis. Aenean suscipit est metus, et malesuada eros molestie at. Phasellus tincidunt id dui nec luctus. Donec at nulla convallis, luctus nibh rutrum, posuere justo. Etiam sed ex commodo, auctor justo vel, faucibus nulla. Nulla faucibus, dui vel aliquam vulputate, enim mauris dapibus enim, sit amet tempus odio quam vitae velit. Nulla facilisi.</p>
					<div id="socialMedia">
						<img id="snapchatIcon" class="socialMediaIcon" src="icons/snapchat.png"> 
						<img id="InstagramIcon" class="socialMediaIcon" src="icons/instagram.png"> 
						<img id="TwitterIcon" class="socialMediaIcon" src="icons/twitter.png"> 
						<img id="gmailIcon" class="socialMediaIcon" src="icons/gmail.png"> 
					</div>
		  		</div>
	  		</div>
  		</div>
  		<div id="workoutBigBox" class="bigBox">
  			<div class="smallBox" id="title">
  				<p id="workoutTitle">Workouts</p>
  			</div>
  			<div id="workoutDiv" class="smallBox" style="height: 80%;">
  				<img src="icons/leftArrowIcon.png" id="arrow">

	  			<div id="workoutBox1" class="workoutBox smallBox">
		  			<img src="images/plank.jpeg" class="workoutImg smallBox">
		  			<h1 class="workoutHeader">workout 1</h1>
		  			<br>
		  			<p id="workoutParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor. In sed mi eget dolor aliquam porttitor eget sit amet eros. Integer pretium cursus sagittis.</p>
		  			<br>
		  			<p id="workoutprice">$$$</p>
	  			</div>
	  			<div id="workoutBox2" class="workoutBox smallBox">
		  			<img src="images/abs.jpg" class="workoutImg smallBox">
		  			<h1 class="workoutHeader">workout 2</h1>
		  			<br>
		  			<p id="workoutParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor. In sed mi eget dolor aliquam porttitor eget sit amet eros. Integer pretium cursus sagittis.</p>
		  			<br>
		  			<p id="workoutprice">free</p>
	  			</div>
	  			<div id="workoutBox3" class="workoutBox smallBox">
		  			<img src="images/running.jpg" class="workoutImg smallBox">
		  			<h1 class="workoutHeader">workout 3</h1>
		  			<br>
		  			<p id="workoutParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor. In sed mi eget dolor aliquam porttitor eget sit amet eros. Integer pretium cursus sagittis.</p>
		  			<br>
		  			<p id="workoutprice">free</p>
	  			</div>
	  			<div id="workoutBox4" class="workoutBox smallBox">
		  			<img src="images/weightlifting.jpeg" class="workoutImg smallBox">
		  			<h1 class="workoutHeader">workout 4</h1>
		  			<br>
		  			<p id="workoutParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor. In sed mi eget dolor aliquam porttitor eget sit amet eros. Integer pretium cursus sagittis.</p>
		  			<br>
		  			<p id="workoutprice">$$$</p>
	  			</div>
			<img src="icons/rightArrowIcon.png" id="arrow">
  			</div>
  		</div>
  		<div id="packageBackground" class="bigBox">
  			<div class="smallBox packageBox">
  				<img src="images/weightlifting.jpeg" class="packageImg">
  				<div>
  					<h1 class="packageHeader">package 1</h1>
  					<p class="packageText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor. In sed mi eget dolor aliquam porttitor eget sit amet eros. Integer pretium cursus sagittis.</p>
  					<br>
  					<p>price $$$</p>
  				</div>
  			</div>
  			<div class="smallBox packageBox">
  				<img src="images/running.jpg" class="packageImg">
  				<div>
  					<h1 class="packageHeader">package 1</h1>
  					<p class="packageText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor. In sed mi eget dolor aliquam porttitor eget sit amet eros. Integer pretium cursus sagittis.</p>
  					<br>
  					<p>price $$$</p>
  				</div>
  			</div>
  			<div class="smallBox packageBox">
  				<img src="images/deadlift2.jpg" class="packageImg">
  				<div>
  					<h1 class="packageHeader">package 1</h1>
  					<p class="packageText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor. In sed mi eget dolor aliquam porttitor eget sit amet eros. Integer pretium cursus sagittis.</p>
  					<br>
  					<p>price $$$</p>
  				</div>
  			</div>
  		</div>
  		<div id="articleDiv" class="bigBox">
  			<div id="bigArticle" class="smallBox">
  				<div id="bigArticleBox" class="smallBox">
  					<img src="images/dumbells.jpg" id="bigArticleImg">
  					<div id="articleBixOne">
  						<h1 class="articleHeader">Article Title</h1>
  						<br>
  						<div id="bigArticleParagraph">
  							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ligula orci. Fusce finibus vitae quam et porttitor.</p>
  					</div>
  					</div>
  				</div>
  			</div>
  			<div id="articles" class="smallBox">
  				<div id="articleScrollBox">
	  				<div class="smallBox" id="articleBox">
	  					<img src="images/rest.jpg" id="articleImg">
	  					<div style="width: 100%;">
	  						<h1 class="articleTitle">article 1</h1>
	  					</div>
	  				</div>
  					<div class="smallBox" id="articleBox">
	  					<img src="images/rest.jpg" id="articleImg">
	  					<div style="width: 100%;">
	  						<h1 class="articleTitle">article 2</h1>
	  					</div>
	  				</div>
	  				<div class="smallBox" id="articleBox">
	  					<img src="images/rest.jpg" id="articleImg">
	  					<div style="width: 100%;">
	  						<h1 class="articleTitle">article 3</h1>
	  					</div>
	  				</div>
	  				<div class="smallBox" id="articleBox">
	  					<img src="images/rest.jpg" id="articleImg">
	  					<div style="width: 100%;">
	  						<h1 class="articleTitle">article 4</h1>
	  					</div>
	  				</div>
	  				<div class="smallBox" id="articleBox">
	  					<img src="images/rest.jpg" id="articleImg">
	  					<div style="width: 100%;">
	  						<h1 class="articleTitle">article 5</h1>
	  					</div>
	  				</div>
	  				<div class="smallBox" id="articleBox">
	  					<img src="images/rest.jpg" id="articleImg">
	  					<div style="width: 100%;">
	  						<h1 class="articleTitle">article 6</h1>
	  					</div>
	  				</div>
	  				<div class="smallBox" id="articleBox">
	  					<img src="images/rest.jpg" id="articleImg">
	  					<div style="width: 100%;">
	  						<h1 class="articleTitle">article 7</h1>
	  					</div>
	  				</div>
	  				<div class="smallBox" id="articleBox">
	  					<img src="images/rest.jpg" id="articleImg">
	  					<div style="width: 100%;">
	  						<h1 class="articleTitle">article 8</h1>
	  					</div>
	  				</div>
	  				<div class="smallBox" id="articleBox">
	  					<img src="images/rest.jpg" id="articleImg">
	  					<div style="width: 100%;">
	  						<h1 class="articleTitle">article 9</h1>
	  					</div>
	  				</div>
	  				<div class="smallBox" id="articleBox">
	  					<img src="images/rest.jpg" id="articleImg">
	  					<div style="width: 100%;">
	  						<h1 class="articleTitle">article 10</h1>
	  					</div>
	  				</div>
	  				<div class="smallBox" id="articleBox">
	  					<img src="images/rest.jpg" id="articleImg">
	  					<div style="width: 100%;">
	  						<h1 class="articleTitle">article 11</h1>
	  					</div>
	  				</div>
	  				<div class="smallBox" id="articleBox">
	  					<img src="images/rest.jpg" id="articleImg">
	  					<div style="width: 100%;">
	  						<h1 class="articleTitle">article 12</h1>
	  					</div>
	  				</div>
  				</div>
  			</div>
  			
  		</div>
  		<div class="bigBox">
  			<div id="formDiv" class="smallBox">
  				<div id="formBox" class="smallBox">
  				 <form action="/action_page.php">
				    <!-- <label for="fname">Name</label> -->
				    <br>
				    <input type="text" id="fname" name="firstname" placeholder="Name">
				    <br>
				    <!-- <label for="email">Email</label> -->
				    <!-- <br> -->
				    <input type="text" id="email" name="email" placeholder="Email@hotmail.com">
					<br>
				    <!-- <label for="subjectForm">Message</label> -->
				    <!-- <br> -->
				    <textarea type="text" id="subjectForm" name="subject" placeholder="Message"></textarea>
				    <br>
				    <input type="submit" value="Send">
				  </form>
  			</div>
  			<div id="contactUsImg" class="smallBox">
  				<p style="font-size: 70px;color: white; font-weight: 900; text-align: center;">TAKE YOUR FIRST</p>
  				<p style="font-size: 100px; color: white; font-weight: 900; text-align: center;"> STEP</p>
  			</div>
  			</div>
  		</div>
  	</div>
  	<div id="footer" class="smallBox">
  				<p>@ 2020 footer@hotmail.com</p>
  			</div>
  </body>

</html>