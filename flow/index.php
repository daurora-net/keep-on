<?php
// --- ページ固有メタ（仕様準拠） ---
$page_title = "IT支援ご相談の流れ｜株式会社KEEP ON"; // 19
$page_description = "ご相談から支援開始までの流れをわかりやすく解説。よくあるご質問も併せて、導入前の不安を解消します。"; // 78
$og_title = "ご相談の流れ｜お問い合わせ〜導入まで｜株式会社KEEP ON";
$og_description = "ご相談から支援開始までのステップをわかりやすく。Q&Aで疑問もスッキリ。";
$breadcrumb_title = "ご相談の流れ・よくあるご質問";

include __DIR__ . "/../includes/header.php";
?>

<main>
  <div class="l-container">
    <?php include __DIR__ . "/../includes/breadcrumb.php"; ?>

    <header class="page-head">
      <h1>ご相談の流れ・よくあるご質問</h1>
      <p class="page-lead">
        ITに関するお困りごとは企業ごとに様々です。KEEP ONでは、初めてIT支援をご利用されるお客様にも安心していただけるよう、
        ご相談内容の傾向と導入までの流れをご紹介します。
      </p>
    </header>

    <!-- よくあるご相談（仕様の課題系キーワードに基づく） -->
    <section class="faq-topics" aria-labelledby="topics-title">
      <h2 id="topics-title">よくあるご相談</h2>
      <ul>
        <li>IT担当が不在で何から始めればいいか分からない</li>
        <li>IT部門の負担が大きくて不安（ヘルプデスク／社内IT代行）</li>
        <li>セキュリティ対応やISMSの整備をどこから始めるべきか分からない</li>
        <li>AWSクラウド構築・移行の設計に不安がある</li>
        <li>Webサイトや業務システムを立ち上げたいが進め方が分からない</li>
        <li>オフィス移転に伴うネットワーク・機器の手配/設置/旧環境撤去まで一括で任せたい</li>
      </ul>
      <p class="cta"><a href="/contact/">まずは無料相談（お問い合わせ）</a></p>
    </section>

    <!-- 導入の流れ（ステップ型） -->
    <section class="steps" aria-labelledby="steps-title">
      <h2 id="steps-title">導入の流れ</h2>

      <ol class="step-list">
        <li>
          <h3>1. お問い合わせ</h3>
          <p>課題やご要望をヒアリングします（オンライン/訪問どちらも可）。</p>
        </li>
        <li>
          <h3>2. 現状分析・ご提案</h3>
          <p>現状のIT環境を診断し、必要なサービスとお見積りを提示します。</p>
        </li>
        <li>
          <h3>3. ご契約・準備</h3>
          <p>スケジュールと体制を確定し、導入準備を進めます。</p>
        </li>
        <li>
          <h3>4. サービス開始</h3>
          <p>専門スタッフが現場に合わせて支援を開始します。</p>
        </li>
        <li>
          <h3>5. 運用・改善</h3>
          <p>継続的なフォローと改善提案で効果を最大化します。</p>
        </li>
      </ol>
    </section>

    <!-- よくある質問（FAQ本体） -->
    <section class="faq" aria-labelledby="faq-title">
      <h2 id="faq-title">よくあるご質問（FAQ）</h2>

      <div class="qa">
        <h3>Q. 小さな相談でも対応してもらえますか？</h3>
        <p>A. もちろん可能です。PC設定やメールの不具合、サーバー選定など小規模なご相談から、AWS設計やセキュリティ体制構築まで対応します。</p>
      </div>

      <div class="qa">
        <h3>Q. 見積だけ・提案依頼だけでも可能ですか？</h3>
        <p>A. 可能です。現状やご要望をヒアリングのうえ、最適な提案書とお見積もりを無料でご用意します。</p>
      </div>

      <div class="qa">
        <h3>Q. スポット対応と継続契約はどう違いますか？</h3>
        <p>A. スポットは単発の課題解決に向き、継続は日常運用や改善まで長期で並走します。迷う場合はご相談ください。</p>
      </div>

      <div class="qa">
        <h3>Q. 既存ベンダーや他社との併用は可能ですか？</h3>
        <p>A. 可能です。セカンドオピニオンとしてのご相談や、既存ベンダーとの役割分担も柔軟に設定できます。</p>
      </div>

      <div class="qa">
        <h3>Q. 緊急対応やリモート対応はできますか？</h3>
        <p>A. 内容や契約形態により最短即日での対応が可能です。リモート中心でのサポートや現地対応も行っています。</p>
      </div>
    </section>

    <section class="page-cta">
      <h2>まずはお気軽にご相談ください</h2>
      <p>お客様の立場に寄り添い、最適な解決方法をご提案します。</p>
      <p class="cta"><a href="/contact/">お問い合わせ・資料請求</a></p>
    </section>
  </div>
</main>

<!-- 構造化データ（FAQPage） -->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [{
        "@type": "Question",
        "name": "小さな相談でも対応してもらえますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "可能です。小規模な設定やトラブル対応から、AWS設計・セキュリティ体制構築まで対応します。"
        }
      },
      {
        "@type": "Question",
        "name": "見積だけ・提案依頼だけでも可能ですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "可能です。ヒアリングの上で最適な提案書とお見積もりを無料でご用意します。"
        }
      },
      {
        "@type": "Question",
        "name": "スポット対応と継続契約はどう違いますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "スポットは単発の課題解決、継続は日常運用や改善を長期で並走します。"
        }
      },
      {
        "@type": "Question",
        "name": "既存ベンダーや他社との併用は可能ですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "可能です。セカンドオピニオンや役割分担など柔軟に設定できます。"
        }
      },
      {
        "@type": "Question",
        "name": "緊急対応やリモート対応はできますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "内容や契約形態により最短即日での対応が可能です。リモートや現地対応も行っています。"
        }
      }
    ]
  }
</script>

<?php include __DIR__ . "/../includes/footer.php"; ?>