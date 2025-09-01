<?php
// --- ページ固有メタ ---
$page_title = "KEEP ONの会社概要と資格情報"; // タイトル（21文字）
$page_description = "株式会社KEEP ONの会社概要、設立年、代表者プロフィール、ISO27001取得やAWSパートナー認定などの資格・認証をご紹介。"; // ディスクリプション
$og_title = "会社概要と取得資格｜株式会社KEEP ON";
$og_description = "ISO27001取得、AWSパートナーなど信頼の背景を可視化。株式会社KEEP ONの概要ページ。";
$breadcrumb_title = "会社概要・資格情報";

include __DIR__ . "/../includes/header.php";
?>

<main>
  <div class="l-container">
    <?php include __DIR__ . "/../includes/breadcrumb.php"; ?>

    <header class="about__head">
      <h1>会社概要・資格情報</h1>
      <p class="about__lead">株式会社KEEP ONの基本情報および各種資格・認証を掲載しています。</p>
    </header>

    <section class="about__section about__company">
      <h2>会社概要</h2>
      <dl class="table-like">
        <div>
          <dt>社名</dt>
          <dd>株式会社KEEP ON</dd>
        </div>
        <div>
          <dt>所在地</dt>
          <dd>（所在地は確定後に記載）</dd>
        </div>
        <div>
          <dt>設立</dt>
          <dd>（設立年を記載）</dd>
        </div>
        <div>
          <dt>代表者</dt>
          <dd>（代表者名／プロフィールは後日反映）</dd>
        </div>
        <div>
          <dt>事業内容</dt>
          <dd>AWS設計・運用／ITヘルプデスク／情報セキュリティ支援／社内IT代行 ほか</dd>
        </div>
      </dl>
    </section>

    <section class="about__section about__certs">
      <h2>資格・認証</h2>
      <ul class="cert-list">
        <li>ISO/IEC 27001（ISMS） <span class="note">※取得済／登録番号などは確定後に記載</span></li>
        <li>AWS パートナープログラム <span class="note">※認定区分は確定後に記載</span></li>
        <li>（その他の資格・認定があれば追記）</li>
      </ul>
    </section>

    <section class="about__section about__contacts">
      <h2>各種ドキュメント・お問い合わせ</h2>
      <ul class="link-list">
        <li><a href="/privacy-policy/">プライバシーポリシー・情報セキュリティ基本方針</a></li>
        <li><a href="/contact/">お問い合わせ・資料請求</a></li>
      </ul>
    </section>
  </div>
</main>

<!-- 構造化データ（Organization） -->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "株式会社KEEP ON",
    "url": "https://example.com/about/",
    "logo": "https://example.com/assets/img/logo-ogp.png",
    "description": "株式会社KEEP ONの会社概要、設立年、代表者プロフィール、ISO27001取得やAWSパートナー認定などの資格・認証をご紹介。",
    "sameAs": []
  }
</script>

<?php include __DIR__ . "/../includes/footer.php"; ?>