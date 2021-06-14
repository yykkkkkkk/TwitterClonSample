
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/TwitterClone/Views/img/logo-twitterblue.svg">
  <!--Bootstrap CSS  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="/TwitterClone/Views/css/style.css" rel="stylesheet">

  <title>会員登録画面/Twitterクローン</title>
  <meta name="description" content="会員登録画面です">
</head>
<!-- text-centerはbootstrapのクラスで中央寄せ -->
<body class="signup text-center">
  <main class="form-signup">
    <form action="sign-up.php" method="post">
    <img src="/TwitterClone/Views/img/logo-white.svg" alt="" class="logo-white">
    <h1>アカウントを作る</h1>
    <!-- form-controlはbootstrapのクラスでフォームをきれいに表示してくれる -->
    <!-- maxlength="50"で最大文字数を50文字に制限する -->
    <!-- requiredで必須項目にする,autofocusで最初から選択される -->
    <input type="text" class="form-control" name="nickname" placeholder="ニックネーム" maxlength="50" required autofocus>
    <input type="text" class="form-control" name="name" placeholder="ユーザー名, 例)techis132" maxlength="50" required>
    <input type="email" class="form-control" name="email" placeholder="メールアドレス" maxlength="254" required>
    <input type="password" class="form-control" name="password" placeholder="パスワード" minlength="4" maxlength="254" required>
    <!-- w-100はbootstrapのクラスでwidth100%のクラス,btn-logもbootstrapのクラスでおおきいボタンが表示される -->
    <button class="w-100 btn btn-log" type="submit">登録する</button>
    <!--mt-はbootstrapのmargin-topを表す, mb-はbootstrapのmargin-bottomを表す -->
    <p class="mt-3 mb-2"><a href="sign-in.php">ログインする</a></p>
    <!-- text-mutedはbootstrapのクラスで文字を灰色で表す -->
    <p class="mt-2 mb-3 text-muted">&copy; 2021</p> 
    </form>
  
  
  </main>




</body>

</html>
  