<?php get_header();?>

<main>
<section class="atopbackground">
      <div class="atopbackground__carousel">
        <div><img class="atopbackground__carousel--img" src="<?php echo get_template_directory_uri(); ?>/img/Reserve.png"></div>
        <div><img class="atopbackground__carousel--imgsp" src="<?php echo get_template_directory_uri(); ?>/img/SP-Reserve.png"></div>
      </div>
      <div class="atopbackground__colored"></div>
      <div class="atopbackground__coloredsp"></div>
      <div class="kotei">
        <p class="kotei__en">Contact</p>
        <p class="kotei__jp">ご予約・お問い合わせ</p>
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
    <section class="submit">
      <div class="submit__parent">
        <div class="submit__child">
          <h2>お問い合わせ内容を送信しました</h2>
          <p>ありがとうございます。2営業日以内にご返信いたします。</p>
        </div>
        <div class="submit__btn">
          <a href="<?php echo home_url(); ?>/"><button class="submit__btn--child">戻る</button></a>
        </div>
      </div>
    </section>
  </main>
  <section class="about__newwavetwo">
    <img class="about__newwavetwo__img--one" src="<?php echo get_template_directory_uri(); ?>/img/Vector (1).png">
    <img class="about__newwavetwo__img--two" src="<?php echo get_template_directory_uri(); ?>/img/Vector (1).png">
  </section>
  <?php get_footer(); ?>