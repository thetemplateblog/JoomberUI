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
    <div class="section-container vertical-tabs" data-section="vertical-tabs">
        <?php foreach ($list as $item) :  ?>
          <section>
            <p class="title" data-section-title><a href="#"><?php echo $item->title; ?></a></p>
            <div class="content" data-section-content>
              <?php echo $item->introtext; ?>
              <a href="<?php echo $item->link; ?>" class="button small radius info">Read more</a>
            </div>
          </section>
        <?php endforeach; ?>
    </div>
</div>