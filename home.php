<?php get_header() ?>

<div class="wrapper-blog my-0 p-5 col-12 col-md-10 col-lg-8 mx-auto">

<?php  
if( have_posts() ): 
    while ( have_posts() ): the_post(); ?>
    <div class="posts py-5">
        <h2><a href="<?php echo the_permalink();?>"><?php the_title(); ?></a></h2>
        <div class="entry-meta py-3">
            <span class="published"><span class="fa fa-clock-o"></span> <?php the_time('j F, Y'); ?></span>
            <span class="author"><span class="fa fa-keyboard-o"></span> <?php echo get_the_author(); ?></span> 
            <span class="blog-label"><span class="fa fa-folder-open"></span> <?php 
                $categories = [];
                foreach (get_the_category() as $category){
                    $categories[] = $category->name;
                }                                
                ?>                        
                <?php echo implode(', ', $categories); ?> 
            </span> 
            <span class="comment-count"><span class="fa fa-comment"></span> <?php echo get_comments_number() ?> comments</span>
        </div>
        <img src="<?php echo get_the_post_thumbnail_url (); ?>" class="px-0 col-12">
        <div class="post-content py-3">
            <?php the_excerpt(); ?>
        </div>
        <a class="post-link" href="<?php echo the_permalink(); ?>">Read more</a>
    </div>
    <?php endwhile;
endif;
?>
<div class="blog-numbers d-flex justify-content-center align-items-center">
<?php post_pagination(); ?>
</div>
</div>

<?php get_footer(); ?>