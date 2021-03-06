<?php

/**
 * Includes settings and constructs Hotaru.
 *
 * PHP version 5
 *
 * LICENSE: Hotaru CMS is free software: you can redistribute it and/or 
 * modify it under the terms of the GNU General Public License as 
 * published by the Free Software Foundation, either version 3 of 
 * the License, or (at your option) any later version. 
 *
 * Hotaru CMS is distributed in the hope that it will be useful, but WITHOUT 
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or 
 * FITNESS FOR A PARTICULAR PURPOSE. 
 *
 * You should have received a copy of the GNU General Public License along 
 * with Hotaru CMS. If not, see http://www.gnu.org/licenses/.
 * 
 * @category  Content Management System
 * @package   HotaruCMS
 * @author    Nick Ramsay <admin@hotarucms.org>
 * @copyright Copyright (c) 2010, Hotaru CMS
 * @license   http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link      http://www.hotarucms.org/
 */
// includes
if( file_exists('hotaru_settings.php') ) {
	require_once('hotaru_settings.php');
	require_once('Hotaru.php');
	$h = new Hotaru();
	$h->start('main');
} else {
	if( file_exists('install/index.php') ) {
		echo 'Hotaru is having trouble starting. You may need to install the system before you can proceed further.<br/><br/>';
		echo 'Help is available in the <a href="http://baker.cms/forum/">BakerCMS Forums</a>.';
	} else {
		echo 'BakerCMS is having trouble starting.';
	}
}
?>
