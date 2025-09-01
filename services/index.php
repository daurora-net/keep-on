<?php
// --- ページ固有メタ（仕様準拠） ---
$page_title = "AWS設計・IT支援サービス一覧｜KEEP ON"; // タイトル（24）
$page_description = "AWS設計・ITヘルプデスク・セキュリティ対策・社内IT代行まで。御社のIT課題に柔軟に対応する株式会社KEEP ONの支援メニューをご紹介。"; // ディスクリプション（95）
$og_title = "AWS / ITヘルプデスク / セキュリティ支援｜KEEP ONサービス一覧";
$og_description = "クラウド・セキュリティ・社内IT代行を軸としたトータルIT支援サービスをご案内。";
$breadcrumb_title = "サービス紹介";

include __DIR__ . "/../includes/header.php";
?>

<main>
  <div class="l-container">
    <?php include __DIR__ . "/../includes/breadcrumb.php"; ?>

    <header class="page-head">
      <h1>サービス一覧</h1>
      <p class="page-lead">AWS設計・ITヘルプデスク・セキュリティ支援・社内IT代行・クラウド構築を中心に、御社のIT課題を幅広く支援します。</p>
    </header>

    <nav class="service-index" aria-label="サービス内メニュー">
      <ul>
        <li><a href="#infra">AWS設計</a></li>
        <li><a href="#helpdesk">ITヘルプデスク</a></li>
        <li><a href="#security">セキュリティ支援</a></li>
        <li><a href="#ops">社内IT代行</a></li>
        <li><a href="#cloud">クラウド構築</a></li>
      </ul>
    </nav>

    <!-- 各サービス（骨組み） -->
    <section id="infra" class="svc-block" aria-labelledby="infra-title">
      <h2 id="infra-title">AWS設計</h2>
      <p>要件整理〜設計・構築・運用まで。セキュリティやコスト最適化を考慮したクラウド基盤を提供します。</p>
      <ul class="svc-points">
        <li>VPC / サブネット設計、IAM、監視設計</li>
        <li>冗長化・バックアップ方針の策定</li>
        <li>運用設計（監視・ログ・アラート）</li>
      </ul>
      <p class="cta"><a href="/contact/">このサービスについて問い合わせる</a></p>
    </section>

    <section id="helpdesk" class="svc-block" aria-labelledby="helpdesk-title">
      <h2 id="helpdesk-title">ITヘルプデスク</h2>
      <p>日々のIT問い合わせ対応、キッティング、アカウント運用など、社内のIT運用を支援します。</p>
      <ul class="svc-points">
        <li>問い合わせ一次受け／ナレッジ化</li>
        <li>PCキッティング・アカウント発行</li>
        <li>SaaS運用（権限・ライセンス管理）</li>
      </ul>
      <p class="cta"><a href="/contact/">このサービスについて問い合わせる</a></p>
    </section>

    <section id="security" class="svc-block" aria-labelledby="security-title">
      <h2 id="security-title">セキュリティ支援</h2>
      <p>脆弱性対応、ログ監視、各種ルール整備。ISO27001準拠の体制づくりもご相談ください。</p>
      <ul class="svc-points">
        <li>ルール・手順整備／ログ可視化</li>
        <li>脆弱性対応・パッチ運用の設計</li>
        <li>インシデント対応計画の策定</li>
      </ul>
      <p class="cta"><a href="/contact/">このサービスについて問い合わせる</a></p>
    </section>

    <section id="ops" class="svc-block" aria-labelledby="ops-title">
      <h2 id="ops-title">社内IT代行</h2>
      <p>まるで「社内IT担当」のように、継続的な運用・改善をお任せいただけます。</p>
      <ul class="svc-points">
        <li>資産管理・アカウントライフサイクル</li>
        <li>運用の標準化・改善提案</li>
        <li>ベンダー調整・選定支援</li>
      </ul>
      <p class="cta"><a href="/contact/">このサービスについて問い合わせる</a></p>
    </section>

    <section id="cloud" class="svc-block" aria-labelledby="cloud-title">
      <h2 id="cloud-title">クラウド構築</h2>
      <p>AWSを中心に、要件に合わせて安全で拡張性の高いクラウド環境を設計・構築します。</p>
      <ul class="svc-points">
        <li>要件定義／設計／実装／テスト</li>
        <li>セキュリティ・可用性設計</li>
        <li>コスト最適化設計</li>
      </ul>
      <p class="cta"><a href="/contact/">このサービスについて問い合わせる</a></p>
    </section>

    <!-- よくある課題（仕様の「課題系キーワード」を反映した導線） -->
    <aside class="svc-aside">
      <h2>こうした課題はありませんか？</h2>
      <ul>
        <li>IT部門の負担が大きい</li>
        <li>IT担当が不在</li>
        <li>セキュリティ対応に不安</li>
        <li>ITトラブルが多い</li>
      </ul>
      <p class="cta"><a href="/contact/">無料相談はこちら</a></p>
    </aside>
  </div>
</main>

<!-- 構造化データ（Service / ItemList） -->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ItemList",
    "itemListElement": [{
        "@type": "Service",
        "name": "AWS設計",
        "provider": {
          "@type": "Organization",
          "name": "株式会社KEEP ON"
        },
        "areaServed": "JP"
      },
      {
        "@type": "Service",
        "name": "ITヘルプデスク",
        "provider": {
          "@type": "Organization",
          "name": "株式会社KEEP ON"
        },
        "areaServed": "JP"
      },
      {
        "@type": "Service",
        "name": "セキュリティ支援",
        "provider": {
          "@type": "Organization",
          "name": "株式会社KEEP ON"
        },
        "areaServed": "JP"
      },
      {
        "@type": "Service",
        "name": "社内IT代行",
        "provider": {
          "@type": "Organization",
          "name": "株式会社KEEP ON"
        },
        "areaServed": "JP"
      },
      {
        "@type": "Service",
        "name": "クラウド構築",
        "provider": {
          "@type": "Organization",
          "name": "株式会社KEEP ON"
        },
        "areaServed": "JP"
      }
    ]
  }
</script>

<?php include __DIR__ . "/../includes/footer.php"; ?>