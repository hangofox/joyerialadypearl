<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$item_heading = $params->get('item_heading', 'h4');
$item_images = json_decode($item->images);

?>

<!-- Intro Image -->
<?php if ($params->get('intro_image')): ?>
	<?php  if (isset($item_images->image_intro) and !empty($item_images->image_intro)) : ?>
	<?php $imgfloat = (empty($item_images->float_intro)) ? $params->get('float_intro') : $item_images->float_intro; ?>
		<div class="item_img img-intro img-intro__<?php echo htmlspecialchars($params->get('intro_image_align')); ?>">
        <?php  if (isset($item_images->image_fulltext) and !empty($item_images->image_fulltext)) : ?>
	        <a class="touchGalleryLink" href="<?php echo htmlspecialchars($item_images->image_fulltext); ?>">
      	<?php else: ?>
			<a href="<?php echo $item->link;?>">
        <?php endif; ?>
			<img
			<?php if ($item_images->image_intro_caption):
				echo 'class="caption"'.' title="' .htmlspecialchars($item_images->image_intro_caption) .'"';
			endif; ?>
			src="<?php echo htmlspecialchars($item_images->image_intro); ?>" alt="<?php echo htmlspecialchars($item_images->image_intro_alt); ?>"/></a> 
		</div>
	<?php endif; ?>
<?php endif; ?>

<div class="item_content">

	<!-- Item title -->
	<?php if ($params->get('item_title')) : ?>
		<<?php echo $item_heading; ?> class="item_title item_title__<?php echo $params->get('moduleclass_sfx'); ?>">
		<?php if ($params->get('link_titles') && $item->link != '') : ?>
			<a href="<?php echo $item->link;?>">
				<?php echo $item->title;?></a>
		<?php else : ?>
			<?php echo wrap_with_span($item->title); ?>
		<?php endif; ?>
		</<?php echo $item_heading; ?>>
	<?php endif; ?>

	<?php if (!$params->get('intro_only')) :
		echo $item->afterDisplayTitle;
	endif; ?>

	<?php if ($params->get('published')) : ?>
		<div class="item_published">
			<?php echo JHtml::_('date', $item->publish_up, JText::_('DATE_FORMAT_TPL1')); ?>
		</div>
	<?php endif; ?>

	<?php if ($params->get('createdby')) : ?>
		<div class="item_createdby">
			<?php $author = $item->author; ?>
			<?php $author = ($item->created_by_alias ? $item->created_by_alias : $author); ?>
				<?php echo JText::sprintf('TPL_BY', $author); ?>
		</div>
	<?php endif; ?>

	<?php echo $item->beforeDisplayContent; ?>

	<!-- Read More link -->
	<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) :
		$readMoreText = JText::_('TPL_COM_CONTENT_READ_MORE');
			if ($item->alternative_readmore){
				$readMoreText = $item->alternative_readmore;
			}
		echo '<a class="btn btn-info readmore" href="'.$item->link.'"><span>'. $readMoreText .'</span></a>';
	endif; ?>


</div>

<div class="clearfix"></div>

