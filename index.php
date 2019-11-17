<?php header();?>
<?php if(have_posts()):?>
	<?php while (have_posts() : the_post()) ?>

		<?php echo the_title();?>
		<?php echo the_content();?>
		
    <?php endwhile; wp_rest_postdata();?>
<?php endif;?>

<?php footer();?>