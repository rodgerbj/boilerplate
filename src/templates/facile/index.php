<?php
/**
 * @package     Facile
 *
 * @copyright   Copyright (C) 2021 Facile. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

\defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;

$templatePath = 'templates/' . $this->template;
$wa  = $this->getWebAssetManager();
$wa->registerAndUseStyle('main_dark', $templatePath . '/assets/css/main.dark.css', [], ['media' => '(prefers-color-scheme: dark)']);
$wa->registerAndUseStyle('main_light', $templatePath . '/assets/css/main.css', [], ['media' => '(prefers-color-scheme: no-preference), (prefers-color-scheme: light)']);
HTMLHelper::_('jquery.framework');
$wa->registerAndUseScript('dropotron', $templatePath . '/assets/js/jquery.dropotron.min.js', [], ['defer' => true], []);
$wa->registerAndUseScript('scrolly', $templatePath . '/assets/js/jquery.scrolly.min.js', [], ['defer' => true], []);
$wa->registerAndUseScript('browser', $templatePath . '/assets/js/browser.min.js', [], ['defer' => true], []);
$wa->registerAndUseScript('breakpoints', $templatePath . '/assets/js/breakpoints.min.js', [], ['defer' => true], []);
$wa->registerAndUseScript('util', $templatePath . '/assets/js/util.js', [], ['defer' => true], []);
$wa->registerAndUseScript('main', $templatePath . '/assets/js/main.js', [], ['defer' => true], []);

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <jdoc:include type="metas" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <jdoc:include type="styles" />

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $templatePath . '/favicon_package'; ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $templatePath . '/favicon_package'; ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $templatePath . '/favicon_package'; ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $templatePath . '/favicon_package'; ?>/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <jdoc:include type="scripts" />
	<script type="module" src="https://unpkg.com/dark-mode-toggle"></script>

	<script>
    if (window.matchMedia('(prefers-color-scheme)').media !== 'not all') {
        console.log('Dark mode is supported');
    }
    if (matchMedia('(prefers-color-scheme: dark)').matches) {
        console.log('Dark mode');
    } else {
        console.log('Light  mode');
    }
    </script>


</head>

<body class="homepage is-preload">
    <div id="page-wrapper">
		<dark-mode-toggle></dark-mode-toggle>

        <?php if ($this->countModules('menu', true)) : ?>
        <nav id="nav">
            <jdoc:include type="modules" name="menu" />
        </nav>
        <?php endif; ?>

        <?php if ($this->params->get('showBanner')) : ?>
        <section id="banner">
            <div class="content">
                <h2><?php echo htmlspecialchars($this->params->get('bannerTitle')); ?></h2>
                <p><?php echo htmlspecialchars($this->params->get('bannerDescription')); ?></p>
                <a href="#main"
                    class="button scrolly"><?php echo htmlspecialchars($this->params->get('bannerButton')); ?></a>
            </div>
        </section>
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
            <?php if ($this->params->get('showFooter')) : ?>
            <div class="col-12">
                <section>
                    <?php 
                        $fieldValues = $this->params->get('showFooterTouchFields');

                        if (empty($fieldValues))
                        {
                            return;
                        }

                        $html = '<ul class="contact">';

                        foreach ($fieldValues as $value)
                        {
                            $html .= '<li><a class="icon brands ' . $value->touchsubicon . '" href="' . $value->touchsuburl . '"><span class="label">' . $value->touchsubname . '</span></a></li>';

                        }

                        $html .= '</ul>';

                        echo $html;

                    ?>
                </section>
            </div>
            <?php endif; ?>


            <?php if ($this->countModules('footer', true)) : ?>
            <div id="copyright">
                <jdoc:include type="modules" name="footer" />
            </div>
            <?php endif; ?>
        </footer>

        <jdoc:include type="modules" name="debug" />
    </div>
</body>

</html>