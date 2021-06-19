<?php
// 設定関連を読み込む
include_once('../config.php');
// 便利な関数を読み込む
include_once('../util.php');
 
 ///////////////////////////////////////
// ツイート一覧
///////////////////////////////////////
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
      'like_count' => 0,
  ],
  
];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  
  <?php include_once('../Views/common/head.php'); ?>
  <title>プロフィール画面/Twitterクローン</title>
  <meta name="description" content="プロフィール画面です">
</head>
<!--bootstrapのクラスのtext-center-->
<body class="home profile text-center">
  <div class="container">
    <div class="side">
      <div class="side-inner">
        <ul class="nav flex-colume">
          <li class="nav-item"><a href="home.php" class="nav-link"><img src="/TwitterClone/Views/img/logo-twitterblue.svg" alt=""class="icon"></a></li>
          <li class="nav-item"><a href="home.php" class="nav-link"><img src="/TwitterClone/Views/img/icon-home.svg" alt=""></a></li>
          <li class="nav-item"><a href="search.php" class="nav-link"><img src="/TwitterClone/Views/img/icon-search.svg" alt=""></a></li>
          <li class="nav-item"><a href="notification.php" class="nav-link"><img src="/TwitterClone/Views/img/icon-notification.svg" alt=""></a></li>
          <li class="nav-item"><a href="profile.php" class="nav-link"><img src="/TwitterClone/Views/img/icon-profile.svg" alt=""></a></li>
          <li class="nav-item"><a href="post.php" class="nav-link"><img src="/TwitterClone/Views/img/icon-post-tweet-twitterblue.svg" alt="" class="post-tweet"></a></li>
          <li class="nav-item my-icon"><img src="/TwitterClone/Views/img_uploaded/user/sample-person.jpg" class="js-popover" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="<a href='profile.php'>プロフィール</a><br><a href='sign-out.php'>ログアウト</a>" data-bs-html="true"></li>
        
        </ul>
      </div>
    </div>
    <div class="main">
      <div class="main-header">
        <h1>太郎</h1>
      </div>
    
      <div class="profile-area">
        <div class="top">
          <div class="user"><img src="/TwitterClone/Views/img_uploaded/user/sample-person.jpg" alt=""></div>
          
          <?php if(isset($_GET['user_id'])): ?>
            <!--他人のプロフィール-->
            <?php if(isset($_GET['case'])): ?>
              <button class="btn btn-sm">フォローを外す</button>
            <?php else: ?>  
              <button class="btn btn-sm btn-reverse">フォローをする</button>
            <?php endif; ?>
              <?php else: ?>
             <!--自分のプロフィール-->               
            <!--bootstrapのクラスでbtn-smは小さいボタン,-->
          <button class="btn btn-reverse btn-sm js-model-button" type="submit" data-bs-toggle="modal" data-bs-target="#js-modal">プロフィール編集</button>
           <!--modal,fadeはbootstrapのクラスでフェイドインしてモーダルが表示される-->
           <!--tabindex="-1"はタブ操作での選択操作から除外する,area-hidden="true"は端末の読み上げ機能から無視させる効果がある -->

          <div class="modal fade" id="js-modal" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                <form action="profile.php" method="post" enctype="multipart/form-data">   
              
                <div class="modal-header">
                  <h5 class="modal-title">プロフィールを編集</h5>
                  <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>

                  <div class="modal-body">
                    <div class="user">
                      <img src="/TwitterClone/Views/img_uploaded/user/sample-person.jpg" alt="">                            
                        
                  </div>
                  <div class="mb-3">
                    <label class="mb-1">プロフィール写真</label>
                    <input type="file" class="form-control form-control-sm" name="image">
                  </div>
                  <input type="text" class="mb-4 form-control" name="nickname" maxlength="50" value="太郎" placeholder="ニックネーム" required>
                  <input type="text" class="mb-4 form-control" name="name" maxlength="50" value="taro" placeholder="ユーザー名" required>
                  <input type="email" class="mb-4 form-control" name="email" maxlength="254" value="taro@techis.jp" placeholder="メールアドレス" required>
                  <input type="password" class="mb-4 form-control" name="password" minlength="4" maxlength="128" value="" placeholder="パスワード変更する場合ご入力ください">                          
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-reverse" data-bs-dismiss="moda">キャンセル</button>
                    <button class="btn" type="submit">保存する</button>
                  </div>
                </form>


                </div>
              </div>

          </div>
              <?php endif; ?>        
        </div>
        <div class="name">太郎</div>
          <!--bootstrapのクラスでtext-mutedは文字を灰色にする-->
        <div class="text-muted">@taro</div>

        <div class="follow-follower">
          <div class="follow-count">1</div>
          <div class="follow-text">フォロー中</div>
          <div class="follow-count">1</div>
          <div class="follow-text">フォロワ-</div>
        
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