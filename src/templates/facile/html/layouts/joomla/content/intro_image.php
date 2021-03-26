<?php
defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\Component\Content\Site\Helper\RouteHelper;
use Joomla\CMS\Router\Route;

$images = json_decode($displayData->images);
$img = HTMLHelper::cleanImageURL($images->image_intro);
$alt = empty($images->image_intro_alt) && empty($images->image_intro_alt_empty) ? '' : 'alt="'. htmlspecialchars($images->image_intro_alt, ENT_COMPAT, 'UTF-8') .'"';
?>

<a href="<?php echo Route::_(RouteHelper::getArticleRoute($displayData->slug, $displayData->catid, $displayData->language)); ?>" class="image featured">
<img src="<?php echo htmlspecialchars($img->url, ENT_COMPAT, 'UTF-8'); ?>" alt="<?php echo $alt; ?>" />
</a>
