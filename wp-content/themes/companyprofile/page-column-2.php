<?php
/**
* Template Name: Page Column 2
*/
if(is_front_page()) {
?>
    <section id="page-column-2" class="page-column-2 text-light">
        <div class="container">
            <!-- <h2 class="sub-title sub-title-yellow"><?php echo get_the_title( $post_id ); ?></h2> -->
            <?php echo apply_filters('the_content', get_post_field('post_content', $post_id)); ?>            
        </div>
    </section>
<?php
}else{
    
}
    