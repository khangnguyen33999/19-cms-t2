<?php /* Template Name: List */ ?>
<?php get_header(); ?>
<h1>Trang danh sách bài viết nè</h1>
<?php
    $args = array(
        'post_type' => 'post'
    );

    $post_query = new WP_Query($args);
if($post_query->have_posts() ) {
  while($post_query->have_posts() ) {
    $post_query->the_post();
    ?>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
    <?php
  }
}
?>
<?php
get_footer();