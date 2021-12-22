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
	 * @param   CMSApplication  $application  The application
	 *
	 * @since   __DEPLOY_VERSION__
	 */
public function __construct(DirectiontoolInterface $directionsTool)
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
<<<<<<< HEAD
		return $this->directionTool->findDirection();
=======
		return
		$this->directionTool1->findDirection() . "<br>" .
		$this->directionTool2->findDirection() . "<br>" .
		$this->directionTool3->findDirection();
>>>>>>> origin/t27a2
	}
}
