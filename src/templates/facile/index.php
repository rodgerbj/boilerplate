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
$wa->registerAndUseStyle('main', $templatePath . '/assets/css/main.css');
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
    <jdoc:include type="scripts" />
</head>

<body class="homepage is-preload">
    <div id="page-wrapper">

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
<<<<<<< HEAD
=======
        <<<<<<< HEAD <!-- Scripts -->
            =======

            >>>>>>> origin/t37
            <script src="<?php echo $templatePath; ?>/assets/js/jquery.min.js"></script>
            <script src="<?php echo $templatePath; ?>/assets/js/jquery.dropotron.min.js"></script>
            <script src="<?php echo $templatePath; ?>/assets/js/jquery.scrolly.min.js"></script>
            <script src="<?php echo $templatePath; ?>/assets/js/browser.min.js"></script>
            <script src="<?php echo $templatePath; ?>/assets/js/breakpoints.min.js"></script>
            <script src="<?php echo $templatePath; ?>/assets/js/util.js"></script>
            <script src="<?php echo $templatePath; ?>/assets/js/main.js"></script>

            <<<<<<< HEAD </div>
</body>
>>>>>>> origin/t38

</html>
=======
</div>
</body>

</html>
>>>>>>> origin/t37