<?php
/**
* Template Name: Page Gallery
*/

if(is_front_page()) {
    ?>
        <section id="page-gallery" class="page-gallery">
            <div class="container">
                <h2 class="sub-title"><?php echo get_the_title( $post_id ); ?></h2>
                <div class="gallery-content">
                    <?php echo apply_filters('the_content', get_post_field('post_content', $post_id)); ?>            
                </div>                
            </div>
        </section>
    <?php
    }else{
        
    }
    