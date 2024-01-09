<?php
/**
* Template Name: Page About
*/
if(is_front_page()) {
?>
    <section id="about-home" class="about-home">
        <div class="">
                <?php echo apply_filters('the_content', get_post_field('post_content', $post_id)); ?>            
        </div>
    </section>
<?php
}else{
    
}
?>