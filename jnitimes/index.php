<!--
* index.php
* 一番最初に呼び出されるトップページ
*
-->

<?php get_header();?>

<main id="main">
	<div id="main-in">
		<section class="inner">
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
		/* 記事タイトルの表示（h1で囲む）*/
		the_title( '<h1>', '</h1>' );
			if (has_post_thumbnail()) { // アイキャッチ画像があれば
				echo '<div class="imgArea">';
				the_post_thumbnail(array(640, 360)); // 横640px、縦360pxでアイキャッチ画像を表示
				echo '</div>';
			} else { // 「アイキャッチ画像があれば」以外なら
				echo '<img src="' . get_template_directory_uri() . '/img/noimage.png" alt="">'; // noimage.svgを表示（パスは適宜変更してください）
			}
		the_content('<p>', '</p>');
		endwhile; endif;
		?>
		</section>
	</div><!-- /#main-in -->
</main>

<?php get_footer();?>