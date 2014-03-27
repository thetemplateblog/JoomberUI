<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="<?php echo $moduleclass_sfx; ?>">
  <dl class="accordion" data-accordion>
    <?php $first = true; ?>
    <?php foreach ($list as $item) :  ?>
      <?php if ( $first ) { ?>
        <dd>
          <a href="#<?php echo $item->title; ?>"><?php echo $item->title; ?></a>
            <div id="<?php echo $item->title; ?>" class="content active">
              <h4><?php echo $item->title; ?></h4>
              <?php echo $item->introtext; ?>
              <a href="<?php echo $item->link; ?>" class="button small radius info">Read more</a>
          </div>
        </dd>  
      <?php $first = false; } else { ?>
        <dd>
          <a href="#<?php echo $item->title; ?>"><?php echo $item->title; ?></a>
            <div id="<?php echo $item->title; ?>" class="content">
              <h4><?php echo $item->title; ?></h4>
              <?php echo $item->introtext; ?>
              <a href="<?php echo $item->link; ?>" class="button small radius info">Read more</a>
          </div>
        </dd> 
      <?php } ?>
    <?php endforeach; ?>
  </dl>
</div>
