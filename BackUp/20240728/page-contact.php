<?php
/*
Template Name:お問い合わせ
*/
?>
<!DOCTYPE html>
<html>

<?php get_header(); ?>
<header class="page-header">
  <?php get_template_part('includes/mobile-nav'); ?>
  <?php get_template_part('includes/nav'); ?>
  <h1>応援のお願い・お問い合せ</h1>
</header>
<main id="contact">
  <div class="inner">
    <section id="contact_outline">
      <div class="modalon_out">
        <h2>応援のお願い・お問い合わせ</h2>
        <div class="contact_col w85">
          <div class="green_box kifu">
            <div class="h3">
              <h3>しげとく和彦応援寄付</h3>
            </div>
            <p>皆様のお力で活動をお支えください！<br>「しげとく和彦応援寄付」へのご協力をお願いいたします。</p>
            <div class="form_btn modal_open">
              <p>ご寄付</p>
            </div>
          </div>
          <div class="poster green_box">
            <div class="h3">
              <h3>ポスター掲示<span>【選挙区：岡崎市・西尾市】</span></h3>
            </div>
            <p><b>「広報板・ポスター」</b>の掲示にご協力いただける方を募集しております！<br>
              （壁に直接両面テープで貼付するか、広報掲示板を設置するかのいずれかでお願いしております。）</p>
            <div class="form_btn">
              <a href="<?php echo esc_url(home_url()); ?>/contact_form/">ポスター掲示</a>
            </div>
          </div>
          <div class="volunteer green_box">
            <div class="h3">
              <h3>ボランティア登録</h3>
            </div>
            <p>活動をお手伝いいただけるボランティアさんを募集しています！<br></p>
            <p>例）</p>
            <ul>
              <li>・郵便物の発送作業（宛名貼付、封入）をはじめとした事務所内での作業のお手伝い</li>
              <li>・活動報告紙（しげとく通信）をご近所・お知合いにお渡し（お配り）いただく</li>
            </ul>
            </p>
            <div class="form_btn">
              <a href="<?php echo esc_url(home_url()); ?>/contact_form/">ボランティア登録</a>
            </div>
          </div>
        </div>
        <div class="col3-inner green_box">
          <div class="h3">
            <h3>ご意見やお問い合わせはこちらから<br>よろしくお願いします。</h3>
          </div>
          <div class="form_btn">
            <a href="<?php echo esc_url(home_url()); ?>/contact_form/">お問い合わせ</a>
          </div>
        </div>
      </div>
      <div class="modal_bg"></div>
      <div class="modal-content green_box">
        <div class="modal-inner">
          <div class="hide-btn"><span></span><span></span></div>
          <h4>直接お振込いただける方</h4>
          <p>政治団体「三河道州制研究会」(資⾦管理団体)へのカンパ（個人献金）をお願いしております。<br>
            寄付額は、1,000円〜で随時受付となります。</p>
          <ul>
            <li>※ご寄付は⽇本国籍を有する個⼈様からのみ可能です。また、他⼈名義、匿名での寄付は禁⽌されています。</li>
            <li>※⼿続きの際に、取得した個⼈情報は厳重に管理を⾏い第三者に対して開⽰、提供することは致しません。</li>
            <li>※各年中において、同⼀の政治団体に対して150万円を超える寄付をすることはできません。また、その他の政治団体への献⾦と合わせて、各年中1,000万円を超える寄付をすることができません。</li>
            <li>
              ※同⼀の個⼈様からの寄付で年間を通じて合計⾦額が5万円を超えた場合、⼜は、寄付⾦控除をご希望される場合は、申込者の住所・⽒名・寄付⾦額・職業・寄付を頂いた年⽉⽇が「三河道州制研究会」の収⽀報告書に記載され、総務省⾃治⾏政選挙部収⽀公開室により開⽰されますことをご了承ください。
            </li>
            <li>※個⼈で年額2,000円を超えて寄付された⽅は、寄付⾦控除の申請ができます。→年間の寄付⾦額が2,000円以下の場合は所得税の還付はありません。</li>
          </ul>
          <p>◎口座：立憲民主党愛知県第12区総支部　代表　重徳和彦</p>
          <ul class="bank-accounts">
            <li>〇岡崎信用金庫<br>
              店番号(001)本店営業部/普通/口座番号 9148037</li>
            <li>〇西尾信用金庫<br>
              店番号(028)岡崎支店/普通/口座番号 1109943</li>
          </ul>
          <p>※恐れ入りますが、振込手数料はご本人様負担をお願いいたします。</p>
          <div class="form_btn">
            <a href="<?php echo esc_url(home_url()); ?>/kifu_form/">寄付フォームへ</a>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_template_part('includes/footer'); ?>
<?php get_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>

</html>