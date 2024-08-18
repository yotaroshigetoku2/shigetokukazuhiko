<?php
/*
Template Name:プロフィール
*/
?>
<!DOCTYPE html>
<html>

<?php get_header(); ?>
<header id="profile_page_top" class="profile page-header">
  <?php get_template_part('includes/mobile-nav'); ?>
  <?php get_template_part('includes/nav'); ?>
  <h1>プロフィール</h1>
</header>
<main>
  <div class="inner">
    <section id="about">
      <h2>しげとくについて</h2>
      <div class="col2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/profile/profile_about.jpg" class="col2-inner-img">
        <div class="col2-inner">
          <h3>重徳和彦</h3>
          <p>昭和45 年12月21日生まれ<br>妻と3男児とともに，岡崎市に暮らしています。<br>
            愛知県立岡崎高校卒，東京大学法学部卒。<br>
            高校・大学の7年間ラグビー部。ポジションはスクラムハーフ。</p>
          <h4>著書</h4>
          <ul>
            <li>共著「どうする、野党！？」（直諫の会、幻冬舎）</li>
            <li>共著「創発まちづくり」（和田祟編著、学芸出版社）</li>
          </ul>
          <h4>趣味</h4>
          <ul>
            <li>ラグビー観戦</li>
            <li>食物アレルギーの息子のための米粉ケーキづくり</li>
            <li>ベートーヴェンのピアノソナタ「熱情」が好き</li>
          </ul>
        </div>
      </div>
    </section>
    <section id="history">
      <h2>しげとくの経歴</h2>
      <div class="nennpyo">
        <h3>大学卒業後、地方自治とまちおこしに取り組む</h3>
        <div class="slides_wraper">
          <table class="slides">
            <thead>
              <tr>
                <th>年</th>
                <th>出来事</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>平成6年</td>
                <td>自治省（現総務省）に入省。山形県庁へ出向</td>
              </tr>
              <tr>
                <td>平成8年</td>
                <td>米国コロンビア大学公共政策大学院へ留学</td>
              </tr>
              <tr>
                <td>平成12年</td>
                <td>青森県庁へ出向（企画部総括副参事、市町村振興課長として市町村合併などを担当）</td>
              </tr>
              <tr>
                <td>平成13年</td>
                <td>NPO法人「青森ITSクラブ」設立（バス位置案内システム、雪道情報の一元化など、タテ割り行政を超える活動を展開） </td>
              </tr>
              <tr>
                <td>平成15年</td>
                <td>総務省消防庁災害対策官（新潟県中越地震では、崖崩れ現場からの2歳児男児救出を担当）</td>
              </tr>
              <tr>
                <td rowspan=" 3">平成17年</td>
                <td>広島県庁へ出向（地域税財政室長、財政室長として、予算立案や財政再建プログラム策定を担当）</td>
              </tr>
              <tr>
                <td class="dn"></td>
                <td class="rl">若手市議などの仲間と共に、NPO法人「ひろしま創発塾」設立</td>
              </tr>
              <tr>
                <td class="dn"></td>
                <td class="rl">地域の仲間と「吉島東とうさんの会」設立（防犯パトロール、夏休みラジオ体操など、子どもたちのための活動を実施）</td>
              </tr>
              <tr>
                <td>平成19年</td>
                <td>総務省官房企画課課長補佐</td>
              </tr>
              <tr>
                <td rowspan="4">平成20年</td>
                <td>総務省地域力創造グループ地域政策課理事官</td>
              </tr>
              <tr>
                <td class="dn"></td>
                <td>国・地方公務員の「地域に飛び出す公務員ネットワーク」設立（会員2600人）</td>
              </tr>
              <tr>
                <td class="dn"></td>
                <td>官民による地域活性化の早朝勉強会「地域力おっはー！クラブ」を主催</td>
              </tr>
              <tr>
                <td class="dn"></td>
                <td>世田谷区立池尻小おやじの会（豆腐作り教室、学校キャンプを開催）</td>
              </tr>
              <tr>
                <td>平成21年</td>
                <td>内閣府行政刷新会議事務局参事官補佐（「事業仕分け」の実務、若者の自立・就労を官民で支援するパーソナルサポート特区を担当）</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="nennpyo2">
        <h3>ふるさとに帰り、政治の道に進む</h3>
        <div class="slides_wraper2">
          <table class="slides2">
            <thead>
              <tr>
                <th>年</th>
                <th>出来事</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td rowspan="3">平成23年2月</td>
                <td>愛知県知事選挙に出馬（55万6610票を集めるも、次点で落選）</td>
              </tr>
              <tr>
                <td class="dn"></td>
                <td>3月<span>11</span>日の東日本大震災を機に、一般社団法人「くにおこし@愛知」を設立（５度にわたり<span>150</span>人のボランティア「くにおこし隊」で大船渡市・陸前高田市へ）</td>
              </tr>
              <tr>
                <td class="dn"></td>
                <td>愛・地球博記念公園（モリコロパーク）で「今が旬！大船渡サンマ祭り」を開催</td>
              </tr>
              <tr>
                <td>平成24年12月</td>
                <td> 第<span>46</span>回衆議院議員総選挙に愛知<span>12</span>区より日本維新の会公認で出馬（6万9198票を獲得し、選挙区で敗れるも比例復活により初当選）</td>
              </tr>
              <tr>
                <td>平成26年12月</td>
                <td>第<span>47</span>回総選挙に出馬（13万1618票を獲得し、選挙区での当選を果たす）</td>
              </tr>
              <tr>
                <td>平成27年10月</td>
                <td>維新の党を離党</td>
              </tr>
              <tr>
                <td>12月</td>
                <td>新党「改革結集の会」を設立、国会対策委員長に就任</td>
              </tr>
              <tr>
                <td>平成28年3月</td>
                <td>保守の2大政党政治を目指し、「民進党」結成に参画</td>
              </tr>
              <tr>
                <td>平成29年10月</td>
                <td>第<span>48</span>回総選挙に無所属で出馬（14万9587票を獲得し、選挙区で当選。3期目に）</td>
              </tr>
              <tr>
                <td>平成31年1月</td>
                <td>衆議院会派「社会保障を立て直す国民会議」結成に参画</td>
              </tr>
              <tr>
                <td>令和元年10月</td>
                <td>派閥「直諌（ちょっかん）の会」会長に就任</td>
              </tr>
              <tr>
                <td>令和2年9月</td>
                <td>新党「立憲民主党」に参画、党副幹事長に就任</td>
              </tr>
              <tr>
                <td>令和3年10月</td>
                <td>第<span>49</span>回総選挙に出馬<br>（14万2536票を獲得し、選挙区で当選。4期目に）</td>
              </tr>
              <tr>
                <td>12月</td>
                <td>新党「改革結集の会」を設立、国会対策委員長に就任</td>
              </tr>
              <tr>
                <td>令和5年10月</td>
                <td>立憲民主党愛知県連代表就任</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <section id="federation">
      <h2>主な議員連盟</h2>
      <div class="col1 mt3">
        <div class="col1-inner">
          <ul>
            <li>自衛隊員応援議員連盟（事務局長）</li>
            <li>日韓友好議員連盟（幹事長）</li>
            <li>日本の産業政策を考える議員連盟（幹事長）</li>
            <li>獣医師・獣医医療「ワンヘルス」政策議員連盟</li>
            <li>シルバー人材センター支援議員連盟（会長）</li>
          </ul>
        </div>
        <div class="spacer"></div>
        <div class="col1-inner">
          <h3>超党派</h3>
          <div class="spacer"></div>
          <ul>
            <li>自動車産業の未来を考える会（幹事長）</li>
            <li>自殺対策を推進する議員の会（副会長）</li>
            <li>仏教議員連盟</li>
            <li>政治分野における女性の参画と活躍を推進する議員連盟（事務局次長）</li>
            <li>犬猫殺処分ゼロを目指す動物愛護議員連盟</li>
            <li>明治の日を実現するための議員連盟</li>
          </ul>
        </div>
        <div class="spacer"></div>
        <div class="col1-inner">
          <h3>外交</h3>
          <div class="spacer"></div>
          <ul>
            <li>日米国会議員連盟</li>
            <li>日中友好議員連盟</li>
            <li>日華議員連盟</li>
            <li>日韓議員連盟</li>
            <li>日本・キューバ友好議員連盟</li>
          </ul>
        </div>
      </div>
    </section>
    <div class="page_top_btn">
      <a href="#profile_page_top">トップへ<img src="<?php echo get_template_directory_uri(); ?>/images/しげどっぐ_20230512.png"></a>
    </div>
  </div>
</main>

<?php get_template_part('includes/footer'); ?>
<?php get_footer(); ?>
</body>

</html>