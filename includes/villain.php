<div class="container">
    <?php $delay = 0; ?>
    <?php if(have_rows('image_&_text','options')):?>
        <?php while(have_rows('image_&_text','options')): the_row();$delay++ ; ?>
            <?php $page_image = get_sub_field('image'); ?>
            <?php $header = get_sub_field('header') ;?>
            <?php $text_description = get_sub_field('description');?>
            <?php $postion = get_sub_field('image_position'); ?>
            <?php $posts = get_sub_field('image_position'); ?>
            <?php $col_image = array(); ?>
            <?php $col_text = array(); ?>
            <?php if( $posts ): ?>
                <?php foreach( $posts as $post ): ?>
                    <?php if ( $post == "right") :
                        $col_image[] = " col-md-7 push-md-5 wow fadeInRight";//push to the left 
                        $col_text[] = "col-md-5 pull-md-7 wow fadeInLeft" ;//pull to the right
                        elseif ($post == "center") :
                        $col_image[] = " col-md-4";
                        $col_text[] = "col-md-4 " ;
                    else:
                        $col_image[] = "col-md-7 wow fadeInLeft";
                        $col_text[] = "col-md-5 wow fadeInRight" ;
                        endif;?>
                        <div class="item">
                            <div class="row">   
                                <div class="<?php echo implode('', $col_image) ;?>  " data-wow-delay=<?php echo $delay?>s>
                                    <div class="page-banner-background">
                                        <div class="page-banner-image" style="background-image:url(<?php echo reset( wp_get_attachment_image_src( $page_image ,'full' ) ); ?>);">

                                        </div>
                                    </div>
                                </div>
                                <?php if($post == "center"): ?>
                                  <div class=" col-md-4 center-peace wow fadeInUp" data-wow-delay=<?php echo $delay?>s>
                                    <div class="page-banner-background">
                                        <div class="page-banner-image" style="background-image:url(<?php echo reset( wp_get_attachment_image_src( $page_image ,'full' ) ); ?>);">
                                            <div class="text">
                                                <div class="text-header">
                                                    <h6><?php echo $header; ?></h6>
                                                    
                                                </div>
                                                <div class="seperator"></div>
                                                <div class="text-description">
                                                    <p><?php echo $text_description; ?></p>
                                                </div>

                                            </div>
                                            <div class="overlay"></div>
                                        </div>
                                    </div> 
                                </div> 
                            <?php endif; ?>
                                <div class="<?php echo implode('', $col_text) ;?>" data-wow-delay=<?php echo $delay?>s>
                                    <div class="text">
                                        <div class="text-header">
                                            <h6><?php echo $header; ?></h6>
                                        </div>
                                        <div class="seperator"></div>
                                        <div class="text-description">
                                            <p><?php echo $text_description; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>