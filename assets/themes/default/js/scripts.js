(function($) {
    $(document).ready(function() {
        $(".product-selector").on("change", function() {
            var $product_row = $(this).closest("tr");
            var $product_quantity = $product_row.find(".product-quantity");
            var $product_total = $product_row.find(".product-total");


            if ($(this).val() == "0") {
                $product_total.text("");
                $product_quantity.val("");
                $product_quantity.prop("disabled", true);
            }
            else {
                var quantity = 1;
                $product_quantity.val(quantity);
                var product_price = $(this).find('option:selected').data('price');
                var total_price = product_price * quantity;
                $product_total.text("$"+total_price);
                $product_quantity.prop("disabled", false);
                //var $new_row = $product_row.clone(true);
                //$new_row.find(".product-quantity").val("").prop("disabled", true);
                //$new_row.find(".product-total").text("");
                //$product_row.after($new_row);
            }
        });
        $(".product-quantity").on("input", function() {
            var product_quantity = $(this).val();
            var $product_row = $(this).closest("tr");
            var $product_selector = $product_row.find(".product-selector");
            var $product_total = $product_row.find(".product-total");
            var product_price = $product_selector.find('option:selected').data('price');
            var total_price = product_price * product_quantity;
            $product_total.text("$"+total_price);
            var summofcart = $product_row.find(".summofcart");

        });
    });
})(window.jQuery);

function addNewOrderLine() {
  //var $order_line = document.getElementById("order-line");
  //var $new_order_line = $order_line.clone(true);
  var $new_order_line = $(document.getElementById("order-line")).clone().appendTo("tbody");
  //console.log($new_order_line);

  $new_order_line.find(".product-quantity").val("").prop("disabled", true);
  $new_order_line.find(".product-total").text("");
  $order_line.after($new_order_line);

  //$order_line.innerHTML = "Hello World";
}
