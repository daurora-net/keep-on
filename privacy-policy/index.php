<?php
// --- ページ固有メタ（仕様準拠） ---
$page_title = "プライバシーポリシー・情報セキュリティ基本方針｜株式会社KEEP ON"; // 38
$page_description = "株式会社KEEP ONの個人情報保護方針および情報セキュリティに関する基本方針についてご案内します。"; // 52
$og_title = "プライバシーポリシー・情報セキュリティ基本方針｜株式会社KEEP ON";
$og_description = "株式会社KEEP ONにおける個人情報の取り扱い方針および情報セキュリティ基本方針を掲載しています。";
$breadcrumb_title = "プライバシーポリシー・情報セキュリティ基本方針";

include __DIR__ . "/../includes/header.php";

// 構造化データ: WebPage
$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
echo '<script type="application/ld+json">' . json_encode([
  "@context" => "https://schema.org",
  "@type" => "WebPage",
  "name" => "プライバシーポリシー・情報セキュリティ基本方針｜株式会社KEEP ON",
  "description" => "株式会社KEEP ONの個人情報保護方針および情報セキュリティに関する基本方針についてご案内します。",
  "url" => $base_url . '/privacy-policy/'
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
?>

<main>
  <div class="l-container">
    <?php include __DIR__ . "/../includes/breadcrumb.php"; ?>

    <header class="page-head">
      <h1>プライバシーポリシー・情報セキュリティ基本方針</h1>
      <p class="page-lead">株式会社KEEP ONの個人情報保護方針および情報セキュリティ基本方針を掲載しています。</p>
    </header>

    <!-- メニュー -->
    <nav class="section-nav" aria-label="ページ内メニュー">
      <ul>
        <li><a href="#privacy">プライバシーポリシー</a></li>
        <li><a href="#security">情報セキュリティ基本方針</a></li>
      </ul>
    </nav>

    <!-- プライバシーポリシー -->
    <section id="privacy" class="policy-section">
      <h2>プライバシーポリシー</h2>

      <p>株式会社KEEP ON（以下「当社」）は、お客様からお預かりする個人情報を適切に保護し、安全に取り扱うことを重要な責務と考えます。当社は、個人情報保護に関する法令・ガイドラインおよび内部規程を遵守し、個人情報の保護に努めます。</p>

      <h3>1. 基本方針</h3>
      <p>個人情報の適正な取得・利用・管理・廃棄を行い、漏えい等を防止します。</p>

      <h3>2. 個人情報の定義</h3>
      <p>氏名、住所、電話番号、メールアドレス、アクセス記録等、個人を特定できる情報をいいます。</p>

      <h3>3. 個人情報の利用目的</h3>
      <ul>
        <li>お問い合わせ・ご相談・ご依頼への対応</li>
        <li>サービスの提案や見積、契約のため</li>
        <li>セミナー・アンケート等のご案内</li>
        <li>サービス提供・運用保守・請求等のため</li>
        <li>セキュリティ向上のための監査・記録</li>
      </ul>

      <h3>4. 取得方法</h3>
      <p>当社Webサイトのフォーム、メール、名刺交換、契約書、業務委託に伴う提供等により取得します。</p>

      <h3>5. 第三者提供</h3>
      <p>法令に基づく場合等を除き、本人の同意なく第三者へ提供しません。</p>

      <h3>6. 委託</h3>
      <p>業務委託先へ取り扱いを委託する場合は、適切な監督を行います。</p>

      <h3>7. 安全管理</h3>
      <p>不正アクセス、紛失、破壊、改ざん、漏えい等を防止するため、ISMS（ISO27001）に準拠した管理体制を整備します。</p>

      <h3>8. 開示・訂正・利用停止等</h3>
      <p>ご本人からの請求に対し、法令に従い合理的な範囲で対応します。</p>

      <h3>9. クッキー（Cookie）等の利用</h3>
      <p>利用状況の把握や利便性向上のためにCookie等を使用する場合があります。個人が特定される情報を取得するものではありません。</p>

      <h3>10. 本ポリシーの改定</h3>
      <p>必要に応じて内容を改定する場合があります。重要な変更がある場合は当社Webサイト等で告知します。</p>

      <h3>11. お問い合わせ窓口</h3>
      <address>
        株式会社KEEP ON<br>
        個人情報保護お問い合わせ先：privacy@keep-on.jp（仮）<br>
        電話番号：042-699-1836（仮）
      </address>
    </section>

    <!-- 情報セキュリティ基本方針 -->
    <section id="security" class="policy-section">
      <h2>情報セキュリティ基本方針</h2>
      <p>当社は、情報資産を保護し、機密性・完全性・可用性を確保するため、以下の基本方針に基づき情報セキュリティマネジメントを推進します。</p>
      <ul>
        <li>法令・規範・契約上の要求事項の遵守</li>
        <li>役員および従業者への教育と意識向上</li>
        <li>リスクアセスメントに基づく対策の継続的改善</li>
        <li>インシデント発生時の迅速な対応と再発防止</li>
        <li>物理・技術・組織的安全管理措置の実施</li>
      </ul>
      <p class="note">※ 詳細な規程や自己宣言の全文は、準備が整い次第、本ページまたは別ページに掲載します。</p>
    </section>

    <section class="page-cta">
      <h2>個人情報の取り扱いに関するご相談</h2>
      <p class="cta"><a href="/contact/">お問い合わせフォームへ</a></p>
    </section>
  </div>
</main>

<!-- 構造化データ（WebPage） -->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "プライバシーポリシー・情報セキュリティ基本方針｜株式会社KEEP ON",
    "description": "株式会社KEEP ONの個人情報保護方針および情報セキュリティに関する基本方針についてご案内します。",
    "url": "https://example.com/privacy-policy"
  }
</script>

<?php include __DIR__ . "/../includes/footer.php"; ?>