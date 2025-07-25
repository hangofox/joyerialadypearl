<?php
/**
 * @name		Menu Manager CK
 * @package		com_maximenuck
 * @copyright	Copyright (C) 2014. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @author		Cedric Keiflin - http://www.template-creator.com - http://www.joomlack.fr
 */

defined('_JEXEC') or die;
jimport('joomla.application.component.controlleradmin');

class MaximenuckControllerMigration extends \Joomla\CMS\MVC\Controller\AdminController
{
	public function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask('unsetDefault',	'setDefault');
	}
	
	public function cancel() {
		//Redirect back to joomla admin
		$this->setRedirect(\Joomla\CMS\Router\Route::_(\Joomla\CMS\Uri\Uri::base(true) . '/index.php', false));
	}

	/**
	 * Proxy for getModel
	 * @since   1.6
	 */
	public function getModel($name = 'Item', $prefix = 'MaximenuckModel', $config = array())
	{
		return parent::getModel($name, $prefix, array('ignore_request' => true));
	}

	/**
	 * Rebuild the nested set tree.
	 *
	 * @return  bool	False on failure or error, true on success.
	 * @since   1.6
	 */
	public function rebuild()
	{
		\Joomla\CMS\Session\Session::checkToken() or jexit(\Joomla\CMS\Language\Text::_('JINVALID_TOKEN'));

		$this->setRedirect('index.php?option=com_maximenuck&view=items');

		$model = $this->getModel();

		if ($model->rebuild())
		{
			// Reorder succeeded.
			$this->setMessage(\Joomla\CMS\Language\Text::_('COM_MENUS_ITEMS_REBUILD_SUCCESS'));
			return true;
		}
		else
		{
			// Rebuild failed.
			$this->setMessage(\Joomla\CMS\Language\Text::sprintf('COM_MENUS_ITEMS_REBUILD_FAILED'));
			return false;
		}
	}

	public function saveorder()
	{
		\Joomla\CMS\Session\Session::checkToken() or jexit(\Joomla\CMS\Language\Text::_('JINVALID_TOKEN'));

		// Get the arrays from the Request
		$order = $this->input->post->get('order', null, 'array');
		$originalOrder = explode(',', $this->input->getString('original_order_values'));

		// Make sure something has changed
		if (!($order === $originalOrder))
		{
			parent::saveorder();
		}
		else
		{
			// Nothing to reorder
			$this->setRedirect(\Joomla\CMS\Router\Route::_('index.php?option='.$this->option.'&view='.$this->view_list, false));
			return true;
		}
	}

	/**
	 * Method to set the home property for a list of items
	 *
	 * @since   1.6
	 */
	public function setDefault()
	{
		// Check for request forgeries
		\Joomla\CMS\Session\Session::checkToken('request') or die(\Joomla\CMS\Language\Text::_('JINVALID_TOKEN'));

		// Get items to publish from the request.
		$cid   = $this->input->get('cid', array(), 'array');
		$data  = array('setDefault' => 1, 'unsetDefault' => 0);
		$task  = $this->getTask();
		$value = \Joomla\Utilities\ArrayHelper::getValue($data, $task, 0, 'int');

		if (empty($cid))
		{
			throw new Exception(\Joomla\CMS\Language\Text::_($this->text_prefix.'_NO_ITEM_SELECTED'), 500);
		}
		else
		{
			// Get the model.
			$model = $this->getModel();

			// Make sure the item ids are integers
			\Joomla\Utilities\ArrayHelper::toInteger($cid);

			// Publish the items.
			if (!$model->setHome($cid, $value))
			{
				throw new Exception($model->getError(), 500);
			} else {
				if ($value == 1)
				{
					$ntext = 'COM_MENUS_ITEMS_SET_HOME';
				}
				else {
					$ntext = 'COM_MENUS_ITEMS_UNSET_HOME';
				}
				$this->setMessage(\Joomla\CMS\Language\Text::plural($ntext, count($cid)));
			}
		}

		$this->setRedirect(\Joomla\CMS\Router\Route::_('index.php?option='.$this->option.'&view='.$this->view_list, false));
	}

	/**
	 * Method to save the submitted ordering values for records via AJAX.
	 *
	 * @return  void
	 *
	 * @since   3.0
	 */
	public function saveOrderAjax()
	{
		\Joomla\CMS\Session\Session::checkToken() or jexit(\Joomla\CMS\Language\Text::_('JINVALID_TOKEN'));

		// Get the arrays from the Request
		$pks   = $this->input->post->get('cid', null, 'array');
		$order = $this->input->post->get('order', null, 'array');
		$originalOrder = explode(',', $this->input->getString('original_order_values'));

		// Make sure something has changed
		if (!($order === $originalOrder))
		{
			// Get the model
			$model = $this->getModel();
			// Save the ordering
			$return = $model->saveorder($pks, $order);
			if ($return)
			{
				echo "1";
			}
		}
		// Close the application
		\Joomla\CMS\Factory::getApplication()->close();
	}
	
	
}
