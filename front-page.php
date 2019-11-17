<?php get_header(); ?>
<div class="front-page">
        <?php $contact = get_field('contactBG');?>
	<div class="hero">
	    <div id="owl-carousel-hero" class="owl-carousel owl-theme">
		    <?php include TEMPLATEPATH . "/includes/hero-carousel.php"; ?>
	    </div>
	</div>
    <div id="packages" style="position: relative;"></div>
    <div class="online-packages" >
        <div class="container">
            <?php include TEMPLATEPATH . "/includes/packages.php";?>
        </div>
        <?php $packagesBG = get_field('packages_background');?>
        <?php if ($packagesBG): ?>
            <div class="behind-package-background">
                <div class="behind-package-background-image" style="background-image: url(<?php echo $packagesBG;?>);">
                    
                </div>
            </div>
        <?php endif ?>
        <div id="about"></div>
    </div>
    
    <div class="about">
        <?php include TEMPLATEPATH . "/includes/about.php"; ?>
    </div>
    <div class="three-point-banner">
        <?php include TEMPLATEPATH . "/includes/three-point-banner.php"; ?>
    </div>
    <div id="projects"></div>
    <div class="portfolio">
        <div class="container-fluid">
            <?php include TEMPLATEPATH . "/includes/portfolio.php";?>

        </div>
        <div id="location"></div>
    </div>
    <div class="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <div class="contact-info-center">
                            <div class="title"><h3>Get In touch</h3></div>
                            <div class="seperator"></div>
                            <p>We are always up for a chat, whether it's about, technology, sports, business, the planet, gardening, a quote.... we are interested in co-learning about the world, each other and ourselves. </p>
                            <div class="info">
                            <ul>
                                <li><a href="mailto:stemappo@hotmail.co.uk">Email: <span class="transition">stemappo@hotmail.co.uk</span></a></li>
                                <li><a href="tel:07715358692">Mobile: <span class="transition">07715 358692</span></a></li>
                            </ul>
                            </div>
                            <div class="socail-links">
                                <ul>
                                    <li><a href="#"><i class="transition fa fa-2x fa-facebook-official" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="transition fa fa-2x fa-twitter-square" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="transition fa fa-2x fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map">
                        <iframe width="100%" height="600" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJk62zZQMoe0gRQNcB9xJmdGQ&key=AIzaSyDS09G23wFHxz7W-VQeX8W0LaQGZDWs_So" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            
        </div>
        <div id="contact"></div>
    </div>
    <div class="contact-form">
            <?php if ($contact): ?>
            <div class="behind-contact-background">
                <div class="behind-contact-background-image" style="background-image: url(<?php echo $contact;?>);">
                    
                </div>
            </div>
        <?php endif ?>
        <div class="container">
            <div class="title">
                <h3>Get In touch</h3>
            </div>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="#">First Name</label>
                        <input type="text" placeholder="First Name" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="#">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="#">Email</label>
                        <input type="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="#">Contact Number</label>
                        <input type="text" class="form-control" placeholder="Contact Number">
                    </div>
                </div>
                    <div class="form-group">
                        <label for="#">How can we help you?</label>
                        <select name="#" id="inputreason" class="form-control">
                            <option value="">Commercial website</option>
                            <option value="">E-Commerce website</option>
                            <option value="">Friendly Chat</option>
                            <option value="">Other Services</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="#">Addtional Information</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                <button class="btn btn-form" type="submit">Away we go</button>
            </form>
        </div>
        <div class="overlay"></div>

    </div>
</div>
    <!--     <div class="eight-col-image">
        <?php //include TEMPLATEPATH . "/includes/villain.php" ;?>
    </div>
 -->
 <!--   <div class="contact-banner">
        <?php //include TEMPLATEPATH . "/includes/banner.php"; ?> 

    </div> -->
    <!--        <div class="fa-stack fa-2x">
            <a href="#beginner">
                <i class="fa fa-arrow-down fa-stack-1x animated bounce"></i>
            </a>
        </div> -->
<?php get_footer(); ?>

