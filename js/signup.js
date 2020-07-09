
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});


(function ($) {
    "use strict";

    
    /*==================================================================
    [ Validate ]*/
    var name = $('.validate-input-register [name="username"]');
    var email = $('.validate-input-register [name="email"]');
    var password = $('.validate-input-register [name="password"]');


    $('.validate-form-register').on('submit',function(){
        var check = true;

        if($(name).val().trim() == ''){
            showValidate(name);
            check=false;
        }



        if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            showValidate(email);
            check=false;
        }

        if($(password).val().trim() == ''){
            showValidate(message);
            check=false;
        }
        if (check == true) {
            alert(vars.messageSent);
        }
        return check;
    });


    $('.validate-form-register .input2').each(function(){
        $(this).focus(function(){
           hideValidate(this);
       });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);


function matchPasswords() {
	var valid = true;
	var firstPassword = document.getElementById("password1").value;
	var secondPassword = document.getElementById("password2").value;
	var text;
	if (firstPassword < 8) {
		text = "Password must contain at least 8 characters!";
		document.getElementById("msg").innerHTML = text;
		valid = false;
	} else if (firstPassword != secondPassword) {
		text = "Passwords must be the same!";
		document.getElementById("msg").innerHTML = text;
		valid = false;
	} else {
		document.getElementById("msg").innerText = '';
	}
	return valid;
}

function validateEmail() {
	var enteredEmail = document.getElementById("email").value;
	var atPosition = enteredEmail.indexOf("@");
	var dotPosition = enteredEmail.indexOf(".");
	var text;
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
	var valid = true;
	var txt, errori;
	var x = document.getElementById("firstName").value;
	if (x == null || x == "") {
		txt = "This field can't be blank!";
		document.getElementById("nameMsg").innerHTML = txt;
		valid = false;
	} else {
		document.getElementById("nameMsg").innerHTML = '';
	}
	
	if (y == null || y == "") {
		errori = "This field can't be blank!";
		document.getElementById("surnameMsg").innerHTML = errori;
		valid = false;
	} else {
		document.getElementById("surnameMsg").innerHTML = '';
	}
	return valid;
}

function validate(event) {
	var password = matchPasswords();
	var email = validateEmail();
	var name = nameValidation();
	if(!(password && email && name)) {
		event.preventDefault();
	}
}


