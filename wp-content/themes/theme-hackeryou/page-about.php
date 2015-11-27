<?php

/*
	Template Name: Full Page, No Sidebar - About
*/

get_header();  ?>

<div class="main">
  <div class="wrapper">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div class="about animated slideInRight">
      <h1 class="title"><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
		</div>
	

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>