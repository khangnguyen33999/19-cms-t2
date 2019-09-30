<?php get_header(); ?>

<?php

if ( have_posts() ) :?> 
 <?php
while ( have_posts() ) : the_post(); ?>

<h2 class="text-center"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

<a href="<?php the_permalink() ?>"><div class="text-content"><?php the_content() ?>	<?php $post_meta_value = get_post_meta( $post->ID, 'test_meta_block_field', true );
					echo 'Email is: ' .$post_meta_value ; ?></div></a>

<?php endwhile;

else :
echo '<p>There are no posts!</p>';
endif;
?>
<?php get_sidebar();?>
<?php
get_footer();