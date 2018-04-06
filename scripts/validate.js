$(document).ready(function() {
	
	$('#err1').hide();
	$("#err2").hide();
	$("#err3").hide();
	$("#err4").hide();


// verify email address used.

$('#emailLogin').change(function() {
	var input=$('#emailLogin').val();
	var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	var is_email=re.test(input);
	if(is_email){$('#err1').hide();}
	else{$('#err1').show();}
});


// verify password conforms to rules

$("#pw1").change(function() {
	var input=$("#pw1").val();
	var re = /^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&!]).*$/;
	var is_valid=re.test(input);
	if(is_valid){$("#err2").hide();}
	else{$("#err2").show();}
});


// retyped password must match original

$("#pw2").change(function() {
	var input=$("#pw2").val();
	var orig = $("#pw1").val();
	if(input == orig){$("#err3").hide();}
	else{$("#err3").show();}
});


// display name cannot be blank

$("#name").keyup(function(event) {
	var input=$(this);
	var message=$(this).val();
	console.log(message);
	if(message){$("#err4").hide();}
	else{$("#err4").show();}	
});



});