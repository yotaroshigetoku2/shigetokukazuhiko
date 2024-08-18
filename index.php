<?php

?>
<!DOCTYPE html>
<html>

<?php get_header(); ?>
<header id="page_top" class="header">
  <?php get_template_part('includes/mobile-nav'); ?>
  <div class="top-mv">
    <h1><img src="<?php echo get_template_directory_uri(); ?>/images/20230607_mv-100.jpg" alt="しげとく和彦" class="mv"></h1>
    <?php get_template_part('includes/nav'); ?>
  </div>
</header>
<main>
  <div class="inner top-inner">
    <section class="vision">
      <div class="vision-about">
        <p>"若者"よ、"時"が来た</p>
        <p>人口減少、経済格差の拡大、災害の多発・・・日本の存在感の低下は著しいです。<br>今こそ、世界に冠たる国づくりに再び挑む時です。
          若者たちと共に新しい日本を創ります！
        </p>
      </div>
      <h2>しげとくのビジョン</h2>
      <div class="col2">
        <img class="col2-inner-img" src="<?php echo get_template_directory_uri(); ?>/images/index_vision1.jpg">
        <div class="col2-inner">
          <h3><span style="color: #FF6C6C;">歴史</span>と<span style="color: #FF6C6C;">伝統</span>を引き継ぐ</h3>
          <div class="text-block">
            <p>
              礼儀を重んじ、平和を愛好する日本は、先人が築き上げてきた私たちの誇りで す。<br>日本の良さを世界に伝えていきましょう。<br>高いものづくり技術と、環境と調和する産業は、世界のモデルです。<br>海に囲まれ、国土の三分の二を山で占める日本は、水資源に恵まれ、農耕を中心とした、和食文化を育んできました。世界トップの成熟国家としての誇りを高く掲げたい。
            </p>
          </div>
        </div>
      </div>
      <div class="col2 second">
        <div class="col2-inner">
          <h3><span style="color: #FF6C6C;">変化</span>こそ、力の源泉</h3>
          <div class="text-block">
            <p>若い世代がこれから取り組まなければならないのは持続可能な社会づくりです。<br>世界と繋がり、新しい価値を創造できる個性を引き出す教育改革を断行します。<br>地球環境を守るため、脱炭素に取り組む、世界トップの環境国家を目指します。<br>多様性を重んじ、障がい者、子ども、性的マイノリティ、外国人と暮らしやすい国をつくります。
            </p>
          </div>
        </div>
        <img class="col2-inner-img" src="<?php echo get_template_directory_uri(); ?>/images/index_vision2.jpg">
      </div>
    </section>
    <section class="feed">
      <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
    </section>
    <div class="page_top_btn">
      <a href="#page_top">トップへ<img src="<?php echo get_template_directory_uri(); ?>/images/shigedog.png"></a>
    </div>
  </div>
</main>
<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>

</html>