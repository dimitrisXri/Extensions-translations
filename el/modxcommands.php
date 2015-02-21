<?php
/**
*
* @package MODX commands
* @author dmzx (www.dmzx-web.net)
* @copyright (c) 2014 by dmzx (www.dmzx-web.net)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com (dimitris):
* (http://phpbbgr.com/team/)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	       'MODX_FIND'                 => 'Εύρεση',
		   'MODX_ADD_AFTER'            => 'Προσθήκη μετά',
		   'MODX_ADD_BEFORE'           => 'Προσθήκη πριν',
		   'MODX_REPLACE_WITH'         => 'Αντικατάσταση με',
		   'MODX_DELETE'               => 'Διαγραφή',
		   'MODX_IN_LINE_FIND'         => 'Εύρεση μέσα στη γραμμή',
		   'MODX_IN_LINE_ADD_AFTER'    => 'Προσθήκη μέσα στη γραμμή μετά',
		   'MODX_IN_LINE_ADD_BEFORE'   => 'Προσθήκη μέσα στη γραμμή πριν',
		   'MODX_IN_LINE_REPLACE_WITH' => 'Αντικατάσταση μέσα στην γραμμή με',
           'MODX_CMD'                  => 'MODx εντολή',
           'BBCODE21_FIND'             => '[b]Εύρεση[/b] [i][size=85]Αυτό μπορεί να είναι μερική εύρεση και όχι όλη η σειρά.[/size][/i]',
           'BBCODE21_AFTER'            => '[b][color=#008000]Προσθήκη μετά[/color][/b] [i][size=85]Προσθέστε αυτές τις γραμμές σε μια νέα κενή γραμμή μετά από την προηγούμενη γραμμή (ες) για εύρεση[/size][/i]',
           'BBCODE21_BEFORE'           => '[b][color=#BF0080]Προσθήκη πριν[/color][/b] [i][size=85]Προσθέστε αυτές τις γραμμές σε μια νέα κενή γραμμή πριν από την προηγούμενη γραμμή (ες) για εύρεση[/size][/i]',
           'BBCODE21_REPLACE'          => '[b][color=#BF0000]Αντικατάσταση με[/b][/color] [i][size=85]Αντικαταστήστε τις προηγούμενες γραμμές με τα ακόλουθα[/size][/i]',
           'BBCODE21_DELETE'           => '[b][color=#FF0000]Διαγραφή[/b][/color] [i][size=85]Αφαιρέστε τις προηγούμενες γραμμές[/size][/i]',
           'BBCODE21_INFIND'           => '[b][color=#BF0080]Εύρεση μέσα στη γραμμή[/b][/color] [i][size=85]Αυτό μπορεί να είναι μερική εύρεση για ενέργειες σε γραμμή[/size][/i]',
           'BBCODE21_INAFTER'          => '[b][color=#BF0080]Προσθήκη μέσα στη γραμμή μετά[/b][/color]',
           'BBCODE21_INBEFORE'         => '[b][color=#BF0080]Προσθήκη μέσα στη γραμμή πριν[/b][/color]',
           'BBCODE21_INREPLACE'        => '[b][color=#BF0080]Αντικατάσταση μέσα στη γραμμή με[/b][/color]',
	
));
