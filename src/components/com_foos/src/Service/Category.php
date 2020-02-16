<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_foos
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\Foos\Site\Service;

defined('_JEXEC') or die;

use Joomla\CMS\Categories\Categories;

/**
 * Foos Component Category Tree
 *
 * @since  1.6
 */
class Category extends Categories
{
	/**
	 * Class constructor
	 *
	 * @param   array  $options  Array of options
	 *
	 * @since   1.6
	 */
	public function __construct($options = array())
	{
		$options['table']      = '#__foos_details';
		$options['extension']  = 'com_foos';
		$options['statefield'] = 'published';

		parent::__construct($options);
	}
}
