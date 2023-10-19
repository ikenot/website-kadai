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
      <div class="information">
        <div class="information__left">
          <?php
              $args = array(
                'post_type' => 'post',
                'category_name' => 'news',
                'posts_per_page' => 10,
              );
              $posts = get_posts($args);
              ?>
              <?php foreach($posts as $post): ?>
              <?php setup_postdata($post); ?>
              <a href="<?php echo get_permalink(); ?>">
                <div class="information__left--parent">
                  <div class="information__left--childleft">
                    <img class="information__left--img" src=<?php the_post_thumbnail(); ?>
                  </div>
                  <div class="information__left--childright">
                    <h2 class="information__left--title"><?php the_title(); ?><br>
                    <p class="information__left--date"><?php echo get_the_date('Y年n月j日'); ?></p>
                    <p class="information__left--category">営業日時</p>
                  </div>
               </div>
              </a>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <div class="page">
              <p class="page__number">1</p>
              <p class="page__number">2</p>
              <p class="page__number">3</p>
              <p class="page__number">…</p>
              <p class="page__number">6</p>
            </div>
          </div>
        <div class="category__list">
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