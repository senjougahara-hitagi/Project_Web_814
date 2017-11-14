<?php
  $db_conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($db_conn, "web-20171");
  mysqli_query($db_conn, "SET NAMES 'UTF8'");
?>
