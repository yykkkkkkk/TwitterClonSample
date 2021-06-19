<?php
// 設定関連を読み込む
include_once('../config.php');
// 便利な関数を読み込む
include_once('../util.php');
////////////////////////////////////
//ツイート一覧
////////////////////////////////////
  //再投稿
$view_tweets = [
  [
    'user_id' => 1,
    'user_name' => 'taro',
    'user_nickname' => '太郎',
    'user_image_name' => 'sample-person.jpg',
    'tweet_body' => '今プログラミングをしています。',
    'tweet_image_name' => null,
    'tweet_created_at' => '2021-03-15 14:00:00',
    'like_id' => null,
    'lile_count' => 0,
    

  ],

  [
    'user_id' => 2,
    'user_name' => 'jiro',
    'user_nickname' => '次郎',
    'user_image_name' => null,
    'tweet_body' => 'コワワーキングスペースをオープンしました',
    'tweet_image_name' => 'sample-post.jpg',
    'tweet_created_at' => '2021-03-14 14:00:00',
    'like_id' => 1,
    'lile_count' => 1,
    





  ],

];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <?php include_once('../Views/common/head.php'); ?>
  <title>ホーム画面/Twitterクローン</title>
  <meta name="description" content="ホーム画面です">
</head>
<body class="home">
  <div class="container">
      <?php include_once('../Views/common/side.php'); ?>
    <div class="main">
      <div class="main-header">
        <h1>ホーム</h1>
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
      <?php if(empty($view_tweets)): ?>  <!--$view_tweetsが空だったら -->
        <p class="p-3">ツイートがまだありません</p>   <!--p-3はbootstrapで一連の全方向の余白を空ける -->
      <?php else: ?>
        
      <div class="tweet-list">
        <?php foreach($view_tweets as $view_tweet): ?>  <!--ツイートを一件ずつ表示するループ処理 -->
            <?php include('../Views/common/tweet.php'); ?>
        <?php endforeach; ?>

         
        </div>
      <?php endif; ?>   
      </div>
   <div> 
<?php include_once('../Views/common/foot.php'); ?>
</body>
</html>