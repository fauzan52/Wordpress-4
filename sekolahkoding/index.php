<?php get_header();  ?>
<main>
<?php
if( have_posts() ):
	while (have_posts() ): the_post();
		get_template_part('content', get_post_format());
	endwhile;
else:
	echo 'Tidak ada postingan';
endif;

?>
</main>

<!--Memanggil Widget-->
<aside>
    <?php dynamic_sidebar('sidebar1') ?>
</aside>
<div class="clear"></div>
<?php get_footer(); ?>

<!--WP Query-->
<div id="custom_post">
    <h1>Post Terakhir : </h1>
<?php
    $custom_post = new WP_Query('cat=7');

    if   ($custom_post -> have_posts()):
        while ($custom_post->have_posts()): $custom_post->the_post(); ?>
        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
    <?php
    endwhile;
    else:
        echo 'Tidak ada postingan';
    endif;
?>
</div>
