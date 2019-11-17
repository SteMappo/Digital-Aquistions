    	  <?php $abouts = get_field('about'); ?>
        <?php if($abouts): ?>
             <?php foreach ($abouts as $about) :?>
                <?php $hero_image = $about['bg_image'];?>
                <?php $top_header = $about['top_header'];?>
                <?php $top_paragraph = $about['top_paragraph'];?>
                <?php $left_header = $about['left_header']; ?>
                <?php $left_paragraph = $about['left_paragraph']; ?>
                <?php $right_header = $about['right_header'];?>
                <?php $right_paragraph = $about['right_paragraph'];?>
        <div class="row">
            <div class="col-md-6">
                    <div class="page-text">
                        <div class="text">
<!--                            <h4 class="page-header">Who is Digital Aqusitions for?</h4>
                                <div class="seperater"></div>
                            
 -->                            <div class="row">
                                <div class="col-md-12">
                                    <i class="fa fa-diamond fa-3x" aria-hidden="true"></i>
                                    <h4 class="top-header"><?php echo $top_header; ?></h4>
                                    <p><?php echo $top_paragraph ; ?></p>
                                </div>
                                <div class="seperater"></div>
                                <div class="col-md-12">
                                    <i class="fa fa-puzzle-piece fa-4x" aria-hidden="true"></i>

                                    <h4><?php echo $left_header; ?></h4>
                                    <p> <?php echo $left_paragraph; ?></p>
                                </div>
                               <!--  <div class="col-md-6">
                                    <i class="fa fa-diamond fa-3x" aria-hidden="true"></i>
                                    <h4><?php //echo $right_header; ?></h4>
                                    <p><?php  //echo $right_paragraph; ?></p>
                                </div> -->
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="page-image">
                    <div class="page-banner-background">
                        <div class="page-banner-image" style="background-image:url(<?php echo reset( wp_get_attachment_image_src( $hero_image ,'full' ) ); ?>);">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <?php endforeach?>
        <?php endif ?>
        <?php// if(have_rows('about','options')): ?>
    		<?php// while(have_rows('about','options')): the_row(); ?>
    			<?php //$hero_image = get_sub_field('bg_image') ;?>
    			<?php// $top_header = get_sub_field('top_header');?>
    			<?php// $top_paragraph = get_sub_field('top_paragraph'); ?>
    			<?php// $left_header = get_sub_field('left_header'); ?>
    			<?php// $left_paragraph = get_sub_field('left_paragraph'); ?>
    			<?php// $right_header = get_sub_field('right_header');?>
    			<?php //$right_paragraph = get_sub_field('right_paragraph');?>
    	<!-- <div class="row">
    		<div class="col-md-6">
	    			<div class="page-text">
	    				<div class="text"> -->
<!-- 	    					<h4 class="page-header">Who is Digital Aqusitions for?</h4>
	    						<div class="seperater"></div>
	    					
 -->	  <!--   					<div class="row">
	    						<div class="col-md-12">
	    							<h4 class="top-header"><?php //echo $top_header; ?></h4>
	    							<p><?php //echo $top_paragraph ; ?></p>
	    						</div>
	    						<div class="seperater"></div>
	    						<div class="col-md-6">
	    							<i class="fa fa-puzzle-piece fa-4x" aria-hidden="true"></i>

	    							<h4><?php //echo $left_header; ?></h4>
	    							<p> <?php //echo $left_paragraph; ?></p>
	    						</div>
	    						<div class="col-md-6">
	    							<i class="fa fa-diamond fa-3x" aria-hidden="true"></i>
	    							<h4><?php //echo $right_header; ?></h4>
	    							<p><?php //echo $right_paragraph; ?></p>
	    						</div>
	    					</div>
	    				</div>
    			</div>
    		</div>
    		<div class="col-md-6">
    			<div class="page-image">
    				<div class="page-banner-background">
    					<div class="page-banner-image" style="background-image:url(<?php// echo reset( wp_get_attachment_image_src( $hero_image ,'full' ) ); ?>);">
    						
    					</div>
    				</div>
    			</div>
    		</div>
    	</div> -->
    <?php //endwhile; ?>
    <?php //endif; ?>

