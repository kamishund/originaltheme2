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

        <div class="p_single">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="img"><img src="<?php echo CFS()->get('thumbnail'); ?>" alt=""></div>

                    <div class="p_news_content">
                        <h5 class="result_ttl">・クライアント</h5>
                        <p class="result_text"><?php echo CFS()->get('client'); ?></p>

                        <h5 class="result_ttl">・業種</h5>
                        <p class="result_text"><?php echo CFS()->get('type'); ?></p>

                        <h5 class="result_ttl">・ワークフロー</h5>
                        <p class="result_text"><?php echo CFS()->get('workflow'); ?></p>

                        <h5 class="result_ttl">・成果</h5>
                        <p class="result_text"><?php echo CFS()->get('result'); ?></p>
                    </div>
                    <div class="button" id="ho_btn"><?php echo CFS()->get('link'); ?></div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </main>

</div>


<?php get_footer(); ?>