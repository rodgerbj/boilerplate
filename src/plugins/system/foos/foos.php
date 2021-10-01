<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Content.foos
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Factory;

/**
 * Content plugin for syntax highlighting.
 *
 * @since  __BUMP_VERSION__
 */
class PlgSystemFoos extends CMSPlugin
{
	/**
	 * Load the language file on instantiation.
	 *
	 * @var    boolean
	 * @since  __BUMP_VERSION__
	 */
	protected $autoloadLanguage = true;

	/**
	 * Plugin that set code highlighting
	 *
	 * @return  void
	 *
	 * @since   __BUMP_VERSION__
	 */
	public function onAfterDispatch()
	{
		$wa = Factory::getApplication()->getDocument()->getWebAssetManager();
		$wa->registerAndUseStyle('plg_system_foos', 'plg_system_foos/prism.css');
		$wa->registerAndUseScript('plg_system_foos', 'plg_system_foos/prism.js');

	}
}
