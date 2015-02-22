<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="<?php $this->options->charset(); ?>" />
  <meta name="viewport" content="width=device-width,user-scalable=no">
  <?php if ($this->is('index')): ?><title>Cho's</title>
  <?php else: ?>
  <title><?php $this->archiveTitle('.', '', ' - '); ?>Cho's</title>
  <?php endif; ?>
  <!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('javascript/html5shiv.js'); ?>">
    <![endif]-->
    <link rel="stylesheet" href="<?php $this->options->adminUrl('css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
  <?php $this->header("generator=&template=&"); ?>
</head>
<body>
<div class="body404">
<div class="info404">
<header id="header404" class="clearfix">
  <div class="site-name404">
    <i>404</i>
  </div>
</header>
<section>
<?php
$rand_title = array(
  "Experience is the father of <br/> wisdom and memory the mother.",
  "Far from eye, <br/>far from heart.",
  "Fool's haste is no speed.",
  "Fools learn nothing from wise men, <br/>but wise men learn much from fools.",
  "Genius is nothing <br/>but labor and diligence.",
  "Great hopes <br/>make great man.",
  "Happy is the man <br/>who learns from the misfortunes of others."
  );
?>
  <div class="title404"><p><?php echo $rand_title[mt_rand(0, count($rand_title)-1)];?></p></div>
  <a class="index404" rel="nofollow" href="<?php $this->options->siteUrl(); ?>">Back to Blog</a>
</section>
<footer id="footer404">
  &copy; <?php echo date('Y'); ?> <?php $this->options->title(); ?>.</span>
</footer>
</div>
</div>
<?php $this->footer(); ?>
</body>
</html>