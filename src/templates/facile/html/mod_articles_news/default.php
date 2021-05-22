<?php

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

if (empty($list)) {
	return;
}

?>
<div>
	<div class="row">
			<!-- Feature -->
			<?php foreach ($list as $item) : ?>
				<?php require ModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>
			<?php endforeach; ?>
	</div>
</div>
