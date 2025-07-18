<?php
/**
 * @name		Maximenu CK params
 * @package		com_maximenuck
 * @copyright	Copyright (C) 2014. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @author		Cedric Keiflin - http://www.template-creator.com - http://www.joomlack.fr
 */

defined('_JEXEC') or die;
$this->input = new \Joomla\CMS\Input\Input();
$document = \Joomla\CMS\Factory::getDocument();
// get the language direction
$langdirection = $document->getDirection();
$menubgcolor = '';
$logoimage = false;
$microdata_ul = '';
$microdata_li = '';
$microdata_a = '';
// generate the menu items
$items = array(
	(object) array(
		'ftitle' => 'Lorem'
		, 'id' => 1
		, 'level' => 1
		, 'anchor_title' => ''
		, 'desc' => ''
		, 'fparams' => new \Joomla\Registry\Registry()
		, 'menu_image' => ''
		, 'menu_icon' => ''
		, 'classe' => ' item1 parent first'
		, 'liclass' => ''
		, 'type' => ''
		, 'anchor_css' => ''
		, 'flink' => 'javascript:void(0)'
		, 'rel' => ''
		, 'deeper' => true
		, 'shallower' => false
		, 'level_diff' => -1
		, 'is_end' => false
		, 'leftmargin' => ''
		, 'topmargin' => ''
		, 'colbgcolor' => ''
		, 'submenucontainerheight' => ''
		, 'parent' => true
	),
	(object) array(
		'ftitle' => 'Curabitur'
		, 'id' => 2
		, 'level' => 2
		, 'anchor_title' => ''
		, 'desc' => ''
		, 'fparams' => new \Joomla\Registry\Registry()
		, 'menu_image' => ''
		, 'menu_icon' => ''
		, 'classe' => ' item2 parent'
		, 'liclass' => ''
		, 'type' => ''
		, 'anchor_css' => ''
		, 'flink' => 'javascript:void(0)'
		, 'rel' => ''
		, 'deeper' => true
		, 'shallower' => false
		, 'level_diff' => -1
		, 'is_end' => false
		, 'leftmargin' => ''
		, 'topmargin' => ''
		, 'colbgcolor' => ''
		, 'submenucontainerheight' => ''
		, 'parent' => true
	),
	(object) array(
		'ftitle' => 'Elementum'
		, 'id' => 3
		, 'level' => 3
		, 'anchor_title' => ''
		, 'desc' => ''
		, 'fparams' => new \Joomla\Registry\Registry()
		, 'menu_image' => ''
		, 'menu_icon' => ''
		, 'classe' => ' item2'
		, 'liclass' => ''
		, 'type' => ''
		, 'anchor_css' => ''
		, 'flink' => 'javascript:void(0)'
		, 'rel' => ''
		, 'deeper' => false
		, 'shallower' => false
		, 'level_diff' => 0
		, 'is_end' => false
		, 'leftmargin' => ''
		, 'topmargin' => ''
		, 'colbgcolor' => ''
		, 'submenucontainerheight' => ''
		, 'parent' => false
	),
	(object) array(
		'ftitle' => 'Lobortis nec'
		, 'id' => 4
		, 'level' => 3
		, 'anchor_title' => ''
		, 'desc' => ''
		, 'fparams' => new \Joomla\Registry\Registry()
		, 'menu_image' => ''
		, 'menu_icon' => ''
		, 'classe' => ' item2'
		, 'liclass' => ''
		, 'type' => ''
		, 'anchor_css' => ''
		, 'flink' => 'javascript:void(0)'
		, 'rel' => ''
		, 'deeper' => false
		, 'shallower' => true
		, 'level_diff' => 1
		, 'is_end' => false
		, 'leftmargin' => ''
		, 'topmargin' => ''
		, 'colbgcolor' => ''
		, 'submenucontainerheight' => ''
		, 'parent' => false
	),
	(object) array(
		'ftitle' => 'Dictum nisi'
		, 'id' => 5
		, 'level' => 2
		, 'anchor_title' => ''
		, 'desc' => ''
		, 'fparams' => new \Joomla\Registry\Registry()
		, 'menu_image' => ''
		, 'menu_icon' => ''
		, 'classe' => ' item3'
		, 'liclass' => ''
		, 'type' => ''
		, 'anchor_css' => ''
		, 'flink' => 'javascript:void(0)'
		, 'rel' => ''
		, 'deeper' => false
		, 'shallower' => false
		, 'level_diff' => 0
		, 'is_end' => false
		, 'leftmargin' => ''
		, 'topmargin' => ''
		, 'colbgcolor' => ''
		, 'submenucontainerheight' => ''
		, 'parent' => false
	),
	(object) array(
		'ftitle' => 'Semper orci'
		, 'id' => 6
		, 'level' => 2
		, 'anchor_title' => ''
		, 'desc' => ''
		, 'fparams' => new \Joomla\Registry\Registry()
		, 'menu_image' => ''
		, 'menu_icon' => ''
		, 'classe' => ' item4'
		, 'liclass' => ''
		, 'type' => ''
		, 'anchor_css' => ''
		, 'flink' => 'javascript:void(0)'
		, 'rel' => ''
		, 'deeper' => false
		, 'shallower' => true
		, 'level_diff' => 1
		, 'is_end' => false
		, 'leftmargin' => ''
		, 'topmargin' => ''
		, 'colbgcolor' => ''
		, 'submenucontainerheight' => ''
		, 'parent' => false
	),
	(object) array(
		'ftitle' => 'Dolor sit'
		, 'id' => 8
		, 'level' => 1
		, 'anchor_title' => ''
		, 'desc' => ''
		, 'fparams' => new \Joomla\Registry\Registry('{"maximenu_icon":"fa fa-plane"}')
		, 'menu_image' => ''
		, 'menu_icon' => ''
		, 'classe' => ' item6 parent'
		, 'liclass' => ''
		, 'type' => ''
		, 'anchor_css' => ''
		, 'flink' => 'javascript:void(0)'
		, 'rel' => ''
		, 'deeper' => true
		, 'shallower' => false
		, 'level_diff' => -1
		, 'is_end' => false
		, 'leftmargin' => ''
		, 'topmargin' => ''
		, 'colbgcolor' => ''
		, 'submenucontainerheight' => ''
		, 'submenuswidth' => 400
		, 'nextcolumnwidth' => '50%'
		, 'parent' => true
	),
	(object) array(
		'ftitle' => 'Column 1'
		, 'id' => 9
		, 'level' => 2
		, 'anchor_title' => ''
		, 'desc' => ''
		, 'fparams' => new \Joomla\Registry\Registry()
		, 'menu_image' => ''
		, 'menu_icon' => ''
		, 'classe' => ' item7 headingck'
		, 'liclass' => ''
		, 'type' => 'heading'
		, 'anchor_css' => ''
		, 'flink' => 'javascript:void(0)'
		, 'rel' => ''
		, 'deeper' => false
		, 'shallower' => false
		, 'level_diff' => 0
		, 'is_end' => false
		, 'leftmargin' => ''
		, 'topmargin' => ''
		, 'colbgcolor' => ''
		, 'submenucontainerheight' => ''
		, 'columnwidth' => '50%'
		, 'colonne' => true
		, 'parent' => false
	),
	(object) array(
		'ftitle' => 'Cras massa'
		, 'id' => 10
		, 'level' => 2
		, 'anchor_title' => ''
		, 'desc' => ''
		, 'fparams' => new \Joomla\Registry\Registry('{"maximenu_icon":"fa fa-bus"}')
		, 'menu_image' => ''
		, 'menu_icon' => ''
		, 'classe' => ' item8'
		, 'liclass' => ''
		, 'type' => ''
		, 'anchor_css' => ''
		, 'flink' => 'javascript:void(0)'
		, 'rel' => ''
		, 'deeper' => false
		, 'shallower' => false
		, 'level_diff' => 0
		, 'is_end' => false
		, 'leftmargin' => ''
		, 'topmargin' => ''
		, 'colbgcolor' => ''
		, 'submenucontainerheight' => ''
		, 'parent' => false
	),
	(object) array(
		'ftitle' => 'Faucibus'
		, 'id' => 11
		, 'level' => 2
		, 'anchor_title' => ''
		, 'desc' => ''
		, 'fparams' => new \Joomla\Registry\Registry('{"maximenu_icon":"fa fa-calendar"}')
		, 'menu_image' => ''
		, 'menu_icon' => ''
		, 'classe' => ' item9'
		, 'liclass' => ''
		, 'type' => ''
		, 'anchor_css' => ''
		, 'flink' => 'javascript:void(0)'
		, 'rel' => ''
		, 'deeper' => false
		, 'shallower' => false
		, 'level_diff' => 0
		, 'is_end' => false
		, 'leftmargin' => ''
		, 'topmargin' => ''
		, 'colbgcolor' => ''
		, 'submenucontainerheight' => ''
		, 'parent' => false
	),
	(object) array(
		'ftitle' => 'Dapibus ligula'
		, 'id' => 12
		, 'level' => 2
		, 'anchor_title' => ''
		, 'desc' => ''
		, 'fparams' => new \Joomla\Registry\Registry('{"maximenu_icon":"fa fa-cutlery"}')
		, 'menu_image' => ''
		, 'menu_icon' => ''
		, 'classe' => ' item10'
		, 'liclass' => ''
		, 'type' => ''
		, 'anchor_css' => ''
		, 'flink' => 'javascript:void(0)'
		, 'rel' => ''
		, 'deeper' => false
		, 'shallower' => false
		, 'level_diff' => 0
		, 'is_end' => false
		, 'leftmargin' => ''
		, 'topmargin' => ''
		, 'colbgcolor' => ''
		, 'submenucontainerheight' => ''
		, 'parent' => false
	),
	(object) array(
		'ftitle' => 'Column 2'
		, 'id' => 13
		, 'level' => 2
		, 'anchor_title' => ''
		, 'desc' => ''
		, 'fparams' => new \Joomla\Registry\Registry()
		, 'menu_image' => ''
		, 'menu_icon' => ''
		, 'classe' => ' item11 headingck'
		, 'liclass' => ''
		, 'type' => 'heading'
		, 'anchor_css' => ''
		, 'flink' => 'javascript:void(0)'
		, 'rel' => ''
		, 'deeper' => false
		, 'shallower' => false
		, 'level_diff' => 0
		, 'is_end' => false
		, 'leftmargin' => ''
		, 'topmargin' => ''
		, 'colbgcolor' => ''
		, 'submenucontainerheight' => ''
		, 'columnwidth' => '50%'
		, 'colonne' => true
		, 'parent' => false
	),
	(object) array(
		'ftitle' => 'Eu placerat'
		, 'id' => 14
		, 'level' => 2
		, 'anchor_title' => ''
		, 'desc' => ''
		, 'fparams' => new \Joomla\Registry\Registry()
		, 'menu_image' => ''
		, 'menu_icon' => ''
		, 'classe' => ' item12'
		, 'liclass' => ''
		, 'type' => ''
		, 'anchor_css' => ''
		, 'flink' => 'javascript:void(0)'
		, 'rel' => ''
		, 'deeper' => false
		, 'shallower' => false
		, 'level_diff' => 0
		, 'is_end' => false
		, 'leftmargin' => ''
		, 'topmargin' => ''
		, 'colbgcolor' => ''
		, 'submenucontainerheight' => ''
		, 'parent' => false
	),
	(object) array(
		'ftitle' => 'Felis posuere'
		, 'id' => 15
		, 'level' => 2
		, 'anchor_title' => ''
		, 'desc' => ''
		, 'fparams' => new \Joomla\Registry\Registry()
		, 'menu_image' => ''
		, 'menu_icon' => ''
		, 'classe' => ' item13'
		, 'liclass' => ''
		, 'type' => ''
		, 'anchor_css' => ''
		, 'flink' => 'javascript:void(0)'
		, 'rel' => ''
		, 'deeper' => false
		, 'shallower' => false
		, 'level_diff' => 0
		, 'is_end' => false
		, 'leftmargin' => ''
		, 'topmargin' => ''
		, 'colbgcolor' => ''
		, 'submenucontainerheight' => ''
		, 'parent' => false
	),
	(object) array(
		'ftitle' => 'Adipiscing'
		, 'id' => 16
		, 'level' => 2
		, 'anchor_title' => ''
		, 'desc' => ''
		, 'fparams' => new \Joomla\Registry\Registry()
		, 'menu_image' => ''
		, 'menu_icon' => ''
		, 'classe' => ' item14'
		, 'liclass' => ''
		, 'type' => ''
		, 'anchor_css' => ''
		, 'flink' => 'javascript:void(0)'
		, 'rel' => ''
		, 'deeper' => false
		, 'shallower' => true
		, 'level_diff' => 1
		, 'is_end' => false
		, 'leftmargin' => ''
		, 'topmargin' => ''
		, 'colbgcolor' => ''
		, 'submenucontainerheight' => ''
		, 'parent' => false
	),
	(object) array(
		'ftitle' => 'Ipsum'
		, 'id' => 7
		, 'level' => 1
		, 'anchor_title' => ''
		, 'desc' => ''
		, 'fparams' => new \Joomla\Registry\Registry()
		, 'menu_image' => ''
		, 'menu_icon' => ''
		, 'classe' => ' item5'
		, 'liclass' => ''
		, 'type' => ''
		, 'anchor_css' => ''
		, 'flink' => 'javascript:void(0)'
		, 'rel' => ''
		, 'deeper' => false
		, 'shallower' => false
		, 'level_diff' => 0
		, 'is_end' => false
		, 'leftmargin' => ''
		, 'topmargin' => ''
		, 'colbgcolor' => ''
		, 'submenucontainerheight' => ''
		, 'parent' => false
	),
	(object) array(
		'ftitle' => 'Consectetur'
		, 'id' => 17
		, 'level' => 1
		, 'anchor_title' => ''
		, 'desc' => ''
		, 'fparams' => new \Joomla\Registry\Registry('{"maximenu_icon":"fa fa-car"}')
		, 'menu_image' => ''
		, 'menu_icon' => ''
		, 'classe' => ' item15 active current'
		, 'liclass' => ''
		, 'type' => ''
		, 'anchor_css' => ''
		, 'flink' => 'javascript:void(0)'
		, 'rel' => ''
		, 'deeper' => false
		, 'shallower' => false
		, 'level_diff' => 0
		, 'is_end' => true
		, 'leftmargin' => ''
		, 'topmargin' => ''
		, 'colbgcolor' => ''
		, 'submenucontainerheight' => ''
		, 'parent' => false
	)
);

// get the params from the module
$modulelayout = trim( $this->input->get('modulelayout', $this->params->get('layout', 'default'), 'string'), '_:');
$orientation = $this->input->get('orientation',  $this->params->get('orientation','horizontal'), 'string');
// set the params of the demo module
$params = new \Joomla\Registry\Registry();
$params->set('startLevel', '1');
$params->set('orientation', $orientation);
$params->set('menuid', 'maximenuck_previewmodule');

if ( ($modulelayout == 'pushdown' || $modulelayout == 'megatabs') && $orientation == 'vertical') {
	echo '<p style="color:red;font-weight:bold;">MAXIMENU MESSAGE : You can not use this layout for a Vertical menu</p>';
	die;
}

// load the module helper
if (file_exists(JPATH_ROOT.'/modules/mod_maximenuck/helper.php')) {
	require_once JPATH_ROOT.'/modules/mod_maximenuck/helper.php';
} else {
	echo \Joomla\CMS\Language\Text::_('CK_MODULE_MAXIMENUCK_NOT_INSTALLED');
	die;
}

// load the layout
if (file_exists(JPATH_ROOT.'/modules/mod_maximenuck/tmpl/'.$modulelayout.'.php')) {
	require_once JPATH_ROOT.'/modules/mod_maximenuck/tmpl/'.$modulelayout.'.php';
} else {
	require_once JPATH_ROOT.'/modules/mod_maximenuck/tmpl/default.php';
}

// add a message for pushdown
if ( $modulelayout === 'pushdown' ) {
	echo \Joomla\CMS\Language\Text::_('CK_PUSHDOWN_PREVIEW_NOT_AVAILABLE');
}