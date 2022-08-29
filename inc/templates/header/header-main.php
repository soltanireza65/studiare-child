<?php

/**
 * Template File for Main Header
 */

$prefix = '_studiare_';

$header_display = get_post_meta(get_the_ID(), $prefix . 'header_off', true);
$custom_logo_image = get_theme_file_uri('assets/images/logo_default.svg');
$search_header = true;
$header_button = false;
$header_button_link = 'account';
$header_button_custom_link = null;
$header_button_custom_text = null;
$header_sticky_menu = false;

if (class_exists('Redux')) {
    $header_sticky_menu = codebean_option('header_sticky_menu');
    $search_header = codebean_option('topbar_search');
    $logo_uploaded = codebean_option('custom_logo_image');
    if (isset($logo_uploaded['url']) && $logo_uploaded['url'] != '') {
        $custom_logo_image = $logo_uploaded['url'];
    }
    $header_button = codebean_option('header_button');
    $header_button_link = codebean_option('header_button_link');
    $header_button_custom_link = codebean_option('header_button_custom_link');
    $header_button_custom_text = codebean_option('header_button_custom_text');
    $header_button_custom_text_after_login = codebean_option('header_button_custom_text_after_login');
    $header_button_custom_link_after_login = codebean_option('header_button_custom_link_after_login');
}

$menu = wp_nav_menu(array(
    'theme_location'  => 'main-menu',
    'container'       => false,
    'menu_class'      => 'menu',
    'echo'            => false,
    'walker'             => new EmallShopFrontendWalker(),
));
?>
<?php if (!$header_display) : ?>

    <header class="site-header<?php echo esc_attr($header_sticky_menu) ? " cdb-header-fixed" : ''; ?>" style="background-color: #E3F8EB;">

        <div class="container">
            <div class="site-header-inner">

                <div class="navigation-left">

                    <div class="site-logo">
                        <div class="studiare-logo-wrap">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="studiare-logo studiare-main-logo" rel="home">
                                <img src="<?php echo esc_url($custom_logo_image); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                            </a>
                        </div>
                    </div>

                    <div class="site-navigation studiare-navigation" role="navigation">
                        <?php echo wp_kses_post($menu); ?>
                    </div>

                </div>

                <?php if (function_exists('WC')) : ?>
                    <div class="header-cart-icon">
                        <a href="<?php echo wc_get_cart_url(); ?>" class="mini-cart-opener">
                            <span class="bag-icon">
                                <i class="fal fa-shopping-bag"></i>
                            </span>
                            <?php studiare_cart_count(); ?>
                        </a>

                    </div>
                <?php endif; ?>

                <?php if ($header_button) : ?>
                    <div class="header-button-link">
                        <?php if (is_plugin_active('digits/digit.php') || is_plugin_active('digit_ippanel/digit_ippanel.php')) : ?>

                            <?php if (is_user_logged_in()) : ?>
                                <?php
                                get_template_part('/inc/templates/header/user-menu');
                                ?>
                            <?php else : ?>
                                <?php echo do_shortcode('[dm-modal]'); ?>
                            <?php endif; ?>
                        <?php else : ?>
                            <?php if ($header_button_link == 'account') : ?>
                                <?php $account_link = get_permalink(get_option('woocommerce_myaccount_page_id'));

                                if (is_user_logged_in()) { ?>
                                    <?php
                                    get_template_part('/inc/templates/header/user-menu');
                                    ?>

                                <?php } else { ?>
                                    <a href="#" class="register-modal-opener login-button btn btn-filled"><i class="fal fa-user-lock"></i>
                                        <p class="login-btn-txt"><?php esc_html_e('Get Started', 'studiare'); ?></p>
                                    </a>
                                <?php } ?>

                            <?php else : ?>

                                <?php if (is_user_logged_in()) : ?>
                                    <a href="<?php echo esc_url($header_button_custom_link_after_login); ?>" class="btn btn-filled custom-btn" rel="nofollow"><?php echo esc_html($header_button_custom_text_after_login); ?></a>
                                <?php else : ?>
                                    <a href="<?php echo esc_url($header_button_custom_link); ?>" class="btn btn-filled custom-btn" rel="nofollow"><?php echo esc_html($header_button_custom_text); ?></a>
                                <?php endif; ?>

                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <a href="#" class="mobile-nav-toggle">
                    <span class="the-icon"></span>
                </a>

            </div>

            <?php if ($search_header && !get_post_meta(get_the_ID(), $prefix . 'top_bar_off', true)) : ?>
                <div class="site-search-wrapper">
                    <form method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                        <input type="search" class="search-input" placeholder="<?php esc_attr_e('Type in keyword', 'studiare'); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s">
                        <button type="submit" class="submit">
                            <?php get_template_part('assets/images/search-icon.svg'); ?>
                        </button>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </header>
<?php endif; ?>

<?php if ($search_header && !get_post_meta(get_the_ID(), $prefix . 'top_bar_off', true)) : ?>
    <div class="search-capture-click"></div>
<?php endif; ?>