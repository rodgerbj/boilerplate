<?php
/**
 * @package     Facile
 *
 * @copyright   Copyright (C) 2020 Facile. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

\defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Uri\Uri;

$app = Factory::getApplication();
$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');
$pageclass = $app->getMenu()->getActive()->getParams()->get('pageclass_sfx');

// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . Uri::root() . htmlspecialchars($this->params->get('logoFile'), ENT_QUOTES) . '" alt="' . $sitename . '">';
} else
{
	$logo = '<span title="' . $sitename . '">' . htmlspecialchars($this->params->get('siteTitle'), ENT_COMPAT, 'UTF-8') . '</span>';
}

$hasSidebar = '';

if ($this->countModules('sidebar-left'))
{
	$hasSidebar .= ' has-sidebar-left';
}

if ($this->countModules('sidebar-right'))
{
	$hasSidebar .= ' has-sidebar-right';
}

$this->setMetaData('viewport', 'width=device-width, initial-scale=1');

$menu = $this->getBuffer('modules', 'menu', $attribs = ['style' => 'none']);
$search = $this->getBuffer('modules', 'search', $attribs = ['style' => 'none']);
$banner = $this->getBuffer('modules', 'banner', $attribs = ['style' => 'default']);
$topA = $this->getBuffer('modules', 'top-a', $attribs = ['style' => 'default']);
$topB = $this->getBuffer('modules', 'top-b', $attribs = ['style' => 'default']);
$sidebarLeft = $this->getBuffer('modules', 'sidebar-left', $attribs = ['style' => 'default']);
$mainTop = $this->getBuffer('modules', 'main-top', $attribs = ['style' => 'default']);
$message = $this->getBuffer('message');
$breadcrumbs = $this->getBuffer('modules', 'breadcrumbs', $attribs = ['style' => 'none']);
$component = $this->getBuffer('component');
$mainBottom = $this->getBuffer('modules', 'main-bottom', $attribs = ['style' => 'default']);
$sidebarRight = $this->getBuffer('modules', 'sidebar-right', $attribs = ['style' => 'default']);
$bottomA = $this->getBuffer('modules', 'bottom-a', $attribs = ['style' => 'default']);
$bottomB = $this->getBuffer('modules', 'bottom-b', $attribs = ['style' => 'default']);
$footer = $this->getBuffer('modules', 'footer', $attribs = ['style' => 'none']);
$debug = $this->getBuffer('modules', 'debug', $attribs = ['style' => 'none']);
$metas = $this->getBuffer('metas');
$styles = $this->getBuffer('styles');
$scripts = $this->getBuffer('scripts');
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
<?php echo $metas; ?>
		<style><?php echo $css; ?></style>
	</head>
	<body class="site-grid site <?php echo $pageclass . $hasSidebar; ?>">
		<header class="grid-child container-header full-width header <?php echo $this->countModules('banner') ? 'has-banner' : ''; ?>">
			<nav class="navbar">
				<div class="navbar-brand">
					<a href="<?php echo $this->baseurl; ?>/">
<?php echo $logo; ?>
						<span class="sr-only"><?php echo Text::_('TPL_FACILE_LOGO_LABEL'); ?></span>
					</a>
<?php if ($this->params->get('siteDescription')) : ?>
						<div><?php echo htmlspecialchars($this->params->get('siteDescription')); ?></div>
					<?php endif; ?>
				</div>

<?php if ($this->countModules('menu') || $this->countModules('search')) : ?>
					<div class="navbar-menu">
					<?php echo $menu; ?>
						<?php if ($this->countModules('search')) : ?>
							<div>
							<?php echo $search; ?>
							</div>
							<?php endif; ?>
					</div>
					<span id="navbar-menu-toggle" class="navbar-menu-toggle"><span></span></span>
<?php endif; ?>
			</nav>
		</header>

<?php if ($this->countModules('banner')) : ?>
			<div class="grid-child full-width container-banner">
			<?php echo $banner; ?>
			</div>
			<?php endif; ?>

		<?php if ($this->countModules('top-a')) : ?>
			<div class="grid-child container-top-a">
			<?php echo $topA; ?>
			</div>
			<?php endif; ?>

		<?php if ($this->countModules('top-b')) : ?>
			<div class="grid-child container-top-b">
			<?php echo $topB; ?>
			</div>
			<?php endif; ?>

		<?php if ($this->countModules('sidebar-left')) : ?>
			<div class="grid-child container-sidebar-left">
			<?php echo $sidebarLeft; ?>
			</div>
			<?php endif; ?>

		<div class="grid-child container-component">
<?php echo $mainTop; ?>
			<?php echo $message; ?>
			<?php echo $breadcrumbs; ?>
			<?php echo $component; ?>
			<?php echo $mainBottom; ?>
		</div>

<?php if ($this->countModules('sidebar-right')) : ?>
			<div class="grid-child container-sidebar-right">
			<?php echo $sidebarRight; ?>
			</div>
			<?php endif; ?>

		<?php if ($this->countModules('bottom-a')) : ?>
			<div class="grid-child container-bottom-a">
			<?php echo $bottomA; ?>
			</div>
			<?php endif; ?>

		<?php if ($this->countModules('bottom-b')) : ?>
			<div class="grid-child container-bottom-b">
			<?php echo $bottomB; ?>
			</div>
			<?php endif; ?>

		<?php if ($this->countModules('footer')) : ?>
			<footer class="grid-child container-footer full-width footer">
				<div class="container">
	<?php echo $footer; ?>
				</div>
			</footer>
<?php endif; ?>

		<?php echo $debug; ?>

		<?php echo $scripts; ?>
	</body>
</html>
