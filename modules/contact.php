<?php
/*
Template Name: Contact
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

<?php get_header(); ?>
<div class="contact-wrapper">
    <div id="content" class="w-50 mx-auto my-0 py-5">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <h2 class="entry-title mb-3">Let's get in touch</h2>
            <p class="mb-4">Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days.</p>
            <div class="entry-content">
                <?php if(isset($emailSent) && $emailSent == true) { ?>
                <div class="thanks">
                    <p class="text-success mb-3">Thanks, your email was sent successfully.</p>
                    <a href="/contact">Go Back</a>
                </div>
                <?php } else { ?>
                <?php the_content(); ?>
                <?php //if(isset($hasError) || isset($captchaError)) { ?>
                <!-- <p class="error">Sorry, an error occured.<p> -->
                        <?php// } ?>


                        <form action="<?php the_permalink(); ?>" id="contactForm" method="post" class="my-3">
                            <div class="form-group">
                                <input type="text" name="contactName" placeholder="Your name"
                                    value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>"
                                    class="required requiredField form-control" />
                                <?php if($nameError != '') { ?>
                                <span class="text-danger"><?=$nameError;?></span>
                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <input type="text" name="email" placeholder="Your email"
                                    value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>"
                                    class="required requiredField email form-control" />
                                <?php if($emailError != '') { ?>
                                <span class="text-danger"><?=$emailError;?></span>
                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <textarea name="comments" rows="3" placeholder="Your message"
                                    class="required requiredField form-control"></textarea>
                                <?php if($commentError != '') { ?>
                                <span class="text-danger"><?=$commentError;?></span>
                                <?php } ?>
                            </div>
						
                            <input type="submit" class="btn btn-primary" id="butoniNav" value="Send Mail" name="submit">
							
                        </form>
                        <?php } ?>
            </div><!-- .entry-content -->
        </div><!-- .post -->

        <?php endwhile; endif; ?>
    </div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>