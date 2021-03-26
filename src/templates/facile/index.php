<?php
/**
 * @package     Facile
 *
 * @copyright   Copyright (C) 2021 Facile. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

\defined('_JEXEC') or die;
$templatePath = 'templates/' . $this->template;
?>

<!DOCTYPE html>
<html lang="de">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo $templatePath; ?>/assets/css/main.css" />
	<title>Titel</title>
</head>

<body class="homepage is-preload">
	<div id="page-wrapper">

		<?php if ($this->countModules('menu', true)) : ?>
		<nav id="nav">
			<jdoc:include type="modules" name="menu" />
		</nav>
		<?php endif; ?>

		<section id="main">
			<div class="container">
				<div class="row gtr-200">
					<div class="row">

						<?php if ($this->countModules('top-a', true)) : ?>
						<jdoc:include type="modules" name="top-a" style="hr" />
						<?php endif; ?>

						<?php if ($this->countModules('sidebar-left', true)) : ?>
						<div class="col-3 col-12-medium">
							<div class="sidebar">
								<jdoc:include type="modules" name="sidebar-left" style="none" />
							</div>
						</div>
						<?php endif; ?>

						<div class="col-6 col-12-medium imp-medium">
							<div class="content">

								<?php if ($this->countModules('search', true)) : ?>
								<section id="search">
									<jdoc:include type="modules" name="breadcrumbs" style="none" />
								</section>
								<?php endif; ?>

								<?php if ($this->countModules('search', true)) : ?>
								<section id="search">
									<jdoc:include type="modules" name="search" style="none" />
								</section>
								<?php endif; ?>

								<jdoc:include type="modules" name="main-top" style="none" />
								<jdoc:include type="message" />
								<main>
									<jdoc:include type="component" />
								</main>

								<jdoc:include type="modules" name="main-bottom" style="none" />

							</div>
						</div>

						<?php if ($this->countModules('sidebar-right', true)) : ?>
						<div class="col-3 col-12-medium">
							<div class="sidebar">
								<jdoc:include type="modules" name="sidebar-right" style="none" />
							</div>
						</div>
						<?php endif; ?>

						<?php if ($this->countModules('bottom-a', true)) : ?>
						<jdoc:include type="modules" name="bottom-a" style="none" />
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>

		<footer id="footer">
			<?php if ($this->countModules('footer', true)) : ?>
			<div id="copyright">
				<jdoc:include type="modules" name="footer" />
			</div>
			<?php endif; ?>
		</footer>

		<jdoc:include type="modules" name="debug" />

		<script src="<?php echo $templatePath; ?>/assets/js/jquery.min.js"></script>
		<script src="<?php echo $templatePath; ?>/assets/js/jquery.dropotron.min.js"></script>
		<script src="<?php echo $templatePath; ?>/assets/js/jquery.scrolly.min.js"></script>
		<script src="<?php echo $templatePath; ?>/assets/js/browser.min.js"></script>
		<script src="<?php echo $templatePath; ?>/assets/js/breakpoints.min.js"></script>
		<script src="<?php echo $templatePath; ?>/assets/js/util.js"></script>
		<script src="<?php echo $templatePath; ?>/assets/js/main.js"></script>

	</div>
</body>
</html>
