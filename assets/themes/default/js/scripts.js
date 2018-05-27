(function($) {
    $(document).ready(function() {
      $(".tab-content #tab1").on("change", ".product-selector", function() {
	var $product_row = $(this).closest(".order-line-tr");
        var $product_quantity = $product_row.find(".product-quantity");
        var $product_total = $product_row.find(".product-total");
        var $product_array = $product_row.find(".product-id");
	var $product_sum = $product_row.find(".product-sum");
	var product_id = $(this).val();

        if (product_id == "0") {
          $product_total.text("");
          $product_quantity.val("");
          $product_quantity.prop("disabled", true);
	  $product_array.val("0").prop("disabled", true);
	  $product_sum.val("").prop("disabled", true);
	}
        else {
          $product_quantity.val("1");
          var product_price = $(this).find('option:selected').data('price');
	  $product_sum.val(product_price);
          $product_total.text("$"+product_price);
          $product_quantity.prop("disabled", false);
	  $product_array.prop("disabled", false);
	  $product_sum.prop("disabled", false);
	  $(".product-selector").find("option[value='"+product_id+"']").prop("disabled", true);
        }
	$product_array.val(product_id);
	if ($(this).data("saved") != undefined)
	  $(".product-selector").find("option[value='"+$(this).data("saved")+"']").prop("disabled", false);
	$(this).data("saved", product_id);
	refresh_total();
      });

      $(".tab-content #tab1").on("input", ".product-quantity", function() {
        var product_quantity = $(this).val();
        var $product_row = $(this).closest(".order-line-tr");
        var $product_selector = $product_row.find(".product-selector");
        var $product_total = $product_row.find(".product-total");
	var $product_sum = $product_row.find(".product-sum");
        var product_price = $product_selector.find('option:selected').data('price');
        var total_price = product_price * product_quantity;
        $product_total.text("$"+total_price);
	$product_sum.val(total_price);
	refresh_total();
      });

      $(".tab-content #tab1").on("click", ".order-remove-item", function() {
	var $product_row = $(this).closest(".order-line-tr");
	if ($product_row.find(".product-selector").data("saved") != undefined)
	  $(".product-selector").find("option[value='"+$product_row.find(".product-selector").data("saved")+"']").prop("disabled", false);
	$product_row.remove();
	refresh_total();
      });
    });
})(window.jQuery);

function addNewOrderLine() {
  var $new_order_line = $(".order-line-tr").first().clone().appendTo("tbody.order-line");
  $new_order_line.find(".product-selector").val("0");
  $new_order_line.find(".product-id").val("0").prop("disabled", true);
  $new_order_line.find(".product-sum").val("").prop("disabled", true);
  $new_order_line.find(".product-quantity").val("").prop("disabled", true);
  $new_order_line.find(".product-total").text("");
}

function refresh_total() {
  var total_sum = 0;
  var $overview = $("#product-overview");
  var overview_html = '<h3>Products</h3><table class="table table-hover">';
  //overview_html += '<thead><tr><th><td>Product Name</td><td>Quantity</td><td>Price</td></th></tr></thead>';
  overview_html += '<thead><tr><th>Product Name</th><th>Quantity</th><th>Price</th></tr></thead>';
  $(".order-line-tr").each(function() {
    var $product_selector = $(this).find(".product-selector");
    if ($product_selector.val() != "0") {
      var product_price = $product_selector.find('option:selected').data('price');
      var product_quantity = $(this).find(".product-quantity").val();
      var this_sum = product_price * product_quantity;
      total_sum += this_sum;
      overview_html += '<tr><td>';
      overview_html +=  $product_selector.find('option:selected').html();
      overview_html += '</td><td>';
      overview_html += product_quantity;
      overview_html += '</td><td>';
      overview_html += '$'+this_sum;
      overview_html += '</td></tr>';
    }
  });
  overview_html += '</table>';

  $("#price-total-all").text("$"+total_sum);
  $overview.html(overview_html);
}
