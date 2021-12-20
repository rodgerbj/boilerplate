<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_foos
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace FooNamespace\Component\Foos\Administrator\Service\HTML;

\defined('_JEXEC') or die;

/**
 * Directions Helper
 *
 * @since  __DEPLOY_VERSION__
 */
class Direction
{
	/**
	 * Service constructor
	 *
	 * @since   __DEPLOY_VERSION__
	 */
	public function __construct()
	{
	}
	
	/**
	 * Method to generate a routing direction
	 *
	 * @return  string  The HTML markup for the direction
	 *
	 * @since  __DEPLOY_VERSION__
	 */
	public function displayDirection()
	{
		return "The route description";
	}
}
