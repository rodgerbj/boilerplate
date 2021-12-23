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

use FooNamespace\Component\Foos\Administrator\Service\HTML\Directions\DirectiontoolInterface;

/**
 * Directions Helper
 *
 * @since  __DEPLOY_VERSION__
 */
class Direction
{
	protected $directionTool;

	/**
	 * Service constructor
	 *
	 * @since   __DEPLOY_VERSION__
	 */
	public function __construct()
	{
		$this->directionTool = null;
	}
	
	/**
	 * Method to get the directionTool
	 *
	 * @return  DirectiontoolInterface  The directionTool
	 *
	 * @since  __DEPLOY_VERSION__
	 */
	public function getDirectionTool()
	{
		return $this->directionTool->findDirection();
	}

	/**
	 * Method to get the directionTool
	 *
	 * @param   DirectiontoolInterface  $directionsTool  The directionTool
	 *
	 * @since  __DEPLOY_VERSION__
	 */
	public function setDirectionTool(DirectiontoolInterface $directionsTool)
	{
		$this->directionTool = $directionsTool;
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
		if ($this->directionTool !== null) {
			return $this->directionTool->findDirection();
		} else {
			return "";
		}
	}
}
