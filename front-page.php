<?php get_header(); ?>


<div class="l_content">
    <div class="p_main" style=" background-image: url('<?php echo get_template_directory_uri(); ?>/img/main.jpg');">
        <?php get_template_part("inc/header"); ?>
        <div class="p_wrapper">
            <div class="p_mv_text">
                <h2>THIS IS<br> SHUND COMPANY</h2>
                <p>
                    これはサンプルですこれはサンプルですこれはサンプルです<br>
                    これはサンプルですこれはサンプルです
                </p>
            </div>
        </div>
    </div>

    <main>
        <?php get_template_part("inc/newsSection"); ?>
        <?php get_template_part("inc/aboutSection"); ?>
        <?php get_template_part("inc/worksSection"); ?>
        <?php get_template_part("inc/contactSection"); ?>

    </main>
</div>


<?php get_footer(); ?>