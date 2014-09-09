<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2009
 * Date:		$Date$
 * -----------------------------------------------------------------------
 * @author		$Author$
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev$
 * 
 * $Id$
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array = array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Warrior',
		2	=> 'Monk',
		3	=> 'Mage',
		4	=> 'Ranger',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Humans',
		2	=> 'Elves',
		3	=> 'Orcs',
		4	=> 'Undead'
	),
	'roles' => array(
		1	=> 'Healer',
		2	=> 'Tank',
		3	=> 'Damage Dealer',
		4	=> 'Supporter',
	),
	'lang' => array(
		'oco'							=> 'Order and Chaos Online',
		'plate'							=> 'Plate',
		'heavy'							=> 'Heavy',
		'light'							=> 'Cloth',	
		'medium'						=> 'Leather',
		'uc_race'						=> 'Race',
		'uc_class'						=> 'Class',
	),
);
?>