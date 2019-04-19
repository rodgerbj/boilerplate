<?php

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

if ($this->get('State')->get('params')->get('show_foo_name_label')) {
	echo Text::_('COM_FOOS_NAME') . $this->Item->name;
} else {
	echo $this->Item->name;
}
