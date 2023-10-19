<?php get_header();?>

<main>
  <section class="atopbackground">
      <div class="atopbackground__carousel">
        <div><img class="atopbackground__carousel--img" src="<?php echo get_template_directory_uri(); ?>/img/Voice1.png"></div>
        <div><img class="atopbackground__carousel--imgsp" src="<?php echo get_template_directory_uri(); ?>/img/SP_Voice1.png"></div>
      </div>
      <div class="atopbackground__colored"></div>
      <div class="atopbackground__coloredsp"></div>
      <div class="kotei">
        <p class="kotei__en">Voice</p>
        <p class="kotei__jp">お客様の声</p>
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
      <div class="vcustomer">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post() ?>
            <a href="<?php echo get_permalink(); ?>">
              <div class="vcustomer__voice">
                <img class="vcustomer__voice--img" <?php the_post_thumbnail(); ?>
                <h3 class="vcustomer__voice--title"><?php the_title(); ?></h3>
                <p class="vcustomer__voice--text"><?php the_content(); ?></p>
                <div class="vcustomer__voice--left"><div>
              </div>
            </a>
          <?php endwhile; ?>
        <?php endif; ?>
      <div>
    </section>
    <section>
      <div class="page__voice">
              <p class="page__number">1</p>
              <p class="page__number">2</p>
              <p class="page__number">3</p>
              <p class="page__number">…</p>
              <p class="page__number">6</p>
            </div>
      </div>
    </section>
  </main>
  <section class="about__newwavetwo">
    <img class="about__newwavetwo__img--one" src="<?php echo get_template_directory_uri(); ?>/img/Vector (1).png">
    <img class="about__newwavetwo__img--two" src="<?php echo get_template_directory_uri(); ?>/img/Vector (1).png">
  </section>
  <?php get_footer(); ?>