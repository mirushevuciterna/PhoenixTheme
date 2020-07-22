<?php 
/*
Template Name: Display All Authors
*/

?>

<?php get_header(); ?>

<div class="p-5 authors-wrapper">
    <h3 class="my-3">Authors</h3>
    
    <?php foreach(get_users(array('who' => 'authors')) as $usr) {  $user = $usr->data; ?>
        <div class="row py-2 authors-name">
            <?php //echo count_user_posts($user->ID); ?>
            <?php echo get_avatar($user->user_email, 50 ) ?>
            <h5 class="d-flex flex-column justify-content-center ml-4"><a href="<?php echo get_author_posts_url(false, $user->user_nicename); ?>"><?php echo $user->display_name; ?></h5>
        </div>
    <?php } ?>
    
</div>

<?php get_footer(); ?>