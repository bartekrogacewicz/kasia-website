<?php get_header(); ?>
    <div class="row">
      <div class="col-12"></div>
    </div>
    <div class="row text-section">
      <h2><?php the_title(); ?></h2>
      <p><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
      <h6>Kompletny poradnik o tym, czym jest dobre budowanie zespołu i jak to robić.</h6>
      <?php the_content(); ?>
    </div>

  <?php get_footer('blog'); ?>
