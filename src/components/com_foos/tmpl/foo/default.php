<?php
defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

echo Text::_('COM_FOOS_NAME') . $this->Item->name;
