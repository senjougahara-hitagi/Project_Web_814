<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>5-con-chym</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,700|Source+Sans+Pro:200,300,400,600,700"
            rel="stylesheet">
      <!-- reset css -->
      <link rel="stylesheet" href="css/normalize.css">
      <!-- Bootstrap -->
      <link rel="stylesheet" href="css/bootstrap.min.css">

      <!-- Font-awesome -->

      <link rel="stylesheet" href="css/font-awesome.min.css">

      <!--slide-->
      <link rel="stylesheet" href="css/glide.core.min.css">
      <link rel="stylesheet" href="css/glide.theme.css">

      <!-- Main style -->
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/cart.css">

      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/prefixfree.min.js"></script>
      <script src="js/glide.min.js"></script>
      <script src="js/main.js"></script>
      <script type="text/javascript" src="js/handlebars.js"></script>
  </head>

  <body>
      <?php
        include("php/db_conn.php");
      ?>
      <header class="header">
          <div class="over-lay">
            <div >
                <!--logo-->
                <div class="big-logo">
                    <a href="index.php">
                        <img src="img/logo.png">
                        <span id="name">5 Birds</span>
                        <span>Shop</span>
                        <sup>tm</sup>
                    </a>
                </div>
            </div>
          </div>
      </header>

      <div class='introduce cart-title'>
        <div class="over-lay">
          <h1>Japan Shop</h1>
          <h3>My Cart</h3>
        </div>
      </div>

      <div class='cart-main'>
        <div class="cart-products-list">
          <form class="cart-products-list-form" action="" method="post">
            <table class="">
              <thead id="tableheader">
                <tr>
                  <td class='item_number width_20'><input disabled id="total_items" value="">PRODUCTS</td>
                  <td class='width_40'></td>
                  <td class='width_15'>PRICE</td>
                  <td class='width_20'>QUANTITY</td>
                  <td></td>
                </tr>
              </thead>

              <?php include("php/cart_item.php"); ?>
            </table>
          </form>
        </div>
      </div>

  </body>
</html>
