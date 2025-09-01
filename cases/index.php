<?php
// --- ページ固有メタ（仕様準拠） ---
$page_title = "IT支援の導入事例｜KEEP ON"; // 17文字
$page_description = "中小企業〜大手企業のAWS導入、ITヘルプデスク運用、ISO / セキュリティ支援など、実際の支援事例をご紹介します。"; // 85文字
$og_title = "導入事例から見る実績｜株式会社KEEP ON";
$og_description = "AWS設計・セキュリティ対応・社内IT代行など現場での成果を事例でご紹介。";
$breadcrumb_title = "導入事例";

include __DIR__ . "/../includes/header.php";
?>

<main>
  <div class="l-container">
    <?php include __DIR__ . "/../includes/breadcrumb.php"; ?>

    <header class="page-head">
      <h1>導入事例</h1>
      <p class="page-lead">中小企業から大手企業まで、AWS設計・ヘルプデスク・セキュリティ運用などの事例をご紹介します。</p>
    </header>

    <!-- 事例リスト -->
    <section class="case-list">
      <h2>事例一覧</h2>
      <ul>
        <li><a href="#case1">事例①：中小製造業のクラウド基盤構築</a></li>
        <li><a href="#case2">事例②：情報セキュリティ体制構築支援</a></li>
        <li><a href="#case3">事例③：ITヘルプデスクのアウトソース</a></li>
      </ul>
    </section>

    <!-- 個別事例 -->
    <article id="case1" class="case-item">
      <h2>事例①：中小製造業のクラウド基盤構築</h2>
      <p class="summary">老朽化したオンプレ環境からAWS基盤へ移行。コスト削減と可用性向上を実現。</p>
      <dl>
        <dt>課題</dt>
        <dd>既存サーバの老朽化と災害リスク。クラウド移行に不安があった。</dd>
        <dt>対応</dt>
        <dd>要件定義 → 設計 → 移行 → 運用設計を実施。監視・バックアップ体制を構築。</dd>
        <dt>成果</dt>
        <dd>月額コスト20%削減。障害時の復旧時間短縮。セキュリティ基盤強化。</dd>
      </dl>
    </article>

    <article id="case2" class="case-item">
      <h2>事例②：情報セキュリティ体制構築支援</h2>
      <p class="summary">ISMS取得に向けたセキュリティポリシー策定、ルール整備、教育支援。</p>
      <dl>
        <dt>課題</dt>
        <dd>顧客からのセキュリティ体制要求。ISMS取得が必要。</dd>
        <dt>対応</dt>
        <dd>規程類の整備、リスクアセスメント、社内教育、監査対応支援。</dd>
        <dt>成果</dt>
        <dd>ISO27001認証を取得。顧客からの信頼度向上。</dd>
      </dl>
    </article>

    <article id="case3" class="case-item">
      <h2>事例③：ITヘルプデスクのアウトソース</h2>
      <p class="summary">社内IT担当が不在の企業向けに、日常のITサポートを外部委託。</p>
      <dl>
        <dt>課題</dt>
        <dd>日常的なPCトラブル・アカウント運用に対応できる人材がいない。</dd>
        <dt>対応</dt>
        <dd>ヘルプデスク業務の代行。チケット制・リモート対応・現地対応を柔軟に実施。</dd>
        <dt>成果</dt>
        <dd>社内の問い合わせ対応時間を削減。従業員満足度が向上。</dd>
      </dl>
    </article>
  </div>
</main>

<!-- 構造化データ（CollectionPage + 各事例をCreativeWork扱い） -->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "CollectionPage",
    "name": "IT支援の導入事例｜KEEP ON",
    "description": "中小企業〜大手企業のAWS導入、ITヘルプデスク運用、ISO / セキュリティ支援など、実際の支援事例をご紹介します。",
    "hasPart": [{
        "@type": "CreativeWork",
        "name": "中小製造業のクラウド基盤構築",
        "about": "AWS設計・クラウド移行"
      },
      {
        "@type": "CreativeWork",
        "name": "情報セキュリティ体制構築支援",
        "about": "ISMS・ISO27001認証支援"
      },
      {
        "@type": "CreativeWork",
        "name": "ITヘルプデスクのアウトソース",
        "about": "社内IT代行・日常サポート"
      }
    ]
  }
</script>

<?php include __DIR__ . "/../includes/footer.php"; ?>