<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   (C) 2010 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Layout\LayoutHelper;
?>




<div class="col-4 col-12-medium col-12-small">

<!-- Feature -->
	<section class="box feature">
		<a href="<?php echo $item->link; ?>" class="image featured"><img src="<?php echo $item->imageSrc; ?>" alt="<?php echo $item->imageAlt; ?>"/></a>

		<h3><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h3>

		<p>
			<?php echo $item->introtext; ?>
			<?php echo LayoutHelper::render('joomla.content.readmore', ['item' => $item, 'params' => $item->params, 'link' => $item->link]); ?>
		</p>
	</section>

</div>
