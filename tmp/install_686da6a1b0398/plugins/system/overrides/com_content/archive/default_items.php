<?php
/**
 * @package Helix Ultimate Framework
 * @author JoomShaper https://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2025 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

defined ('_JEXEC') or die();

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Version;

HTMLHelper::addIncludePath(JPATH_COMPONENT . '/helpers');
$params = $this->params;

$version = new Version();
$JoomlaVersion = $version->getShortVersion();
?>

<div id="archive-items">
	<?php foreach ($this->items as $i => $item) : ?>
		<?php $info = $item->params->get('info_block_position', 0); ?>
		<div class="row<?php echo $i % 2; ?>" itemscope itemtype="https://schema.org/Article">
			<div class="page-header">
				<h2 itemprop="headline">
					<?php if ($params->get('link_titles')) : ?>
						<a href="<?php echo Route::_(version_compare($JoomlaVersion, '4.0.0', '>=') ? Joomla\Component\Content\Site\Helper\RouteHelper::getArticleRoute($item->slug, $item->catid, $item->language) : ContentHelperRoute::getArticleRoute($item->slug, $item->catid, $item->language)); ?>" itemprop="url">
							<?php echo $this->escape($item->title); ?>
						</a>
					<?php else : ?>
						<?php echo $this->escape($item->title); ?>
					<?php endif; ?>
				</h2>

				<?php // Content is generated by content plugin event "onContentAfterTitle" ?>
				<?php echo $item->event->afterDisplayTitle; ?>

				<?php if ($params->get('show_author') && !empty($item->author )) : ?>
					<div class="createdby" itemprop="author" itemscope itemtype="https://schema.org/Person">
					<?php $author = $item->created_by_alias ?: $item->author; ?>
					<?php $author = '<span itemprop="name">' . $author . '</span>'; ?>
						<?php if (!empty($item->contact_link) && $params->get('link_author') == true) : ?>
							<?php echo Text::sprintf('COM_CONTENT_WRITTEN_BY', HTMLHelper::_('link', $this->item->contact_link, $author, array('itemprop' => 'url'))); ?>
						<?php else : ?>
							<?php echo Text::sprintf('COM_CONTENT_WRITTEN_BY', $author); ?>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		<?php $useDefList = ($params->get('show_modify_date') || $params->get('show_publish_date') || $params->get('show_create_date')
			|| $params->get('show_hits') || $params->get('show_category') || $params->get('show_parent_category')); ?>
		<?php if ($useDefList && ($info == 0 || $info == 2)) : ?>
			<div class="article-info">
				<?php if ($params->get('show_parent_category') && !empty($item->parent_slug)) : ?>
					<span class="parent-category-name">
						<?php $title = $this->escape($item->parent_title); ?>
						<?php if ($params->get('link_parent_category') && !empty($item->parent_slug)) : ?>
							<?php $url = '<a href="' . Route::_(version_compare($JoomlaVersion, '4.0.0', '>=') ? Joomla\Component\Content\Site\Helper\RouteHelper::getCategoryRoute($item->parent_slug) : ContentHelperRoute::getCategoryRoute($item->parent_slug)) . '" itemprop="genre">' . $title . '</a>'; ?>
							<?php echo Text::sprintf('COM_CONTENT_PARENT', $url); ?>
						<?php else : ?>
							<?php echo Text::sprintf('COM_CONTENT_PARENT', '<span itemprop="genre">' . $title . '</span>'); ?>
						<?php endif; ?>
					</span>
				<?php endif; ?>
				<?php if ($params->get('show_category')) : ?>
					<span class="category-name">
						<?php $title = $this->escape($item->category_title); ?>
						<?php if ($params->get('link_category') && $item->catslug) : ?>
							<?php $url = '<a href="' . Route::_(version_compare($JoomlaVersion, '4.0.0', '>=') ? Joomla\Component\Content\Site\Helper\RouteHelper::getCategoryRoute($item->catslug) : ContentHelperRoute::getCategoryRoute($item->catslug)) . '" itemprop="genre">' . $title . '</a>'; ?>
							<?php echo Text::sprintf('COM_CONTENT_CATEGORY', $url); ?>
						<?php else : ?>
							<?php echo Text::sprintf('COM_CONTENT_CATEGORY', '<span itemprop="genre">' . $title . '</span>'); ?>
						<?php endif; ?>
					</span>
				<?php endif; ?>

				<?php if ($params->get('show_publish_date')) : ?>
					<span class="published">
						<time datetime="<?php echo HTMLHelper::_('date', $item->publish_up, 'c'); ?>" itemprop="datePublished">
							<?php echo Text::sprintf('COM_CONTENT_PUBLISHED_DATE_ON', HTMLHelper::_('date', $item->publish_up, Text::_('DATE_FORMAT_LC3'))); ?>
						</time>
					</span>
				<?php endif; ?>

				<?php if ($info == 0) : ?>
					<?php if ($params->get('show_modify_date')) : ?>
						<span class="modified">
							<time datetime="<?php echo HTMLHelper::_('date', $item->modified, 'c'); ?>" itemprop="dateModified">
								<?php echo Text::sprintf('COM_CONTENT_LAST_UPDATED', HTMLHelper::_('date', $item->modified, Text::_('DATE_FORMAT_LC3'))); ?>
							</time>
						</span>
					<?php endif; ?>
					<?php if ($params->get('show_create_date')) : ?>
						<span class="create">
							<time datetime="<?php echo HTMLHelper::_('date', $item->created, 'c'); ?>" itemprop="dateCreated">
								<?php echo Text::sprintf('COM_CONTENT_CREATED_DATE_ON', HTMLHelper::_('date', $item->created, Text::_('DATE_FORMAT_LC3'))); ?>
							</time>
						</span>
					<?php endif; ?>

					<?php if ($params->get('show_hits')) : ?>
						<span class="hits">
							<meta itemprop="interactionCount" content="UserPageVisits:<?php echo $item->hits; ?>">
							<?php echo Text::sprintf('COM_CONTENT_ARTICLE_HITS', $item->hits); ?>
						</span>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<?php // Content is generated by content plugin event "onContentBeforeDisplay" ?>
		<?php echo $item->event->beforeDisplayContent; ?>
		<?php if ($params->get('show_intro')) : ?>
			<div class="intro" itemprop="articleBody"> <?php echo HTMLHelper::_('string.truncateComplex', $item->introtext, $params->get('introtext_limit')); ?> </div>
		<?php endif; ?>

		<?php if ($useDefList && ($info == 1 || $info == 2)) : ?>
			<div class="article-info">
				<?php if ($info == 1) : ?>
					<?php if ($params->get('show_parent_category') && !empty($item->parent_slug)) : ?>
						<span class="parent-category-name">
							<?php $title = $this->escape($item->parent_title); ?>
							<?php if ($params->get('link_parent_category') && $item->parent_slug) : ?>
								<?php $url = '<a href="' . Route::_(version_compare($JoomlaVersion, '4.0.0', '>=') ? Joomla\Component\Content\Site\Helper\RouteHelper::getCategoryRoute($item->parent_slug) : ContentHelperRoute::getCategoryRoute($item->parent_slug)) . '" itemprop="genre">' . $title . '</a>'; ?>
								<?php echo Text::sprintf('COM_CONTENT_PARENT', $url); ?>
							<?php else : ?>
								<?php echo Text::sprintf('COM_CONTENT_PARENT', '<span itemprop="genre">' . $title . '</span>'); ?>
							<?php endif; ?>
						</span>
					<?php endif; ?>
					<?php if ($params->get('show_category')) : ?>
						<span class="category-name">
							<?php $title = $this->escape($item->category_title); ?>
							<?php if ($params->get('link_category') && $item->catslug) : ?>
								<?php $url = '<a href="' . Route::_(version_compare($JoomlaVersion, '4.0.0', '>=') ? Joomla\Component\Content\Site\Helper\RouteHelper::getCategoryRoute($item->catslug) : ContentHelperRoute::getCategoryRoute($item->catslug)) . '" itemprop="genre">' . $title . '</a>'; ?>
								<?php echo Text::sprintf('COM_CONTENT_CATEGORY', $url); ?>
							<?php else : ?>
								<?php echo Text::sprintf('COM_CONTENT_CATEGORY', '<span itemprop="genre">' . $title . '</span>'); ?>
							<?php endif; ?>
						</span>
					<?php endif; ?>
					<?php if ($params->get('show_publish_date')) : ?>
						<span class="published">
							<time datetime="<?php echo HTMLHelper::_('date', $item->publish_up, 'c'); ?>" itemprop="datePublished">
								<?php echo Text::sprintf('COM_CONTENT_PUBLISHED_DATE_ON', HTMLHelper::_('date', $item->publish_up, Text::_('DATE_FORMAT_LC3'))); ?>
							</time>
						</span>
					<?php endif; ?>
				<?php endif; ?>

				<?php if ($params->get('show_create_date')) : ?>
					<span class="create">
						<time datetime="<?php echo HTMLHelper::_('date', $item->created, 'c'); ?>" itemprop="dateCreated">
							<?php echo Text::sprintf('COM_CONTENT_CREATED_DATE_ON', HTMLHelper::_('date', $item->modified, Text::_('DATE_FORMAT_LC3'))); ?>
						</time>
					</span>
				<?php endif; ?>
				<?php if ($params->get('show_modify_date')) : ?>
					<span class="modified">
						<time datetime="<?php echo HTMLHelper::_('date', $item->modified, 'c'); ?>" itemprop="dateModified">
							<?php echo Text::sprintf('COM_CONTENT_LAST_UPDATED', HTMLHelper::_('date', $item->modified, Text::_('DATE_FORMAT_LC3'))); ?>
						</time>
					</span>
				<?php endif; ?>
				<?php if ($params->get('show_hits')) : ?>
					<span class="hits">
						<meta content="UserPageVisits:<?php echo $item->hits; ?>" itemprop="interactionCount">
						<?php echo Text::sprintf('COM_CONTENT_ARTICLE_HITS', $item->hits); ?>
					</span>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<?php // Content is generated by content plugin event "onContentAfterDisplay" ?>
		<?php echo $item->event->afterDisplayContent; ?>
	</div>
	<?php endforeach; ?>
</div>

<?php if (($this->params->def('show_pagination', 1) == 1 || ($this->params->get('show_pagination') == 2)) && ($this->pagination->pagesTotal > 1)) : ?>
	<nav class="pagination-wrapper d-lg-flex justify-content-between w-100">
		<?php echo $this->pagination->getPagesLinks(); ?>
		<?php if ($this->params->def('show_pagination_results', 1)) : ?>
			<div class="pagination-counter text-muted mb-4">
				<?php echo $this->pagination->getPagesCounter(); ?>
			</div>
		<?php endif; ?>
	</nav>
<?php endif; ?>
