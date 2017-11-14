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
      include("php/config.php")
    ?>
    <!--Header-->
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
              <!--menu-->
              <div class="menu">
                  <ul class="list-inline">
                      <li><a href="#">Page 1 </a></li>
                      <li><a href="#">Page 2</a></li>
                      <li><a href="#">Page 3</a></li>
                      <li><a href="#">Page 4</a></li>
                      <li><a href="#">Page 5</a></li>
                      <li><a href="#">Page 6</a></li>
                  </ul>
              </div>

              <!--Search-box-->
              <div class="search-box">
                  <i class="fa fa-search"></i>
              </div>
              <!--order-check-->
              <a href="cart.php">
                <div class="order-box">
                    <i class="fa fa-shopping-cart"></i>
                    <input type="button" id="total_items" value="">
                </div>
              </a>
          </div>
        </div>
    </header>

    <!--introduce title-->
    <div class="introduce">
      <div class="over-lay">
        <h1>Japan Shop</h1>
        <h3>Awesome</h3>
        <button class="btn">About us</button>
      </div>
    </div>

    <!--news slide-->
    <div class="slideshow">
        <div id="Glide" class="glide">
            <div class="glide__arrows">
                <button class="glide__arrow prev" data-glide-dir="<"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                </button>
                <button class="glide__arrow next" data-glide-dir=">"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                </button>
            </div>

            <div class="glide__wrapper">
                <ul class="glide__track">
                    <li class="glide__slide"><img src="img/slide_1.jpg"></li>
                    <li class="glide__slide"><img src="img/slide_2.jpg"></li>
                    <li class="glide__slide"><img src="img/slide_3.jpg"></li>
                    <li class="glide__slide"><img src="img/slide_4.jpg"></li>
                    <li class="glide__slide"><img src="img/slide_5.jpg"></li>
                </ul>
            </div>

            <div class="glide__bullets"></div>

        </div>
    </div>

    <!--best sell -->
    <div class="content best-sell">
        <div class="over-lay">
            <div class="container">
                <h2>
                    Best Selling
                </h2>
                <div class="row">
                  <?php include("php/bestsell.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <!--new-->
    <div class="content new">
        <div class="over-lay">
            <div class="container">
                <h2>
                    New
                </h2>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="item"></div>
                    </div>
                    <div class="col-lg-3">
                        <div class="item"></div>
                    </div>
                    <div class="col-lg-3">
                        <div class="item"></div>
                    </div>
                    <div class="col-lg-3">
                        <div class="item"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- noi bat -->
    <div class="content noi-bat">
      <div class="over-lay">
        <div class="container">
            <h2>
                Sales Promotion
            </h2>
            <div class="row">
                <div class="col-lg-3">
                    <div class="item"></div>
                </div>
                <div class="col-lg-3">
                    <div class="item"></div>
                </div>
                <div class="col-lg-3">
                    <div class="item"></div>
                </div>
                <div class="col-lg-3">
                    <div class="item"></div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <!-- modal-->
    <div class="modal fade" id="item_modal" tabindex="-1" role="dialog" aria-labelledby="item_modal_label">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body" id="item_modal_body">

          </div>
        </div>
      </div>
    </div>

    <?php
      include("php/product_modal.php");
      include("php/cart_modal.php");
    ?>

  </body>
</html>
