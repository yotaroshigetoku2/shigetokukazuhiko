<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>しげとく和彦公式ホームページ</title>
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">
  <script>
    (function(d) {
      var config = {
          kitId: 'cvl3pnb',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
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
  <header>
    <nav>
      <ul class="global-nav">
        <li><a href="index.html">トップ</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>/profile/">プロフィール</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>/policy/">政策</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>/contact/">問い合わせ・アクセス</a></li>
        <li><a href="https://www.instagram.com/k.shigetoku/"><img src="images/Instagram_icon.svg"></a></li>
        <li><a href="https://twitter.com/shigetoku2?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="images/Logo blue.svg"></a></li>
      </ul>
    </nav>
  </header>
  <main>
  </main>
  <footer>
    <a href="#page_top" class="logo">
      <div>
        <img src="images/logo.jpg">
      </div>
    </a>
    <a href="https://www.instagram.com/k.shigetoku/" class="Instagram_icon">
      <img src="images/Instagram_Glyph_Gradient.png">
    </a>
    <a href="https://twitter.com/shigetoku2?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="twitter_icon">
      <img src="images/2021 Twitter logo - blue.png">
    </a>
    <div class="spacer"></div>
    <nav class="footer-nav clearfix">
      <ul>
        <li><a href="<?php echo esc_url(home_url()); ?>/profile/">プロフィール</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>/policy/">政策</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>/contact/">問い合わせ・アクセス</a></li>
      </ul>
    </nav>
    <div class="spacer"></div>
    <small>Copyright ©︎ 2023 KAZUHIKO SHIGETOKU All right reserved.</small>
  </footer>
</body>

</html>