<?php $count = 0; global $assocPath; ?>
<?php while (have_posts()) : the_post(); ?>
    <?php if(isset($assocPath)) : ?>
    <div class="ourpeople alignleft">
    <?php else: ?>
    <div class="ourpeople align<?php echo ($count % 2 == 0 ? "left" : "right"); ?>" style="width: 420px;">
    <?php endif; ?>
        <div class="headshot alignleft">
          <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
          <?php if(has_post_thumbnail()) : the_post_thumbnail(); else: ?>
            <img src="http://placehold.it/89x89" alt="Headshot" />
          <?php endif; ?>
          </a>
        </div>
        <div class="person-info">
          <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>"><h3><?php the_title(); ?></h3></a>
          <span class="person-title"><?php echo get_post_meta(get_the_ID(), 'person_title', true); ?></span><br />
          <a class="green" href="<?php echo get_permalink(); ?>" title="<?php get_the_title(); ?>">See profile &gt;</a>
        </div>
        <div class="clearBoth"></div>
    </div>
    <?php if($count % 2 == 1) : ?>
        <div class="clearBoth"></div>
    <?php endif; ?>
      <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php $count++; endwhile; ?>
