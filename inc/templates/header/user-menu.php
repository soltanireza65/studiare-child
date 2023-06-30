<?php

/**
 * Template File for Main Header
 */


$downloads = 'downloads';
$logout = 'customer-logout';
$account_link = get_permalink(get_option('woocommerce_myaccount_page_id'));

?>


<div class="user-menu header__details-user">
  <?php
  echo get_avatar(get_current_user_id(), 40);
  ?>
  <p class="login-btn-txt">
    <?php
    global $current_user;
    echo $current_user->display_name
    ?>
  </p>
  <i class="fal fa-chevron-down"></i>

</div>
<?php if (class_exists('WooCommerce')) : ?>
  <div class="user-menu__list">


    <ul>
      <li class="divider">

        <?php
        if (is_plugin_active('woo-wallet/woo-wallet.php')) {

          echo '<li class="divider">';

          $title  = __('Current wallet balance', 'woo-wallet');
          $menu_item  = '<a class="woo-wallet-menu-contents" href="' . esc_url(wc_get_account_endpoint_url(get_option('woocommerce_woo_wallet_endpoint', 'woo-wallet'))) . '" title="' . $title . '">';
          $menu_item .= 'اعتبار: ';
          $menu_item .= woo_wallet()->wallet->get_wallet_balance(get_current_user_id());
          $menu_item .= '</a>';

          echo $menu_item;
          echo '</li>';
        }
        ?>


      <li>
        <a href="<?php echo esc_url($account_link); ?>" class="">پنل کاربری</a>
      </li>
      <!-- <li>
        <a href="<?php echo esc_url(wc_get_account_endpoint_url($downloads)); ?>">دانلودها</a>
      </li> -->
      <li class="log-out">
        <a href="<?php echo wp_logout_url(get_permalink()); ?>"> <i class="fal fa-sign-out"></i> خروج از حساب</a>
      </li>


    </ul>
  </div>
<?php endif; ?>