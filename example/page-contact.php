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
    <section>
      <div class="contact">
        <div class="contact__left">
          <div class="contact__left--parent">
            <div class="contact__left--childright">
              <h2 class="contact__left--title">お電話でのご予約・お問い合わせ</h2>
              <p class="contact__left--date">〒101-0022 東京都千代田区神田練塀町300番地<br>住友不動産秋葉原駅前ビル 5F</p>
              <p class="contact__left--tel">tel:</p>
            </div>
          </div>
          <div class="contact__form">
            <div class="contact__form--title">
             <h2>ご予約・お問い合わせフォーム</h2>
             <p>※ 2営業日以内にご返信いたします。</p>
            </div>
            <!-- <form>
              <div class="contact__form--parent">
                <div class="contact__form--heading">
                  <label class="contact__form--label">氏名（必須）</label>
                </div>
                <div>
                  <input type="text" name="name" placeholder="侍 太郎" class="contact__form--textbox">
                </div>
              </div>
              <div>
                <div class="contact__form--heading">
                  <label class="contact__form--label">フリガナ（必須）</label>
                </div>
                <div>
                  <input type="text" name="hurigana" placeholder="サムライ タロウ" class="contact__form--textbox">
                </div>
              </div>
              <div>
                <div class="contact__form--heading">
                  <label class="contact__form--label">電話番号（必須）半角</label>
                </div>
                <div>
                  <input type="text" name="tel" placeholder="0312345678" class="contact__form--textbox">
                </div>
              </div>
              <div>
                <div class="contact__form--heading">
                  <label class="contact__form--label">メールアドレス（必須）半角英数字</label>
                </div>
                <div>
                  <input type="text" name="mail" placeholder="samurai-chiropractic@example.com " class="contact__form--textbox">
                </div>
              </div>
              <div>
                <div class="contact__form--heading">
                  <label class="contact__form--label">ご予約希望日</label>
                </div>
                <div>
                  <input type="text" name="date" placeholder="例）2023年3月1日" class="contact__form--textbox">
                </div>
              </div>
              <div>
                <div class="contact__form--heading">
                  <label class="contact__form--label">お悩み（必須）</label>
                </div>
                <div>
                  <select name="request" class="contact__form--request" size="1">
                    <option value="">お悩みを選択してください</option>
                    <option value="">腰痛・肩こり</option>
                    <option value="php">冷え性・だるさ</option>
                    <option value="java">骨盤・背骨矯正</option>
                    <option value="golang">骨折・打撲・捻挫・脱臼</option>
                    <option value="python">スポーツ診療</option>
                    <option value="c#">交通事故</option>
                    <option value="C++">その他</option>
                  </select>
                </div>
              </div>
              <div class="contact__form--heading">
                <label class="contact__form--label">お問い合わせ内容</label>
              </div>
              <div>
                <textarea class="contact__form--textarea" placeholder="できるだけ詳しいお問い合わせ内容を記入してください" name="message"></textarea>
              </div>
              <div class="contact__form--submit">
                <a href="<?php echo home_url(); ?>/contact-thanks" class="submit__btn--child">送信</a>
              </div>
            </form> -->
            <form action="#" method="post" enctype="multipart/form">
              <?php echo do_shortcode( '[wpforms id="99" title="false"]' ); ?>
            </form>
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