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

// Define shortcuts for template parameters
$loadMoo 		          = $this->params->get('loadMoo');
$setGeneratorTag	    = $this->params->get('setGeneratorTag');
$analytics 		        = $this->params->get('analytics');
$customCSS    		    = $this->params->get('customCSS');
$defaultWidth   	     = '';
$setWidth    		       = $this->params->get('setWidth');
$widthUnit 		         = $this->params->get('widthUnit');
$topbarTitle		       = $this->params->get('topbarTitle');
$stickyTopMenu		     = $this->params->get('stickyTopMenu');
$googleplus            = $this->params->get('googleplus');
$googleWebFonts        = $this->params->get('googleWebFonts');
$twitter               = $this->params->get('twitter');
$twitterLink           = $this->params->get('twitterLink');
$dribbble              = $this->params->get('dribbble');
$dribbbleLink          = $this->params->get('dribbbleLink');
$facebook              = $this->params->get('facebook');
$facebookLink          = $this->params->get('facebookLink');
$googleplus            = $this->params->get('googleplus');
$googleplusLink        = $this->params->get('googleplusLink');
$github                = $this->params->get('github');
$githubLink            = $this->params->get('githubLink');
$TopMenuWidth          = $this->params->get('TopMenuWidth');
$active                = JFactory::getApplication()->getMenu()->getActive();

$topmenu = ($stickyTopMenu?1:0)+ ($TopMenuWidth?1:0);
$fixed = "";
$ctg = "";
if ( $stickyTopMenu == 1 ) { $fixed = "fixed"; }
if ( $TopMenuWidth == 1 ) { $ctg = "contain-to-grid"; }

// Do we have social links?
$social                = ($twitterLink?1:0)+ ($dribbbleLink?1:0)+ ($facebookLink?1:0)+ ($googleplusLink?1:0)+ ($githubLink?1:0);

if ($this->countModules('right') == 0)  {$rightwidth = 0;} else {$rightwidth = (int) ($this->params->get('rightwidth'));}
if ($this->countModules('left') == 0)  {$leftwidth = 0;} else {$leftwidth = (int) ($this->params->get('leftwidth'));}

$colcount = $rightwidth + $leftwidth;
$coltotal = 12 - $colcount;

if ($coltotal == 1) { $mainwidth = 'large-1'; }
if ($coltotal == 2) { $mainwidth = 'large-2'; }
if ($coltotal == 3) { $mainwidth = 'large-3'; }
if ($coltotal == 4) { $mainwidth = 'large-4'; }
if ($coltotal == 5) { $mainwidth = 'large-5'; }
if ($coltotal == 6) { $mainwidth = 'large-6'; }
if ($coltotal == 7) { $mainwidth = 'large-7'; }
if ($coltotal == 8) { $mainwidth = 'large-8'; }
if ($coltotal == 9) { $mainwidth = 'large-9'; }
if ($coltotal == 10) { $mainwidth = 'large-10'; }
if ($coltotal == 11) { $mainwidth = 'large-11'; }
if ($coltotal == 12) { $mainwidth = 'large-12'; }

if ($rightwidth == 1) { $rightWidth = 'large-1'; }
if ($rightwidth == 2) { $rightWidth = 'large-2'; }
if ($rightwidth == 3) { $rightWidth = 'large-3'; }
if ($rightwidth == 4) { $rightWidth = 'large-4'; }
if ($rightwidth == 5) { $rightWidth = 'large-5'; }
if ($rightwidth == 6) { $rightWidth = 'large-6'; }
if ($rightwidth == 7) { $rightWidth = 'large-7'; }
if ($rightwidth == 8) { $rightWidth = 'large-8'; }
if ($rightwidth == 9) { $rightWidth = 'large-9'; }
if ($rightwidth == 10) { $rightWidth = 'large-10'; }
if ($rightwidth == 11) { $rightWidth = 'large-11'; }
if ($rightwidth == 12) { $rightWidth = 'large-12'; }

if ($leftwidth == 1) { $leftWidth = 'large-1'; }
if ($leftwidth == 2) { $leftWidth = 'large-2'; }
if ($leftwidth == 3) { $leftWidth = 'large-3'; }
if ($leftwidth == 4) { $leftWidth = 'large-4'; }
if ($leftwidth == 5) { $leftWidth = 'large-5'; }
if ($leftwidth == 6) { $leftWidth = 'large-6'; }
if ($leftwidth == 7) { $leftWidth = 'large-7'; }
if ($leftwidth == 8) { $leftWidth = 'large-8'; }
if ($leftwidth == 9) { $leftWidth = 'large-9'; }
if ($leftwidth == 10) { $leftWidth = 'large-10'; }
if ($leftwidth == 11) { $leftWidth = 'large-11'; }
if ($leftwidth == 12) { $leftWidth = 'large-12'; }



// Modules
$header = (int) ($this->countModules('header') > 0);
$nav = (int) ($this->countModules('nav') > 0);
$top = (int) ($this->countModules('top') > 0);
$above = (int) ($this->countModules('above') > 0);
$abovecontent = (int) ($this->countModules('above-content') > 0);
$left = (int) ($this->countModules('left') > 0);
$right = (int) ($this->countModules('right') > 0);
$belowcontent = (int) ($this->countModules('below-content') > 0);
$below = (int) ($this->countModules('below') > 0);
$footer = (int) ($this->countModules('footer') > 0);


#----------------------------- Construct Code Snippets-----------------------------#
// GPL code taken from Construct template framework by Matt Thomas http://construct-framework.com/

// To enable use of site configuration
$app 		= JFactory::getApplication();
$pageParams  	= $app->getParams();
$sitename	= $app->getCfg('sitename');
// Returns a reference to the global document object
$doc = JFactory::getDocument();

// Define relative path to the current template directory
$template = 'templates/'.$this->template;

// Change generator tag
$this->setGenerator($setGeneratorTag);

// Remove MooTools if set to no.
if ( !$loadMoo ) {
	unset($doc->_scripts[$this->baseurl.'/media/system/js/mootools-core.js']);
    unset($doc->_scripts[$this->baseurl.'/media/system/js/mootools-more.js']);
    unset($doc->_scripts[$this->baseurl.'/media/system/js/core.js']);
    unset($doc->_scripts[$this->baseurl.'/media/system/js/caption.js']);
    unset($doc->_scripts[$this->baseurl.'/media/system/js/modal.js']);
    unset($doc->_scripts[$this->baseurl.'/media/system/js/mootools.js']);
    unset($doc->_scripts[$this->baseurl.'/plugins/system/mtupgrade/mootools.js']);
}

#-------------End Construct Code--------------------------------------#
jimport( 'joomla.application.module.helper' );

function getParam( $module, $attribs ) {
  $modules = JModuleHelper::getModules( $module );
  $params = json_decode($modules[0]->params);
  $param = $params->$attribs;
    if (strpos($param,'contain-to-grid') !== false) {
    $param = 'contain-to-grid';
    }
    else {
      $param = 'row';
    }
  return $param;
  }
