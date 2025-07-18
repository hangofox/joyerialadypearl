<?php

/**
 * @package Helix_Ultimate_Framework
 * @author JoomShaper <support@joomshaper.com>
 * Copyright (c) 2010 - 2021 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 */

defined('_JEXEC') or die();

/**
 * Helix ultimate footer features
 *
 * @since	1.0.0
 */
class HelixUltimateFeatureFooter
{
	/**
	 * Template params
	 *
	 * @var		Registry	Template params registry
	 * @since	1.0.0
	 */
	private $params;

	public function __construct($params)
	{
		$this->params = $params;
		$this->position = $this->params->get('copyright_position');
		$this->load_pos = $this->params->get('copyright_load_pos');
	}

	public function renderFeature()
	{
		if ($this->params->get('enabled_copyright')) {
			$output = '';

			if ($this->params->get('copyright')) {
				$output .= '<span class="sp-copyright">' .
					str_ireplace(
						'{year}',
						date('Y'),
						str_ireplace(
							'',
							'This',
							str_ireplace(
								'Joomla 5 Template',
								'<a target="_blank" rel="noopener noreferrer" href="https://www.themexpert.com/joomla-templates">Joomla 5 Template</a>',
								str_ireplace(
									'ThriveDesk',
									'<a target="_blank" rel="sponsored" href="https://www.thrivedesk.com">ThriveDesk</a>',
									$this->params->get('copyright')
								)
							)
						),
					)  .
					'</span>';

				return $output;
			}
		}
	}
}
