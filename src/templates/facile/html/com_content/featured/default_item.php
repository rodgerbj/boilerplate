<?php

defined('_JEXEC') or die;

use Joomla\CMS\Router\Route;
use Joomla\Component\Content\Site\Helper\RouteHelper;
use Joomla\CMS\HTML\HTMLHelper;
?>

<?php
	$images = json_decode($this->item->images);
	$img = HTMLHelper::cleanImageURL($images->image_intro);
	$alt = empty($images->image_intro_alt) && empty($images->image_intro_alt_empty) ? '' : 'alt="'. htmlspecialchars($images->image_intro_alt, ENT_COMPAT, 'UTF-8') .'"';
			
?>
<a href="<?php echo Route::_(RouteHelper::getArticleRoute($this->slug, $this->catid, $this->language)); ?>" class="image featured">
<img src="<?php echo htmlspecialchars($img->url, ENT_COMPAT, 'UTF-8'); ?>" alt="<?php echo $alt; ?>" />
</a>

<div>
	<h2>
		<a href="<?php echo Route::_(RouteHelper::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language)); ?>">
			<?php echo $this->escape($this->item->title); ?>
		</a>
	</h2>

	<?php echo $this->item->introtext; ?>
</div>
