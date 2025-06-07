<!-- This component uses a Custom Code Block to display the cart icon with item count overlay -->

<?php
// Output the cart icon with item count
$cart_url = wc_get_cart_url();
$cart_count = WC()->cart->get_cart_contents_count();
?>

<a href="<?php echo esc_url($cart_url); ?>" class="oxy-woo-mini-cart__icon-wrapper" title="View your cart">
  <span class="oxy-woo-mini-cart__icon">
    🛒
    <?php if ($cart_count > 0) : ?>
      <span class="oxy-woo-mini-cart__items-count"><?php echo esc_html($cart_count); ?></span>
    <?php endif; ?>
  </span>
</a>
