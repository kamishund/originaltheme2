<section class="p_news">
    <h3 class="section_ttl">NEWS</h3>
    <ul class="news_list">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li class="inviewfadeIn">
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
    <a class="button" href="<?php echo esc_url(home_url("/news/")); ?>">もっと見る</a>
</section>