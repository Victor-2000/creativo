<?php get_header();?>

<body class="blog">
    <!-- MAIN-CTA -->
    <section class="main-cta">
        Aici ar trebui sa apara scrisul cu imaginea care este pe admin dar in loc nu imi apare nimic.
            <?php the_content()?>
        </section>
        </div>

     <?php
        if(have_posts()){
            while(have_posts()){

                the_post();

                get_template_part( 'template_parts/content', 'archive');

            }
        }
    ?>
</body>

<?php get_footer();?>