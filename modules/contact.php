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
<div class="container-fluid">
    <div id="content">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="entry-content">
                <?php if(isset($emailSent) && $emailSent == true) { ?>
                <div class="thanks">
                    <p>Thanks, your email was sent successfully.</p>
                </div>
                <?php } else { ?>
                <?php the_content(); ?>
                <?php //if(isset($hasError) || isset($captchaError)) { ?>
                <!-- <p class="error">Sorry, an error occured.<p> -->
                        <?php// } ?>


                        <form action="<?php the_permalink(); ?>" id="contactForm" method="post" class="my-3">
                            <div class="form-group">
                                <label for="contactName">Name:</label>
                                <input type="text" name="contactName" id="contactName"
                                    value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>"
                                    class="required requiredField form-control" />
                                <?php if($nameError != '') { ?>
                                <span class="error"><?=$nameError;?></span>
                                <?php } ?>
                            </div>

                            <div>
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email"
                                    value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>"
                                    class="required requiredField email form-control" />
                                <?php if($emailError != '') { ?>
                                <span class="error"><?=$emailError;?></span>
                                <?php } ?>
                            </div>

                            <div>
                                <label for="commentsText">Message:</label>
                                <textarea name="comments" id="commentsText" rows="3"
                                    class="required requiredField form-control">
									<?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?>
								</textarea>
                                <?php if($commentError != '') { ?>
                                <span class="error"><?=$commentError;?></span>
                                <?php } ?>
                            </div>
							<br>
                            <input type="submit" class="btn btn-primary" value="Send Mail" name="submit">
							
                        </form>
                        <?php } ?>
            </div><!-- .entry-content -->
        </div><!-- .post -->

        <?php endwhile; endif; ?>
    </div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>