<?php
function register_script() {
  if ( !is_admin() ) {
    wp_enqueue_script('jquery'); 
    wp_enqueue_script('slick', get_template_directory_uri() .'/js/slick.min.js'); 
    wp_enqueue_script('app', get_template_directory_uri() .'/js/app.js');
  }
}
add_action('wp_enqueue_scripts', 'register_script');

function register_stylesheet() {
  wp_enqueue_style('slick-theme', get_template_directory_uri().'/css/slick-theme.css');
  wp_enqueue_style('slick', get_template_directory_uri().'/css/slick.css');
  wp_enqueue_style('common-css', get_template_directory_uri().'/css/style.css');
  if(is_page('loss')) {
    wp_enqueue_style('loss-css', get_template_directory_uri().'/css/loss.css');
  }
}
add_action('wp_enqueue_scripts', 'register_stylesheet');

//note取得
function note_feed_display($feedUrl, $num = 1 , $length = 80) {

  /* init */
  if(!$feedUrl) { return false; }
  $i = 0;
  if ($length != 0) { $length = ($length * 2) + 2; }
  require_once "feed.php";
  $feed = new Feed;

  try {
    $rss = $feed->loadRss($feedUrl);
    if(!$rss) {
      throw new \Exception('feedが取得できませんでした'); 
    }
    if($rss->item) { //投稿があれば
      //author情報取得
      $creatorImg = $rss->item->children('note', true)->creatorImage;
      $creatorName = $rss->item->children('note', true)->creatorName;
      //各投稿を表示
      foreach ($rss->item as $item) {
        if ($i >= $num) { 
              //何もしない        
          } else {
          $title = $item->title; 
          $link = $item->link;
          $timestamp = strtotime($item->pubDate); // 更新日時
          $date = date("Y/m/d", $timestamp);
          $thumbnail = $item->children('media', true)->thumbnail;
          if (!($thumbnail)) {
            $thumbnail = get_template_directory_uri() . "/img/noimage.jpg";
          }
    
          $description = $item->description; // 詳細
          $description = str_replace("続きをみる", "", $description);
          //↑ 続きを読むなど、決まった文章が詳細にはいっている場合に、それを除外する
          $description = strip_tags($description);
          if ($length != 0) {
            $description = mb_strimwidth($description, 0, $length, "…", 'utf-8');
          }
    
$str =<<< EOM
    <div class="blog__note">
            <div class="note">
              <div class="note__header">
                <p class="note__authorImg"><img src=" {$creatorImg};" alt=""></p>
                <div class="note__authorInfo">
                  <p>{$creatorName}</p>
                  <p>{$date}</p>
                </div>
              </div>
              <div class="note__imgWrapper" style="background-image:url('{$thumbnail}');">
              </div>
              <div class="note__body">
                <div class="note__ttl">
                  <a href="{$link}">
                     {$title}
                  </a>
                </div>
                <div class="note__txt">
                   {$description}
                </div>
                <p class="more">
                  <a href=" {$link} ">もっと見る</a>
                </p>
              </div><!-- /.note__body -->
    
            </div>
            </div><!-- /.blog__note -->
EOM;
    
    echo $str;
          $i++;
        }
      }

    } else {
      throw new \Exception('feed itemが取得できませんでした'); 
    }
  
  } catch(\Exception $e) {
    echo '<!-- ' .$e->getMessage(). ' -->';
  }

}