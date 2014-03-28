<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 /* =====================================================================
  Template: JoomberUI for Joomla 3.x                       
  Author:   David Childs - Joomber.com! - @TheTemplateBlog                    
  Version:  1.0                                    
  Created:  March 2014                                                    
  Copyright:  David Childs - (C) 2014 - All rights reserved   
  Licenses: GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
        DBAD License http://philsturgeon.co.uk/code/dbad-license
  Source:   J3.x mod_articles_latest/                              
/* ===================================================================== */
defined('_JEXEC') or die;
?>
<div class="<?php echo $moduleclass_sfx; ?>">
  <dl class="tabs vertical" data-tab>
    <?php $first = true; ?>
    <?php foreach ($list as $item) :  ?>
    <?php $title = preg_replace('/\s+/', '', $item->title); ?>
      <?php if ( $first ) { ?>
        <dd class="active"><a href="#<?php echo $title; ?>"><?php echo $item->title; ?></a></dd>
      <?php $first = false; } else { ?>
        <dd><a href="#<?php echo $title; ?>"><?php echo $item->title; ?></a></dd>
      <?php } ?>
    <?php endforeach; ?>
  </dl>
  <div class="tabs-content vertical">
    <?php $first = true; ?>
    <?php foreach ($list as $item) :  ?>
    <?php $title = preg_replace('/\s+/', '', $item->title); ?>
      <?php if ( $first ) { ?>
        <div class="content active" id="<?php echo $title; ?>">
          <?php $first = false; } else { ?>
        <div class="content" id="<?php echo $title; ?>">
          <?php } ?>
        <?php echo $item->introtext; ?>
        <a href="<?php echo $item->link; ?>" class="button small radius info">Read more</a>
      </div>
    <?php endforeach; ?>
  </div>
</div>
