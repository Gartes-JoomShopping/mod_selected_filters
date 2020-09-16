<?php
/**
 * @package    mod_selected_filters
 *
 * @author     oleg <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;

// The below line is no longer used in Joomla 4
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$app = \Joomla\CMS\Factory::getApplication();
$doc = \Joomla\CMS\Factory::getDocument();
$doc->addStyleSheet(\Joomla\CMS\Uri\Uri::root().'modules/mod_selected_filters/assets/mod_selected_filters.css');

$com_searchData = $app->get('com_search' , [] );






require ModuleHelper::getLayoutPath('mod_selected_filters', $params->get('layout', 'default'));
