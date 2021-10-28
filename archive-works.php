<?php get_header(); ?>


<div class="l_content">
    <div class="p_hc">
        <?php get_template_part("inc/header"); ?>
    </div>

    <div class="p_kaisou" style=" background-image: url('<?php echo get_template_directory_uri(); ?>/img/newsback.jpg');">
        <div class="p_wrapper">
            <h2>WORKS</h2>
        </div>
    </div>

    <main>
        <section class="p_news p_works_archive">
            <h3 class="section_ttl">WORKS</h3>
            <ul class="p_works_grid">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <div class="img"><img src="<?php echo CFS()->get('thumbnail'); ?>" alt=""></div>
                                <p class="type">業種：<?php echo CFS()->get('type'); ?></p>
                                <p class="client">クライアント：<?php echo CFS()->get('client'); ?></p>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
            </ul>
            <?php wp_reset_postdata(); ?>
            <div class="btnarea">
                <?php
                $link = get_previous_posts_link("< 前へ");
                if ($link) {
                    $link = str_replace("<a", "<a class='button'", $link);
                    echo $link;
                }
                $link = get_next_posts_link("次へ >");
                if ($link) {
                    $link = str_replace("<a", "<a class='button'", $link);
                    echo $link;
                }
                ?>
            </div>
        </section>
    </main>

</div>


<?php get_footer(); ?>