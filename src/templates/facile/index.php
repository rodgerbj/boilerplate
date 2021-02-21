<?php
/**
 * @package     Facile
 *
 * @copyright   Copyright (C) 2021 Facile. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

\defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Uri\Uri;

$app = Factory::getApplication();
$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');

if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . Uri::root() . htmlspecialchars($this->params->get('logoFile'), ENT_QUOTES) . '" alt="' . $sitename . '">';
}
elseif ($this->params->get('siteTitle'))
{
	$logo = '<span title="' . $sitename . '">' . htmlspecialchars($this->params->get('siteTitle'), ENT_COMPAT, 'UTF-8') . '</span>';
}
else
{
	$logo = '';
}
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="metas" />
</head>

<body>
	<header >
		<div>
			<div>
				<a href="<?php echo $this->baseurl; ?>/">
					<?php echo $logo; ?>
				</a>
				<?php if ($this->params->get('siteDescription')) : ?>
					<div><?php echo htmlspecialchars($this->params->get('siteDescription')); ?></div>
				<?php endif; ?>
			</div>
		</div>
		<div>
			<nav>
				<div>
					<jdoc:include type="modules" name="menu" />
				</div>
			</nav>
			<div>
				<jdoc:include type="modules" name="search" />
			</div>
		</div>
	</header>

	<div>
		<jdoc:include type="modules" name="banner" />
	</div>

	<div>
		<jdoc:include type="modules" name="top-a" />
	</div>

	<div>
		<jdoc:include type="modules" name="top-b" />
	</div>

	<div>
		<jdoc:include type="modules" name="sidebar-left" />
	</div>

	<div>
		<jdoc:include type="modules" name="breadcrumbs" />
		<jdoc:include type="modules" name="main-top" />
		<jdoc:include type="message" />
		<main>
		<jdoc:include type="component" />
		</main>
		<jdoc:include type="modules" name="main-bottom" />
	</div>

	<div>
		<jdoc:include type="modules" name="sidebar-right" />
	</div>

	<div>
		<jdoc:include type="modules" name="bottom-a" />
	</div>

	<div>
		<jdoc:include type="modules" name="bottom-b" />
	</div>

	<footer>
		<jdoc:include type="modules" name="footer" />
	</footer>

	<jdoc:include type="modules" name="debug" />

</body>
</html>
