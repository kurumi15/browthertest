<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
   <form action="submit.php" method="get">
    <input type="submit" name="send" value="テスト">
   </form>
   <?php
    if (@$_GET['send']) {
      $url="https://www.google.co.jp/"
      header("location: $url");
      //echo "サブミットボタンを押しました。";
    }
  ?>
 </body>
</html>
