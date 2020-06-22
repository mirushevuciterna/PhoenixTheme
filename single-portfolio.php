<?php get_header(); ?>

<div class="container-fluid">
    <div>
    <?php while(have_posts(  )) : the_post(  ); ?>
    <div class="mt-5 border-bottom title-section text-center">
        <h1 class="section-heading"><?php the_title(); ?></h1>
        <div id="breadcrumb"><?php get_breadcrumb(); ?></div>
    </div>
    <div class="row basic-info">
        <div class="col col-12 col-md-3">
            <div class="text-left">
                <h6>Client</h6>
                <p>Incubator Design</p>
            </div>

            <div>
                <h6>Tools Used</h6>
                <p>Photoshop</p>
            </div>
        </div>

        <div class="col col-12 col-md-6">
            <h6>Basic Info</h6>
            <p><?php the_content(); ?></p>
        </div>

        <div class="col col-12 col-md-2 categories">
            <h6>Categories</h6>
            <?php foreach (get_categories() as $category){ ?>
            <div class="row">
                <div><i class="fa fa-check mx-3" style="font-size:14px;"></i></div>
                <?= "<p>"; echo $category->name; echo "</p>"; ?>
            </div>
            <?php } ?>
        </div>      
    </div>

    <div class="post-content-1 w-100">
        <div class="row">
            <?php $image = get_field('image_1');
            if( $image ) { ?>
                <div class="img col-12 col-lg-6" style="background-image:url('<?= $image ?>')"></div>
            <?php  } ?> 
            <div class="text col-9 col-lg-5 m-auto">
                <h2>1. <?php the_field('section_title_1') ?></h2>
                <div class="separator-line"></div>
                <h6 class="description"><?php the_field('description_1') ?></h6>
            </div>
        </div>
    </div>

    <div class="post-content-2 w-100">
        <div class="row">
            <?php $image = get_field('image_1');
            if( $image ) {
            echo wp_get_attachment_image( $image);
            } ?> 
            <div class="text col-9 col-lg-5 m-auto">
                <h2>2. Drive traffic to your website and increase engagement with your visitors.</h2>
                <div class="separator-line"></div>
                <h6 class="description">Welcome your visitors with elegance and flexibility and center the world around your website.</h6>
            </div>
            <div class="img col-12 col-lg-6"></div>
        </div>
    </div>
    <?php endwhile;  ?>
</div>
</div>

<?php get_footer(); ?>