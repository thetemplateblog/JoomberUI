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
    <?php $first = true; foreach ($list as $item) : $title = preg_replace('/\s+/', '', $item->title); ?>
        <dd <?php if ( $first ) : echo "class=\"active\""; $first = false; endif; ?>><a href="#<?php echo $title; ?>"><?php echo $item->title; ?></a></dd>
        <?php endforeach; ?>
  </dl>
  <div class="tabs-content vertical">
    <?php $first = true; foreach ($list as $item) : $title = preg_replace('/\s+/', '', $item->title); ?>
        <div class="content <?php if ( $first ) : echo "active"; $first = false; endif; ?>" id="<?php echo $title; ?>">
        <?php echo $item->introtext; ?>
        <a href="<?php echo $item->link; ?>" class="button small radius info">Read more</a>
      </div>
    <?php endforeach; ?>
  </div>
</div>
