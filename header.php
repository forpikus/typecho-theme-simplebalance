<!DOCTYPE HTML>
<html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php $this->options->charset(); ?>" />
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('Category &lt;%s&gt;'),
            'search'    =>  _t('Search &lt;%s&gt;'),
            'tag'       =>  _t('Tag &lt;%s&gt;'),
            'author'    =>  _t('Author &lt;%s&gt;')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php $this->options->themeUrl('javascript/html5shiv.js'); ?>"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php $this->options->adminUrl('css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <!--<link rel="stylesheet" href="http://cdn.bootcss.com/highlight.js/8.4/styles/dark.min.css">-->
    <link rel="stylesheet" href="//cdnjs.net/ajax/libs/??highlight.js/8.4/styles/xcode.min.css">
    <script src="http://cdnjs.net/ajax/libs/??jquery/1.8.3/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/highlight.js/8.4/highlight.min.js"></script>
    <script src="<?php $this->options->themeUrl('javascript/qt.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('javascript/text.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('javascript/behave.min.js'); ?>"></script>
    <?php $this->header("generator=&template=&"); ?>
</head>
<body>
<header id="header" class="clearfix">
    <div class="container">
        <div class="col-group">
            <div class="site-name ">
                <?php if ($this->is('index')): ?>
                    <h1>
                        <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                            <?php $this->options->title() ?>
                        </a>
                    </h1>
                <?php else:?>
                    <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                        <?php $this->options->title() ?>
                    </a>
                <?php endif; ?>
                <p class="description"><?php $this->options->description() ?></p>
            </div>
            <div>
                <nav id="nav-menu" class="clearfix">
                    <a class="left" href="http://forpikus.com/">Home</a>
                    <a class="left <?php if($this->is('index')): ?>current<?php endif; ?> <?php if($this->is('post')): ?>current<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>"><?php _e('Blog'); ?></a>
                    <span class="left"></span>
                    <?php $this->widget('Widget_Metas_Category_List')->to($category);?>
                    <?php while($category->next()): ?>
                    <a class="nav-cat-item left <?php if($this->is('category', $category->slug)): ?> current<?php endif; ?>" href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a>
                    <?php endwhile; ?>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
                </nav>
            </div>
        </div>
    </div>
</header>
<div id="body">
    <div class="container">
        <div class="col-group">
