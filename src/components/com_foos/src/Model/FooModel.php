<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_foos
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\Foos\Site\Model;

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Model\BaseDatabaseModel;

/**
 * Foo model for the Joomla Foos component.
 *
 * @since  4.0.0
 */
class FooModel extends BaseDatabaseModel
{
	/**
	 * @var string message
	 */
	protected $message = null;

	/**
	 * Get the message
	 *
	 * @param   integer  $pk  Id for the foo
	 *
	 * @return  string  The message to be displayed to the user
	 *
	 * @since   1.0
	 */
	public function getMsg($pk = null)
	{
		$app = Factory::getApplication();
		$this->message = $app->input->get('show_text', "Hi");

		return $this->message;
	}
}
