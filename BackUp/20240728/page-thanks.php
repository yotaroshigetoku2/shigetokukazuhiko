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
  <header class="thanks page-header">
    <?php get_template_part('includes/mobile-nav'); ?>
    <?php get_template_part('includes/nav'); ?>
      <h1>ありがとうございます！</h1>
  </header>
  <main>
    <div class="inner">
      <p>フォームが正常に送信されました。ご協力ありがとうございます。</p>
    </div>
  </main>
  <?php get_template_part('includes/footer'); ?>
  <?php get_footer(); ?>
</body>

</html>