<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
   <form>
    <input type="submit" name="send" value="テスト">
   </form>
   <?php
    if (@$_GET['send']) {
      $url="https://www.google.co.jp/";
      header("Location: $url");
      //echo "サブミットボタンを押しました。";
    }
  ?>
 </body>
</html>
