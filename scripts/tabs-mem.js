$(document).ready(function(){
	
	$("#MemberSearch-Contents").hide();
	$("#AddDeceased-Contents").hide();
			
	$("#MemberProfile-Contents").show();
		
	
	
	$("#navbtn-MemberProfile").click(function() {
		
		$("#MemberProfile-Contents").show();
		$("#navbtn-MemberProfile").addClass("active");
		
		$("#MemberSearch-Contents").hide();
		$("#navbtn-Search").removeClass("active");
		
		$("#AddDeceased-Contents").hide();
		$("#navbtn-addDeceased").removeClass("active");
			
	});
	
	
	$("#navbtn-Search").click(function() {
		
		$("#MemberProfile-Contents").hide();
		$("#navbtn-MemberProfile").removeClass("active");
		
		$("#MemberSearch-Contents").show();
		$("#navbtn-Search").addClass("active");
		
		$("#AddDeceased-Contents").hide();
		$("#navbtn-addDeceased").removeClass("active");
			
	});
	
	
	
	$("#navbtn-addDeceased").click(function() {
		
		$("#MemberProfile-Contents").hide();
		$("#navbtn-MemberProfile").removeClass("active");
		
		$("#MemberSearch-Contents").hide();
		$("#navbtn-Search").removeClass("active");
		
		$("#AddDeceased-Contents").show();
		$("#navbtn-addDeceased").addClass("active");
			
	});
	
	
	
});

