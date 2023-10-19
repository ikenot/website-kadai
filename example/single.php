<?php
 /*
 Template Name: News
 Template Post Type: post
 */
 ?>

<?php get_header();?>

<main>
<section class="atopbackground">
      <div class="atopbackground__carousel">
        <div><img class="atopbackground__carousel--img" src="<?php echo get_template_directory_uri(); ?>/img/News.png"></div>
        <div><img class="atopbackground__carousel--imgsp" src="<?php echo get_template_directory_uri(); ?>/img/SP-News.png"></div>
      </div>
      <div class="atopbackground__colored"></div>
      <div class="atopbackground__coloredsp"></div>
      <div class="kotei">
        <p class="kotei__en">Information</p>
        <p class="kotei__jp">お知らせ</p>
      </div>
    </section>
    <img class="kotei__img" src="<?php echo get_template_directory_uri(); ?>/img/_x31_7.png" alt="marimo">
    <section>
      <div class="pankuzu" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
      </div>
    </section>
    <section>
      <div class="pinformation">
        <div class="pinformation__left">
          <div class="pinformation__left--parent">
            <div class="pinformation__left--childright">
              <h2 class="pinformation__left--title"><?php the_title(); ?></h2>
              <p class="pinformation__left--date">2023年2月1日</p>
              <p class="pinformation__left--category">営業日時</p>
            </div>
            <div class="pinformation__left--childleft">
              <img class="pinformation__left--img" <?php the_post_thumbnail();?>
            </div>
          </div>
          <div class="post">
            <div class="post__parent">
              <p class="post__text"><?php the_content(); ?></p>
            </div>
          </div>
          <div class="nextpage__nation">
      <p class="nextpage__nation--one">< 前の記事へ</p>
      <p class="nextpage__nation--two">お知らせ一覧</p>
      <p class="nextpage__nation--twosp">一覧</p>
      <p class="nextpage__nation--three">次の記事へ ></p>
      </div>
        </div>
        <div class="category__list--single">
          <h2 class="category__list--title">カテゴリ</h2>
          <ul class="category__list--parent">
            <li class="category__list--child">営業日時</li>
            <li class="category__list--child">キャンペーン</li>
            <li class="category__list--child">その他</li>
          </ul>
        </div>
      </div>
    </section>
    <section>
    </section>
  </main>
  <section class="about__newwavetwo">
    <img class="about__newwavetwo__img--one" src="<?php echo get_template_directory_uri(); ?>/img/Vector (1).png">
    <img class="about__newwavetwo__img--two" src="<?php echo get_template_directory_uri(); ?>/img/Vector (1).png">
  </section>
  <?php get_footer(); ?>