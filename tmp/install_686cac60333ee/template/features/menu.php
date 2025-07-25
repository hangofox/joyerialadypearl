<?php
/**
 * @package Helix3 Framework
 * @author JoomShaper https://www.joomshaper.com
 * @copyright (c) 2010 - 2021 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

//no direct accees
defined ('_JEXEC') or die('resticted aceess');

use Joomla\CMS\Language\Text;

class Helix3FeatureMenu {

	private $helix3;
	public $position;

	public function __construct($helix3){
		$this->helix3 = $helix3;
		$this->position = 'menu';
	}

	public function renderFeature() {

		$menu_type = $this->helix3->getParam('menu_type');

		ob_start();

		if($menu_type == 'mega_offcanvas') { ?>
			<div class='sp-megamenu-wrapper'>
				<a id="offcanvas-toggler" href="#" aria-label="<?php echo Text::_('HELIX_MENU'); ?>"><i class="fa fa-bars" aria-hidden="true" title="<?php echo Text::_('HELIX_MENU'); ?>"></i></a>
				<?php $this->helix3->loadMegaMenu('d-none d-lg-block'); ?>
			</div>
		<?php } else if ($menu_type == 'mega') { ?>
			<div class='sp-megamenu-wrapper'>
				<a id="offcanvas-toggler" class="d-block d-lg-none" aria-label="<?php echo Text::_('HELIX_MENU'); ?>" href="#"><i class="fa fa-bars" aria-hidden="true" title="<?php echo Text::_('HELIX_MENU'); ?>"></i></a>
				<?php $this->helix3->loadMegaMenu('d-none d-lg-block'); ?>
			</div>
		<?php } else { ?>
			<a id="offcanvas-toggler" aria-label="<?php echo Text::_('HELIX_MENU'); ?>" href="#"><i class="fa fa-bars" title="<?php echo Text::_('HELIX_MENU'); ?>"></i></a>
		<?php }

		return ob_get_clean();
	}
}
