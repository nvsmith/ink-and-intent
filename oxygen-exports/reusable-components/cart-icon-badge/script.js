// WooCommerce auto-updates cart fragments via AJAX,
// But you can include this script to ensure the item count updates dynamically

jQuery(document).ready(function ($) {
    $(document.body).on("added_to_cart removed_from_cart", function () {
        $.get(window.location.href, function (response) {
            const newCount = $(response).find(".oxy-woo-mini-cart__items-count").text();
            $(".oxy-woo-mini-cart__items-count").text(newCount);
        });
    });
});
