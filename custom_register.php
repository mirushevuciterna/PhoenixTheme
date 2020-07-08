<?php
/*
** Template Name: Custom Register Page
*/
get_header(); 
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
?>

<div class="container">

<div class="row register-page-container p-3  mt-2 d-flex justify-content-center w-75 mx-auto">

<?php
global $wpdb, $user_ID; 

//Check whether the user is already logged in 
if (!$user_ID) {

// Default page shows register form. 
// To show Login form set query variable action=login
$action = (isset($_GET['action']) ) ? $_GET['action'] : 0;

// Login Page
if ($action === "login") { ?>

<?php 
$login = (isset($_GET['login']) ) ? $_GET['login'] : 0;

if ( $login === "failed" ) {
echo '<div class="col-12 register-error"><strong>ERROR:</strong> Invalid username and/or password.</div>';
} elseif ( $login === "empty" ) {
echo '<div class="col-12 register-error"><strong>ERROR:</strong> Username and/or Password is empty.</div>';
} elseif ( $login === "false" ) {
echo '<div class="col-12 register-error"><strong>ERROR:</strong> You are logged out.</div>';
}
?>

<div class="col-md-5">

<?php 
$args = array(
    'redirect' => home_url().'/register/', 
    );


wp_login_form($args); ?>

<p class="text-center"><a class="mr-2" href="<?php echo wp_registration_url(); ?>">Register Now</a>
<span clas="regspan mx-2">·</span><a class="ml-2" href="<?php echo wp_lostpassword_url( ); ?>" title="Lost Password">Lost Password?</a></p>

</div>

<?php

} else { // Register Page ?>

<?php
if ( $_POST ) {

$error = 0;

$username = esc_sql($_REQUEST['username']); 
if ( empty($username) ) {

echo '<div class="col-12 register-error">User name should not be empty.</div>'; 
$error = 1;
}

$email = esc_sql($_REQUEST['email']);
if ( !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $email) ) { 

echo '<div class="col-12 register-error">Please enter a valid email.</div>';
$error = 1;
}

$password = esc_sql($_REQUEST['password']); 
if ( empty($password) || strlen($password) < 6) {

echo '<div class="col-12 register-error">User password should not be empty and at least 6 characters.</div>'; 
$error = 1;
}

if ( $error == 0 ) {

// $random_password = wp_generate_password( 12, false ); 
$status = wp_create_user( $username, $password, $email ); 

if ( is_wp_error($status) ) {

echo '<div class="col-12 register-error">Username already exists. Please try another one.</div>'; 
} else {

$from = get_option('admin_email'); 
$headers = 'From: '.$from . "\r\n"; 
$subject = "Registration successful"; 
$message = "Registration successful.\nYour login details\nUsername: $username\nPassword: $password"; 

// Email password and other details to the user
wp_mail( $email, $subject, $message, $headers ); 

echo "Please check your email for login details."; 

$error = 2; // We will check for this variable before showing the sign up form. 
}
}

}

if ( $error != 2 ) { ?> 

<?php  ?>
<h2 class="registerh2" >Sign up or log in to receive the latest news </h2>
<div class="container-register" id="container">
    <div class="form-container sign-up-container">
        <form action="" method="post">
            <h1>Create Account</h1>
            <input type="text" placeholder="Username" name="username" value="<?php if( ! empty($username) ) echo $username; ?>">
            <input type="email" placeholder="Email" name="email" value="<?php if( ! empty($email) ) echo $email; ?>">
            <input type="password" placeholder="Password" name="password" value="<?php if( ! empty($password) ) echo $password; ?>">
            <button class="registerbutton" name="submit">Sign Up</button>
        </form>
    </div>

    <div class="form-container sign-in-container">
        <form method="post" name="loginform" id="loginform" action="<?php echo site_url( '/wp-login.php' ); ?>">
            <h1 class="registertitle">Sign in</h1>
 
            <input  id="user_login" type="text" placeholder="Username or email" size="20" name="log">
            <input id="user_pass" type="password" name="pwd" placeholder="Password">
            <button id="wp-submit" type="submit" value="Login" name="wp-submit" class="registerbutton" >Sign In</button>
        </form>
    </div>


    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1 class="registertitle" style="font-size: 40px;">Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="registerbutton"  id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1 class="registertitle" style="font-size: 40px;">Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button  class="registerbutton"  id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>
<div class="col-md-5 manual-register-form">



</div>

<?php 

} ?>

<?php }

} else { ?>

<p>You are logged in. Click <a href="<?php bloginfo('wpurl'); ?>">here to go home</a></p>

<?php } ?>

</div>
</div>
<?php get_footer(); 
?>
     



