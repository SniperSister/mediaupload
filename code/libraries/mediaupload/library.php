<?php
/**
 * @package     Sample
 * @subpackage  Library
 *
 * @copyright   Copyright (C) 2013 Roberto Segura. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('_JEXEC') or die;

// non supported PHP version detection. EJECT! EJECT! EJECT!
if(version_compare(PHP_VERSION, '5.4.0', '<'))
{
	return JError::raise(E_ERROR, 500, 'PHP versions less than 5.4.0 are not supported.<br/><br/>');
}

// Ensure that autoloaders are set
JLoader::setup();

// Global libraries autoloader
JLoader::registerPrefix('Mediaupload', dirname(__FILE__));

require_once __DIR__ . '/Mediaupload/Upload/Handler.php';

// Common fields
JFormHelper::addFieldPath(dirname(__FILE__) . '/form/field');

// Load library language
$lang = JFactory::getLanguage();
$lang->load('lib_mediaupload', __DIR__);
