<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
   <form>
    <input type="submit" name="send" value="LINEログイン">
   </form>
   <?php
    if (@$_GET['send']) {
      $url="https://access.line.me/oauth2/v2.1/authorize?response_type=code&client_id=1625867408&redirect_uri=https://browthertest.herokuapp.com/&state=keikeikei0321&scope=openid%20profile&bot_prompt=normal";
      header("Location: $url");
      //echo "サブミットボタンを押しました。";
    }
  ?>
 </body>
</html>
