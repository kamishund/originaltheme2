<?php

/**
 * Template Name: page-about
 */
?>
<?php get_header(); ?>


<div class="l_content">
    <div class="p_hc">
        <?php get_template_part("inc/header"); ?>
    </div>

    <div class="p_kaisou" style=" background-image: url('<?php echo get_template_directory_uri(); ?>/img/newsback.jpg');">
        <div class="p_wrapper">
            <h2>ABOUT</h2>
        </div>
    </div>

    <main>
        <div class="p_about_page">
            <div class="p_wrapper">
                <h3 class="section_ttl">ABOUT</h3>
                <ul class="p_about_table">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li class="p_table_in">
                                <h4 class="p_tb_name">社名</h4>
                                <p class="p_tb_text"><?php echo CFS()->get('name'); ?></p>
                            </li>
                            <li class="p_table_in">
                                <h4 class="p_tb_name">代表</h4>
                                <p class="p_tb_text"><?php echo CFS()->get('leader'); ?></p>
                            </li>
                            <li class="p_table_in">
                                <h4 class="p_tb_name">住所</h4>
                                <p class="p_tb_text"><?php echo CFS()->get('adress'); ?></p>
                            </li>
                            <li class="p_table_in">
                                <h4 class="p_tb_name">資本金</h4>
                                <p class="p_tb_text"><?php echo CFS()->get('capital'); ?></p>
                            </li>

                            <li class="p_table_in bb">
                                <h4 class="p_tb_name">従業員</h4>
                                <p class="p_tb_text"><?php echo CFS()->get('member'); ?></p>
                            </li>
                        <?php endwhile; ?>
                    <?php else : ?>
                    <?php endif; ?>
                </ul>
                <?php wp_reset_postdata(); ?>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477985333066!2d139.74324421553058!3d35.6585848388206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1635029765025!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </main>
</div>


<?php get_footer(); ?>