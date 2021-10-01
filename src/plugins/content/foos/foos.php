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
class PlgContentFoos extends CMSPlugin
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
	 * @param   string   $context  The context of the content being passed to the plugin.
	 * @param   mixed    &$row     An object with a "text" property
	 * @param   mixed    $params   Additional parameters. See {@see PlgContentContent()}.
	 * @param   integer  $page     Optional page number. Unused. Defaults to zero.
	 *
	 * @return  void
	 *
	 * @since   __BUMP_VERSION__
	 */
	public function onContentPrepare($context, &$article, &$params, $page = 0)
	{
		$regex = '/<pre class=".*language-.*>/i';
		preg_match_all($regex, $article->text, $matches, PREG_SET_ORDER);

		$wa = Factory::getApplication()->getDocument()->getWebAssetManager();
		$wa->registerAndUseStyle('plg_content_foos', 'plg_content_foos/prism.css');
		$wa->registerAndUseScript('plg_content_foos', 'plg_content_foos/prism.js');

		if ($matches) {
			$app = Factory::getApplication();
			if ($app->isClient('site')) {
			}
		}
	}
}
