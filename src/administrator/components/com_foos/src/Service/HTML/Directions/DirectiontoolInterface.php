<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_foos
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace FooNamespace\Component\Foos\Administrator\Service\HTML\Directions;

\defined('_JEXEC') or die;

use Joomla\CMS\Application\CMSApplication;

/**
 * Content Component HTML Helper
 *
 * @since  __DEPLOY_VERSION__
 */
interface DirectiontoolInterface
{
	/**
	 * Method to generate a routing direction for the given parameters
	 *
	 * @param   object    $category  The category information
	 * @param   Registry  $params    The item parameters
	 * @param   array     $attribs   Optional attributes for the link
	 *
	 * @return  string  The HTML markup for the create item link
	 *
	 * @since  __DEPLOY_VERSION__
	 */
	public static function findDirection();
}
