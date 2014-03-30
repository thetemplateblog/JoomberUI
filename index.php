<?php defined('_JEXEC') or die;
/* =====================================================================
Template: Based on Foundation 4 for Joomla
Author:   David Childs - TheTemplateBlog! - @TheTemplateBlog
Version:  1.0
Created:  March 2014
Copyright:  David Childs - (C) 2014 - All rights reserved
Licenses: GNU/GPL v3 or later http://www.gnu.org/licenses/gpl-3.0.html
          DBAD License http://philsturgeon.co.uk/code/dbad-license
Credits: Code taken from the following:
  Seth Warburton  - https://github.com/nternetinspired/OneWeb
  Antony Doyle    - https://github.com/antonydoyle/siegeengine2
/* ===================================================================== */

// Load template framework 
include_once JPATH_THEMES . '/' . $this->template . '/framework.php'; 
?>
<!DOCTYPE html>
<!--[if IE 8]>
	<html class="no-js lt-ie9" lang="en" > 
<![endif]-->
<!--[if gt IE 8]>
<!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
	<jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/normalize.css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/foundation-icons.css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/joomla.css" />
    
    <?php if ($customCSS != -1) : ?>
      <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/<?php echo $customCSS ?>" />
    <?php endif; ?>

    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/vendor/custom.modernizr.js"></script>
      <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      	<?php if ($setWidth != $defaultWidth) : ?>
        <style>
            .row {
                max-width: <?php echo $setWidth ?><?php echo $widthUnit ?>;
            }
        </style>
    <?php endif; ?>
</head>
<body class="<?php echo $active->alias; ?>">
	<?php if ($this->countModules( 'nav' )) : ?>
  	<?php if ($topmenu > 0) : echo "<div class=\"$ctg $fixed\">"; endif; ?>
	    <nav class="top-bar <?php if ($TopMenuWidth == 0) { echo "row"; } ?>" data-topbar>
	        <ul class="title-area">
	          <li class="name">
	            <h1><a href="<?php echo $this->baseurl ?>/" title="<?php echo htmlspecialchars($topbarTitle);?>"><?php echo htmlspecialchars($topbarTitle);?></a></h1>
	          </li>
	          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	        </ul>
	      <section class="top-bar-section">
	        <ul class="right">
	          <jdoc:include type="modules" name="nav" style="joomberui" />
	        </ul>
	      </section>
	    </nav>
	  </div>
    <?php if ($topmenu > 0) : echo "</div>"; endif; ?>
	<?php endif; ?>
	
	<?php if ($this->countModules( 'top' )) : ?>
    <div class="top-row">
      <div class="wrapper">
        <section class="row">
			<!--toprow-->
          <jdoc:include type="modules" name="top" style="joomberui" />
        </section>
      </div>
    </div>  
	<?php endif; ?>
	
	<?php if ($this->countModules( 'above' )) : ?>
    <div class="above-row">
      <div class="wrapper">  
        <section class="row">
          <!--aboverow-->
          <jdoc:include type="modules" name="above" style="joomberui" />
        </section>
      </div>
    </div>
  <?php endif; ?>
	
  <div class="row">
  	<!--mainrow-->
    <?php if ($this->countModules( 'left' )) : ?>
      <section class="<?php echo $leftWidth ?> columns sidebar">
        <!--left-row-->
        <jdoc:include type="modules" name="left" style="joomberui" />
      </section>
    <?php endif; ?>
      <div class="<?php echo $mainwidth ?> columns">
       	<!--mainrow-->
    <?php if ($this->countModules( 'above-content' )) : ?>
      <div class="above-content">
        <!--above-content-->
          <jdoc:include type="modules" name="above-content" style="joomberui" />
      </div>
    <?php endif; ?>            

		<?php if ($this->countModules( 'breadcrumbs' )) : ?>
      <div class="breadcrumbs-row">
        <div class="wrapper">
    			<div class="large-12">
    				<jdoc:include type="modules" name="breadcrumbs" style="none" />
    			</div>
        </div>
      </div>
		<?php endif; ?> 

     	<jdoc:include type="message" />  
    	<jdoc:include type="component" />
    <?php if ($this->countModules( 'below-content' )) : ?>
      <section class="below-content">
        <!--below-content-->
        <jdoc:include type="modules" name="below-content" style="joomberui" />
      </section>
    <?php endif; ?>
   		</div>
		<?php if ($this->countModules( 'right' )) : ?>
      <section class="<?php echo $rightWidth ?> columns sidebar">
        <!--right-row-->
          <jdoc:include type="modules" name="right" style="joomberui" />
      </section>
    <?php endif; ?>
      </div>
	
    <?php if ($this->countModules( 'below' )) : ?>
      <div class="below-row">
        <div class="wrapper">
          <section class="row">
            <!--belowrow-->
            <jdoc:include type="modules" name="below" style="joomberui" />
          </section>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($this->countModules( 'bottom' )) : ?>
      <div class="bottom-row">
        <div class="wrapper">
          <section class="row">
            <!--bottomrow-->
            <jdoc:include type="modules" name="bottom" style="joomberui" />
          </section>
        </div>
      </div>
    <?php endif; ?>
	
    <?php if ($this->countModules( 'footer' )) : ?>
      <div class="footer-row">
        <div class="wrapper">
          <footer class="row">
              <!--footerrow-->
              <jdoc:include type="modules" name="footer" style="joomberui" />
          </footer>
        </div>
      </div>
    <?php endif; ?>

<!-- Credit Row Taken from https://github.com/nternetinspired/OneWeb -->         
  <footer class="row">
    <?php if ($social > 0) : ?>
      <ul class="social">
        <?php if ($twitterLink != "") : ?>
          <li><a class="twitter" href="<?php echo ($twitterLink); ?>" title="Follow me on Twitter" target="_blank"><?php echo ($twitter); ?></a></li>
        <?php endif; ?>
        <?php if ($dribbbleLink != "") : ?>
          <li><a class="dribbble" href="<?php echo ($dribbbleLink); ?>" title="See my latest work at Dribbble" target="_blank"><?php echo ($dribbble); ?></a></li>
        <?php endif; ?>
        <?php if ($facebookLink != "") : ?>
          <li><a class="facebook" href="<?php echo ($facebookLink); ?>" title="Annoy me on Facebook" target="_blank"><?php echo ($facebook); ?></a></li>
        <?php endif; ?>
        <?php if ($googleplusLink != "") : ?>
          <li><a class="googleplus" href="<?php echo ($googleplusLink); ?>" title="Find me on G+" target="_blank"><?php echo ($googleplus); ?></a></li>
        <?php endif; ?>
        <?php if ($githubLink != "") : ?>
          <li><a class="github" href="<?php echo ($githubLink); ?>" title="All the codez" target="_blank"><?php echo ($github); ?></a></li>
        <?php endif; ?>
      </ul>
    <?php endif; ?>
      <ul class="right">
        <div class="copyright">
          <small>&copy; <?php echo date("Y"); ?> <?php echo htmlspecialchars($app->getCfg('sitename'));?></small>
        </div>
      </ul>
  </footer>
  <!-- end of credit row -->
  
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/vendor/jquery-2.1.0.min.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation/foundation.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation/foundation.topbar.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation/foundation.orbit.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation/foundation.tab.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation/foundation.accordion.js"></script>
    <script>
    	$(document).foundation();
  	</script>
  

    <!-- Load respond.js for shit browsers -->
  
  <!--[if lte IE 8]>  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/respond.js"></script> <![endif]-->

  <?php if ($analytics != "UA-XXXXX-X") : ?>
<!-- http://mths.be/aab -->
<script>
var _gaq=[['_setAccount','<?php echo htmlspecialchars($analytics); ?>'],["_trackPageview"]];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
<?php endif; ?>
<noscript>JavaScript is unavailable or disabled; so you are probably going to miss out on a few things. Everything should still work, but with a little less pzazz!</noscript>

</body>
</html>
