<?php
  session_start();
  // session_unset();

  if(isset($_POST['totalCartItems'])) {
    $count = count($_SESSION['prods']);
    $total_number = 0;
    $total_price = 0;
    for($i = 0; $i < $count; $i++){
      $total_number += $_SESSION['prods'][$i][3];
      $total_price += $_SESSION['prods'][$i][2] * $_SESSION['prods'][$i][3];
    }
    $result = array("total_number" => $total_number, "total_price" => $total_price);

    echo json_encode($result);
  	exit();
  }

  if(isset($_POST['addToCart'])) {
    $prod = array($_POST['productId'],
                  $_POST['productName'],
                  $_POST['productPrice'],
                  $_POST['productQuantity']);
    if(!isset($_SESSION['prods'])){
      $_SESSION['prods'][0] = $prod;
    } else {
      $count = count($_SESSION['prods']);
      for($i = 0; $i < $count; $i++){
        if($_POST['productId'] == $_SESSION['prods'][$i][0]){
          $_SESSION['prods'][$i][3] += $_POST['productQuantity'];
          break;
        }
      }

      if($i == $count){
        $_SESSION['prods'][$count] = $prod;
      }
    }

    $count = count($_SESSION['prods']);
    $total_number = 0;
    $total_price = 0;
    for($i = 0; $i < $count; $i++){
      $total_number += $_SESSION['prods'][$i][3];
      $total_price += $_SESSION['prods'][$i][2] * $_SESSION['prods'][$i][3];
    }
    $result = array("total_number" => $total_number, "total_price" => $total_price);

    echo json_encode($result);
    exit();
  }
?>
