<?php get_header();?>
  
  <main>
    <section class="atopbackground">
      <div class="atopbackground__carousel">
        <div><img class="atopbackground__carousel--img" src="<?php echo get_template_directory_uri(); ?>/img/About.png"></div>
        <div><img class="atopbackground__carousel--imgsp" src="<?php echo get_template_directory_uri(); ?>/img/SP-About.png"></div>
      </div>
      <div class="atopbackground__colored"></div>
      <div class="atopbackground__coloredsp"></div>
      <div class="kotei">
        <p class="kotei__en">About</p>
        <p class="kotei__jp">当院について</p>
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
    <section id="aconcept">
      <div class="aconcept__concept">
        <div class="aconcept__background">
          <div class="aconcept__background--text">
            <p class="aconcept__background--textname">Concept</p>
          </div>
          <div class="aconcept-background--imgone">
            <img class="aconcept__background--imgdata" src="<?php echo get_template_directory_uri(); ?>/img/BGicon_Light.png" alt="concept-background-img">
          </div>
        </div>
        <div class="aconcept__parent">
          <div class="aconcept__left">
            <div class="aconcept__title">
              <img class="aconcept__title--logo" src="<?php echo get_template_directory_uri(); ?>/img/Head_01_Icon.png">
              <p class="aconcept__title--en">Concept</p>
              <p class="aconcept__title--jp">特徴</p>
            </div>
            <div class="aconcept__content">
              <p class="aconcept__content--text">日々変化する<br>カラダと心を癒す<br>パーソナル<br>トレーナーとして</p>
            </div>
            <div class="concept__contentsp">
              <p class="concept__contentsp--text">日々変化するカラダと心を癒すパーソナルトレーナーとして</p>
            </div>
            <div class="aconcept__detail">
              <p class="aconcept__detail--text">当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。</p>
              <p class="aconcept__detail--text">また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。</p>
              <p class="aconcept__detail--text">ご不安な点や疑問点などお気軽にご相談くださいませ。</p>
            </div>
          </div>
          <div class="aconcept__right">
            <div class="aconcept__right--img">
              <img class="aconcept__right--imgdata" src="<?php echo get_template_directory_uri(); ?>/img/Concept-Imagegroup.png" alt="concept image">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="aconcept">
      <div class="aconcept__flow">
        <div class="aconcept__background">
          <div class="aconcept__background--texttwo">
            <p class="aconcept__background--textname">Flow</p>
          </div>
          <div class="aconcept__background--imgtwo">
            <img class="aconcept__background--imgdata" src="<?php echo get_template_directory_uri(); ?>/img/BGicon_Light.png" alt="concept-background-img">
          </div>
        </div>
        <div class="aconcept__parent">
          <div class="aconcept__left">
            <div class="aconcept__title">
              <img class="aconcept__title--logo" src="<?php echo get_template_directory_uri(); ?>/img/Head_01_Icon.png">
              <p class="aconcept__title--en">Flow</p>
              <p class="aconcept__title--jp">施術の流れ</p>
            </div>
            <div class="aconcept__detail">
              <ol type="1">
                <li class="aconcept__detail--text">受付</li>
                <li class="aconcept__detail--text">問診表の記入</li>
                <li class="aconcept__detail--text">カウンセリング</li>
                <li class="aconcept__detail--text">施術</li>
                <li class="aconcept__detail--text">アフターカウンセリング</li>
              </ol>
            </div>
          </div>
          <div class="aconcept__right">
            <div class="aconcept__right--img">
              <img class="aconcept__right--imgdata" src="<?php echo get_template_directory_uri(); ?>/img/Flow-Imagegroup.png" alt="flow image">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="acustomer">
      <div class="acustomer">
        <div class="acustomer__head">
          <div class="acustomer__title">
            <img class="acustomer__title--left" src="<?php echo get_template_directory_uri(); ?>/img/Head_02_DecoLeft14.png">
            <p class="acustomer__title--center">根本改善のポイント</p>
            <img class="acustomer__title--right" src="<?php echo get_template_directory_uri(); ?>/img/Head_02_DecoRight14.png">
          </div>
          <p class="acustomer__content">お体の状態や生活習慣、ご要望を丁寧にお伺いします。<br> ご自身でできるケアなども含めて施術方針をお作りします。</p>
        </div>
        <div class="acustomer__voice">
          <div class="acustomer__voice--left">
            <img class="acustomer__voice--img" src="<?php echo get_template_directory_uri(); ?>/img/Point1.png">
            <h3 class="acustomer__voice--title">丁寧なカウンセリング</h3>
          </div>
          <div class="acustomer__voice--center">
            <img class="acustomer__voice--img" src="<?php echo get_template_directory_uri(); ?>/img/Point2.png">
            <h3 class="acustomer__voice--title">徹底的分析</h3>
          </div>
          <div class="acustomer__voice--right">
            <img class="acustomer__voice--img" src="<?php echo get_template_directory_uri(); ?>/img/Point3.png">
            <h3 class="acustomer__voice--title">施術計画のご案内</h3>
          </div>
        </div>
      </div>
    </section>
  </main>
  <section class="about__newwavetwo">
    <img class="about__newwavetwo__img--one" src="<?php echo get_template_directory_uri(); ?>/img/Vector (1).png">
    <img class="about__newwavetwo__img--two" src="<?php echo get_template_directory_uri(); ?>/img/Vector (1).png">
  </section>
  <?php get_footer(); ?>
