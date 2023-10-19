<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="final-practice">
  <title>Samurai Seitai</title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Shippori+Mincho&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Noto+Sans+JP&family=Shippori+Mincho&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <?php wp_head(); ?>
</head>

<body>
  <header id="">
  <div class="header__hamberger">
    <div class="header__hamberger--cross">
      <span class="header__hamberger--line"></span>
      <span class="header__hamberger--line"></span>
      <span class="header__hamberger--line"></span>
    </div>
    <div class="header__hamberger--list">
      <a href="<?php echo home_url(); ?>/"><img class="header__logo--imagewhite" src="<?php echo get_template_directory_uri(); ?>/img/Frame 2259.png" alt="logowhite"></a>
      <ul class="header__hamberger--parent">
        <h2 class="header__hamberger--title">メニュー</h2>
        <a class="header__hamberger--child" href="<?php echo home_url(); ?>/">ホーム</a>
        <a class="header__hamberger--child" href="<?php echo home_url(); ?>/about">当院について</a>
        <a class="header__hamberger--child" href="<?php echo home_url(); ?>/course">コース・料金</a>
        <a class="header__hamberger--child" href="<?php echo home_url(); ?>/news">お知らせ</a>
        <a class="header__hamberger--child" href="<?php echo home_url(); ?>/voice">お客様の声<a>
        </ul>
      <a class="header__hamberger--link" href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせ</a>
    </div>
    <div class="header__hamberger--empty"></div>
  </div>
    <div class="header">
      <div class="header__logo">
        <a href="<?php echo home_url(); ?>/"><img class="header__logo--img" src="<?php echo get_template_directory_uri(); ?>/img/Frame 2259.png" alt="logo"></a>
      </div>
      <div class="header__nav">
        <div class="header__nav--parent">
          <a class="header__nav--child" href="<?php echo home_url(); ?>/">ホーム</a>
          <a class="header__nav--child" href="<?php echo home_url(); ?>/about">当院について</a>
          <a class="header__nav--child" href="<?php echo home_url(); ?>/course">コース・料金</a>
          <a class="header__nav--child" href="<?php echo home_url(); ?>/news">お知らせ</a>
          <a class="header__nav--child" href="<?php echo home_url(); ?>/voice">お客様の声<a>
          <a href="<?php echo home_url(); ?>/contact"><button class="header__nav--btn">ご予約・お問い合わせ</button></a>
        </div>
      </div>
      <a href="<?php echo home_url(); ?>/"><button class="topback"></button></a>
    </div>
  </header>
  <main>
    <section class="topbackground">
      <div class="topbackground__parent">
        <div class="topbackground__colored"></div>  
        <div class="topbackground__carousel">
          <div class="carousel">
            <div><img src="<?php echo get_template_directory_uri(); ?>/img/TOP-Carouselgroup1.png" class="topbackground__carousel--img"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/img/TOP_CarouselGroup2.png" class="topbackground__carousel--img"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/img/TOP_CarouselGroup3.png" class="topbackground__carousel--img"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/img/TOP-Carouselgroup4.png" class="topbackground__carousel--img"></div>
          </div>
        </div>
        <div class="topbackground__carouselsp">
          <div class="carouselsp">
            <div><img class="topbackground__carouselsp--img" src="<?php echo get_template_directory_uri(); ?>/img/SP-TOP-Carouselgroup1.png"></div>
            <div><img class="topbackground__carouselsp--img" src="<?php echo get_template_directory_uri(); ?>/img/SP-TOP-Carouselgroup2.png"></div>
            <div><img class="topbackground__carouselsp--img" src="<?php echo get_template_directory_uri(); ?>/img/SP-TOP-Carouselgroup3.png"></div>
            <div><img class="topbackground__carouselsp--img" src="<?php echo get_template_directory_uri(); ?>/img/SP-TOP-Carouselgroup4.png"></div>
          </div>            
        </div>
      </div>
      <div class="topbackground__word">
        <p class="topbackground__word--textone">根本的な症状改善を</p>
        <p class="topbackground__word--texttwo">サポートします</p>
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/x31_7.png" class="topbackground__img"/> -->
        <img class="topbackground__img" src="<?php echo get_template_directory_uri(); ?>/img/_x31_7.png">
      </div>
    </section>
    <section id="news">
      <div class="news">
        <div class="news__title">
          <p class="news__title--en">News</p>
          <p class="news__title--jp">お知らせ</p>        
        </div>
        <div class="news__content">
          <?php
          $args = array(
            'post_type' => 'post',
            'category_name' => 'news',
            'posts_per_page' => 1,
          );
          $posts = get_posts($args);
          ?>
          <?php foreach($posts as $post): ?>
          <?php setup_postdata($post); ?>
            <div class="news__content--date"><?php echo get_the_date(); ?></div>
              <div class="news__content--category">
                <p class="news__content--categoryname"><?php the_excerpt(); ?></p>
              </div>
              <div class="news__content--title"><?php the_title(); ?></div>
            </div>
            <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
            <div class="news__link">
              <a class="news__link--anchor" href="<?php echo home_url(); ?>/news">お知らせ一覧へ</a>
            </div>

      </div>
    </section>
    <section id="concept">
      <div class="concept">
        <div class="concept__background">
          <div class="concept-background--text">
            <p class="concept__background--textname">Concept</p>
          </div>
          <div class="concept-background--img">
            <img class="concept__background--imgdata" src="<?php echo get_template_directory_uri(); ?>/img/BGicon_Green.png" alt="concept-background-img">
          </div>
        </div>
        <div class="concept__parent">
          <div class="concept__left">
            <div class="concept__title">
              <img class="concept__title--logo" src="<?php echo get_template_directory_uri(); ?>/img/Head_01_Icon.png">
              <p class="concept__title--en">Concept</p>
              <p class="concept__title--jp">特徴</p>
            </div>
            <div class="concept__content">
              <p class="concept__content--text">日々変化する<br>カラダと心を癒す<br>パーソナル<br>トレーナーとして</p>
            </div>
            <div class="concept__contentsp">
              <p class="concept__contentsp--text">日々変化するカラダと心を癒すパーソナルトレーナーとして</p>
            </div>
            <div class="concept__detail">
              <p class="concept__detail--text">当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。</p>
              <p class="concept__detail--text">また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。</p>
              <p class="concept__detail--text">ご不安な点や疑問点などお気軽にご相談くださいませ。</p>
            </div>
            <div class="about__link">
              <a class="about__link--anchor" href="<?php echo home_url(); ?>/about">当院について</a>
            </div>
          </div>
          <div class="concept__right">
            <div class="concept__right--img">
              <img class="concept__right--imgdata" src="<?php echo get_template_directory_uri(); ?>/img/Concept-Imagegroup.png" alt="concept image">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="newwaveone">
      <img class="newwaveone__img--one" src="<?php echo get_template_directory_uri(); ?>/img/Vector (1).png">
      <img class="newwaveone__img--two" src="<?php echo get_template_directory_uri(); ?>/img/Vector (1).png">
    </section>
    <section id="course">
      <div class="course__background">
        <div class="course__background--text">
         <p class="course__background--textname">Course</p>
        </div>
        <div class="course__background--img">
         <img class="course__background--imgdata" src="<?php echo get_template_directory_uri(); ?>/img/BGicon_Light.png" alt="concept-background-img">
        </div>
      </div>
      <div class="course">
        <div class="course__head">
          <div class="course__title">
            <img class="course__title--left" src="<?php echo get_template_directory_uri(); ?>/img/Head_02_DecoLeft14.png">
            <p class="course__title--center">コース・料金</p>
            <img class="course__title--right" src="<?php echo get_template_directory_uri(); ?>/img/Head_02_DecoRight14.png">
          </div>
          <p class="course__content">当院では保険診療、自費診療ともに<br>ご対応しております</p>
        </div>
        <div class="course__menu">
          <div class="course__menu--left">
            <img class="course__menu--img" src="<?php echo get_template_directory_uri(); ?>/img/TOP-insurance1.png">
            <div class="course__menu--parent">
              <h3 class="course__menu--title">保険診療</h3>
              <ul class="course__menu--list">
                <li class="course__menu--child">骨折・打撲・捻挫・脱臼</li>
                <li class="course__menu--child">スポーツ診療</li>
                <li class="course__menu--child">交通事故</li>
              </ul>
            </div>
          </div>
          <div class="course__menu--right">
            <img class="course__menu--img" src="<?php echo get_template_directory_uri(); ?>/img/TOP-self1.png">
            <div class="course__menu--parent">
              <h3 class="course__menu--title">自費診療</h3>
              <ul class="course__menu--list">
                <li class="course__menu--child">腰痛・肩こり</li>
                <li class="course__menu--child">冷え性・だるさ</li>
                <li class="course__menu--child">骨盤・背骨矯正</li>
              </ul>
           </div>
          </div>
        </div>
        <div class="course__link">
          <a class="course__link--anchor" href="<?php echo home_url(); ?>/course">コース・料金詳細へ</a>
        </div>
      </div>
    </section>
    <section id="customer">
      <div class="customer">
        <div class="customer__background">
          <img class="customer__background--img" src="<?php echo get_template_directory_uri(); ?>/img/Bottom-Carouselgroup1.png">
          <img class="customer__background--imgsp" src="<?php echo get_template_directory_uri(); ?>/img/SP-Bottom-Carouselgroup1.png">
        </div>
        <div class="customer__head">
          <div class="customer__title">
            <img class="customer__title--left" src="<?php echo get_template_directory_uri(); ?>/img/Head_02_DecoLeft14.png">
            <p class="customer__title--center">お客様の声</p>
            <img class="customer__title--right" src="<?php echo get_template_directory_uri(); ?>/img/Head_02_DecoRight14.png">
          </div>
          <p class="customer__content">痛みの改善に加えて<br>自分で予防もできるようになりました</p>
        </div>
        <div class="customer__voice">
          <div class="customer__voice--left">
            <img class="customer__voice--img" src="<?php echo get_template_directory_uri(); ?>/img/TOP-user1.png">
            <h3 class="customer__voice--title">S・K様　30代女性</h3>
            <p class="customer__voice--text">1ヶ月で腰の痛みが軽減しました。自分で自宅でできるケアも教えていただき、お任せしてよかったです。</p>
          </div>
          <div class="customer__voice--center">
            <img class="customer__voice--img" src="<?php echo get_template_directory_uri(); ?>/img/TOP-user2.png">
            <h3 class="customer__voice--title">T・M様　40代男性</h3>
            <p class="customer__voice--text">マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えていただき、普段の練習メニューも工夫できています。</p>
          </div>
          <div class="customer__voice--right">
            <img class="customer__voice--img" src="<?php echo get_template_directory_uri(); ?>/img/TOP-user3.png">
            <h3 class="customer__voice--title">S/T様　60代女性</h3>
            <p class="customer__voice--text">転倒して足を骨折したのをきっかけに、痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。今は毎日元気に近所を散歩できています。</p>
          </div>
        </div>
        <div class="customer__link">
          <a class="customer__link--anchor" href="<?php echo home_url(); ?>/voice">お客様の声一覧へ</a>
        </div>
      </div>
    </section>
  </main>

  <section class="newwavetwo">
    <img class="newwavetwo__img--one" src="<?php echo get_template_directory_uri(); ?>/img/Vector (1).png">
    <img class="newwavetwo__img--two" src="<?php echo get_template_directory_uri(); ?>/img/Vector (1).png">
  </section>
  <footer>
    <div class="footer__title">
      <img class="footer__title--left" src="<?php echo get_template_directory_uri(); ?>/img/Head_02_DecoLeft14.png">
      <p class="footer__title--center">お気軽にご来院ください</p>
      <img class="footer__title--right" src="<?php echo get_template_directory_uri(); ?>/img/Head_02_DecoRight14.png">
    </div>
    <div class="footer">
      <div class="footer__left">
        <div class="footer__left--access">
          <h2 class="footer__left--place">JR「秋葉原駅」より徒歩1分</h2>
          <p class="footer__left--adress">〒101-0022<br>東京都千代田区神田練塀町300番地<br>住友不動産秋葉原駅前ビル 5F</p>
          <h3 class="footer__left--tel">tel: 03-1234-5678</h3>
        </div>
        <table class="footer__left--timetable">
          <tr class="table__head">
            <th>営業時間</th>
            <td>月</td>
            <td>火</td>
            <td>水</td>
            <td>木</td>
            <td>金</td>
            <td>土</td>
            <td>日</td>          
          </tr>
          <tr class="table__am">
            <th>9:00~12:30</th>
            <td>●</td>
            <td>●</td>
            <td>-</td>
            <td>●</td>
            <td>●</td>
            <td>●</td>
            <td>●</td>
          </tr>
          <tr class="table__pm">
            <th>15:30~20:00</th>
            <td>●</td>
            <td>●</td>
            <td>-</td>
            <td>●</td>
            <td>●</td>
            <td>●</td>
            <td>●</td>
          </tr>
        </table>
        <div class="footer__left--btn">
          <button class="footer__left--btnname" href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせはこちらから</button>
        </div>
      </div>
      <div class="footer__right">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26911.702845168893!2d35.8612992!3d32.527139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjo!4v1694419729024!5m2!1sja!2sjo" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <div class="footer__bottom">  
      <div class="footer__nav">
        <img class="footer__logo" src="<?php echo get_template_directory_uri(); ?>/img/Frame 2259.png" alt="footer-logo">
        <a class="footer__nav--child" href="<?php echo home_url(); ?>/">TOP</a>
        <a class="footer__nav--child" href="<?php echo home_url(); ?>/about">当院について</a>
        <a class="footer__nav--child" href="<?php echo home_url(); ?>/course">コース・料金</a>
        <a class="footer__nav--child" href="<?php echo home_url(); ?>/news">お知らせ</a>
        <a class="footer__nav--child" href="<?php echo home_url(); ?>/voice">お客様の声<a>
        <a class="footer__nav--child" href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせ<a>
      </div>
      <div class="footer__copy">
        <p class="footer__copy--text">&copy;2023 SAMURAI整体院</p>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  <!-- slickをCDN経由で読み込む -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- JSファイルを読み込む-->
  <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
  <?php wp_footer(); ?>
</body>
  </html>
  