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

