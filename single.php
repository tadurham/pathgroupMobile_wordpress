<?php get_header(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
      <div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main">
        <?php get_template_part('loop', 'single'); ?>
      </div><!-- /#main -->
    </div><!-- /#content -->
<?php get_footer(); ?>