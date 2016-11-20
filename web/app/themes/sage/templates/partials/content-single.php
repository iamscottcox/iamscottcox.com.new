<article <?php post_class(); ?>>
    <div class="entry-content">
        <?php get_template_part('partials/entry-meta'); ?>
        <?php the_content(); ?>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </div>
</article>
