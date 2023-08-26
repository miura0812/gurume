<?php get_header(); ?>

<main>

<article>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>

    <div class="container">
        <?php the_content(); ?>
        <?php the_category(); ?>
    </div>

    <?php if( has_post_thumbnail() ): ?>
        <?php $eyecatch = get_eyecatch_default(); ?>
        <img src="<?php echo $eyecatch[0]; ?>" alt="アイキャッチ">
    <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/image/IMG-2627.jpg" alt="niku" width="100vw">
    <?php endif; ?>

    <?php endwhile; ?>
    <?php endif; ?>
</article>
</main>
<?php get_footer(); ?>