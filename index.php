<?php
$page_title = "IT支援の外部チーム｜株式会社KEEP ON";
$page_description = "AWS設計、社内IT代行、ITアウトソーシング、セキュリティ対策、ISO認証サポートまで。中小企業向けのIT支援サービスを提供しています。";
$page_css = ["top.css"];
include __DIR__ . "/includes/header.php";

// 構造化データ: Organization
echo '<script type="application/ld+json">' . json_encode([
  "@context" => "https://schema.org",
  "@type" => "Organization",
  "name" => "株式会社KEEP ON",
  "url" => ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/',
  "logo" => ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/assets/img/logo-ogp.png',
  "description" => "AWS設計、社内IT代行、ITアウトソーシング、セキュリティ対策、ISO認証サポートまで。中小企業向けのIT支援サービスを提供しています。",
  "sameAs" => [
    "https://www.facebook.com/keep-on",
    "https://www.linkedin.com/company/keep-on"
  ]
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
?>

<main id="main">
  <!-- ファーストビュー -->
  <section class="hero" aria-labelledby="hero-heading">
    <h1 id="hero-heading">まるで社内IT担当のように、一社一社と向き合う。</h1>
    <p>クラウド構築、セキュリティ運用、ヘルプデスクまで。</p>
    <p class="hero__cta">
      <a class="btn-primary" href="/contact/">無料相談・お問い合わせ</a>
    </p>
  </section>

  <!-- 選ばれる理由 -->
  <section class="reasons" id="reasons" aria-labelledby="reasons-heading">
    <h2 id="reasons-heading">選ばれる理由</h2>
    <ul class="card-list">
      <li>わかりやすく、やさしい</li>
      <li>専門IT部門担当者も安心</li>
      <li>AWSから社内ITまで幅広く対応</li>
      <li>IT担当のように長期サポート</li>
      <li>気軽に相談でき、すぐ動ける体制</li>
    </ul>
  </section>

  <!-- サービス -->
  <section class="services" id="services" aria-labelledby="services-heading">
    <h2 id="services-heading">サービス紹介</h2>
    <ul class="card-list">
      <li><a href="/services/#infra">インフラ設計・構築・保守</a></li>
      <li><a href="/services/#helpdesk">ITヘルプデスク・社内IT代行</a></li>
      <li><a href="/services/#security">情報セキュリティコンサルティング</a></li>
      <li><a href="/services/#webdev">Web制作・システム開発</a></li>
      <li><a href="/services/#director">外部ディレクター提供</a></li>
    </ul>
  </section>

  <!-- 導入事例 -->
  <section class="cases" id="cases" aria-labelledby="cases-heading">
    <h2 id="cases-heading">導入事例</h2>
    <p>実際の支援事例をご紹介します。</p>
    <p><a class="btn-link" href="/cases/">もっと見る</a></p>
  </section>

  <!-- ご相談の流れ -->
  <section class="flow" id="flow" aria-labelledby="flow-heading">
    <h2 id="flow-heading">よくあるご相談＆導入の流れ</h2>
    <p><a class="btn-link" href="/flow/">詳しくはこちら</a></p>
  </section>

  <!-- 資格情報 -->
  <section class="certs" id="certs" aria-labelledby="certs-heading">
    <h2 id="certs-heading">資格情報</h2>
    <ul>
      <li>ISO27001認証</li>
      <li>AWSパートナー</li>
    </ul>
    <p><a class="btn-link" href="/about/">会社概要へ</a></p>
  </section>
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>