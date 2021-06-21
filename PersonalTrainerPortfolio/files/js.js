function openWindow(URL){
	var win = window.open(URL, '_blank');
	if (win) {
	    //Browser has allowed it to be opened
	    win.focus();
	} else {
	    //Browser has blocked it
	    alert('Please allow popups for this website');
	}
}
var flagIntro = true;
var flagProfile = true;
var flagWorkouts = true;
var flagPackages = true;
var flagArticles = true;
var flagContactMe = true;

function animateFade(id, flag, animation){
	if(flag){
		$(id).addClass(animation);
		removeAnimation(id,animation);
	}
}

function removeAnimation(id, animationName){
	$(id).on("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){
        $(this).removeClass(animationName);
    });
}
function underLineMenuItem(id){
	$(id).css("text-decoration", "underline");
	if(id=="#homeMenuBtn"){
		$("#aboutmeMenuBtn").css("text-decoration", "none");
		$("#workoutMenuBtn").css("text-decoration", "none");
		$("#packageMenuBtn").css("text-decoration", "none");
		$("#contactmeMenuBtn").css("text-decoration", "none");
	}else if(id=="#aboutmeMenuBtn"){
		$("#homeMenuBtn").css("text-decoration", "none");
		$("#workoutMenuBtn").css("text-decoration", "none");
		$("#packageMenuBtn").css("text-decoration", "none");
		$("#contactmeMenuBtn").css("text-decoration", "none");
	}else if(id=="#workoutMenuBtn"){
		$("#homeMenuBtn").css("text-decoration", "none");
		$("#aboutmeMenuBtn").css("text-decoration", "none");
		$("#packageMenuBtn").css("text-decoration", "none");
		$("#contactmeMenuBtn").css("text-decoration", "none");
	}else if(id=="#packageMenuBtn"){
		$("#homeMenuBtn").css("text-decoration", "none");
		$("#aboutmeMenuBtn").css("text-decoration", "none");
		$("#workoutMenuBtn").css("text-decoration", "none");
		$("#contactmeMenuBtn").css("text-decoration", "none");
	}else if(id=="#contactmeMenuBtn"){
		$("#homeMenuBtn").css("text-decoration", "none");
		$("#aboutmeMenuBtn").css("text-decoration", "none");
		$("#workoutMenuBtn").css("text-decoration", "none");
		$("#packageMenuBtn").css("text-decoration", "none");
	}
}

$(document).ready(function(){
	animateFade("#moto", flagIntro, "fadeAnimation");
	animateFade("#motoBackground", flagIntro, "fadeAnimationTwo");
	underLineMenuItem("#homeMenuBtn");

	$(window).scroll(function(){
		var posTop = $(document).scrollTop();
		console.log(posTop);

		//based on scroll bar location do animation
		if(posTop >= $("#intro").offset().top && posTop < $("#profileBox").offset().top-350){
			animateFade("#moto", flagIntro, "fadeAnimation");
			animateFade("#motoBackground", flagIntro, "fadeAnimationTwo");

			flagIntro = false;
			flagProfile = true;
			flagWorkouts = true;
			flagPackages = true;
			flagContactMe = true;

			underLineMenuItem("#homeMenuBtn");
		}
		if(posTop >= $("#profileBox").offset().top-350 && posTop < $("#workoutBigBox").offset().top-350){
			// animateFade("#name", flagProfile, "BiggerAnimation");
			animateFade("#profilePic", flagProfile, "slideLeftRightAnimation");
			animateFade("#snapchatIcon", flagProfile, "slideRightLeftAnimation");
			animateFade("#InstagramIcon", flagProfile, "slideRightLeftAnimation");
			animateFade("#TwitterIcon", flagProfile, "slideRightLeftAnimation");
			animateFade("#gmailIcon", flagProfile, "slideRightLeftAnimation");

			flagProfile = false;
			flagIntro = true;
			flagWorkouts = true;
			flagPackages = true;
			flagContactMe = true;

			underLineMenuItem("#aboutmeMenuBtn");
		}
		if(posTop >= $("#workoutBigBox").offset().top-350 && posTop < $("#packageBackground").offset().top-350){
			// animateFade("#workoutDiv", flagWorkouts, "greyScaleAnimation");
			// animateFade(".workoutBox", flagWorkouts, "slideRightLeftAnimation");

			animateFade("#workoutBox1", flagWorkouts, "slideRightLeftAnimation");
			animateFade("#workoutBox2", flagWorkouts, "slideRightLeftAnimation3");
			animateFade("#workoutBox3", flagWorkouts, "slideRightLeftAnimation4");
			animateFade("#workoutBox4", flagWorkouts, "slideRightLeftAnimation5");

			flagWorkouts = false;
			flagProfile = true;
			flagIntro = true;
			flagPackages = true;
			flagContactMe = true;

			underLineMenuItem("#workoutMenuBtn");
		}
		if(posTop >= $("#packageBackground").offset().top-350 && posTop < $("#articleDiv").offset().top-350){
			animateFade(".packageBox", flagPackages, "sizeUpAnimation");

			flagPackages = false;
			flagProfile = true;
			flagIntro = true;
			flagWorkouts = true;
			flagContactMe = true;

			underLineMenuItem("#packageMenuBtn");
		}
		if(posTop >= $("#articleDiv").offset().top-350 && posTop < $("#formDiv").offset().top-350){
			flagProfile = true;
			flagIntro = true;
			flagWorkouts = true;
			flagPackages = true;
			flagContactMe = true;

		}
		if(posTop >= $("#formDiv").offset().top-350){
			animateFade("#contactUsImg", flagContactMe, "widenAnimation");

			flagContactMe = false;
			flagProfile = true;
			flagIntro = true;
			flagWorkouts = true;
			flagPackages = true;

			underLineMenuItem("#contactmeMenuBtn");
		}	
	});

	//social media icons links
 	$("#snapchatIcon").click(function() {
 		openWindow('http://snapchat.com/');
	});
	$("#InstagramIcon").click(function() {
 		openWindow('http://instagram.com/');
	});
	$("#TwitterIcon").click(function() {
 		openWindow('http://twitter.com/');
	});
	$("#gmailIcon").click(function() {
 		openWindow('http://https://www.google.com/intl/ar/gmail/about/');
	});

	//scroll down to section when clicking on menu items
	$("#homeMenuBtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#motoBackground").offset().top
    }, 2000);
	});
	$("#aboutmeMenuBtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#profileBox").offset().top
    }, 2000);

	});
	$("#workoutMenuBtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#workoutBigBox").offset().top
    }, 2000);
	});
	$("#packageMenuBtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#packageBackground").offset().top
    }, 2000);
	});
	$("#articleMenuBtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#articleDiv").offset().top
    }, 2000);
	});
	$("#contactmeMenuBtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#formDiv").offset().top
    }, 2000);
	});

	//on hover
	$(".menuItem").hover(function(){
	  $(this).css("font-weight", "bold");
	  }, function(){
	  $(this).css("font-weight", "normal");
	});
	$(".socialMediaIcon").hover(function(){
	  $(this).css("opacity", "0.6");
	  }, function(){
	  $(this).css("opacity", "1");
	});
	$(".packageBox").hover(function(){
	  $(this).css("width", "80%");
	  $(this).css("margin-left", "10%");
	  }, function(){
	  $(this).css("width", "50%");
	  $(this).css("margin-left", "25%");
	});
	$(".workoutImg").hover(function(){
	  $(this).css("opacity", "0.7");
	  }, function(){
	  $(this).css("opacity", "1");
	});

});