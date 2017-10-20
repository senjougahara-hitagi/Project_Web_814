<?php
   $db_conn = mysqli_connect("localhost", "root", "");
   mysqli_select_db($db_conn, "ban_hang");
   mysqli_query($db_conn, "SET NAMES 'UTF8'");
?>
