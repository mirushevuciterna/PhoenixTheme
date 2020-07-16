
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';

<?php //dd(get_field('carousel_card')); ?>
<?php get_header(); ?>

<?php 

if( have_rows('flexible') ): ?>
    <?php while( have_rows('flexible') ): the_row(); ?>
        <?php if( get_row_layout() == 'difference' ): ?>
            <?php get_template_part('modules/difference-component'); ?>
        <?php elseif( get_row_layout() == 'causes' ): ?>
            <?php get_template_part('modules/causes-component'); ?>
        <?php elseif( get_row_layout() == 'donation_video' ): ?>
            <?php get_template_part('modules/donation-video'); ?>
        <?php elseif( get_row_layout() == 'donate' ): ?>
            <?php get_template_part('modules/donate-component'); ?>
        <?php elseif( get_row_layout() == 'valuable' ): ?>
            <?php get_template_part('modules/valuable-component'); ?>
        <?php elseif( get_row_layout() == 'active_events' ): ?>
            <?php get_template_part('modules/active-events-component'); ?>
        <?php elseif( get_row_layout() == 'volunteers' ): ?>
            <?php get_template_part('modules/volunteers-component'); ?>
        <?php elseif( get_row_layout() == 'questions' ): ?>
            <?php get_template_part('modules/question-component'); ?>
        <?php elseif( get_row_layout() == 'logos' ): ?>
            <?php get_template_part('modules/logos-component'); ?>
        <?php elseif( get_row_layout() == 'get_involved' ): ?>
            <?php get_template_part('modules/get-involved'); ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
