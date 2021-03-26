<?php

defined('_JEXEC') or die;

use Joomla\CMS\Layout\LayoutHelper;
?>

<div class="col-4 col-12-medium col-12-small">
	<section class="box feature">
		<a href="<?php echo $item->link; ?>" class="image featured"><img src="<?php echo $item->imageSrc; ?>" alt="<?php echo $item->imageAlt; ?>"/></a>

		<h3><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h3>

		<p>
			<?php echo $item->introtext; ?>
			<?php echo LayoutHelper::render('joomla.content.readmore', ['item' => $item, 'params' => $item->params, 'link' => $item->link]); ?>
		</p>
	</section>
</div>
