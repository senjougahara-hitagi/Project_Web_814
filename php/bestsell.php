<?php
  $sql = "SELECT * FROM products LIMIT 12";
  $query = mysqli_query($db_conn, $sql);

  while($product = mysqli_fetch_array($query, MYSQLI_ASSOC)){
    $sql = "SELECT * FROM productimages WHERE ImageProductId = {$product['ProductID']}";
    $query_image = mysqli_query($db_conn, $sql);
    $image = mysqli_fetch_array($query_image, MYSQLI_ASSOC);

    $loadedData[$product['ProductID']] = json_encode($product);
    $loadedImage[$product['ProductID']] = json_encode($image);

    include("product_thumbnail.php");
  }
?>
