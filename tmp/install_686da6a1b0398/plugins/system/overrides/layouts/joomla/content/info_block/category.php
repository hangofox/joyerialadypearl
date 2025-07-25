<?php
/**
 * @package Helix Ultimate Framework
 * @author JoomShaper https://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2025 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

defined ('JPATH_BASE') or die();

use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Version;

$title = $this->escape($displayData['item']->category_title);

if (!isset($displayData['item']->catslug))
{
	$displayData['item']->catslug = $displayData['item']->catid . ':' . $displayData['item']->category_alias;
}

$version = new Version();
$JoomlaVersion = $version->getShortVersion();
?>
<span class="category-name" title="<?php echo Text::sprintf('COM_CONTENT_CATEGORY', $title); ?>">
	<?php if ($displayData['params']->get('link_category') && $displayData['item']->catslug) : ?>
		<a href="<?php echo Route::_(version_compare($JoomlaVersion, '4.0.0', '>=') ? Joomla\Component\Content\Site\Helper\RouteHelper::getCategoryRoute($displayData['item']->catslug) : ContentHelperRoute::getCategoryRoute($displayData['item']->catslug)); ?>"><?php echo $title; ?></a>
	<?php else : ?>
		<?php echo $title; ?>
	<?php endif; ?>
</span>
