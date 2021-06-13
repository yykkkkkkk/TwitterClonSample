///////////////////////////////
///いいね!用のJavaScript
///////////////////////////////

//$()はjQueryの書式でfunctionを書くとHTMLの解析を追えたら中の処理を実行する

$(function() {
  //いいね!がクリックされた時
  $('.js-like').click(function() {
    const this_obj = $(this);
    const like_id = $(this).data('like-id');
    const like_count_obj = $(this).next();
    // const like_count_obj = $(this).parent().find('js-like-count');
    let like_count = Number(like_count_obj.html());

    if (like_id) {
        //いいね!取り消し
        //いいね!カウント減らす
        like_count--;                   //いいね!数をマイナスにして
        like_count_obj.html(like_count); 
        this_obj.data('like-id', null);

        //いいね!ボタンの色をグレーに変更
        $(this).find('img').attr('src', '../Views/img/icon-heart.svg');


    }else {
        //いいね!付与
        //いいね!カウントを増やす
          like_count++; //いいね!数をプラスにする
          like_count_obj.html(like_count);  //いいね!数をhtmlに書き込む
          this_obj.data('like-id', true);
          console.log(like_count)
          //いいね!ボタンの色を青に変更
          $(this).find('img').attr('src', '../Views/img/icon-picture-twitterblue.svg');

    }  

  })

})
