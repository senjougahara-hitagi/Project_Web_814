<?php
  include("db_conn.php");
  if(isset($_POST['showPrevComment'])){
    $sql = "SELECT * FROM comments WHERE CommentProductID = {$_POST['productId']}";
    $query = mysqli_query($db_conn, $sql);
?>
    <h3 id='prev_comment_header'>Nhận xét (có <?php echo ($query->num_rows); ?> nhận xét)</h3>
<?php
    while($comment = mysqli_fetch_array($query, MYSQLI_ASSOC)){
      $user_name = "Vô danh";
      if($comment['CommentUserID'] != null){
        $sql = "SELECT * FROM users WHERE UserID = {$comment['CommentUserID']}";
        $query_user = mysqli_query($db_conn, $sql);
        $user = mysqli_fetch_array($query_user, MYSQLI_ASSOC);
        $user_name = $user['UserLastName'] . " " . $user['UserFirstName'];
      }
?>
      <div class="comment_container">
        <div class="comment_header">
          <div class="user_name">Từ
            <?php echo $user_name; ?>
          </div>
          <div class="comment_date">
            <?php echo $comment['CommentDate']; ?>
          </div>
        </div>
        <div class="comment_content">
          <?php echo $comment['Comment']; ?>
        </div>
      </div>
<?php
    }
  }
 ?>
<?php
  if(isset($_POST['addToComments'])){
    if($_POST['comment'] != "") {
      $sql = "INSERT INTO comments (CommentProductID, Comment)
              VALUES ('{$_POST['productId']}', '{$_POST['comment']}')";
      $query = mysqli_query($db_conn, $sql);
    }
  }?>
