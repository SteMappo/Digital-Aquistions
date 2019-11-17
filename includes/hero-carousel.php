    <?php if( have_rows('hero','options') ): ?>
        <?php while( have_rows('hero','options') ): the_row(); ?>
      	    <div class="item">
      		    <?php $hero_image = get_sub_field('hero-image'); ?>
      		    <?php $header = get_sub_field('header');?>
      		    <?php $sub_header = get_sub_field('sub-header') ?>
      		    <?php $btn = get_sub_field('btn');?>
      		    <div class="page-banner-background">
	      			<div class="page-banner-image" style="background-image:url(<?php echo reset( wp_get_attachment_image_src( $hero_image ,'full' ) ); ?>);">
	      			</div>
	      		</div>
	      		<div class="page-banner-header wow fadeInDown" data-wow-delay=0.4s>
	      			<div class="page-banner-text">
	      				<h2><?php echo $header ;?></h2>
	      				<h3><?php echo $sub_header;?></h3>
	      				<div class="page-banner-btn">
	      				    <a class="hvr-grow transition" href="#"><?php echo $btn ;?></a>
	      			    </div>
	      			</div>
	      		</div>
	      		<div class="overlay"></div><div class="overlay overlay-top"></div>
	      	</div>
        <?php endwhile; ?>
    <?php endif; ?>
