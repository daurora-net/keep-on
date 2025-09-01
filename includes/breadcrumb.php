<?php
// 各ページで $breadcrumb_title を設定してから include する想定
if (!isset($breadcrumb_title)) {
  $breadcrumb_title = "";
}
?>
<nav class="breadcrumb" aria-label="breadcrumb">
  <ol>
    <li><a href="/">HOME</a></li>
    <li aria-current="page"><?php echo htmlspecialchars($breadcrumb_title, ENT_QUOTES, 'UTF-8'); ?></li>
  </ol>
</nav>