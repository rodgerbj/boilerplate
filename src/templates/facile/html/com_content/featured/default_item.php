<?php

defined('_JEXEC') or die;

use Joomla\CMS\Router\Route;
use Joomla\Component\Content\Site\Helper\RouteHelper;
use Joomla\CMS\Layout\LayoutHelper;
?>

<?php echo LayoutHelper::render('joomla.content.intro_image', $this->item); ?>

<div>
	<h2>
		<a href="<?php echo Route::_(RouteHelper::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language)); ?>">
			<?php echo $this->escape($this->item->title); ?>
		</a>
	</h2>

	<?php echo $this->item->introtext; ?>
</div>
