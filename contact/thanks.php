<?php
// --- サンクスページ用メタ ---
$page_title = "お問い合わせありがとうございます｜株式会社KEEP ON";
$page_description = "お問い合わせを受け付けました。内容を確認のうえ、担当者より折り返しご連絡いたします。";
$og_title = "お問い合わせありがとうございます｜株式会社KEEP ON";
$og_description = "お問い合わせ内容を確認後、担当者よりご連絡いたします。しばらくお待ちください。";
$breadcrumb_title = "お問い合わせ完了";

include __DIR__ . "/../includes/header.php";
?>
<main>
  <div class="l-container">
    <?php include __DIR__ . "/../includes/breadcrumb.php"; ?>
    <header class="page-head">
      <h1>お問い合わせありがとうございます</h1>
      <p class="page-lead">お問い合わせ内容を受け付けました。<br>担当者より折り返しご連絡いたしますので、しばらくお待ちください。</p>
    </header>
    <section>
      <p>この度はお問い合わせいただき、誠にありがとうございます。<br>
        内容を確認のうえ、担当者よりご連絡いたします。<br>
        <a href="/">トップページへ戻る</a>
      </p>
    </section>
  </div>
</main>
<?php
// 構造化データ: WebPage
$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
echo '<script type="application/ld+json">' . json_encode([
  "@context" => "https://schema.org",
  "@type" => "WebPage",
  "name" => $page_title,
  "description" => $page_description,
  "url" => $base_url . '/contact/thanks'
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
?>
