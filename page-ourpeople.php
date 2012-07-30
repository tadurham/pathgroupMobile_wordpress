<?php
/*
Template Name: Our People
*/
get_header(); ?>

<?php if(is_page('our-people')) : ?>
        <?php get_template_part('loop', 'page'); ?>
<?php endif; ?>

<?php if(is_page('executive-team') || is_page('executive-team-2')) : ?>
        <a name="executive"></a>
        <h2>Executive Team</h2>
        <?php query_posts(array(
                'post_type' => 'people',
                'posts_per_page' => 100,
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'tax_query' => array( array(
                    'taxonomy' => 'group',
                    'field' => 'id',
                    'terms' => 26) )
              ));
            get_template_part('loop', 'ourpeople'); ?>
    
        <div class="clearBoth"></div>
<?php endif; ?>

<?php if(is_page('physician-leadership')) : ?>
        <a name="physician"></a>
        <h2>Physician Leadership</h2>
        <?php query_posts(array(
                'post_type' => 'people',
                'posts_per_page' => 100,
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'tax_query' => array( array(
                    'taxonomy' => 'group',
                    'field' => 'id',
                    'terms' => 27) )
              ));
            get_template_part('loop', 'ourpeople'); ?>

        <div class="clearBoth"></div>
<?php endif; ?>

<?php if(is_page('pathologists')) : 
        add_filter('posts_orderby', 'edit_posts_orderby'); 
?>

        <a name="pathologists"></a>
        <h2>Expert Pathologists</h2>
        <?php query_posts(array(
                'post_type' => 'people',
                'posts_per_page' => 100,
                'tax_query' => array( array(
                    'taxonomy' => 'group',
                    'field' => 'id',
                    'terms' => 29) )
              ));
            get_template_part('loop', 'ourpeople-pathologists'); ?>

        <div class="clearBoth"></div>

        <a name="retired-pathologists"></a>
        <h2>Emeritus</h2>
        <?php wp_reset_query(); query_posts(array(
                'post_type' => 'people',
                'posts_per_page' => 100,
                'tax_query' => array( array(
                    'taxonomy' => 'group',
                    'field' => 'id',
                    'terms' => 33) )
              ));
            get_template_part('loop', 'ourpeople-pathologists'); ?>
        <div class="clearBoth"></div>

        <a name="retired-pathologists"></a>
        <h2>Retired</h2>
        <?php wp_reset_query(); query_posts(array(
                'post_type' => 'people',
                'posts_per_page' => 100,
                'tax_query' => array( array(
                    'taxonomy' => 'group',
                    'field' => 'id',
                    'terms' => 31) )
              ));
            get_template_part('loop', 'ourpeople-pathologists'); ?>
        <div class="clearBoth"></div>

        <a name="retired-pathologists"></a>
        <h2>In Memorium</h2>
        <?php wp_reset_query(); query_posts(array(
                'post_type' => 'people',
                'posts_per_page' => 100,
                'tax_query' => array( array(
                    'taxonomy' => 'group',
                    'field' => 'id',
                    'terms' => 34) )
              ));
            get_template_part('loop', 'ourpeople-pathologists'); ?>
        <div class="clearBoth"></div>
<?php endif; ?>

      </div><!-- /#main -->
    </div><!-- /#content -->
<?php get_footer(); 

function edit_posts_orderby($orderby_statement) {
	$orderby_statement = "SUBSTRING_INDEX( REPLACE( REPLACE( REPLACE( REPLACE( REPLACE(post_title, ', II', ''), ', PhD', ''), ', DO', ''), ', Jr.', ''), ', MD', ''), ' ', -1)";
	return $orderby_statement;
}
