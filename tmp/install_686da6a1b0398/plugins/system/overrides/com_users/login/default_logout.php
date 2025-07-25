<?php
/**
 * @package Helix Ultimate Framework
 * @author JoomShaper https://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2025 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

defined ('_JEXEC') or die();

use HelixUltimate\Framework\Platform\Helper;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;

?>
<div class="logout<?php echo $this->pageclass_sfx; ?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<div class="page-header">
		<h1>
			<?php echo $this->escape($this->params->get('page_heading')); ?>
		</h1>
	</div>
	<?php endif; ?>

	<?php if (($this->params->get('logoutdescription_show') == 1 && str_replace(' ', '', Helper::CheckNull($this->params->get('logout_description'))) != '')|| $this->params->get('logout_image') != '') : ?>
	<div class="logout-description">
	<?php endif; ?>

		<?php if ($this->params->get('logoutdescription_show') == 1) : ?>
			<?php echo $this->params->get('logout_description'); ?>
		<?php endif; ?>

		<?php if ($this->params->get('logout_image') != '') : ?>
			<img src="<?php echo $this->escape($this->params->get('logout_image')); ?>" class="thumbnail float-end logout-image" alt="<?php echo Text::_('COM_USER_LOGOUT_IMAGE_ALT'); ?>">
		<?php endif; ?>

	<?php if (($this->params->get('logoutdescription_show') == 1 && str_replace(' ', '', Helper::CheckNull($this->params->get('logout_description'))) != '')|| $this->params->get('logout_image') != '') : ?>
	</div>
	<?php endif; ?>

	<form action="<?php echo Route::_('index.php?option=com_users&task=user.logout'); ?>" method="post" class="form-horizontal well">
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary"><span class="icon-arrow-left icon-white"></span> <?php echo Text::_('JLOGOUT'); ?></button>
			</div>
		</div>
		<?php if ($this->params->get('logout_redirect_url')) : ?>
			<input type="hidden" name="return" value="<?php echo base64_encode(Helper::CheckNull($this->params->get('logout_redirect_url', $this->form->getValue('return')))); ?>">
		<?php else : ?>
			<input type="hidden" name="return" value="<?php echo base64_encode(Helper::CheckNull($this->params->get('logout_redirect_menuitem', $this->form->getValue('return')))); ?>">
		<?php endif; ?>
		<?php echo HTMLHelper::_('form.token'); ?>
	</form>
</div>
