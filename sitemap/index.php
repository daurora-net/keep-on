<?php
// --- ページ固有メタ（仕様準拠） ---
$page_title = "サイトマップ｜株式会社KEEP ON"; // 18
$page_description = "株式会社KEEP ONの公式サイト全体のページ構成をご案内します。会社概要、サービス紹介、導入事例、お問い合わせなど、目的のページをすぐに見つけられます。"; // 77
$og_title = "サイトマップ｜株式会社KEEP ON";
$og_description = "株式会社KEEP ONの公式サイト全体のページ構成をご案内します。会社概要、サービス紹介、導入事例、お問い合わせなど、目的のページをすぐに見つけられます。";
$breadcrumb_title = "サイトマップ";

include __DIR__ . "/../includes/header.php";

// 構造化データ: WebPage
$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
echo '<script type="application/ld+json">' . json_encode([
  "@context" => "https://schema.org",
  "@type" => "WebPage",
  "name" => "サイトマップ｜株式会社KEEP ON",
  "description" => "株式会社KEEP ONの公式サイト全体のページ構成をご案内します。会社概要、サービス紹介、導入事例、お問い合わせなど、目的のページをすぐに見つけられます。",
  "url" => $base_url . '/sitemap/'
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
?>

<main>
  <div class="l-container">
    <?php include __DIR__ . "/../includes/breadcrumb.php"; ?>

    <header class="page-head">
      <h1>サイトマップ</h1>
      <p class="page-lead">サイト内の主要ページ一覧です。目的のコンテンツへすぐに移動できます。</p>
    </header>

    <section class="map-group">
      <h2>コーポレート情報</h2>
      <ul>
        <li><a href="/">TOPページ</a></li>
        <li><a href="/about/">会社概要・資格情報</a></li>
        <li><a href="/privacy-policy/">プライバシーポリシー・情報セキュリティ基本方針</a></li>
      </ul>
    </section>

    <section class="map-group">
      <h2>サービス</h2>
      <ul>
        <li><a href="/services/">サービス紹介（一覧）</a></li>
        <li><a href="/services/#infra">AWS設計</a></li>
        <li><a href="/services/#helpdesk">ITヘルプデスク</a></li>
        <li><a href="/services/#security">セキュリティ支援</a></li>
        <li><a href="/services/#ops">社内IT代行</a></li>
        <li><a href="/services/#cloud">クラウド構築</a></li>
      </ul>
    </section>

    <section class="map-group">
      <h2>導入支援</h2>
      <ul>
        <li><a href="/cases/">導入事例</a></li>
        <li><a href="/flow/">よくあるご相談＆導入の流れ</a></li>
      </ul>
    </section>

    <section class="map-group">
      <h2>お問い合わせ</h2>
      <ul>
        <li><a href="/contact/">お問い合わせ・資料請求</a></li>
        <li><a href="/contact/thanks/">お問い合わせ完了（サンクス）</a></li>
      </ul>
    </section>
  </div>
</main>

<!-- 構造化データ（WebPage） -->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "サイトマップ｜株式会社KEEP ON",
    "description": "株式会社KEEP ONの公式サイト全体のページ構成をご案内します。会社概要、サービス紹介、導入事例、お問い合わせなど、目的のページをすぐに見つけられます。",
    "url": "https://example.com/sitemap"
  }
</script>

<?php include __DIR__ . "/../includes/footer.php"; ?>