<?php
/**
*
* Auto Groups extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
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
	'ACP_AUTOGROUPS_MANAGE'			=> 'Διαχείριση αυτόματων ομάδων',
	'ACP_AUTOGROUPS_MANAGE_EXPLAIN'	=> '
Χρησιμοποιώντας αυτήν την φόρμα μπορείτε να προσθέσετε, να επεξεργαστείτε, να προβάλετε και να διαγράψετε ρυθμίσεις αυτόματων ομάδων.',
	'ACP_AUTOGROUPS_ADD'			=> 'Προσθήκη αυτόματων ομάδων',
	'ACP_AUTOGROUPS_EDIT'			=> 'Επεξεργασία αυτόματων ομάδων',

	'ACP_AUTOGROUPS_GROUP_NAME'				=> 'Ομάδα',
	'ACP_AUTOGROUPS_GROUP_NAME_EXPLAIN'		=> 'Επιλέξτε μια ομάδα για αυτόματη προσθήκη / αφαίρεση μέλων σε αυτήν.',
	'ACP_AUTOGROUPS_CONDITION_NAME'			=> 'Τύπος αυτόματης ομάδας',
	'ACP_AUTOGROUPS_CONDITION_NAME_EXPLAIN'	=> 'Επιλέξτε τον τύπο της προϋπόθεσης σύμφωνα την οποία μέλη θα πρέπει να προστεθούν ή να αφαιρεθούν από αυτήν την ομάδα.',
	'ACP_AUTOGROUPS_MIN_VALUE'				=> 'Ελάχιστη τιμή',
	'ACP_AUTOGROUPS_MIN_VALUE_EXPLAIN'		=> 'Τα μέλη θα πρέπει να προστεθούν σε αυτή την ομάδα, εφόσον υπερβαίνουν την ελάχιστη τιμή.',
	'ACP_AUTOGROUPS_MAX_VALUE'				=> 'Μέγιστη τιμή',
	'ACP_AUTOGROUPS_MAX_VALUE_EXPLAIN'		=> 'Τα μέλη θα πρέπει να αφαιρεθούν από αυτή την ομάδα, εφόσον υπερβαίνουν τη μέγιστη τιμή. Αφήστε αυτό το πεδίο κενό αν δεν θέλετε μέλη να αφαιρεθούν.',
	'ACP_AUTOGROUPS_DEFAULT'				=> 'Καθορίστε ως προεπιλεγμένη ομάδα',
	'ACP_AUTOGROUPS_DEFAULT_EXPLAIN'		=> 'Να γίνει αυτή η νέα προεπιλεγμένη ομάδα του μέλους.',
	'ACP_AUTOGROUPS_NOTIFY'					=> 'Ειδοποίηση μελών',
	'ACP_AUTOGROUPS_NOTIFY_EXPLAIN'			=> 'Αποστολή ειδοποίησης προς τα μέλη, μετά από αυτόματη προσθήκη ή αφαίρεση από (ή σε) αυτήν την ομάδα.',

	'ACP_AUTOGROUPS_EXEMPT_GROUP'			=> 'Ρύθμιση εξαιρέσεων προεπιλεγμένης ομάδας',
	'ACP_AUTOGROUPS_EXEMPT_GROUP_EXPLAIN'	=> 'Οι αυτόματες ομάδες δεν θα αλλάξουν την προεπιλεγμένη ομάδα του μέλους, εάν αυτή έχει επιλεγεί σε αυτήν τη λίστα. Επιλέξτε πολλαπλές ομάδες με πατημένο <samp>CTRL</samp> (ή <samp>&#8984;CMD</samp> σε Mac) και επιλέγοντας τις ομάδες.',

	'ACP_AUTOGROUPS_CREATE_RULE'	=> 'Δημιουργία νέας αυτόματης ομάδας',
	'ACP_AUTOGROUPS_SUBMIT_SUCCESS'	=> 'Η αυτόματη ομάδα ρυθμίστηκε με επιτυχία.',
	'ACP_AUTOGROUPS_DELETE_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να διαγράψετε αυτήν την ρύθμιση αυτόματης ομάδας;',
	'ACP_AUTOGROUPS_DELETE_SUCCESS'	=> 'Η αυτόματη ομάδα διαγράφηκε με επιτυχία.',
	'ACP_AUTOGROUPS_EMPTY'			=> 'Δεν υπάρχουν αυτόματες ομάδες.',
	'ACP_AUTOGROUPS_NO_GROUPS'		=> 'Δεν υπάρχουν διαθέσιμες ομάδες',
	'ACP_AUTOGROUPS_INVALID_GROUPS'	=> 'Παρουσιάστηκε ένα σφάλμα. Δεν επιλέχθηκε μια έγκυρη ομάδα μελών.<br />Αυτόματες ομάδες μπορούν να χρησιμοποιηθούν μόνο με καθορισμένες ομάδες μελών, οι οποίες μπορούν να δημιουργηθούν στη σελίδα Διαχείριση ομάδων.',

	// Conditions
	'AUTOGROUPS_TYPE_BIRTHDAYS'		=> 'Ηλικία μέλους',
	'AUTOGROUPS_TYPE_MEMBERSHIP'	=> 'Ημέρες ιδιότητας μέλους',
	'AUTOGROUPS_TYPE_POSTS'			=> 'Δημοσιεύσεις',
	'AUTOGROUPS_TYPE_WARNINGS'		=> 'Προειδοποιήσεις',
));
