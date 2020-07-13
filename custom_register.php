<?php
/*
 Template Name: Custom Register Page
*/

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
?>



<div class="container registercontainer">

    <div class="row register-page-container p-3  mt-2 d-flex justify-content-center  mx-auto">

<?php

global $wpdb, $user_ID; 

//Check whether the user is already logged in 
if (!$user_ID) {

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
            echo '<div class="col-12 d-flex justify-content-center align-items-center font-weight-bold text-danger">This user already exists.</div>'; 
            } else {
            wp_redirect('/');
            exit;    

            $from = get_option('admin_email'); 
            $headers = 'From: '.$from . "\r\n"; 
            $subject = "Registration successful"; 
            $message = "Registration successful.\nYour login details\nUsername: $username\nPassword: $password"; 
            // Email password and other details to the user
            wp_mail( $email, $subject, $message, $headers ); 
            }
        }
    }
get_header();
?> 

<?php } else { ?>
        <?php get_header(); ?>
        <?php $loggedintext = '<p class="text-danger mt-3 mb-0">You are logged in. Click <a class="text-info" href='. home_url(); 
        $loggedintext .= '>here</a> to go home</p>';?>        
        <?php } ?>
            <h2 class=" registerh2 mt-4 mb-3" >Sign up or log in to subscribe </h2>

            <div class="container-register" id="container">
                <div class="form-container sign-up-container">
                    <form action="" method="post" onsubmit="validate(event)">
                        <h1>Create Account</h1>
                        <input type="text" placeholder="Username" id="username" name="username" value="<?php if( ! empty($username) ) echo $username; ?>">
                        <p id="nameMsg" class="error-msg m-0 p-0"></p>
                        <input type="email" placeholder="Email" id="email" name="email" value="<?php if( ! empty($email) ) echo $email; ?>">
                        <p id="emailMsg" class="error-msg m-0 p-0"></p>
                        <input type="password" placeholder="Password" id="password1" name="password" value="<?php if( ! empty($password) ) echo $password; ?>">
                        <p id="msg" class="error-msg m-0"></p>
                        <input type="password" placeholder="Confirm Password" id="password2" name="confirm_password" value="<?php if( ! empty($confirm_password) ) echo $confirm_password; ?>">
                        <button class="registerbutton" name="submit">Sign Up</button>
                    </form>
                </div>

                <div class="form-container sign-in-container" >
                    <form method="post" id="login" action="login"  >
                        <h1 class="registertitle">Sign in</h1>
                        <?php if ($user_ID): ?>
                        <?php echo $loggedintext; ?>
                        <?php endif; ?>
                        <p class="status text-danger mt-3"></p>
                        <input class="mt-0 <?php if($user_ID){echo "disable";}?>"  id="username" type="text" name="username" placeholder="Username or email" size="20" name="log">
                        <input class="<?php if($user_ID){echo "disable";}?>" id="password" type="password" name="password" placeholder="Password">
                        <button type="submit" value="Login" name="submit" class="<?php if($user_ID){echo "disable";}?> submit_button registerbutton" >Sign In</button>
                        <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
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