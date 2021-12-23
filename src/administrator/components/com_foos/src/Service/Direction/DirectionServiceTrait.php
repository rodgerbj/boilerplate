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
 * Trait to implement DirectionServiceInterface
 *
 * @since  __DEPLOY_VERSION__
 */
trait DirectionServiceTrait
{
	/**
	 * The direction extension.
	 *
	 * @var DirectionExtensionInterface
	 *
	 * @since  __DEPLOY_VERSION__
	 */
	private $directionExtension = null;

	/**
	 * Returns the directions extension helper class.
	 *
	 * @return  DirectionExtensionInterface
	 *
	 * @since  __DEPLOY_VERSION__
	 */
	public function getDirectionExtension(): DirectionExtensionInterface
	{
		return $this->directionExtension;
	}

	/**
	 * The direction extension.
	 *
	 * @param   DirectionExtensionInterface  $directionExtension  The extension
	 *
	 * @return  void
	 *
	 * @since  __DEPLOY_VERSION__
	 */
	public function setDirectionExtension(DirectionExtensionInterface $directionExtension)
	{
		$this->directionExtension = $directionExtension;
	}
}
