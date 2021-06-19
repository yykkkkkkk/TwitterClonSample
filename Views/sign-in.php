<?php
// 設定関連を読み込む
include_once('../config.php');
// 便利な関数を読み込む
include_once('../util.php');

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  
  <?php include_once('../Views/common/head.php'); ?>
  <title>ログイン画面/Twitterクローン</title>
  <meta name="description" content="ログイン画面です">
</head>
<!-- text-centerはbootstrapのクラスで中央寄せ -->
<body class="signup text-center">
  <main class="form-signup">
    <form action="sign-in.php" method="post">
    <img src="/TwitterClone/Views/img/logo-white.svg" alt="" class="logo-white">
    <h1>Twitterクローンにログイン</h1>
    <input type="email" class="form-control" name="email" placeholder="メールアドレス" required autofocus>
    <input type="password" class="form-control" name="password" placeholder="パスワード" required>
    <!-- w-100はbootstrapのクラスでwidth100%のクラス,btn-logもbootstrapのクラスでおおきいボタンが表示される -->
    <button class="w-100 btn btn-log" type="submit">ログイン</button>
    <!--mt-はbootstrapのmargin-topを表す, mb-はbootstrapのmargin-bottomを表す -->
    <p class="mt-3 mb-2"><a href="sign-in.php">会員登録する</a></p>
    <!-- text-mutedはbootstrapのクラスで文字を灰色で表す -->
    <p class="mt-2 mb-3 text-muted">&copy; 2021</p> 
    </form>
  
  
  </main>



  <?php include_once('../Views/common/foot.php'); ?>
</body>

</html>