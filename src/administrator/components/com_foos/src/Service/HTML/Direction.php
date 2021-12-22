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

use FooNamespace\Component\Foos\Administrator\Service\HTML\Directions\Image;
use FooNamespace\Component\Foos\Administrator\Service\HTML\Directions\Map;
use FooNamespace\Component\Foos\Administrator\Service\HTML\Directions\Text;

/**
 * Directions Helper
 *
 * @since  __DEPLOY_VERSION__
 */
class Direction
{
	protected $directionTool1;
	protected $directionTool2;
	protected $directionTool3;

	/**
	 * Service constructor
	 *
	 * @since   __DEPLOY_VERSION__
	 */
	public function __construct()
	{
		$this->directionTool1 = new Image;
		$this->directionTool2 = new Map;
		$this->directionTool3 = new Text;
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
		return
		$this->directionTool1->findDirection() . "<br>" .
		$this->directionTool2->findDirection() . "<br>" .
		$this->directionTool3->findDirection();
	}
}
