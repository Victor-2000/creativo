<?php get_header();?>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blog.css" />

<!-- MAIN-CTA -->
<section class="main-cta">
        <?php the_content()?>
      </section>
    </div>

<!-- <?php
    if(have_posts()){
        while(have_posts()){

            the_post();

            get_template_part( 'template_parts/content', 'archive');

        }
    }
?> -->

<?php get_footer();?>