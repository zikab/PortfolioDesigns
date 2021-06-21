<!doctype html>
<html>
  <head>
  	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  	<link rel="icon" href="https://via.placeholder.com/5">
  	<style>
  		*{
  			font-family: "Roboto", sans-serif;
  			padding: 0; 
  			/*margin: 0;*/
  			margin: 5px;
  		}
  		html, body {
		    height: 100%;
		    width: 100%;
		    margin: 0;
		}
		.container{
			border: 5px solid red;
			display: grid;
    		flex-direction: row;
			/*justify-content:center;*/
			grid-template-rows: 1fr 1fr 1fr 1fr;
			grid-gap:12px;

		}
		.bigBox{
			display: flex;
			flex-direction: column;
			border: 5px solid blue;
			/*justify-content:center;*/
			width: 100%;
			height: 600px;
			/*grid-template-columns: 20% 80%;*/
		}
		.smallBox{
			flex-direction: row;
			display: flex;
			border: 5px solid pink;
			/*justify-content:center;*/
			width: 100%;
			height: 100%;
		}
		#column{
			flex-direction: row;
			/*width: 50%;*/

		}
		#menuBar{
			flex-direction: row;
			border: 5px solid yellow;
			height: 10%;
		}
		#menu{
			height: 40px;
			width: 50%;
		}
		#logo{
			height: 40px;
			width: 50%;
		}
		#title{
			height: 20%;
			font-size: 50pt;
			padding-left: 10%;
			width: 70%;
		}
		
		@media(min-width:900px) {
			/*.small{
				display: inline-block;
			}*/
			/*grid-template-area: ;*/
		}
		/*Background-img:url(‘’);
		Background-size:*/
	</style>
  </head>
  <body>
  	<div class="container">
  		<div class="bigBox">
  			<div class="smallBox" id="menuBar">
  				<div class="smallBox" id="logo">
  				
	  			</div>
	  			<div class="smallBox" id="menu">
	  				
	  			</div>
  			</div>
  			<div class="smallBox">
  				<div class="smallBox">
	  				
	  			</div>
	  			<div class="smallBox">
	  				
	  			</div>
  			</div>
  		</div>
  		<div class="bigBox" id="column">
  			<div class="smallBox">
  				
	  			</div>
	  			<div class="smallBox" >
	  				
	  			</div>
  		</div>
  		<div class="bigBox">
  			<div class="smallBox" id="title">
  				<p>title</p>
  			</div>
  			<div class="smallBox">
  				<div class="smallBox">
	  				
	  			</div>
	  			<div class="smallBox">
	  				
	  			</div>
	  			<div class="smallBox">
	  				
	  			</div>

  			</div>
  		</div>
  		<div class="bigBox">
  			
  		</div>
  		
  	</div>
  </body>

</html>

<script type="text/javascript">
	(function(){
		$(document).ready(function(){
		   	$('#pageContainer').load("home.html");
		});
		$("#home").click(function() {
		  	$('#pageContainer').load("home.html");
		});
		$("#about").click(function() {
		  	$('#pageContainer').load("about.html");
		
	}());
</script>