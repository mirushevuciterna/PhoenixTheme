<?php
/*
Template Name: Contact-Test
*/
?>

<?php
if (isset($_POST['submitted'])) {

    $name = trim($_POST['contactName']);

    $email = trim($_POST['email']);

    $comments = trim($_POST['comments']);

    $emailTo = get_option('admin_email');
    $sub = get_option('subjecti');


    $subject = '[PHP Snippets] From ' . $name;
    $body = "Name: $name \n\nEmail: $email \n\nSubjekti: $sub  \n\nComments: $comments";
    $headers = 'From: ' . $name . ' <' . $emailTo . '>' . "\r\n" . 'Reply-To: ' . $email;

    wp_mail($emailTo, $subject, $body, $headers);
    $emailSent = true;
}

?>
<?php get_header(); ?>



<div class="contact1">
    <div class="container-contact1">
        <div class="contact1-pic js-tilt" data-tilt>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/modules/assets/images/contact-us.png" alt="IMG">
        </div>

        <form class="contact1-form validate-form">
            <span class="contact1-form-title">
                Get in touch
            </span>

            <div class="wrap-input1 validate-input" data-validate="Name is required">
                <input class="input1" type="text" name="name" placeholder="Name">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                <input class="input1" type="text" name="email" placeholder="Email">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Subject is required">
                <input class="input1" type="text" name="subject" placeholder="Subject">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Message is required">
                <textarea class="input1" name="message" placeholder="Message"></textarea>
                <span class="shadow-input1"></span>
            </div>

            <div class="container-contact1-form-btn">
                <button class="contact1-form-btn">
                    <span>
                        Send Email
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>


<?php get_footer(); ?>