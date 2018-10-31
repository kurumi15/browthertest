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
      header("location: 'https://www.google.co.jp/'");
      //echo "サブミットボタンを押しました。";
    }
  ?>
 </body>
</html>
