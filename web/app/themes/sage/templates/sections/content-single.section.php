<section id="section-content-single">
    <?php while (have_posts()) : the_post(); ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-header"><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php get_template_part('partials/content-single'); ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</section>