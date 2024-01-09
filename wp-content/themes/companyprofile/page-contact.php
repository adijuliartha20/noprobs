<?php
/**
* Template Name: Page Contact
*/
if(is_front_page()) {
    ?>
        <section id="page-contact" class="page-contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class="sub-title"><?php echo get_the_title( $post_id ); ?></h2>
                        <?php echo apply_filters('the_content', get_post_field('post_content', $post_id)); ?>            
                    </div>
                    <div class="col-sm-6 col-form">
                        <h3>Schedule a job</h3>
                        <form action="">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input class="form-control form-control-sm" name="first_name" type="text" placeholder="First Name" aria-label=".form-control-sm">
                                </div>
                                <div class="col-sm-6">
                                    <input class="form-control form-control-sm" name="last_name" type="text" placeholder="Last Name" aria-label=".form-control-sm">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <input class="form-control form-control-sm" name="email" type="email" placeholder="Email" aria-label=".form-control-sm">
                                </div>
                                <div class="col-sm-6">
                                    <input class="form-control form-control-sm" name="business_name" type="text" placeholder="Business Name" aria-label=".form-control-sm">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <input class="form-control form-control-sm" name="phone" type="text" placeholder="Phone" aria-label=".form-control-sm">
                                </div>
                                <div class="col-sm-6">
                                    <input class="form-control form-control-sm" name="address" type="text" placeholder="Your Address" aria-label=".form-control-sm">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="description" rows="6" placeholder="Enter a description of the work you would like done..."></textarea>
                                </div>
                            </div>
                            <button class="wp-block-button__link button-yellow">Submit</button>


                            

                        </form>
                    </div>
                </div>
            </div>
        </section>
    <?php
    }else{
        
    }
        