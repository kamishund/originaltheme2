<section class="p_works" style=" background-image: url('<?php echo get_template_directory_uri(); ?>/img/serviceback.jpg');">
    <h3 class="section_ttl">WORKS</h3>
    <div class="works_list">
        <?php
        $args = array(
            'post_type' => 'works', // 投稿タイプスラッグ
            'posts_per_page' => 3
        );
        $the_query = new WP_Query($args); // データベースを検索して引っ張ってくる情報を作成（$argsで必要な情報を配列にして渡している）				
        ?>
        <ul class="p_works_grid">
            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="inviewWork">
                        <a href="<?php the_permalink(); ?>">
                            <div class="img"><img src="<?php echo CFS()->get('thumbnail'); ?>" alt=""></div>
                            <p class="type">業種：<?php echo CFS()->get('type'); ?></p>
                            <p class="client">クライアント：<?php echo CFS()->get('client'); ?></p>
                        </a>
                    </li>
                <?php endwhile; ?>
        </ul>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <?php endif; ?>
    <a class="button" href="<?php echo esc_url(home_url("/works/")); ?>">もっと見る</a>
    </div>

</section>