
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
          <button class="footer__left--btnname" href="<?php echo home_url(); ?>/course">ご予約・お問い合わせはこちらから</button>
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
