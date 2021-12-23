<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_foos
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
\defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Helper\ContentHelper;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use FooNamespace\Component\Foos\Administrator\Service\HTML\Directions\Map as DirectionMap;
use FooNamespace\Component\Foos\Administrator\Service\HTML\Directions\Text as DirectionText;
use FooNamespace\Component\Foos\Administrator\Service\HTML\Directions\Image as DirectionImage;

$canDo   = ContentHelper::getActions('com_foos', 'category', $this->item->catid);
$canEdit = $canDo->get('core.edit') || ($canDo->get('core.edit.own') && $this->item->created_by == Factory::getUser()->id);
$tparams = $this->item->params;

if ($tparams->get('show_name')) {
	if ($this->Params->get('show_foo_name_label')) {
		echo Text::_('COM_FOOS_NAME');
	}

	echo $this->item->name;
}
?>

<?php if ($canEdit) : ?>
	<div class="icons">
		<div class="float-end">
			<div>
				<?php echo HTMLHelper::_('fooicon.edit', $this->item, $tparams); ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<hr>
<?php
	$direction = Factory::getApplication()->bootComponent('com_foos')->getDirection();
	echo $direction->displayDirection();
?>
<hr>
<?php
	$direction->setDirectionTool(new DirectionMap);
	echo $direction->displayDirection();
?>
<hr>
<?php
	$direction->setDirectionTool(new DirectionImage);
	echo $direction->displayDirection();
?>
<hr>

<?php
echo $this->item->event->afterDisplayTitle;
echo $this->item->event->beforeDisplayContent;
echo $this->item->event->afterDisplayContent;
