<?php
/*
Template Name: Contact-Test
*/
?>

<?php
if(isset($_POST['submit'])) {
	if(trim($_POST['contactName']) === '') {
		$nameError = 'Please enter your name.';
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}

	if(trim($_POST['email']) === '')  {
		$emailError = 'Please enter your email address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['comments']) === '') {
		$commentError = 'Please enter a message.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = get_option('tz_email');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
		$subject = '[PHP Snippets] From '.$name;
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		wp_mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}

} ?>
<div class="row contactsett">
    <div class="contactleftside col-md-4 d-flex align-items-center justify-content-center">
        <div class="allcontactitems">
            <div class="contactitems">
            <i class="fa fa-envelope d-flex justify-content-center my-2" ></i>
            <p class="d-flex justify-content-center">phoenixtheme@gmail.com</p>
            <i class="fa fa-phone d-flex justify-content-center my-2" ></i>
            <p class="d-flex justify-content-center">+38349000000</p>
            <i class="fa fa-map-marker d-flex justify-content-center my-2" ></i>
            <p class="d-flex justify-content-center">Prishtine</p>
        </div>
      
    </div>
    





        <?php get_header(); ?>
        <div class="contactrightside col-md-8 d-flex justify-content-center align-items-center">
        <div class="container-fluid">
            <div id="content">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <h5>Got any questions? Feel free to ask! </h5>
                    <div class="entry-content">
                        <?php if(isset($emailSent) && $emailSent == true) { ?>
                        <div class="thanks">
                            <p>Thanks, your email was sent successfully.</p>
                            <button type="button" class="butonidiff butminoradds"><a href=''>Go Back</a></button>
                        </div>
                        <?php } else { ?>
                        <?php the_content(); ?>
                        <?php //if(isset($hasError) || isset($captchaError)) { ?>
                        <!-- <p class="error">Sorry, an error occured.<p> -->
                                <?php// } ?>


                                <form class=" validate-form ">
                                    <div class="form-group mb-0 wrap-input1 validate-input" data-validate="Name is required">
                                        <label for="contactName" class="mt-3">Name:</label>
                                        <input type="text" name="contactName" id="contactName"
                                            value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>"
                                            class=" input1 required requiredField form-control" />   
                                    </div>
                                    

                                    <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                        <label for="email" class="mt-3">Email</label>
                                        <input type="text" name="email" id="email"
                                            value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>"
                                            class="input1 required requiredField email form-control" />
                                    </div>

                                    <div class=" wrap-input1 validate-input" data-validate="Message is required">
                                        <label for="commentsText" class="mt-3">Message:</label>
                                        <textarea name="comments" id="commentsText" rows="3"
                                            class="input1 required requiredField form-control">
                                            <?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?>
                                            </textarea>
                                    </div>
                                    <br>
                                    <div class="container-contact1-form-btn">
                                        <button class="contact1-form-btn">
                                            <span>
                                                Send Email
                                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                            </span>
                                        </button>
                                    </div>
                                    
                                </form>
                                <?php } ?>
                    </div><!-- .entry-content -->
                </div><!-- .post -->

                <?php endwhile; endif; ?>
            </div><!-- #content -->
        </div><!-- #container -->
        </div>
 </div>



<?php get_footer(); ?>