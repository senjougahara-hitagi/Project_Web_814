<!-- modal confirm add to cart template -->
<script id="cart-modal-template" type="text/x-handlebars-template">

  <div class="cart_modal">
    <div class="product_summary">
      <h3 class="cart_header">
        <i class="fa fa-check" aria-hidden="true"></i>
        Sản phẩm mới đã được thêm vào giỏ hàng của bạn
      </h3>
      <div class="cart_prod_container">
        <img class="cart_prod_img" src="img/products/{{image}}">
        <div class="prod_info">
          <h3 class="cart_prod_name">{{ProductName}}</h1>
          <div class="cart_prod_brand">{{ProductManufacturer}}</div>
          <div class="cart_prod_price">{{ProductPrice}} $</div>
        </div>
      </div>
    </div>

    <div class="cart_summary">
      <h3 class="summary_header">
        <span class="txt_my_cart">Giỏ hàng của tôi</span>
        <span id="txt_total"></span>
        <a href="cart.php">
          <i class="fa fa-pencil-square-o"></i>
        </a>
      </h3>
      <div class="total_price">
        <span class="txt_total_price">Tổng tiền: </span>
        <h3 id="txt_price"></h3>
      </div>
      <button class="payment_button">THANH TOÁN</button>
    </div>
  </div>
</script>

<script type="text/javascript">
  $(document).ready(function(){
    var cartModalTemplate = Handlebars.compile($("#cart-modal-template").html());

    $('body').on('click', '.quick_buy_button', function(){
      var productId = $(this).attr('data-ProductID');
      var productQuantity = $(this).attr('data-Quantity');
      var productName = $(this).attr('data-ProductName');
      var productPrice = $(this).attr('data-ProductPrice');

      $.ajax({
          type: 'post',
          url: 'php/cart_controller.php',
          data:{
              addToCart: 'yes',
              productId: productId,
              productName: productName,
              productPrice: productPrice,
              productQuantity: productQuantity
          },
          success:function(response) {
              document.getElementById("total_items").value = $.parseJSON(response)["total_number"];
              document.getElementById("total_items").style.opacity = 1;
              $("#txt_total").text('(có ' + $.parseJSON(response)["total_number"] + ' sản phẩm)');
              $("#txt_price").text($.parseJSON(response)["total_price"] + ' $');
          }
      });

      var loadedData = <?php echo json_encode($loadedData); ?>;
      var loadedImage = <?php echo json_encode($loadedImage); ?>;

      var obj = $.parseJSON(loadedData[productId]);
      if($.parseJSON(loadedImage[productId]) != null)
        obj.image = $.parseJSON(loadedImage[productId]).image;

      $("#item_modal_body").html(cartModalTemplate(obj));
      $("#item_modal").modal("show");
    });
  });
</script>
