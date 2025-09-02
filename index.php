<?php
$page_title = "IT支援の外部チーム｜株式会社KEEP ON";
$page_description = "AWS設計、社内IT代行、ITアウトソーシング、セキュリティ対策、ISO認証サポートまで。中小企業向けのIT支援サービスを提供しています。";
$og_title = "AWS設計・IT支援をワンストップで｜株式会社KEEP ON";
$og_description = "中小〜大手企業のIT課題を“社内IT担当”視点で支援。AWS設計、社内ヘルプデスク、セキュリティ対応などまるごと対応。";
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
  <!-- Hero -->
  <section class="top-hero" aria-labelledby="hero-heading">
    <div class="top-hero__inner">
      <div class="top-hero__text">
        <h1 id="hero-heading">まるで社内IT担当のように、一社一社と向き合う。</h1>
        <p class="top-hero__catch">ITの“よき相談役”として、ずっとそばに。</p>
        <p class="top-hero__sub">AWS設計、社内IT代行、セキュリティ運用、ヘルプデスクまで。</p>
        <div class="top-hero__cta">
          <a class="btn-primary" href="/services/">サービス一覧を見る</a>
          <a class="btn-secondary" href="/contact/">無料で相談する</a>
        </div>
      </div>
      <div class="top-hero__img">
        <img src="/assets/img/top-hero-illust.png" alt="IT支援のイメージイラスト" width="420" height="340" decoding="async" loading="eager">
      </div>
    </div>
    <img src="/assets/img/section-wave-top.svg" alt="" role="presentation" class="top-hero__wave" width="1440" height="80" loading="lazy">
  </section>

  <!-- 選ばれる理由 -->
  <section class="top-benefits" aria-labelledby="benefits-heading">
    <h2 id="benefits-heading">私たちが選ばれる理由</h2>
    <div class="top-benefits__grid">
      <article tabindex="0" class="top-benefit-card"><span aria-hidden="true" class="top-benefit-icon">💡</span><h3>わかりやすく、やさしい</h3></article>
      <article tabindex="0" class="top-benefit-card"><span aria-hidden="true" class="top-benefit-icon">🛡️</span><h3>専門IT部門担当者も安心</h3></article>
      <article tabindex="0" class="top-benefit-card"><span aria-hidden="true" class="top-benefit-icon">🌐</span><h3>AWSから社内ITまで幅広く対応</h3></article>
      <article tabindex="0" class="top-benefit-card"><span aria-hidden="true" class="top-benefit-icon">🤝</span><h3>IT担当のように長期サポート</h3></article>
      <article tabindex="0" class="top-benefit-card"><span aria-hidden="true" class="top-benefit-icon">🚀</span><h3>気軽に相談でき、すぐ動ける体制</h3></article>
    </div>
    <img src="/assets/img/section-wave-bottom.svg" alt="" role="presentation" class="top-benefits__wave" width="1440" height="80" loading="lazy">
  </section>

  <!-- サービス紹介 -->
  <section class="top-services" aria-labelledby="services-heading">
    <h2 id="services-heading">サービス紹介</h2>
    <div class="top-services__grid">
      <a href="/services/#infra" class="top-service-card"><span class="top-service-icon" aria-hidden="true">🖥️</span><span>インフラ設計・構築・保守</span></a>
      <a href="/services/#helpdesk" class="top-service-card"><span class="top-service-icon" aria-hidden="true">📞</span><span>ITヘルプデスク・社内IT代行</span></a>
      <a href="/services/#security" class="top-service-card"><span class="top-service-icon" aria-hidden="true">🔒</span><span>情報セキュリティコンサルティング</span></a>
      <a href="/services/#webdev" class="top-service-card"><span class="top-service-icon" aria-hidden="true">💻</span><span>Web制作・システム開発</span></a>
      <a href="/services/#director" class="top-service-card"><span class="top-service-icon" aria-hidden="true">🎯</span><span>外部ディレクター提供</span></a>
    </div>
  </section>

  <!-- 導入事例 -->
  <section class="top-cases" aria-labelledby="cases-heading">
    <h2 id="cases-heading">導入事例</h2>
    <div class="top-cases__grid">
      <article class="top-case-card"><img src="/assets/img/case1.png" alt="導入事例1のイメージ" width="320" height="180" loading="lazy"><h3>中小製造業のクラウド基盤構築</h3><p>老朽化したオンプレ環境からAWS基盤へ移行。コスト削減と可用性向上を実現。</p></article>
      <article class="top-case-card"><img src="/assets/img/case2.png" alt="導入事例2のイメージ" width="320" height="180" loading="lazy"><h3>情報セキュリティ体制構築支援</h3><p>要件定義から運用設計まで、セキュリティ体制をゼロから構築。</p></article>
      <article class="top-case-card"><img src="/assets/img/case3.png" alt="導入事例3のイメージ" width="320" height="180" loading="lazy"><h3>ITヘルプデスクのアウトソース</h3><p>社内IT業務の負担軽減と迅速な対応体制を実現。</p></article>
    </div>
    <div class="top-cases__cta"><a class="btn-primary" href="/cases/">もっと見る</a></div>
  </section>

  <!-- よくあるご相談・導入の流れ -->
  <section class="top-flow" aria-labelledby="flow-heading">
    <h2 id="flow-heading">よくあるご相談・導入の流れ</h2>
    <div class="top-flow__inner">
      <ul class="top-flow__faq">
        <li>IT担当が不在で何から始めればいいか分からない</li>
        <li>IT部門の負担が大きくて不安（ヘルプデスク／社内IT代行）</li>
        <li>セキュリティ対応やISMSの整備をどこから始めるべきか分からない</li>
        <li>クラウド設計・運用に不安がある</li>
        <li>ITトラブルが多く、相談できる相手がほしい</li>
      </ul>
      <div class="top-flow__img">
        <img src="/assets/img/top-hero-illust.png" alt="IT相談のイメージイラスト" width="320" height="240" decoding="async" loading="lazy">
      </div>
    </div>
    <div class="top-flow__cta"><a class="btn-secondary" href="/flow/">詳しくはこちら</a></div>
  </section>

  <!-- 資格情報 -->
  <section class="top-certs" aria-labelledby="certs-heading">
    <h2 id="certs-heading">資格情報</h2>
    <div class="top-certs__badges">
      <img src="/assets/img/top-badge-iso.png" alt="ISO27001認証バッジ" width="100" height="100" loading="lazy">
      <img src="/assets/img/top-badge-aws.png" alt="AWSパートナーバッジ" width="100" height="100" loading="lazy">
      <img src="/assets/img/top-badge-security.png" alt="セキュリティ自己宣言バッジ" width="100" height="100" loading="lazy">
    </div>
  </section>

  <!-- お問い合わせCTA -->
  <section class="top-cta" aria-labelledby="cta-heading">
    <h2 id="cta-heading">まずは無料相談から</h2>
    <p class="top-cta__lead">ITのお悩みやご相談は、どんな些細なことでもお気軽にご連絡ください。</p>
    <a class="btn-primary" href="/contact/">お問い合わせ</a>
  </section>
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>