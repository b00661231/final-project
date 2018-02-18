$(document).ready(function(){
	
	$("#AboutUs-Contents").hide();
	$("#ContactUs-Contents").hide();
	$("#Register-Contents").hide();
	$("#Login-Contents").hide();
	$("#Terms-Contents").hide();
	$("#PrivacyPolicy-Contents").hide();
		
	$("#HomePage-Contents").show();
	
	
	
	
	$("#navbtn-home").click(function() {
		
		$("#HomePage-Contents").show();
		$("#navbtn-home").addClass("active");
		
		$("#AboutUs-Contents").hide();
		$("#navbtn-about").removeClass("active");
		
		$("#ContactUs-Contents").hide();
		$("#navbtn-contact").removeClass("active");
		
		$("#Register-Contents").hide();
		$("#navbtn-register").removeClass("active");
		
		$("#Login-Contents").hide();
		$("#navbtn-login").removeClass("active");
		
		$("#Terms-Contents").hide();
		$("#navbtn-terms").removeClass("active");
		
		$("#PrivacyPolicy-Contents").hide();
		$("#navbtn-privacy").removeClass("active");
	});
	
	
	$("#navbtn-about").click(function() {
		
		$("#HomePage-Contents").hide();
		$("#navbtn-home").removeClass("active");
		
		$("#AboutUs-Contents").show();
		$("#navbtn-about").addClass("active");
		
		$("#ContactUs-Contents").hide();
		$("#navbtn-contact").removeClass("active");
		
		$("#Register-Contents").hide();
		$("#navbtn-register").removeClass("active");
		
		$("#Login-Contents").hide();
		$("#navbtn-login").removeClass("active");
		
		$("#Terms-Contents").hide();
		$("#navbtn-terms").removeClass("active");
		
		$("#PrivacyPolicy-Contents").hide();
		$("#navbtn-privacy").removeClass("active");
	});
	
	
	$("#navbtn-contact").click(function() {
		
		$("#HomePage-Contents").hide();
		$("#navbtn-home").removeClass("active");
		
		$("#AboutUs-Contents").hide();
		$("#navbtn-about").removeClass("active");
		
		$("#ContactUs-Contents").show();
		$("#navbtn-contact").addClass("active");
		
		$("#Register-Contents").hide();
		$("#navbtn-register").removeClass("active");
		
		$("#Login-Contents").hide();
		$("#navbtn-login").removeClass("active");
		
		$("#Terms-Contents").hide();
		$("#navbtn-terms").removeClass("active");
		
		$("#PrivacyPolicy-Contents").hide();
		$("#navbtn-privacy").removeClass("active");
	});
	
	
	$("#navbtn-register").click(function() {
		
		$("#HomePage-Contents").hide();
		$("#navbtn-home").removeClass("active");
		
		$("#AboutUs-Contents").hide();
		$("#navbtn-about").removeClass("active");
		
		$("#ContactUs-Contents").hide();
		$("#navbtn-contact").removeClass("active");
		
		$("#Register-Contents").show();
		$("#navbtn-register").addClass("active");
		
		$("#Login-Contents").hide();
		$("#navbtn-login").removeClass("active");
		
		$("#Terms-Contents").hide();
		$("#navbtn-terms").removeClass("active");
		
		$("#PrivacyPolicy-Contents").hide();
		$("#navbtn-privacy").removeClass("active");
	});
	
	
	$("#navbtn-login").click(function() {
		
		$("#HomePage-Contents").hide();
		$("#navbtn-home").removeClass("active");
		
		$("#AboutUs-Contents").hide();
		$("#navbtn-about").removeClass("active");
		
		$("#ContactUs-Contents").hide();
		$("#navbtn-contact").removeClass("active");
		
		$("#Register-Contents").hide();
		$("#navbtn-register").removeClass("active");
		
		$("#Login-Contents").show();
		$("#navbtn-login").addClass("active");
		
		$("#Terms-Contents").hide();
		$("#navbtn-terms").removeClass("active");
		
		$("#PrivacyPolicy-Contents").hide();
		$("#navbtn-privacy").removeClass("active");
	});
	
	
	$("#navbtn-terms").click(function() {
		
		$("#HomePage-Contents").hide();
		$("#navbtn-home").removeClass("active");
		
		$("#AboutUs-Contents").hide();
		$("#navbtn-about").removeClass("active");
		
		$("#ContactUs-Contents").hide();
		$("#navbtn-contact").removeClass("active");
		
		$("#Register-Contents").hide();
		$("#navbtn-register").removeClass("active");
		
		$("#Login-Contents").hide();
		$("#navbtn-login").removeClass("active");
		
		$("#Terms-Contents").show();
		$("#navbtn-terms").addClass("active");
		
		$("#PrivacyPolicy-Contents").hide();
		$("#navbtn-privacy").removeClass("active");
	});
	
	
	$("#navbtn-privacy").click(function() {
		
		$("#HomePage-Contents").hide();
		$("#navbtn-home").removeClass("active");
		
		$("#AboutUs-Contents").hide();
		$("#navbtn-about").removeClass("active");
		
		$("#ContactUs-Contents").hide();
		$("#navbtn-contact").removeClass("active");
		
		$("#Register-Contents").hide();
		$("#navbtn-register").removeClass("active");
		
		$("#Login-Contents").hide();
		$("#navbtn-login").removeClass("active");
		
		$("#Terms-Contents").hide();
		$("#navbtn-terms").removeClass("active");
		
		$("#PrivacyPolicy-Contents").show();
		$("#navbtn-privacy").addClass("active");
	});
	
});

