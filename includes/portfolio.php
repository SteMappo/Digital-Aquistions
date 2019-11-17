<div class="portfolio-heading">
                <div class="portfolio-header">
                    <h3>See Are Work</h3>
                </div>
                <div class="seperator"></div>
                <div class="portfolio-sub-header">
                    <p>I am Sub heading text, Am going to say a little bit about the work we have done for other companys. And may even mention some of the bosses favourit pass times </p>
                </div>
            </div>
            <div id="filters" class="button-group justify-content-center">  
                <button class="nav-link button is-checked" data-filter="*">All</button>
                <button class="nav-link button" data-filter=".portfolio_categories-commercial">Commercial</button>
                <button class="nav-link button"  data-filter=".portfolio_categories-commerce">E-Commerce</button>
<!--                 <button class="nav-link button" data-filter=".category-clients">Clients</button>
                <button class="nav-link button" data-filter=".category-company">Company</button> -->
                <!-- <button class="nav-link button">E-Commerce</button> -->
            </div>
            <div class="grid">
                <?php

                $args = array('post_type' => 'portfolios','posts_per_page'=> 8, 'order'=>'ASC');
                $posts = get_posts($args);
               foreach($posts as $post) : //setup_postdata($post);?>
                    <div <?php post_class(array('post','element-item','transition'));?> data-catagory="post-transition">
                            <?php if (has_post_thumbnail()): ?>
                                <?php $the_image  = the_post_thumbnail( 'full', array('class' => 'image-portfolio'));?>
                                <div class="package-background">
                                    <div class="package-background-image" style="background-image: url(<?php echo $the_image;?>);">
                                        
                                    </div>
                                </div>
                            <?php endif?>
                        <div class="post-info">
                            <div class="post-text transition">
                                <div class="post-title">
                                    <h4><?php the_title(); ?></h4>
                                    <div class="seperator"></div>
                                </div>
                                <div class="post-description">
                                    <p><?php the_excerpt();?></p>
                                </div>
                                <div class="post-btn">
                                    <a href="<?php the_permalink();?>">Take a Look</a>
                                </div>
                            </div>
                        </div>
                        <div class="overlay-post transition"></div>
                    </div>
                <?php endforeach; ?>
                <?php //wp_rest_postdtata($posts);?>
            </div>