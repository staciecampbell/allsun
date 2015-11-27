<?php

/*
	Template Name: Full Page, No Sidebar - Contact
*/

get_header();  ?>

<div class="main">
  <div class="wrapper">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <section class="contact animated slideInRight">

      <h1 class="title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <form action="">
      	<input type="text" placeholder="Your Name" class="name">
      	<input type="email" placeholder="Your Email" class="email">
      	<input type="text" placeholder="Your Message" class="message">
      	<input type="submit" class="submit">
      </form>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>