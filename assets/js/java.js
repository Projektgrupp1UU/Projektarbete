window.onload = function()
{
	document.getElementById("registerForm").onsubmit = validateUser; 
}

function validateUser()
{	
	var passwordcorrect = checkPassword();
	

	if (passwordcorrect)
		return true;
	else
		window.alert("The passwords do not match!")
		return false;
		
}

function checkPassword()
{
	var pword = document.getElementById("regpassword").value;
	var cpword = document.getElementById("regconfirmpassword").value;

	if (pword == cpword)
		return true;
	else
		
		return false;
	
}