<?php
defined('_JEXEC') or die;

/**
 * Template for Joomla! CMS, created with Artisteer.
 * See readme.txt for more details on how to use the template.
 */

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';

// Create alias for $this object reference:
$document = $this;

// Shortcut for template base url:
$templateUrl = $document->baseurl . '/templates/' . $document->template;

Artx::load("Artx_Page");

// Initialize $view:
$view = $this->artx = new ArtxPage($this);

// Decorate component with Artisteer style:
$view->componentWrapper();

JHtml::_('behavior.framework', true);

?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $document->language; ?>">
<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />

    <!-- Created by Artisteer v4.1.0.59861 -->
    
    
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.responsive.css" media="all">


    <script>if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
    <script src="<?php echo $templateUrl; ?>/jquery.js"></script>
    <script>jQuery.noConflict();</script>

    <script src="<?php echo $templateUrl; ?>/script.js"></script>
    <?php $view->includeInlineScripts() ?>
    <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
    <script src="<?php echo $templateUrl; ?>/script.responsive.js"></script>
</head>
<body>

<div id="art-main">
<header class="art-header"><?php echo $view->position('position-30', 'art-nostyle'); ?>


    <div class="art-shapes">
<div class="art-object1142538220" data-left="0.38%"></div>

            </div>
<h1 class="art-headline" data-left="12.78%">
    <a href="<?php echo $document->baseurl; ?>/"><?php echo $this->params->get('siteTitle'); ?></a>
</h1>




                        
                    
</header>
<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
<nav class="art-nav">
    <div class="art-nav-inner">
    
<?php if ($view->containsModules('position-28')) : ?>
<div class="art-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
<?php endif; ?>
<?php if ($view->containsModules('position-29')) : ?>
<div class="art-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
<?php endif; ?>
<?php echo $view->position('position-1'); ?>
 
        </div>
    </nav>
<?php endif; ?>
<div class="art-sheet clearfix">
            <?php echo $view->position('position-15', 'art-nostyle'); ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33, 'position-18' => 34), 'art-block'); ?>
<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content">
<?php
  echo $view->position('position-19', 'art-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
  echo $view->positions(array('position-20' => 50, 'position-21' => 50), 'art-article');
  echo $view->position('position-12', 'art-nostyle');
  echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' art-messages'));
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'art-nostyle');
  echo $view->positions(array('position-23' => 50, 'position-24' => 50), 'art-article');
  echo $view->position('position-25', 'art-nostyle');
?>




                        </div>
                    </div>
                </div>
            </div>
<?php echo $view->positions(array('position-9' => 33, 'position-10' => 33, 'position-11' => 34), 'art-block'); ?>
<?php echo $view->position('position-26', 'art-nostyle'); ?>


    </div>
<footer class="art-footer">
  <div class="art-footer-inner">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 20%">
<?php if ($view->containsModules('position-31')) : ?>
    <?php echo $view->position('position-31', 'art-nostyle'); ?>
<?php else: ?>
        <p style="font: bold 18px 'Arial Narrow';color: #777777;">INFO</p>
        <br>
        <ul>
        <li><a href="#">Welcome</a></li>
        <li><a href="#">Schedule</a></li>
        <li><a href="#">Team</a></li>
        <li><a href="#">Management</a></li>
        </ul>
    <?php endif; ?>
</div><div class="art-layout-cell layout-item-0" style="width: 20%">
<?php if ($view->containsModules('position-32')) : ?>
    <?php echo $view->position('position-32', 'art-nostyle'); ?>
<?php else: ?>
        <p style="font: bold 18px 'Arial Narrow';color: #777777;">LOCATION</p>
        <br>
        <ul>
        <li><a href="#">Map</a></li>
        <li><a href="#">Address</a></li>
        <li><a href="#">Contact Us</a></li>
        </ul>
    <?php endif; ?>
</div><div class="art-layout-cell layout-item-0" style="width: 20%">
<?php if ($view->containsModules('position-33')) : ?>
    <?php echo $view->position('position-33', 'art-nostyle'); ?>
<?php else: ?>
        <p style="font: bold 18px 'Arial Narrow';color: #777777;">CONNECTION</p>
        <br>
        <ul>
        <li><a href="#"><img width="32" height="32" alt="" src="<?php echo $document->baseurl ?>/templates/<?php echo $document->template; ?>/images/rss_32.png"></a>&nbsp;<a href="#"><img width="32" height="32" alt="" src="<?php echo $document->baseurl ?>/templates/<?php echo $document->template; ?>/images/facebook_32.png"></a>&nbsp;<a href="#"><img width="32" height="32" alt="" src="<?php echo $document->baseurl ?>/templates/<?php echo $document->template; ?>/images/twitter_32.png"></a></li>
        </ul>
    <?php endif; ?>
</div><div class="art-layout-cell layout-item-0" style="width: 40%">
<?php if ($view->containsModules('position-34')) : ?>
    <?php echo $view->position('position-34', 'art-nostyle'); ?>
<?php else: ?>
        <p style="text-align: right; padding-right: 20px"><br>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Copyright © 2011 All Rights Reserved.<br>
        Icons by <a href="http://www.IconEden.com">IconEden</a></p>
    <?php endif; ?>
</div>
    </div>
</div>

  </div>
</footer>

</div>



<?php echo $view->position('debug'); ?>
</body>
</html>