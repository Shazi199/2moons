<?php

/**
 *  2Moons
 *  Copyright (C) 2011  Slaver
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package 2Moons
 * @author Slaver <slaver7@gmail.com>
 * @copyright 2009 Lucky <lucky@xgproyect.net> (XGProyecto)
 * @copyright 2011 Slaver <slaver7@gmail.com> (Fork/2Moons)
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.3.5 (2011-04-22)
 * @info $Id$
 * @link http://code.google.com/p/2moons/
 */

if(!defined('INSIDE')) die('Hacking attempt!');

function SortUserPlanets ($CurrentUser)
{
	global $db;
	$Order = ( $CurrentUser['planet_sort_order'] == 1 ) ? "DESC" : "ASC" ;
	$Sort  = $CurrentUser['planet_sort'];

	$QryPlanets  = "SELECT `id`, `name`, `galaxy`, `system`, `planet`, `planet_type`, `image`, `b_building`, `b_building_id` FROM ".PLANETS." WHERE `id_owner` = '". $CurrentUser['id'] ."' AND `destruyed` = '0' ORDER BY ";

	if($Sort == 0)
		$QryPlanets .= "`id` ". $Order;
	elseif($Sort == 1)
		$QryPlanets .= "`galaxy`, `system`, `planet`, `planet_type` ". $Order;
	elseif ($Sort == 2)
		$QryPlanets .= "`name` ". $Order;

	$PlanetRAW = $db->query($QryPlanets);
	
	while($Planet = $db->fetch_array($PlanetRAW))
	{
		$Planets[$Planet['id']]	= $Planet;
	}
	
	$db->free_result($PlanetRAW);
	
	return $Planets;
}
?>