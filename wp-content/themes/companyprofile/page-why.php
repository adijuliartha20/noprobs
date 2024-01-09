<?php
/**
* Template Name: Page Column 4
*/
if(is_front_page()) {
?>
    <section id="page-column-4" class="page-column-4 text-light">
        <div class="container">
                <?php echo apply_filters('the_content', get_post_field('post_content', $post_id)); ?>            
        </div>
    </section>
<?php
}else{
    
}
