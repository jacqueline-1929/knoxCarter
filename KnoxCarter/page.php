<?php get_header(); ?>

<!-- Jumbotron -->
<?php $image = get_field('banner'); ?>
<div class="jumbotron container jumbotron-page" ><img class="img-responsive" style= "content: url('<?php echo $image['url'];?>')">
  <!-- <?php bloginfo('template_directory');?>/imgs/apple-desk.jpg" class="img-responsive">  -->
</div> 
    <div class="container">
    	<div class="page-content">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );
  
				endwhile; endif; 
			?>
            </div>
        </div>
       </div>
    </div>

<?php get_footer(); ?>
