if (document.location.pathname == "/register" || document.location.pathname == "/wordpress_site/register" || document.location.pathname == "/testsite/wordpress/register"  || document.location.pathname == "/StarlabsWebPage/register") {
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

}