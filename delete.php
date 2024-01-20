<?php
  require_once('conn.php');

  if (empty($_GET['id'])) {
    die('請輸入 id');
  }
  $id = $_GET['id'];
  $sql = sprintf(
    'delete from users where id = %d',
    $id
  );
  echo $sql . '<br>';
  $result = $conn->query($sql);
  if (!$result) {
    die($conn->error);
  }

  // 影響了幾列
  if ($conn->affected_rows >= 1) {
    echo '已成功刪除此筆資料！';
  } else {
    echo '查無此資料';
  }

  // 如果刪除成功
  // header('Location: index.php');
?>