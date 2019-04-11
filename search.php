

<?php get_header(); ?>
<div id="wrapper">
<h1 class="title">Search Results</h1>
<?php while ( have_posts() ) : the_post(); ?>
	<?php the_title( '<h2 class="subTitle">','</h2>'); ?>
	<?php the_excerpt(); ?>
<?php endwhile; ?>
</div>
<?php get_footer(); ?>
