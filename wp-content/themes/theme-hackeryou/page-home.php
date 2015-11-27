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
		  	<img src="<?php echo bloginfo('template_directory'); ?>/assets/allsun1.jpg" class="chair" alt="" />
		  </div>
		  <div class="gallery-cell">
		  	<img src="<?php echo bloginfo('template_directory'); ?>/assets/allsun2.jpg" class="chair" alt="" />
		  </div>
		  <div class="gallery-cell">
		  	<img src="<?php echo bloginfo('template_directory'); ?>/assets/allsun3.jpg" class="chair" alt="" />
		  </div>
		  <div class="gallery-cell">
			<img src="<?php echo bloginfo('template_directory'); ?>/assets/allsun4.jpg" class="chair" alt="" />
		  </div>
</div>

<div class="divide"></div>

<section class="portfolio">
	<section class="wrapper">
		<div class="gallery2">
			<div class="thumbnail thumbnail1"><p><a data-popup="hidden1" href="#">AC05 Desk</a></p></div>
			<div class="thumbnail thumbnail2"><p><a data-popup="hidden2"href="#">AC01 Coffee Table</a></p></div>
			<div class="thumbnail thumbnail3"><p><a data-popup="hidden3"href="#">AC02 Bar Stools</a></p></div>
			<div class="thumbnail thumbnail4"><p><a data-popup="hidden4"href="#">AC03 Media Cabinet</a></p></div>
			<div class="thumbnail thumbnail5"><p><a data-popup="hidden5"href="#">AC08 Table</a></p></div>
			<div class="thumbnail thumbnail6"><p><a data-popup="hidden6"href="#">AC09 Stacking<br>Cabinets</a></p></div>
		</div>

			<div class="hidden hidden1">
			
					<i class="fa fa-times gallery close"></i>
				
				  <div>
				  	<img src="<?php echo bloginfo('template_directory'); ?>/assets/desk1.jpg" class="chair" alt="" />
				  </div>
				  
				<div class="description">
					<p><strong>Description</strong></p>
					<p>AC05 Desk.<br>Ash.<br>40" x 20" x 28"<br>2014.</p>
				</div>
			</div>

			<div class="hidden hidden2">
					<i class="fa fa-times gallery close"></i>
				
				  <div>
				  	<img src="<?php echo bloginfo('template_directory'); ?>/assets/coffee1.jpg" class="chair" alt="" />
				  </div>
				
				<div class="description">
					<p><strong>Description</strong></p>
					<p>AC05 Desk.<br>Ash.<br>40" x 20" x 28"<br>2014.</p>
				</div>
			</div>

			<div class="hidden hidden3">
				  <i class="fa fa-times gallery close"></i>
				
				  <div>
				  	<img src="<?php echo bloginfo('template_directory'); ?>/assets/barstool1.jpg" class="chair" alt="" />
				  </div>
		
				<div class="description">
					<p><strong>Description</strong></p>
					<p>AC05 Desk.<br>Ash.<br>40" x 20" x 28"<br>2014.</p>
				</div>
			</div>

			<div class="hidden hidden4">
				  <i class="fa fa-times gallery close"></i>
				
				  <div>
				  	<img src="<?php echo bloginfo('template_directory'); ?>/assets/drawer1.jpg" class="chair" alt="" />
				  </div>
				  
				<div class="description">
					<p><strong>Description</strong></p>
					<p>AC05 Desk.<br>Ash.<br>40" x 20" x 28"<br>2014.</p>
				</div>
			</div>

			<div class="hidden hidden5">
				<i class="fa fa-times gallery close"></i>
					
				  <div>
				  	<img src="<?php echo bloginfo('template_directory'); ?>/assets/table2" class="chair" alt="" />
				  </div>
				  
				<div class="description">
					<p><strong>Description</strong></p>
					<p>AC05 Desk.<br>Ash.<br>40" x 20" x 28"<br>2014.</p>
				</div>
			</div>

			<div class="hidden hidden6">
				  <i class="fa fa-times gallery close"></i>
	
				  <div>
				  	<img src="<?php echo bloginfo('template_directory'); ?>/assets/stacking2.jpg" class="chair" alt="" />
				  </div>
				
				<div class="description">
					<p><strong>Description</strong></p>
					<p>AC05 Desk.<br>Ash.<br>40" x 20" x 28"<br>2014.</p>
				</div>
			</div>

			

  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>