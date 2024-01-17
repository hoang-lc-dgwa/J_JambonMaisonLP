<?php get_header(); ?>

<div class="mainVisual">
  <ul class="slider">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  <div class="visual__copy js-hide js-show">
    <p>それは、</p>
    <p>女性たちだけの手で</p>
    <p>造られるハム</p>
  </div>
</div>
<!-- /.mainVisual -->
<main class="main">

  <section class="content" id="information">
    <div class="content__inner">
      <h2 class="content__ttl">INFORMATION</h2>
      <dl class="information">
        <?php get_template_part('article', 'loop'); ?>
      </dl>
    </div>
  </section>
  <!-- /#information.content -->
  <section class="content" id="blog">
    <div class="content__inner">
      <h2 class="content__ttl">BLOG</h2>

      <div class="blog__itemUnit">
        <div class="blog__banar">
          <a href="https://note.com/circle28">
            <img src="<?php echo get_template_directory_uri(); ?>/img/03.png" alt="ジャンボンメゾン代表女将が書き綴る低空飛行ノート">
          </a>
        </div> <!-- /.blog__banar -->
        <!-- note呼び出し -->
        <?php
        note_feed_display('https://note.com/circle28/rss', '1' ,'80');
        ?>
        <!-- /note呼び出し -->
      </div>
    </div>
  </section>
  <!-- /#blog.content -->
  <section class="content" id="about">
    <h2 class="content__ttl">ABOUT</h2>
    <div class="about__wrap">
      <div class="content__inner">
        <div class="about__item">
          <h2 class="about__subttl">
            <img src="<?php echo get_template_directory_uri(); ?>/img/svg/04.svg" alt="女性だけの和の思想。此処にしかない手の思想。">
          </h2>
          <div class="about__Unit">
            <div class="about__txt">
              宮城県の北部に位置する大崎市岩出山にジャンボン・メゾンの工房がある。幼いころに見た映画で、海賊が骨付き肉の塊を頬張るシーンが忘れられず「俺も食べてみたい」と、出来たブランドが「岩出山家庭ハム」だ。もともと米と野菜で育った先代は、ハム・ソーセージの味が自然に「ごはん」に合うものに。自分が食べたい「俺流」の味、それが岩出山家庭ハムの原点だ。<br class="sp">二代目になり、作り手は女性だけとなった。その志は「自分の子供を育てるようにハムを作る」に変わっていき、味を守りつつ、更なる進化を始めた。自社トップブランド「和ハム」は素材から仕上がりの過程までこだわりぬいた「完全受注販売」である。二代目が「未来」に向けて作ったブランドが「アトリエ・ドゥ・ジャンボンメゾン」だ。季節ごとに収穫される宮城の食材をふんだんに使用したミートローフと、受注を受けてからスライスすることで、フレッシュなハムが食べられるブランド。コンセプトは「旅するハム屋」。季節限定、ポップアップショップ限定、作り手の気まぐれで作品制作が進むブランドだ。
            </div>
            <div class="about__imgBox">
              <p class="img__old"><img src="<?php echo get_template_directory_uri(); ?>/img/05.jpg" alt="創業当時の様子と現在のスタッフ">
              </p>
              <p class="img__new"><img src="<?php echo get_template_directory_uri(); ?>/img/06.jpg" alt="創業当時の様子と現在のスタッフ"></p>
              <p></p>
            </div>
          </div>
        </div>
        <!-- /.about__item -->
        <div class="about__item">
          <h2 class="about__subttl about__subttl--small">
            <img src="<?php echo get_template_directory_uri(); ?>/img/svg/07.svg" alt="一つの分野で三つの違うブランド構成。">
          </h2>
          <div class="about__Unit">
            <div class="about__txt about__txt--2n">
              <div>
                ジャンボン・メゾンが展開する岩出山家庭ハムは宮城県でのみ販売されているご当地ハムブランドです。肉を丸かじりしたい！という夢から独学でハムづくりを学び誕生したブランドです。家庭ハム独自の技術を活かし素材・製法にこだわり開発されたご飯に合う究極の和風ハムそれが和ハムです。また画家がアトリエで絵画を制作するようにシャルキュトリー（豚肉加工品）を作って新作が出来たら好きな場所で旅するように発表するデリカブランドそれがアトリエ・ドゥ・ジャンボンメゾンです。
              </div>
              <div>
                <h3 class="about__lv3Ttl">ジャンボン・メゾンの特徴</h3>
                <ul>
                  <li>◎社長を含め、作り手は全員女性。肉業界では珍しい。</li>
                  <li>◎創業平成5年、代表の父が水稲の農家から47歳の時に一念発起し設立。</li>
                  <li>◎師匠がおらず、独学で今の味を作り上げたので「どこにも似ていない味」。</li>
                  <li>◎味の特徴は「和」で、出汁をしっかり含ませて、下味をつけている。</li>
                  <li>◎「日本人が作る日本人のためのハム・ソーセージ」を世界にアピールしたい。</li>
                </ul>
              </div>
            </div>
            <div class="about__imgBox about__imgBox__small">
              <p><img src="<?php echo get_template_directory_uri(); ?>/img/svg/08.svg" alt=""></p>
            </div>
          </div>
        </div>
        <!-- /.about__item -->
      </div>
    </div>
  </section>
  <!-- /#about.content -->
  <section class="content" id="products">
    <div class="content__inner">
      <h2 class="content__ttl">PRODUCTS</h2>
      <div class="product">
        <p class="product__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/09.svg" alt="岩出山家庭ハム"></p>
        <div class="product__unit">
          <p class="product__img"><img src="<?php echo get_template_directory_uri(); ?>/img/12.jpg" alt="岩出山家庭ハム"></p>
          <div class="product__body">
            <p class="product__copy"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/10.svg" alt=""></p>
            <div class="product__txt">
              フランスの伝統製法を元に、日本人の味覚に合わせて味付けをアレンジ。「日本人が作る日本人のためのハム」をコンセプトに立ち上げたブランドです。そのコンセプト通り、どこにも似てない味と言われ、地元の「あ・ら伊達な道の駅」仙台の老舗百貨店「藤崎」で不動の人気商品となりました。一番人気のベーコンは、宮城の飲食店のシェフもその美味しさを認めるお墨付き。あ・ら伊達な道の駅で常設されている「炭火で焼いたスペアリブ」は、創業者が「肉をかぶりつきたい」という夢を商品化、その美味しさが口コミで広がり、観光客に「岩出山に来たらスペアリブ」と言われるようになりました。
            </div>
          </div><!-- /.product__body -->
        </div><!-- /.product__unit -->

        <div class="lineUp">
          <h3 class="lineUp__ttl">代表する商品</h3>
          <div class="lineUp__unit">
            <p class="lineUp__item lineUp__item--iwadeyama">
              <img src="<?php echo get_template_directory_uri(); ?>/img/13.png" alt="ファミリー">
              <span class="lineUp__name">ファミリー</span>
            </p>
            <p class="lineUp__item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/14.png" alt="グランマ">
              <span class="lineUp__name">グランマ</span>
            </p>
            <p class="lineUp__item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/15.png" alt="グランパ">
              <span class="lineUp__name">グランパ</span>
            </p>
          </div>
          <!-- /.lineUp__unit -->
        </div><!-- /.lineUp -->
      </div><!-- /.product -->
      <div class="product">
        <p class="product__logo product__logo--small"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/16.svg" alt="和ハム"></p>
        <div class="product__unit">
          <p class="product__img"><img src="<?php echo get_template_directory_uri(); ?>/img/19.jpg" alt="和ハム"></p>
          <div class="product__body">
            <p class="product__copy"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/17.svg" alt=""></p>
            <div class="product__txt">
              岩出山家庭ハムの味の基本である「和風味」はそのまま残し、原材料を選び抜いた商品です。原材料は宮城県登米市のブランド豚pork165のメスを使用しています。和ハムは、これからの未来に提案していきたい販売スタイル「完全受注販売」のみで受け付けています。「食品ロスを無くす」「在庫を持たない」「必要な量だけ」を目指し、その活動の象徴となるギフトです。20セットからの受付で、そこから原材料を発注し仕込みますので、仕上がりは2か月後となります。原材料、製法、販売スタイルまで全てにこだわった商品。このようなスタイルがこれからのスタンダードになるように開発されたハム、それが「和ハム」です。
            </div>
          </div><!-- /.product__body -->
        </div><!-- /.product__unit -->

        <div class="lineUp">
          <div class="lineUp__unit wahamu">
            <div class="lineUp__item">
              <h3 class="lineUp__ttl">代表する商品</h3>
              <img src="<?php echo get_template_directory_uri(); ?>/img/20.png" alt="和ハム">
              <span class="lineUp__name">和ハム</span>
            </div>
            <div class="lineUp__item lineUp__item--wahamu">
              <h4 class="lineUp__ttl">ブランド豚を使用</h4>
              <img src="<?php echo get_template_directory_uri(); ?>/img/21.png" alt="ブランド豚の和ハム">
            </div>
          </div>
          <!-- /.lineUp__unit -->
        </div><!-- /.lineUp -->
      </div><!-- /.product -->
      <div class="product">
        <p class="product__logo product__logo--large"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/22.svg" alt="アトリエ・ドゥ・ジャンボンメゾン"></p>
        <div class="product__unit">
          <p class="product__img"><img src="<?php echo get_template_directory_uri(); ?>/img/25.jpg" alt="アトリエ・ドゥ・ジャンボンメゾンのハム"></p>
          <div class="product__body">
            <p class="product__copy"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/23.svg" alt=""></p>
            <div class="product__txt">
              コンセプトは「旅するハム屋」で、実店舗を持たず、ポップアップショップのみで販売するブランドです。オーダーカットで量り売りをするスタイルで、例えば「1ミリでカットしたものを100グラム」「1センチの厚切りを4枚」など、お客様のお好みに合わせてカットしています。ECサイトで紹介している「ラ・コンテ」は、オーダー頂いて、発送するその日にカットしたフレッシュなハムをお届けします。また、季節の旬を取り入れたミートローフは、宮城県産の厳選された食材を取り入れた限定商品です。その名も「ラ・ビジュウ」(宝石)。ミートローフに閉じ込めた食材を宝石に見立てて作りました。
            </div>
          </div><!-- /.product__body -->
        </div><!-- /.product__unit -->

        <div class="lineUp">
          <h3 class="lineUp__ttl">代表する商品</h3>
          <div class="lineUp__unit">
            <p class="lineUp__item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/26.png" alt="ラ・ビジュウ">
              <span class="lineUp__name">ラ・ビジュウ</span>
            </p>
            <p class="lineUp__item lineUp__item--laconte">
              <img src="<?php echo get_template_directory_uri(); ?>/img/27.png" alt="ラ・コンテ">
              <span class="lineUp__name">ラ・コンテ</span>
            </p>
          </div>
          <!-- /.lineUp__unit -->
        </div><!-- /.lineUp -->
      </div><!-- /.product -->
    </div>
  </section>
  <!-- /#product.content -->
  <section class="content" id="webshop">
    <div class="content__inner">
      <h2 class="content__ttl">WEBSHOP</h2>
      <p>
        <a href="https://www.jambon-maison.shop/">
          <img src="<?php echo get_template_directory_uri(); ?>/img/28.png" alt="ジャンボンメゾンオンラインショップ">
        </a>
      </p>
    </div>
  </section>
  <!-- /#webshop.content -->
  <section class="content contact" id="contact">
    <div class="content__inner">
      <h2 class="content__ttl">CONTACT</h2>
      <div class="contact__bg">
        <div class="contact__formWrap">
          <div class="contact__sbttl">
            お問い合わせフォーム
          </div>
          <div class="contact__note">
            岩出山家庭ハムのこと、取り扱い店のこと、ご注文のことなどお気軽にお問い合わせください。内容によっては回答をさしあげるのにお時間をいただくこともございます。また、休業日は翌営業日以降の対応となりますのでご了承ください。
          </div>
          <?php echo do_shortcode('[contact-form-7 id="18" title="お問い合わせフォーム"]'); ?>
          </div><!-- /.contact__formWrap -->
      </div><!-- /.contact__bg -->
    </div>
  </section>
  <!-- /#contact.content -->
</main>
<!-- /.main -->
<?php get_footer(); ?>