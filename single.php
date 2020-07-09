<!-- <style>
a.pp_like i {
font-size: 18px;
color: #007acc;
}
a.pp_like {
text-decoration: none;
box-shadow: none;
}
a.pp_like.liked i {
color: red;
}
.lds-facebook {
display: inline-block;
position: relative;
width: 64px;
height: 38px;
display:none;
margin-top: -20px;
}
.lds-facebook div {
display: inline-block;
position: absolute;
left: 6px;
width: 13px;
background: #007acc;
animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
}
.lds-facebook div:nth-child(1) {
left: 0px;
animation-delay: -0.24s;
}
.lds-facebook div:nth-child(2) {
left: 22px;
animation-delay: -0.12s;
}
.lds-facebook div:nth-child(3) {
left: 45px;
animation-delay: 0;
}
@keyframes lds-facebook {
0% {
top: 6px;
height: 51px;
}
50%, 100% {
top: 19px;
height: 26px;
}
}
</style> -->
<?php get_header(); ?>

<div class="container-fluid">
    <div id="wrapper-blog-post">
        <?php while(have_posts(  )) : the_post(  ); ?>

        <div class="mt-5 col-12 col-md-7">
            <div id="breadcrumb"><?php get_breadcrumb(); ?></div>
            <h1 class=""><?php the_title(); ?></h1>
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
                <span class="comment-count"><span class="fa fa-comment"></span> <?php echo get_comments_number() ?>
                    comments</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <img src="<?php echo get_the_post_thumbnail_url (); ?>" class="px-0 col-12">
                <div class="post-content py-3">
                    <?php the_content(); ?>
                </div>
                <?php         
global $wpdb;
$l=0;
$postid=get_the_id();
$user=get_current_user_id();
$row1 = $wpdb->get_results( "SELECT id FROM $wpdb->post_like_table WHERE postid = '$postid' AND userid = '$user'");
if(!empty($row1)){
$l=1;
}
$totalrow1 = $wpdb->get_results( "SELECT id FROM $wpdb->post_like_table WHERE postid = '$postid'");
$total_like1 = $wpdb->num_rows;
?>
                <div class="post_like">
                    <a class="pp_like <?php if($l==1) {echo "liked"; } ?>" href="#"
                        data-id="<?php echo get_the_id(); ?>"><i class="fa fa-thumbs-up"></i>
                        <span><?php echo $total_like1; ?> like</span></a>
                    <div class="lds-facebook">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>


                <div class="text-primary my-5"><?php the_tags() ?></div>
                <?php if (comments_open()){
                comments_template();
                if (have_comments()) : ?>
                <ol class="post-comments">
                    <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
            )); ?>

                </ol>
                <?php endif;
            }?>
            </div>

            <div class="col-12 col-md-4 ml-0 ml-md-5">
                <?php get_sidebar(); ?>
            </div>
        </div>

        <?php endwhile;  ?>



        <div class="related-projects">
            <h3 class="px-5">Related Posts</h3>

            <div class="related-content px-5 row">
                <?php 
            $args = array(
                'post_type'=>'post', 
                'posts_per_page' => 3, 
                'post__not_in' => array( $post->ID  )
            );
            query_posts( $args ); 
            $related = new WP_Query($args);
            if( $related->have_posts() ) { 
            while( $related->have_posts() ) { 
	        $related->the_post();              
            ?>
                <div class="card-portfolio col col-12 col-sm-8 col-md-3 mx-sm-4">
                    <a href="<?= get_permalink();?>">
                        <?php the_post_thumbnail(array(400, 250), array('class'=>'card-img-top')); ?>
                    </a>

                    <div class="card-body">
                        <span class="blog-label">
                            <span class="fa fa-folder-open"></span>
                            <?php 
                                $categories = [];
                                foreach (get_the_category() as $category){
                                    $categories[] = $category->name;
                                }                                
                                ?>
                            <?php echo implode(', ', $categories); ?>
                        </span>

                        <h5 class="card-title mt-4"><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <a class="post-link" href="<?= get_permalink(); ?>">View post <i class="fa fa-arrow-right"
                                id="right-arrow"></i></a>
                    </div>
                </div>
                <?php  }
            wp_reset_postdata();
            } ?>

            </div>
        </div>

    </div>
</div>
<?php get_footer(); ?>