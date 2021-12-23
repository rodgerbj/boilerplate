<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_foos
 *
 * @copyright  (C) 2017 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace FooNamespace\Component\Foos\Administrator\Service\Direction;

\defined('JPATH_PLATFORM') or die;

/**
 * Direction Extension Interface for the helper classes
 *
 * @since  __DEPLOY_VERSION__
 */
interface DirectionExtensionInterface
{
	/**
	 * Method to get the direction for a given item.
	 *
	 * @return  string   Direction
	 *
	 * @since  __DEPLOY_VERSION__
	 */
	public static function findDirection();
}
