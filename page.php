<?php get_header(); ?>

<div class="container">

	<?php if(is_category()): ?>
	<h1 class="archive-title">
	<i class="fa fa-folder-open"></i>
	「<?php single_cat_title(); ?>」に関する記事
	</h1>
	<?php endif; ?>

	<?php if(is_month()): ?>
	<h1 class="archive-title">
	<i class="fa fa-clock-o"></i>
	<?php echo get_the_date('Y年n月'); ?>に投稿した記事
	</h1>
	<?php endif; ?>


	<?php if(have_posts()): while(have_posts()): the_post(); ?>
	
	<article <?php post_class(); ?>>
	
	<h1><?php the_title(); ?></h1>
	
	<?php the_content(); ?>
	
	<?php if(is_single()): ?>
	<div class="pagenav">
		<span class="old">
		<?php previous_post_link(
			'%link',
			'<i class="fa fa-chevron-circle-left"></i> %title'
		); ?>
		</span>
	
		<span class="new">
		<?php next_post_link(
			'%link',
			'%title <i class="fa fa-chevron-circle-right"></i>'
		); ?>
		</span>
	</div>
	<?php endif; ?>
	
	</article>
	
	<?php endwhile; endif; ?>
	
	<?php if($wp_query->max_num_pages > 1) : ?>
		<div class="pagenav">
			<span class="old">
				<?php next_posts_link('<i class="fa fa-chevron-circle-left"></i> 古い記事'); ?>
			</span>
	
			<span class="new">
				<?php previous_posts_link('新しい記事 <i class="fa fa-chevron-circle-right"></i>'); ?>
			</span>
		</div>
	<?php endif; ?>

</div><!-- container -->

<?php get_footer(); ?>
