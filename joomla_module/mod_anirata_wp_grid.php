<?php
/**
 * @license    MIT
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Factory;

$document = Factory::getDocument();
$document->addScript('/media/mod_anirata_wp_grid/js/app.js?v=1.5');
$document->addScript('/media/mod_anirata_wp_grid/js/pdfkit_sa.js');
$document->addScript('/media/mod_anirata_wp_grid/js/svg-to-pdfkit.js');


require ModuleHelper::getLayoutPath('mod_anirata_wp_grid', $params->get('layout', 'default'));
