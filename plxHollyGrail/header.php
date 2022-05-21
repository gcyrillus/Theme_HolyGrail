<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<title><?php $plxShow->pageTitle(); ?></title>
<?php
	$plxShow->meta('description');
	$plxShow->meta('keywords');
	$plxShow->meta('author');
?>
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/plucss.css?v=1.3.1" media="screen,print"/>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/theme.css?v=1.1.1" media="screen"/>
    <!-- Link to the Responsive Columns CSS -->	
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/r-c-min.css?v=1.0.0" media="screen,print"/>
    <!-- Link to your general site styles -->	
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/site-styles.css?v=1.0.1" media="screen"/>
	

	
<?php
	$plxShow->templateCss();
	$plxShow->pluginsCss();
?>
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlPostsRssFeed($plxShow->plxMotor->mode) ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
</head>

<body id="top" class="page mode-<?php $plxShow->mode(true) ?>">

<header data-r-c data-join data-middle class="header">
    <figure data-md1-5 >
	 <img src="<?php $plxShow->template(); ?>/img/pluxml-logo-black.png" alt="Logo">
			<h1 class="no-margin heading-small"><?php $plxShow->mainTitle('link'); ?></h1>
			<h2 class="h5 no-margin"><?php $plxShow->subTitle(); ?></h2>	 
    </figure>
	<nav data-md3-5 class="nav menu-links">
			<div class="responsive-menu">
				<label for="menu"></label>
				<input type="checkbox" id="menu">
				<ul class="menu">
					<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_class #static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
					<?php $plxShow->pageBlog('<li class="#page_class #page_status" id="#page_id"><a href="#page_url" title="#page_name">#page_name</a></li>'); ?>
				</ul>
			</div>
		</nav>
	</div>
</header>

<r-c join>