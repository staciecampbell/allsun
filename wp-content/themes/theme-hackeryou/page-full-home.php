<?php

/*
	Template Name: Full Page, No Sidebar - Home
*/

get_header();  ?>

<div class="main">
		<h1 class="main animated slideInRight">Allsun Campbell</h1>
		<div class="line animated slideInRight"></div>
		
		<div class="gallery js-flickity clearfix data-flickity-options='{ "accessibility": false }' data-flickity-options='{ "autoPlay": true }'">
		  <div class="gallery-cell">
		  	<img src="assets/allsun1.jpg" alt="Allsun Campbell chair and desk slideshow" class="chair">
		  </div>
		  <div class="gallery-cell">
		  	<img src="assets/allsun2.jpg" alt="Allsun Campbell chair and desk slideshow" class="chair">
		  </div>
		  <div class="gallery-cell">
		  	<img src="assets/allsun3.jpg" alt="Allsun Campbell chair and desk slideshow" class="chair">
		  </div>
		  <div class="gallery-cell">
		  	<img src="assets/allsun4.jpg" alt="Allsun Campbell chair and desk slideshow" class="chair">
		  </div>
</div>

	</main>
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>