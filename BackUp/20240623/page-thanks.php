<?php
/*
Template Name:お問い合わせ
*/
?>
<!DOCTYPE html>
<html>

<head>
  <?php get_header(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2ERH1QQ1HZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-2ERH1QQ1HZ');
</script>

<body>
  <header class="header">
    <?php get_template_part('includes/nav'); ?>
    <div class="h1">
      <h1></h1>
    </div>
  </header>
  <main>
    <h1>お申し込みありがとうございます！</h1>
    <p>フォームが正常に送信されました。ご協力ありがとうございます。</p>
  </main>
  <footer>
    <a href="#page_top" class="logo">
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo.jpg">
      </div>
    </a>
    <a href="https://www.instagram.com/k.shigetoku/" class="Instagram_icon">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo/Instagram_Glyph_Gradient.png">
    </a>
    <a href="https://twitter.com/shigetoku2?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="twitter_icon">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo/2021 Twitter logo - blue.png">
    </a>
    <div class="spacer"></div>
    <nav class="footer-nav clearfix">
      <ul>
        <li><a href="<?php echo esc_url(home_url()); ?>/index/">トップ</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>/profile/">プロフィール</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>/policy/">政策</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>/partymember/">党員募集</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>/contact/">お問い合わせ</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>/access/">アクセス</a></li>
      </ul>
    </nav>
    <div class="spacer"></div>
    <small>Copyright ©︎ 2023 KAZUHIKO SHIGETOKU All right reserved.</small>
  </footer>

  <?php get_footer(); ?>
</body>

</html>