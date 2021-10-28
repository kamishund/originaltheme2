<header>
    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    <div>
        <ul>
            <li><a href="<?php echo home_url(); ?>">TOP</a></li>
            <li><a href="<?php echo esc_url(home_url("/works/")); ?>">WORKS</a></li>
            <li><a href="<?php echo esc_url(home_url("/news/")); ?>">NEWS</a></li>
            <li><a href="<?php echo esc_url(home_url("/about/")); ?>">ABOUT</a></li>
            <li><a href="<?php echo esc_url(home_url("/contact/")); ?>">CONTACT</a></li>
        </ul>
        <div class="han">
            <div class="openbtn1" id="menu"><span></span><span></span><span></span></div>
        </div>
    </div>
</header>
<div class="hanmenu" id="menuhontai">
    <ul>
        <li><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li><a href="<?php echo esc_url(home_url("/works/")); ?>">WORKS</a></li>
        <li><a href="<?php echo esc_url(home_url("/news/")); ?>">NEWS</a></li>
        <li><a href="<?php echo esc_url(home_url("/about/")); ?>">ABOUT</a></li>
        <li><a href="<?php echo esc_url(home_url("/contact/")); ?>">CONTACT</a></li>
    </ul>
</div>