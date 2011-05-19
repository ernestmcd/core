<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2005-2011
 * @author     Leo Feyer <http://www.contao.org>
 * @package    Language
 * @license    LGPL
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_style_sheet']['name']   = array('Name', 'Bitte geben Sie den Namen des Stylesheets ein.');
$GLOBALS['TL_LANG']['tl_style_sheet']['cc']     = array('Conditional Comment', 'Conditional Comments ermöglichen die Erstellung Internet Explorer-spezifischer Stylesheets (z.B. <em>if lt IE 9</em>).');
$GLOBALS['TL_LANG']['tl_style_sheet']['media']  = array('Medientyp', 'Hier können Sie einen oder mehrere Medientypen angeben, für die das Stylesheet gültig ist. Media Queries wie z.B. <em>screen and (min-width: 800px)</em> werden unterstützt.');
$GLOBALS['TL_LANG']['tl_style_sheet']['source'] = array('Quelldateien', 'Bitte wählen Sie eine oder mehrere Dateien aus der Dateiübersicht.');
$GLOBALS['TL_LANG']['tl_style_sheet']['tstamp'] = array('Änderungsdatum', 'Datum und Uhrzeit der letzten Änderung');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_style_sheet']['title_legend'] = 'Name und Medientypen';


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_style_sheet']['css_imported'] = 'Das Stylesheet "%s" wurde importiert.';
$GLOBALS['TL_LANG']['tl_style_sheet']['css_renamed']  = 'Das Stylesheet "%s" wurde als "%s" importiert.';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_style_sheet']['new']        = array('Neues Stylesheet', 'Ein neues Stylesheet anlegen');
$GLOBALS['TL_LANG']['tl_style_sheet']['show']       = array('Stylesheetdetails', 'Details des Stylesheets ID %s anzeigen');
$GLOBALS['TL_LANG']['tl_style_sheet']['edit']       = array('Stylesheet bearbeiten', 'Stylesheet ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_style_sheet']['editheader'] = array('Stylesheet-Einstellungen bearbeiten', 'Einstellungen des Stylesheet ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_style_sheet']['cut']        = array('Stylesheet verschieben ', 'Stylesheet ID %s verschieben');
$GLOBALS['TL_LANG']['tl_style_sheet']['copy']       = array('Stylesheet duplizieren', 'Stylesheet ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_style_sheet']['delete']     = array('Stylesheet löschen', 'Stylesheet ID %s löschen');
$GLOBALS['TL_LANG']['tl_style_sheet']['import']     = array('CSS-Import', 'Bestehende CSS-Dateien importieren');

?>