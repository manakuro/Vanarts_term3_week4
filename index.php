<?php 
    include "header.php"; 
    $introProducts = $config['home']['intro'];
    $introInstructors = $config['home']['instructors'];
?>

    <div class="hero">
        
        <div class="hero-inner span-3">
            
            <h2 class="hero-title">Be a leader</h2>

            <p class="hero-caption">We will have you coathing on the first day and every course uses the power of 
storytelling, play and practice as cornerstones of the learning experience.</p>

        </div>
            
    </div><!-- end of hero -->
    
    <main class="page-main">

        <section class="section sec-intro">
            
            <div class="row">

                <div class="span-6 columns">
                    
                    <p class="sec-intro-heading">enhance</p>
                    <p class="sec-intro-heading">your skills</p>

                    <div class="sec-intro-divider"></div>

                    <p class="sec-intro-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque euismod faucibus dolor, vitae posuere dolor consectetur porta. Proin non eleifend enim. </p>

                    <p class="sec-intro-desc">Sed faucibus lorem nisl. Vivamus suscipit, nunc blandit euismod euismod, lorem odio vehicula metus, sed hendrerit odio purus sed nunc.</p>

                </div>

                <div class="span-6 columns">
                    
                <?php foreach($introProducts as $val): ?>
                    
                    <div class="span-6 columns">

                        <div class="sec-intro-product-li <?php echo $val['class']; ?>">

                            <div class="sec-intro-product-li-img-wrapper">
                                <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['alt']; ?>" >
                            </div>
                            
                            <h4 class="sec-intro-product-caption"><?php echo $val['caption']; ?></h4>

                        </div>

                    </div>
                <?php endforeach; ?>

                </div>
                <div class="span-12 columns">
                    <a href="products.php" class="btn sec-intro-cta">Learn More</a>
                </div>

            </div>

            <div class="row">
                
                <div class="sec-intro-intructors">
                <?php foreach($introInstructors as $val): ?>
                    
                    <div class="span-2 columns sec-intro-intructors-li">

                        <div class="sec-intro-product-li <?php echo $val['class']; ?>">
                            <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['alt']; ?>" >
                        </div>

                    </div>
                <?php endforeach; ?>
                </div>

            </div>

        </section><!-- end of sec-intro -->

        <section class="section sec-testimonial">
            
            <div class="row">

                <div class="sec-testimonial-inner">

                    <div class="span-4 offset-8">
                        
                        <h3 class="sec-testimonial-inner-title">course</h3>
                        <p class="sec-testimonial-inner-course">coaching and developing employees</p>

                        <p class="sec-testimonial-inner-comment">“Lorem ipsum dolor sit amet,  consectetur adipiscing elit. Pellentesque euismod faucibus dolor, vitae posuere dolor consectetur porta. Proin non eleifend enim.
                        </p>
                    
                        <p class="sec-testimonial-inner-comment">Sed faucibus lorem nisl. Vivamus suscipit, nunc blandit euismod euismod, lorem odio vehicula metus, sed hendrerit odio purus sed nunc”
                        </p>

                        <p class="sec-testimonial-inner-comment">Nunc commodo elit leo, sit amet faucibus erat fermentum ut. Cras bibendum fermentum leo, at maximus eros dignissim ac. Nam pretium sapien metus, imperdiet dignissim tellus condimentum quis. Nullam non augue vitae nulla tristique scelerisque. Cras lectus est, semper ut fringilla ac, tincidunt sit amet dui. Nam quam dui, dapibus vel sollicitudin quis, aliquet sit amet urna.”
                        </p>

                        <a href="testimonials.php" class="btn sec-testimonial-cta">Watch more stories</a>
                        
                    </div>

                </div>
            </div>

        </section><!-- end of sec-testimonial -->

        <section class="section sec-cta">
            
            <div class="sec-cat-inner">
                <div class="row">
                    
                    <div class="span-6 columns">
                        <p class="sec-cat-caption">all courses available</p>
                    </div>
                    <div class="span-5 offset-1 columns">
                        <a href="signup.php" class="btn sec-cta-cta">sign up</a>
                    </div>
                </div>
            </div>

        </section><!-- end of sec-cta -->

    </main><!-- end of page-main -->

<?php include "footer.php"; ?>