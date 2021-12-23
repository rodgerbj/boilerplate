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
 * The Direction service.
 *
 * @since  __DEPLOY_VERSION__
 */
interface DirectionServiceInterface
{
	/**
	 * Returns the Directions extension helper class.
	 *
	 * @return  DirectionExtensionInterface
	 *
	 * @since  __DEPLOY_VERSION__
	 */
	public function getDirectionExtension(): DirectionExtensionInterface;
}
