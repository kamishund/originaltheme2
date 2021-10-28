<?php get_header(); ?>


<div class="l_content">
    <div class="p_hc">
        <?php get_template_part("inc/header"); ?>
    </div>

    <div class="p_kaisou" style=" background-image: url('<?php echo get_template_directory_uri(); ?>/img/newsback.jpg');">
        <div class="p_wrapper">
            <h2>NEWS</h2>
        </div>
    </div>

    <main>
        <section class="p_news">
            <h3 class="section_ttl">NEWS</h3>
            <ul class="news_list">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" class="link_wrap">
                                <div class="grid">
                                    <p class="news_date"><?php echo get_the_date("Y.m.d"); ?></p>
                                    <p class="news_cat">
                                        <?php
                                        $cat = get_the_category();
                                        $cat = $cat[0];
                                        echo $cat->name;
                                        ?>
                                    </p>
                                    <h4 class="news_title"><?php the_title(); ?></h4>
                                </div>
                            </a>
                        </li>
                <?php
                    endwhile;
                endif;
                ?>
            </ul>
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