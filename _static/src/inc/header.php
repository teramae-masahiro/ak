<?php require_once dirname(__FILE__) . '/../data/site.php'; ?>
<?php $title = ($pageId === 'home') ? $siteData["siteInfo"]["name"] : $siteData["pages"][$pageId]["name"] .' | ' . $siteData["siteInfo"]["name"];?>
<?php $description = $siteData["pages"][$pageId]["description"]; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width">
  <link rel="apple-touch-icon" href="/img/common/apple-touch-icon.png">

  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">

  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta property="og:url" content="<?php echo $siteData["siteInfo"]["siteUrl"] . $siteData["pages"][$pageId]["slug"]; ?>">
  <meta property="og:type" content="<?php echo $siteData["pages"][$pageId]["type"]; ?>">
  <meta property="og:local" content="ja_JP">
  <meta property="og:image" content="/common/og-image.jpg">
  <meta property="og:site_name" content="<?php echo $siteData["siteInfo"]["siteUrl"]; ?> ">

  <link rel="stylesheet" type="text/css" href="/css/style.css">

  <script src="/js/lib/b_browser_switcher.js"></script>
</head>

<body>

  <div id="wrapper">
    <header id="header" class="c-header">
      <div class="inner-block">
        <?php if ($pageId === 'home') : ?>
          <h1><?php echo $siteData["siteInfo"]["name"]; ?></h1>
        <?php else : ?>
          <a href="/"><?php echo $siteData["siteInfo"]["name"]; ?></a>
        <?php endif; ?>
      </div><!-- /inner-block -->
    </header>
    <nav class="c-breadcrumb">
      <ul>
        <?php foreach ($siteData["pages"] as $key => $value) : ?>
          <?php if ($key === $pageId) : ?>
            <li class="current"><?php echo $siteData["pages"][$key]["name"]; ?></li>
          <?php else : ?>
            <li><a href="<?php echo $siteData["pages"][$key]["slug"]; ?>"><?php echo $siteData["pages"][$key]["name"]; ?></a></li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </nav>