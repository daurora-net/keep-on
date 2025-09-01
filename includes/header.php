<?php
// 各ページで設定する変数例
// $page_title, $page_description, $og_title, $og_description など

// --- URLからページスラッグを生成（例: "/" -> "index", "/services/" -> "services", "/contact/thanks/" -> "contact-thanks") ---
$page_path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$page_slug = $page_path === '' ? 'index' : str_replace('/', '-', $page_path);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TSZJ3PRF');
  </script>
  <!-- End Google Tag Manager -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $page_title ?? "株式会社KEEP ON"; ?></title>
  <meta name="description" content="<?php echo $page_description ?? "株式会社KEEP ON公式サイト"; ?>">

  <meta property="og:title" content="<?php echo $og_title ?? $page_title; ?>">
  <meta property="og:description" content="<?php echo $og_description ?? $page_description; ?>">
  <meta property="og:image" content="/assets/img/logo-ogp.png">
  <meta property="og:type" content="website">

  <!-- 共通CSS -->
  <link rel="stylesheet" href="/assets/css/common.css">
  <!-- ページ専用CSS -->
  <?php
  if ($page_slug === 'index') {
    // TOPページのみ top.css を読み込む
    $auto_css = "/assets/css/top.css";
  } else {
    // それ以外は URLスラッグに対応するCSS
    $auto_css = "/assets/css/{$page_slug}.css";
  }
  $css_abs = $_SERVER['DOCUMENT_ROOT'] . $auto_css;
  if (is_file($css_abs)) {
    echo '<link rel="stylesheet" href="' . $auto_css . '">' . PHP_EOL;
  }
  ?>
</head>

<body class="<?php echo htmlspecialchars($page_slug, ENT_QUOTES, 'UTF-8'); ?>">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSZJ3PRF"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header>
    <h1>まるで社内IT担当のように、一社一社と向き合う。</h1>
    <nav>
      <ul>
        <li><a href="/about/">会社概要・資格情報</a></li>
        <li><a href="/services/">サービス紹介</a></li>
        <li><a href="/cases/">導入事例</a></li>
        <li><a href="/flow/">ご相談の流れ</a></li>
        <li><a href="/contact/">お問い合わせ</a></li>
      </ul>
    </nav>
  </header>