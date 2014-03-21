<?php
 /* =====================================================================
Template:	OneWeb for Joomla 2.5						            
Author: 	Seth Warburton - Internet Inspired! - @nternetinspired 				            
Version: 	2.0 											             
Created: 	June 2012                                                    
Copyright:	Seth Warburton - (C) 2012 - All rights reserved		
Licenses:	GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
			DBAD License http://philsturgeon.co.uk/code/dbad-license
Source: 	J2.5.1. com_contact/							             		
/* ===================================================================== */

defined('_JEXEC') or die;

$cparams = JComponentHelper::getParams ('com_media');
?>
<?php if ($this->params->get('show_page_heading', 1)) : ?>
<header><h1>
	<?php echo $this->escape($this->params->get('page_heading')); ?>
</h1></header>
<?php endif; ?>
<section class="contact<?php echo $this->pageclass_sfx?>">
	<?php if ($this->contact->name && $this->params->get('show_name')) : ?>
		<header><h2>
			<span class="contact-name"><?php echo $this->contact->name; ?></span>
		</h2></header>
	<?php endif;  ?>
	<?php if ($this->params->get('show_contact_list') && count($this->contacts) > 1) : ?>
		<form action="#" method="get" name="selectForm" id="selectForm">
			<?php echo JText::_('COM_CONTACT_SELECT_CONTACT'); ?>
			<?php echo JHtml::_('select.genericlist',  $this->contacts, 'id', 'class="inputbox" onchange="document.location.href = this.value"', 'link', 'name', $this->contact->link);?>
		</form>
	<?php endif; ?>
	<?php  if ($this->params->get('presentation_style')!='plain'){?>
		<?php  echo  JHtml::_($this->params->get('presentation_style').'.start', 'contact-slider'); ?>
	<?php  echo JHtml::_($this->params->get('presentation_style').'.panel', JText::_('COM_CONTACT_DETAILS'), 'basic-details'); } ?>
	<?php if ($this->params->get('presentation_style')=='plain'):?>
		
	<?php endif; ?>
	<?php if ($this->contact->image && $this->params->get('show_image')) : ?>
		<div class="contact-image">
			<?php echo JHtml::_('image', $this->contact->image, JText::_('COM_CONTACT_IMAGE_DETAILS'), array('align' => 'middle')); ?>
		</div>
	<?php endif; ?>

	<?php if ($this->contact->con_position && $this->params->get('show_position')) : ?>
		<p class="contact-position"><?php echo $this->contact->con_position; ?></p>
	<?php endif; ?>

	<?php echo $this->loadTemplate('address'); ?>

	<?php if ($this->params->get('allow_vcard')) :	?>
		<?php echo JText::_('COM_CONTACT_DOWNLOAD_INFORMATION_AS');?>
			<a href="<?php echo JRoute::_('index.php?option=com_contact&amp;view=contact&amp;id='.$this->contact->id . '&amp;format=vcf'); ?>">
			<?php echo JText::_('COM_CONTACT_VCARD');?></a>
	<?php endif; ?>
		<?php if ($this->contact->misc && $this->params->get('show_misc')) : ?>
		<?php if ($this->params->get('presentation_style')!='plain'){?>
			<?php echo JHtml::_($this->params->get('presentation_style').'.panel', JText::_('COM_CONTACT_OTHER_INFORMATION'), 'display-misc');} ?>
		<?php if ($this->params->get('presentation_style')=='plain'):?>
			<?php echo '<h2>'. JText::_('COM_CONTACT_OTHER_INFORMATION').'</h2>'; ?>
		<?php endif; ?>
				<div class="contact-miscinfo">
					<div class="contact-misc">
						<?php echo $this->contact->misc; ?>
					</div>
				</div>
	<?php endif; ?>
	<?php if ($this->params->get('show_email_form') && ($this->contact->email_to || $this->contact->user_id)) : ?>

		<?php if ($this->params->get('presentation_style')!='plain'):?>
			<?php  echo JHtml::_($this->params->get('presentation_style').'.panel', JText::_('COM_CONTACT_EMAIL_FORM'), 'display-form');  ?>
		<?php endif; ?>
		<?php if ($this->params->get('presentation_style')=='plain'):?>
			<?php  echo '<h3>'. JText::_('COM_CONTACT_EMAIL_FORM').'</h3>';  ?>
		<?php endif; ?>
		<?php  echo $this->loadTemplate('form');  ?>
	<?php endif; ?>
	<?php if ($this->params->get('show_links')) : ?>
		<?php echo $this->loadTemplate('links'); ?>
	<?php endif; ?>
	<?php if ($this->params->get('show_articles') && $this->contact->user_id && $this->contact->articles) : ?>
		<?php if ($this->params->get('presentation_style')!='plain'):?>
			<?php echo JHtml::_($this->params->get('presentation_style').'.panel', JText::_('JGLOBAL_ARTICLES'), 'display-articles'); ?>
			<?php endif; ?>
			<?php if  ($this->params->get('presentation_style')=='plain'):?>
			<?php echo '<h3>'. JText::_('JGLOBAL_ARTICLES').'</h3>'; ?>
			<?php endif; ?>
			<?php echo $this->loadTemplate('articles'); ?>
	<?php endif; ?>
	<?php if ($this->params->get('show_profile') && $this->contact->user_id && JPluginHelper::isEnabled('user', 'profile')) : ?>
		<?php if ($this->params->get('presentation_style')!='plain'):?>
			<?php echo JHtml::_($this->params->get('presentation_style').'.panel', JText::_('COM_CONTACT_PROFILE'), 'display-profile'); ?>
		<?php endif; ?>
		<?php if ($this->params->get('presentation_style')=='plain'):?>
			<?php echo '<h3>'. JText::_('COM_CONTACT_PROFILE').'</h3>'; ?>
		<?php endif; ?>
		<?php echo $this->loadTemplate('profile'); ?>
	<?php endif; ?>
	<?php if ($this->params->get('presentation_style')!='plain'){?>
			<?php echo JHtml::_($this->params->get('presentation_style').'.end');} ?>
</section>
