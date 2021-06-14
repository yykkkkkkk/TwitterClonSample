<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/TwitterClone/Views/img/logo-twitterblue.svg">
  <!--Bootstrap CSS  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="/TwitterClone/Views/css/style.css" rel="stylesheet">

  <title>ログイン画面/Twitterクローン</title>
  <meta name="description" content="会員登録画面です">
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




</body>

</html>