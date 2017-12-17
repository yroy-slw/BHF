<?php get_header(); ?>

<div class="border-top">
	<div class="two"></div>
	<div class="three">
		<div class="inner-three">
			<h1>News</h1>
		</div>
	</div>
</div>
<div class="cont">
	<section class="page">
		<div class="left-page">
		</div>
		<div class="right-page">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="elem-news">
				<a href="<?php the_permalink(); ?>">
				<div class="chev-news"><i class="fa fa-chevron-right" aria-hidden="true"></i>
</div>
				<h2><?php the_title(); ?></h2>
				<h3><?php the_field("date"); ?></h3>
			</a>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</section>

</div>

<?php get_footer(); ?>