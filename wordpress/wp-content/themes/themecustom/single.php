<?php get_header();?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="container">
                <h1>Trang chi tiết nè</h1>
                <div class="row text-center">
                <h1><?php the_title(); ?></h1>
                </div>
                <div class="col-md-12">
                <?php  the_content();  ?>
                </div>
                
                </div>

            <?php endwhile; ?>
<?php get_footer();?>