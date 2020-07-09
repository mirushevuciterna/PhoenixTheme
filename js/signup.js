
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});



//FORM VALIDATION//

function matchPasswords() {
	let valid = true;
	let firstPassword = document.getElementById("password1").value;
	let secondPassword = document.getElementById("password2").value;
	let text;
	if (firstPassword.length < 6) {
		text = "Password must contain at least 6 characters!";
		document.getElementById("msg").innerHTML = text;
		valid = false;
	} else if (firstPassword != secondPassword) {
		text = "Passwords must be the same!";
		document.getElementById("msg").innerHTML = text;
		valid = false;
	} else {
		document.getElementById("msg").innerText = '';
		return valid;
	} 
	
}

function validateEmail() {
	let enteredEmail = document.getElementById("email").value;
	let atPosition = enteredEmail.indexOf("@");
	let dotPosition = enteredEmail.indexOf(".");
	let text;
	if (enteredEmail == null || enteredEmail == "") {
		text = "This field can't be blank!";
		document.getElementById("email").innerHTML = text;
		valid = false;
	}
	if (atPosition < 1 || dotPosition < atPosition + 2 || dotPosition + 2 >= enteredEmail.length) {
		text = "Please enter a valid e-mail address!";
		document.getElementById("emailMsg").innerHTML = text;
		return false;
	} else {
		document.getElementById("emailMsg").innerText = '';
		return true;
	}
}

function nameValidation() {
	let valid = true;
	let txt;
	let x = document.getElementById("username").value;
	if (x == null || x == "") {
		txt = "This field can't be blank!";
		document.getElementById("nameMsg").innerHTML = txt;
		valid = false;
	} else {
		document.getElementById("nameMsg").innerHTML = '';
		return true;
	}
	
}

function validate(event) {	
	var password = matchPasswords();
	var email = validateEmail();
	var name = nameValidation();
	if(!(password && email && name)) {

		event.preventDefault();
		let elements = document.getElementsByClassName('error-msg');
		for (let i = 0; i < elements.length; i++) {
			elements[i].style.color = 'red';
		}
		
	}
	return true;
}



// LOGIN VALIDATION
function validateLogin(event) {

	let valid = true;
	let text, error;
	let x = document.getElementById("user_login").value;
	let y = document.getElementById("user_pass").value;
	
	if (x == null || x == "") {
		text = "This field can't be blank!";
		document.getElementById("demo").innerHTML = text;
		valid = false;
	} else {
		document.getElementById("demo").innerHTML = "";
		return true;
	}
	if (y.length < 6) {
		error = "Password must contain at least 6 characters!"
		document.getElementById("demo1").innerHTML = error;
		valid = false;
	} else {
		document.getElementById("demo1").innerHTML = "";
		return true;
	}

	if (!validateLogin) {
	event.preventDefault();
	let elements = document.getElementsByClassName('error-login');
		for (let i = 0; i < elements.length; i++) {
			elements[i].style.color = 'red';
		}
	}
	return true;
}


