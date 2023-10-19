<?php get_header();?>

  <main>
    <section class="atopbackground">
      <div class="atopbackground__carousel">
        <div><img class="atopbackground__carousel--img" src="<?php echo get_template_directory_uri(); ?>/img/Courseprice.png"></div>
        <div><img class="atopbackground__carousel--imgsp" src="<?php echo get_template_directory_uri(); ?>/img/SP-Courseprice.png"></div>
      </div>
      <div class="atopbackground__colored"></div>
      <div class="atopbackground__coloredsp"></div>
      <div class="kotei">
        <p class="kotei__en">Price</p>
        <p class="kotei__jp">コース・料金</p>
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

    <section id="ccourse">
      <div class="ccourse">
        <div class="ccourse__head">
          <div class="ccourse__title">
            <img class="ccourse__title--left" src="<?php echo get_template_directory_uri(); ?>/img/Head_02_DecoLeft14.png">
            <p class="ccourse__title--center">コース・料金</p>
            <img class="ccourse__title--right" src="<?php echo get_template_directory_uri(); ?>/img/Head_02_DecoRight14.png">
          </div>
          <p class="ccourse__content">当院では保険診療、自費診療ともに<br>ご対応しております</p>
        </div>
        <div class="ccourse__menu">
          <div class="ccourse__menu--left">
            <img class="ccourse__menu--img" src="<?php echo get_template_directory_uri(); ?>/img/TOP-insurance1.png">
            <div class="ccourse__menu--parent">
              <h3 class="ccourse__menu--title">保険診療</h3>
              <ul class="ccourse__menu--list">
                <li class="ccourse__menu--child">骨折・打撲・捻挫・脱臼</li>
                <li class="ccourse__menu--child">スポーツ診療</li>
                <li class="ccourse__menu--child">交通事故</li>
              </ul>
            </div>
          </div>
          <div class="ccourse__menu--right">
            <img class="ccourse__menu--img" src="<?php echo get_template_directory_uri(); ?>/img/TOP-self1.png">
            <div class="ccourse__menu--parent">
              <h3 class="ccourse__menu--title">自費診療</h3>
              <ul class="ccourse__menu--list">
                <li class="ccourse__menu--child">腰痛・肩こり</li>
                <li class="ccourse__menu--child">冷え性・だるさ</li>
                <li class="ccourse__menu--child">骨盤・背骨矯正</li>
              </ul>
           </div>
          </div>
        </div>
      </div>
    </section>
    <section id="cconcept">
      <div class="cconcept">
        <div class="cconcept__parent">
          <div class="cconcept__left">
            <div class="cconcept__title">
              <img class="cconcept__title--logo" src="<?php echo get_template_directory_uri(); ?>/img/Head_01_Icon.png">
              <p class="cconcept__title--en">Insurance</p>
              <p class="cconcept__title--jp">保険治療</p>
            </div>
            <div class="cconcept__content">
              <p class="cconcept__content--text">健康保険の適用は、慢性化していない、急性のけがのみが対象となります。<br>「負傷原因が急性または亜急性（急性に準ずる）の外傷性の負傷」のみです。</p>
            </div>
            <div class="cconcept__detail">
              <ul class="cconcept__menu--list">
                <li class="ccourse__menu--child">骨折・打撲・捻挫・脱臼</li>
                <li class="ccourse__menu--child">スポーツ診療</li>
                <li class="ccourse__menu--child">交通事故</li>
              </ul>
              </div>
          </div>
          <div class="cconcept__right">
            <div class="cconcept__right--img">
              <img class="cconcept__right--imgdata" src="<?php echo get_template_directory_uri(); ?>/img/TOP-insurance2.png" alt="top insurance">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="cconcept">
      <div class="cconcept">
        <div class="cconcept__parent">
          <div class="cconcept__left">
            <div class="cconcept__title">
              <img class="cconcept__title--logo" src="<?php echo get_template_directory_uri(); ?>/img/Head_01_Icon.png">
              <p class="cconcept__title--en">Self-pay</p>
              <p class="cconcept__title--jp">自費治療</p>
            </div>
            <div class="cconcept__content">
              <p class="cconcept__content--text">慢性的なご症状、日常生活の疲労やご年齢により生じる痛み緩和の施術は健康保険の適用がなく、全額自己負担となります。</p>
            </div>
            <div class="cconcept__detail">
              <ul class="cconcept__menu--list">
                <li class="ccourse__menu--child">腰痛・肩こり</li>
                <li class="ccourse__menu--child">冷え性・だるさ</li>
                <li class="ccourse__menu--child">骨盤・背骨矯正</li>
              </ul>
            </div>
            <div class="price">
              <p>初回　8,800円（税込） / 50分</p>
              <p>2回目以降　6,600円（税込） / 30分</p>
            </div>
            <div class="price__sp">
              <p>初回<br>8,800円（税込） / 50分</p>
              <p>2回目以降<br>6,600円（税込） / 30分</p>
            </div>
          </div>
          <div class="cconcept__right">
            <div class="cconcept__right--img">
              <img class="cconcept__right--imgdata" src="<?php echo get_template_directory_uri(); ?>/img/TOP-self2.png" alt="concept image">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <section class="course__newwavetwo">
    <img class="course__newwavetwo__img--one" src="<?php echo get_template_directory_uri(); ?>/img/Vector (1).png">
    <img class="course__newwavetwo__img--two" src="<?php echo get_template_directory_uri(); ?>/img/Vector (1).png">
  </section>
  <?php get_footer(); ?>