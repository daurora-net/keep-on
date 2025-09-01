<?php
// --- ページ固有メタ（仕様準拠） ---
$page_title = "IT支援のご相談はこちら｜株式会社KEEP ON"; // 23文字
$page_description = "AWS設計、社内IT代行、セキュリティ支援のご相談や資料請求はこちらから。お気軽にお問い合わせください。"; // 91文字
$og_title = "お問い合わせ・資料請求｜株式会社KEEP ON";
$og_description = "IT支援に関するご相談や資料のご請求はこちらから。無料相談も大歓迎。";
$breadcrumb_title = "お問い合わせ";

include __DIR__ . "/../includes/header.php";
?>

<main>
  <div class="l-container">
    <?php include __DIR__ . "/../includes/breadcrumb.php"; ?>

    <header class="page-head">
      <h1>お問い合わせ</h1>
      <p class="page-lead">
        KEEP ONでは、AWS設計・社内IT代行・セキュリティ支援・ITヘルプデスクなど、
        企業規模や業種を問わず幅広く支援しています。<br>
        「ここから相談すればいいの？」という不安にも、専門用語を使わず丁寧にご説明します。<br>
        まずはお気軽にご連絡ください。
      </p>
    </header>

    <!-- FAQ形式のよくある質問 -->
    <section class="faq" aria-labelledby="faq-title">
      <h2 id="faq-title">よくあるご質問</h2>

      <div class="qa">
        <h3>Q. 小さな相談でも対応してもらえますか？</h3>
        <p>A. PC設定やメールトラブルなどの小規模な相談から、大規模なクラウド設計やセキュリティ対応まで可能です。</p>
      </div>

      <div class="qa">
        <h3>Q. 契約前に見積や提案だけお願いできますか？</h3>
        <p>A. 可能です。現状やご要望をヒアリングしたうえで、最適な提案書とお見積りをご用意します。</p>
      </div>

      <div class="qa">
        <h3>Q. スポット対応と継続契約はどう違いますか？</h3>
        <p>A. スポットは単発課題向け、継続契約は日常運用を含め長期的に対応します。</p>
      </div>

      <div class="qa">
        <h3>Q. 他社サービス利用中でも相談可能ですか？</h3>
        <p>A. 可能です。セカンドオピニオンとしてのご相談や、既存ベンダーとの併用も可能です。</p>
      </div>

      <div class="qa">
        <h3>Q. 緊急対応やリモート対応は可能ですか？</h3>
        <p>A. 緊急時は最短即日での対応を心がけています。リモート/オンサイトどちらも可能です。</p>
      </div>

      <div class="qa">
        <h3>Q. 社員のITリテラシーが低くても大丈夫？</h3>
        <p>A. 問題ありません。マニュアルや研修をセットでご提供します。</p>
      </div>
    </section>

    <!-- お問い合わせフォーム -->
    <section class="form-section" aria-labelledby="form-title">
      <h2 id="form-title">お問い合わせフォーム</h2>
      <p>必要事項をご入力のうえ送信してください。営業日以内に担当者よりご連絡いたします。</p>

      <form action="/contact/thanks" method="post" class="contact-form">
        <fieldset>
          <legend>基本情報</legend>
          <label>お名前 <input type="text" name="name" required></label>
          <label>会社名 <input type="text" name="company"></label>
          <label>部署名・役職 <input type="text" name="department"></label>
          <label>メールアドレス <input type="email" name="email" required></label>
          <label>電話番号 <input type="tel" name="phone"></label>
        </fieldset>

        <fieldset>
          <legend>お問い合わせ種別</legend>
          <label><input type="radio" name="type" value="service" required> サービスに関する相談</label>
          <label><input type="radio" name="type" value="estimate"> お見積もり依頼</label>
          <label><input type="radio" name="type" value="materials"> 資料請求</label>
          <label><input type="radio" name="type" value="other"> その他</label>
        </fieldset>

        <fieldset>
          <legend>導入希望時期</legend>
          <select name="timing">
            <option value="soon">すぐに</option>
            <option value="3months">3ヶ月以内</option>
            <option value="6months">半年以内</option>
            <option value="undecided">未定</option>
          </select>
        </fieldset>

        <fieldset>
          <legend>ご興味のあるサービス</legend>
          <label><input type="checkbox" name="services[]" value="aws"> AWS設計・構築・運用</label>
          <label><input type="checkbox" name="services[]" value="helpdesk"> ITヘルプデスク／社内IT代行</label>
          <label><input type="checkbox" name="services[]" value="security"> 情報セキュリティ支援</label>
          <label><input type="checkbox" name="services[]" value="webdev"> Web制作・システム開発</label>
          <label><input type="checkbox" name="services[]" value="other"> その他</label>
        </fieldset>

        <fieldset>
          <legend>お問い合わせ内容</legend>
          <textarea name="message" rows="6"></textarea>
        </fieldset>

        <div class="consent">
          <label><input type="checkbox" name="agree" required> プライバシーポリシーに同意する</label>
          <p><a href="/privacy-policy" target="_blank">プライバシーポリシーはこちら</a></p>
        </div>

        <button type="submit">送信する</button>
      </form>
    </section>

    <!-- 導入事例へのリンク -->
    <section class="related-cases">
      <h2>導入事例のご紹介</h2>
      <ul>
        <li><a href="/cases/#case1">KEEP ONに相談してよかった（事例①）</a></li>
        <li><a href="/cases/#case2">ISMS取得に向けたセキュリティ支援（事例②）</a></li>
        <li><a href="/cases/#case3">ITヘルプデスクの外部委託（事例③）</a></li>
      </ul>
    </section>
  </div>
</main>

<!-- 構造化データ（ContactPage） -->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "name": "お問い合わせ｜株式会社KEEP ON",
    "description": "AWS設計、社内IT代行、セキュリティ支援のご相談や資料請求はこちらから。無料相談も大歓迎。",
    "url": "https://example.com/contact",
    "contactOption": "TollFree",
    "availableLanguage": ["Japanese"]
  }
</script>

<?php include __DIR__ . "/../includes/footer.php"; ?>