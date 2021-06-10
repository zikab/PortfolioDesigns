# Photographer Portfolio Design

on a desktop

![image](https://user-images.githubusercontent.com/32411021/121473655-dbbfbf80-c977-11eb-8c61-f6e8abc9665e.png)

on a tablet

![image](https://user-images.githubusercontent.com/32411021/121473691-e417fa80-c977-11eb-9787-57ea3ce88bc4.png)

on a phone

![image](https://user-images.githubusercontent.com/32411021/121473722-eed28f80-c977-11eb-9f44-010180966170.png)

on hover or on touch the colors will be back to normal

![image](https://user-images.githubusercontent.com/32411021/121473953-3ce79300-c978-11eb-9301-c601f72f441f.png)

<details>
<summary>click to see code</summary>

```
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="photo-camera.png" type="image/icon type">
	<style type="text/css">
		*{
			margin: 0;
		}
		.logo{
			width: 50pt;
		}
		.icon{
			width: 35pt;
		}
		.mePhoto{
			height: 300pt;
			width: 100%;
			object-fit: cover;
			filter:sepia(100%);
		}
		#nameP{
			/*margin-top: 7pt;*/
			font-weight: bold;
			font-size: 30pt;
			font-family: "Lucida Console", "Courier New", monospace;
			text-align: left;
			margin-left: 75pt;
		}
		#textDiv{
			width: 40%;
			float:left;
			text-align: center;
			font-family: "Lucida Console", "Courier New", monospace;
			margin-top: 8pt;
		}
		/*#iconDiv{
			width: 20%;
			float:left
		}*/
		#nameDiv{
			width: 30%;
			float:left;
		}
		#socialmediaDiv{
			text-align: right;
			float:left;
			/*margin-right: 75pt;*/
			width: 24%;
		}
		#menuDiv{
			width: 100%;
			margin-right: 50pt;
			margin-top: 2.7pt;
			text-align: center;
		}
		#meDiv{
			
		}
		#workDiv{

		}
		#socialmediaInstagram{
			/*margin-top: 7pt;*/
		}
		#socialmediaFacebook{
			margin-left: 10pt;
			/*margin-top: 7pt;*/
		}
		#socialmediaSnapchat{
			margin-left: 10pt;
			/*margin-top: 7pt;*/
		}
		#socialmediaWhatsapp{
			margin-left: 10pt;
			/*margin-top: 7pt;*/
		}
		.container{
			width: 100%;
			text-align: center;
		}
		.child2{
			float:left;
			width: 47%;
			text-align: center;
			padding: 1.5%;
		}
		.child3{
			float:left;
			width: 30%;
			text-align: center;
			padding: 1.5%;
		}
		.work{
			height: 200pt;
			width: 100%;
			object-fit: cover;
			filter:sepia(100%);
		}
		/*for on hover on PC and on phones it is on touch */
		@media (hover: hover) and (pointer: fine) {
			.work:hover, .mePhoto:hover {
			  	filter:sepia(0%);
			}
			.icon:hover{
				filter:opacity(70%);
			}
		}
	/*other devices, sizes from https://www.w3schools.com/css/css_rwd_mediaqueries.asp*/
	@media only screen and (max-width: 400px) {
		#textDiv{
			width: 0;
		}
		#socialmediaDiv{
			width: 30%;
			margin-left: 20pt;
		}
		#nameDiv{
			width: 50%;
		}
	}
	@media only screen and (max-width: 550px) {
		#textDiv{
			filter:opacity(0%);
		}
	}
	/* Extra small devices (phones, 600px and down) */
	@media only screen and (max-width: 600px) {
		.icon{
			width: 25pt;
		}
		#nameP{
			margin-left:25pt;
		}
		#textDiv{
			margin-top: 17pt;
		}
		#socialmediaDiv{
			margin-top: 7pt;
			/*width: 20%;*/
		}
	}
	/* Small devices (portrait tablets and large phones, 600px and up) */
	@media only screen and (min-width: 600px) {
		#nameP{
			margin-left:25pt;
		}
		#textDiv{
			margin-top: 17pt;
		}

	}
	/* Medium devices (landscape tablets, 768px and up) */
	@media only screen and (min-width: 768px) {}
	/* Large devices (laptops/desktops, 992px and up) */
	@media only screen and (min-width: 980px) {
		#nameP{
			margin-left:55pt;
			width: 100%;
		}
		#socialmediaDiv{
			width: 27%;
		}
	}
	/* Extra large devices (large laptops and desktops, 1200px and up) */
	@media only screen and (min-width: 1200px) {} 

	</style>
</head>
<body>
	<div id="menuDiv">
		<!-- <div id="iconDiv"><img src="photo-camera.png"  class="logo"></div> -->
		<div id="nameDiv"><p id="nameP">CAMERA MAN</p></div>
		<div  id="textDiv">a man who loves photography</div>
		<div id="socialmediaDiv">
			<img src="instagram.png" class="icon" id="socialmediaInstagram"> 
			<img src="facebook.png" class="icon" id="socialmediaFacebook">
			<img src="snapchat.png" class="icon" id="socialmediaSnapchat">
			<img src="whatsapp.png" class="icon" id="socialmediaWhatsapp">
		</div>
	</div>
	<div id="meDiv">
		<img src="jakob-owens-DQPP9rVLYGQ-unsplash.jpg" class="mePhoto">
	</div>
	<div id="workDiv">
		<div class="container">
			<div class="child3"><img src="work/1.jpg"  class="work"></div>
			<div class="child3"><img src="work/2.jpg"  class="work"></div>
			<div class="child3"><img src="work/3.jpg"  class="work"></div>
		</div>
		<div>
			<div class="child2"><img src="work/4.jpg"  class="work"></div>
			<div class="child2"><img src="work/5.jpg"  class="work"></div>
		</div>
		<div>
			<div class="child3"><img src="work/6.jpg"  class="work"></div>
			<div class="child3"><img src="work/2.jpg"  class="work"></div>
			<div class="child3"><img src="work/3.jpg"  class="work"></div>
		</div>
	</div>

</body>
</html>
```

</details>

