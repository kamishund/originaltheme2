<?php get_header(); ?>


<div class="l_content">
    <div class="p_hc">
        <?php get_template_part("inc/header"); ?>
    </div>

    <div class="p_kaisou" style=" background-image: url('<?php echo get_template_directory_uri(); ?>/img/newsback.jpg');">
        <div class="p_wrapper">
            <h2>CONTACT</h2>
        </div>
    </div>

    <main>
        <div class="p_contact_page">
            <div class="p_wrapper">
                <h3 class="section_ttl">Contact</h3>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </main>
</div>


<?php get_footer(); ?>