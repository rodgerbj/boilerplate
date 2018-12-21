<?php
/**
 * @package    [PACKAGE_NAME]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright  [COPYRIGHT]
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       [AUTHOR_URL]
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Module\Foo\Site\Helper\FooHelper;

$loader = include JPATH_LIBRARIES . '/vendor/autoload.php';
$loader->setPsr4('Joomla\\Module\\Foo\\Site\\', [JPATH_ROOT . "/modules/mod_foo/"]);

$test  = FooHelper::getText($params, $app);

require ModuleHelper::getLayoutPath('mod_foo', $params->get('layout', 'default'));
