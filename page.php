<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="border-top">
	<div class="two"></div>
	<div class="three">
		<div class="inner-three">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</div>
<div class="cont">
	<section class="page" <?php live_edit('post_content'); ?>>
		<div class="left-page">
		</div>
		<div class="right-page">
			<?php the_content(); ?>

			<?php if ( is_page( 'Prestations' ) ) { ?>
				<?php while ( have_rows('liste') ) : the_row(); ?>

					<div class="elem">
						<div class="top">
							<div class="chev"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
							<h2><?php the_sub_field("titre"); ?></h2>
							<h3><?php the_sub_field("description"); ?></h3>
						</div>
						<div class="down">
							<?php the_sub_field("contenu"); ?>
						</div>
					</div>

				<?php endwhile; ?>
			<?php } ?>

			<?php if ( is_page( 'Our activities' ) ) { ?>
				<?php while ( have_rows('liste') ) : the_row(); ?>

					<div class="elem">
						<div class="top">
							<div class="chev"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
							<h2><?php the_sub_field("titre"); ?></h2>
							<h3><?php the_sub_field("description"); ?></h3>
						</div>
						<div class="down">
							<?php the_sub_field("contenu"); ?>
						</div>
					</div>

				<?php endwhile; ?>
			<?php } ?>

		</div>
	</section>

</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>