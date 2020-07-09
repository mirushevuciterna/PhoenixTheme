<?php
/*
** Template Name: Custom Register Page
*/
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

 // Register Page ?>

<?php
if ( $_POST ) {

$error = 0;

$username = esc_sql($_REQUEST['username']); 
if ( empty($username) ) {

$error = 1;
}

$email = esc_sql($_REQUEST['email']);
if ( !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $email) ) { 

$error = 1;
}

$password = esc_sql($_REQUEST['password']); 
if ( empty($password) || strlen($password) < 6) {

$error = 1;
}

$confirm_password = esc_sql($_REQUEST['confirm_password']); 
if ( empty($confirm_password) || $password != $confirm_password) {

$error = 1;
}

if ( $error == 0 ) {

$status = wp_create_user( $username, $password, $email ); 

if ( is_wp_error($status) ) {
echo '<div class="col-12 d-flex justify-content-center align-items-center font-weight-bold text-danger">Username already exists. Please try another one.</div>'; 
} else {
wp_redirect('/');
exit;    

$from = get_option('admin_email'); 
$headers = 'From: '.$from . "\r\n"; 
$subject = "Registration successful"; 
$message = "Registration successful.\nYour login details\nUsername: $username\nPassword: $password"; 
// Email password and other details to the user
wp_mail( $email, $subject, $message, $headers ); 

$error = 2; // We will check for this variable before showing the sign up form. 
}
}

}

get_header();
?> 



<?php } else { ?>
        <?php get_header(); ?>
        <p class="mt-5">You are logged in. Click <a href="<?php bloginfo('wpurl'); ?>" class="text-info">here to go home</a></p>

        <?php } ?>
<h2 class="registerh2" >Sign up or log in to receive the latest news </h2>
<div class="container-register" id="container">
    <div class="form-container sign-up-container">
        <form action="" method="post" onsubmit="validate(event)">
            <h1>Create Account</h1>
            <input type="text" placeholder="Username" id="username" name="username" value="<?php if( ! empty($username) ) echo $username; ?>">
            <p id="nameMsg" class="error-msg m-0 p-0"></p>
            <input type="email" placeholder="Email" id="email" name="email" value="<?php if( ! empty($email) ) echo $email; ?>">
            <p id="emailMsg" class="error-msg m-0 p-0"></p>
            <input type="password" placeholder="Password" id="password1" name="password" value="<?php if( ! empty($password) ) echo $password; ?>">
            <input type="password" placeholder="Confirm Password" id="password2" name="confirm_password" value="<?php if( ! empty($confirm_password) ) echo $confirm_password; ?>">
            <p id="msg" class="error-msg m-0 mb-2"></p>
            <button class="registerbutton" name="submit">Sign Up</button>
        </form>
    </div>

    <div class="form-container sign-in-container" onsubmit="validateLogin(event)">
        <form method="post" name="loginform" id="loginform" action="<?php echo site_url( '/wp-login.php' ); ?>">
            <h1 class="registertitle">Sign in</h1>
 
            <input  id="user_login" type="text" placeholder="Username or email" size="20" name="log">
            <p id="demo" class="error-login"></p>
            <input id="user_pass" type="password" name="pwd" placeholder="Password">
            <p id="demo1" class="error-login"></p>
            <button id="wp-submit" type="submit" value="Login" name="wp-submit" class="registerbutton" >Sign In</button>
        </form>
    </div>


    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1 class="registertitle" style="font-size: 40px;">Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="registerbutton" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1 class="registertitle" style="font-size: 40px;">Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="registerbutton" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>

</div>

<div class="col-md-5 manual-register-form"></div>



</div>
</div>
</div>
<?php get_footer(); ?>