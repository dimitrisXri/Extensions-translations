<?php
/**
*
* @package Disclaimer Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com (dimitris):
* (http://phpbbgr.com/team/)
*
*/

/**
* DO NOT CHANGE
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
	'DISCLAIMER'				=> 'Αποποίηση ευθύνης',
	'DISCLAIMER_TEXT'			=> '<h3>Αποποίηση ευθύνης</h3>
	<p>Οι απόψεις και τα σχόλια που δημοσιεύονται σε αυτές τις Δ. Συζητήσεις είναι προσωπικές και δεν αντιπροσωπεύουν απαραίτητα αυτές της Διαχείρισης του %1$s.<br /><br />Η Διαχείριση του %1$s υπό οποιεσδήποτε συνθήκες, δεν αποδέχεται καμία ευθύνη για οποιαδήποτε συμβουλή, ή σύσταση, πραγματοποιείται από, ή υπονοείται από, οποιοδήποτε μέλος ή επισκέπτη του %1$s που έχει ως αποτέλεσμα οποιαδήποτε ζημία με οποιονδήποτε τρόπο σε ένα μέλος του %1$s, ή σε οποιοδήποτε άλλο πρόσωπο.<br /><br />Επιπλέον, η Διαχείριση του %1$s δεν είναι, και δεν μπορεί να είναι, υπεύθυνη για το περιεχόμενο κάθε άλλης ιστοσελίδας η οποία έχει συνδεθεί με το %1$s.</p>',
));

?>