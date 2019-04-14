<?php

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

echo "<hr>Here you can show a headertext<hr>";

if ($this->Item->params->get('show_name')) {
	if ($this->Params->get('show_foo_name_label')) {
		echo Text::_('COM_FOOS_NAME') . $this->Item->name;
	} else {
		echo $this->Item->name;
	}
}
echo $this->Item->event->afterDisplayTitle; 
echo $this->Item->event->beforeDisplayContent;
echo $this->Item->event->afterDisplayContent;