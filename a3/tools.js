/* Contact form submit button event listeners */
var submitListener = document.getElementById("submit-form");
submitListener.addEventListener("click", validateMobile);
submitListener.addEventListener("click", validateName);

/* Validating mobile number function */
function validateMobile() {
	var numberPattern = /^04(\s?[0-9]{2}\s?)([0-9]{3}\s?[0-9]{3}|[0-9]{2}\s?[0-9]{2}\s?[0-9]{2})$/;

    if (mobile.value.match(numberPattern) || mobile.value.length == 0) {
    	return true;
    	
    }

    else

    {
    	mobile.style.border = "2px solid red";
        alert("Please enter a valid Australian mobile number!");
        event.preventDefault()
    	return false;

    }
}

/* Validation of names with use of limited punctuation */
function validateName() {
	var acceptedABC = /^[A-Za-z][A-Za-z\'\-]+([\ A-Za-z][A-Za-z\'\-]+)*/;

	if (contactName.value.match(acceptedABC)) {
		return true;

	}

	else

	{
		contactName.style.border = "2px solid red";
		alert("Please enter a name containing letters from the English alphabet!");
		event.preventDefault()
		return false;

	}
}

/* Remembering users in localStorage*/
/* Checkbox listener for remember me */
var rememberMeListener = document.getElementById("submit-form");
rememberMeListener.addEventListener("click", storage);

/* Function to store input data in localstorage */
function storage() {

	if (document.getElementById('rememberMeBox').checked) 
	{
	
		localStorage.setItem("name", contactName.value);
		localStorage.setItem("email", email.value);
		localStorage.setItem("mobile", mobile.value);
		localStorage.setItem('rememberMeBox', true);
		return true;

	} 

	else 

	{
		localStorage.setItem('rememberMeBox', false);
		localStorage.removeItem('name');
		localStorage.removeItem('email');
		localStorage.removeItem('mobile');
		return false;

	}
}

/* restore data on page load */
document.addEventListener("DOMContentLoaded", function loadPageListener() {
    var checked = localStorage.getItem('rememberMeBox');

    if (checked == "true") 
    {
    
    	document.getElementById("rememberMeBox").checked = true;
		document.getElementById('contactName').value = localStorage.getItem("name");
		document.getElementById('email').value = localStorage.getItem("email");
		document.getElementById('mobile').value = localStorage.getItem("mobile");	
		return true;

	} 

	else

	{

		document.getElementById("rememberMeBox").checked = false;
		return false;

	}
})