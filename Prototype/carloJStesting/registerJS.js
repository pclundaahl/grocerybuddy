/*
JavaScript for password validation and confirm password.

Requires:
	-[id]_0 and [id]_1 ids for password and confirm password divs
*/

/*
Password must contain:
	-Upper case
	-Lower case
	-Numbers
	-Non-alpha numeric
*/		
function testPasswordValid(id) {
	var valid = false;
	var userPassword = document.getElementById(id).value;
		
		var hasUpperCase = /[A-Z]/.test(userPassword);
		var hasLowerCase = /[a-z]/.test(userPassword);
		var hasNumbers = /\d/.test(userPassword);
		var hasNonalphas = /\W/.test(userPassword);
		
		if (hasUpperCase + hasLowerCase + hasNumbers + hasNonalphas == 4)
			valid=true;
		
	return (valid);
}

function warnPasswordInvalid(id) {
	document.getElementById('passworderror').innerHTML="";
	if(!testPasswordValid(id)) {
		document.getElementById('passworderror').innerHTML="<br>Must contain at least one uppercase and lower case letter as well as a number and a special character (ie. $, #, !, %)";
		document.getElementById(id).value = ""
	}
}

function testConfirmPasswordValid(id, acceptBlank) {
	var valid = false;
	var userpassword = document.getElementById(id+'_0').value;
	var userpasswordconf = document.getElementById(id+'_1').value;
	if(acceptBlank && userpasswordconf.length==0)
		valid = true;
		
	if (userpassword == userpasswordconf)
		valid = true;
					
	return valid;
}

function warnConfirmPasswordInvalid(id, acceptBlank) {
	document.getElementById('confirmpassworderror').innerHTML="";
	if(!testConfirmPasswordValid(id, acceptBlank)) {
		document.getElementById('confirmpassworderror').innerHTML="<br>Your password must match the one above";
		document.getElementById(id+'_1').value = "";
	}
}
			