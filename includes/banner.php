<!-- 		<?php// if(have_rows('banner','options')):?>
			<?php //while(have_rows('banner','options')): the_row(); ?>
				<?php $hero_image// = get_sub_field('bg_image');?>
				<?php $header //= get_sub_field('header');?>
				<?php $sub_header //= get_sub_field('sub_header');?>
				<?php $btn_text //= get_sub_field('btn_text'); ?>
		<div class="page-banner-background">
	      	<div class="page-banner-image" style="background-image:url(	<?php// echo reset( wp_get_attachment_image_src( $hero_image ,'full' ) ); ?>);">
	      	</div>
	    </div>
	    <div class="page-banner-inner">
	    	<div class="page-banner-middle">
		        <div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="page-banner-text">
								<div class="middle">
						            <p><?php //echo $header ;?></p>
						            <p><?php //echo $sub_header; ?></p>
					            </div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="page-banner-button">
								<div class="middle">
									<a href="" class="btn-quote hvr-grow">
										<?php //echo $btn_text; ?>
									</a>
								</div>
						    </div>
						</div>
					</div>
			    </div>
		    </div>
	    </div>
	<div class="overlay"></div><div class="overlay overlay-top"></div>
<?php //endwhile; ?>
<?php //endif; ?>
 -->
        <?php $contactBanners = get_field('contact_banner'); ?>
        <?php if($contactBanners): ?>
            <?php foreach ($contactBanners as $contactBanner) :?>
                <?php $hero_image = $contactBanner['bg_image'];?>
                <?php $header = $contactBanner['header'];?>
                <?php $sub_header = $contactBanner['sub_header'];?>
                <?php $btn_text = $contactBanner['btn_text']; ?>
                <div class="page-banner-background">
                    <div class="page-banner-image" style="background-image:url( <?php echo reset( wp_get_attachment_image_src( $hero_image ,'full' ) ); ?>);">
                    </div>
                </div>
                <div class="page-banner-inner">
                    <div class="page-banner-middle">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="page-banner-text">
                                        <div class="middle">
                                            <p><?php echo $header ;?></p>
                                            <p><?php echo $sub_header; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="page-banner-button">
                                        <div class="middle">
                                            <a href="" class="btn-quote hvr-grow">
                                                <?php echo $btn_text; ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overlay"></div><div class="overlay overlay-top"></div>
            <?php endforeach; ?>
        <?php endif; ?>