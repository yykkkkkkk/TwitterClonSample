
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
  <title>つぶやく画面/Twitterクローン</title>
  <meta name="description" content="つぶやく画像です">
</head>
<body class="home">
  <div class="container">
      <?php include_once('../Views/common/side.php'); ?>
    <div class="main">
      <div class="main-header">
        <h1>つぶやく</h1>
      </div>
    
      <div class="tweet-post">
      <div class="my-icon">
        <img src="/TwitterClone/Views/img_uploaded/user/sample-person.jpg" alt="自分のアイコン画像">
      </div>  
      <div class="input-area">
          <!-- enctype="multipart/form-datはファイルなどのアップロードに必要 -->
        <form action="post.php" method="post" enctype="multipart/form-data">
          <textarea name="body" placeholder="いまどうしてる?" maxlength="140"></textarea>
          <div class="bottom-area">
            <!-- bootstrapでclass="mb-0"下の隙間をなくす効果がある -->
          <div class="mb-0">
            <input type="file" name="image" class="form-control form-control-sm">
          </div> 
            <button class="btn" type="submit">つぶやく</button>
          </div>
        </form>
      </div>
      </div>


      <div class="ditch"></div>
      
      </div>
   <div> 
<?php include_once('../Views/common/foot.php'); ?>
</body>
</html>