<?php get_header(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
      <div id="main" class="span6" role="main">
        <div class="page-header">
          <h1><?php _e('Latest Posts', 'roots');?></h1>
        </div>
<?php
global $wp_query;
$args = array_merge( $wp_query->query, array( 'orderby' => 'menu_order', 'order' => 'ASC' ) );
query_posts( $args );
         get_template_part('loop', 'index'); ?>
      </div><!-- /#main -->
    </div><!-- /#content -->
<?php get_footer(); ?>
