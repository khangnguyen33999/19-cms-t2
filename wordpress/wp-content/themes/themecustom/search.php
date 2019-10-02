<?php /* Template Name: Search */ ?>
<?php get_header(); ?>
<h1>Trang Search nè</h1>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>"  <?php post_class()?>>
    <header>
      <h4><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h4>
    </header>
    <?php the_excerpt(); ?>
  </article>
	 

<?php  endwhile; else: ?>
  <div class="alert alert-warning">
    <i class="fa fa-exclamation-triangle"></i> <?php echo 'Sorry not found' ?>
  </div>
<?php endif; ?>

<?php
get_footer();