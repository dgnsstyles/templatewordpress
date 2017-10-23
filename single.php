<?php get_header(); ?>
<?php while(have_posts()) : the_post() ?>
<div class="container">
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<p><?php the_content(); ?></p>
</div>

<?php endwhile; wp_reset_query(); ?>


<?php get_footer(); ?>