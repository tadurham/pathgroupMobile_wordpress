<?php $count = 0; ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="align<?php echo ($count % 2 == 0 ? "left" : "right"); ?>" style="width: 420px;">
      <h3><?php the_title(); ?></h3>
      <?php the_content(); ?>
    </div>
    <?php if($count % 2 == 1) : ?>
        <div class="clearBoth"></div>
    <?php endif; ?>
      <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php $count++; endwhile; ?>
