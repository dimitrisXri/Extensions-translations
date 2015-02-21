<?php
/**
*
* Board Rules extension for the phpBB Forum Software package.
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
	// Settings page
	'ACP_BOARDRULES'						=> 'Κανόνες ιστοσελίδας',
	'ACP_BOARDRULES_SETTINGS'				=> 'Ρυθμίσεις κανόνων',
	'ACP_BOARDRULES_SETTINGS_EXPLAIN'		=> 'Εδώ μπορείτε να παραμετροποιήσετε τις βασικές ρυθμίσεις για τους κανόνες της ιστοσελίδας.',
	'ACP_BOARDRULES_ENABLE'					=> 'Ενεργοποίηση κανόνων ιστοσελίδας',
	'ACP_BOARDRULES_HEADER_LINK'			=> 'Εμφάνιση συνδέσμου κανόνων ιστοσελίδας στην κεφαλίδα',
	'ACP_BOARDRULES_AT_REGISTRATION'		=> 'Απαίτηση νέα μέλη να αποδέχονται τους κανόνες κατά την εγγραφή',
	'ACP_BOARDRULES_AT_REGISTRATION_EXPLAIN'=> 'Αυτή η επιλογή θα προσθέσει μια διάταξη προς “Όροι συμφωνίας” απαιτώντας τα νέα εγγεγραμμένα μέλη να διαβάσουν και να αποδεχτούν τους κανόνες ιστοσελίδας κατά την εγγραφή.',
	'ACP_BOARDRULES_NOTIFY'					=> 'Ειδοποίηση μελών',
	'ACP_BOARDRULES_NOTIFY_EXPLAIN'			=> 'Αποστολή μιας ειδοποίησης σε όλα τα εγγεγραμμένα μέλη ότι οι κανόνες ιστοσελίδας έχουν ενημερωθεί. (Αυτό μπορεί να διαρκέσει αρκετά δευτερόλεπτα για να ολοκληρωθεί σε ιστοσελίδες με πολλές χιλιάδες μέλη.)',
	'ACP_BOARDRULES_NOTIFY_CONFIRM'			=> 'Είστε σίγουρος (-η) ότι επιθυμείτε να στείλετε ειδοποιήσεις σε όλα τα μέλη;',
	'ACP_BOARDRULES_SETTINGS_CHANGED'		=> 'Οι ρυθμίσεις κανόνων ιστοσελίδας άλλαξαν.',

	// Manage page
	'ACP_BOARDRULES_MANAGE'					=> 'Διαχείριση κανόνων',
	'ACP_BOARDRULES_MANAGE_EXPLAIN'			=> 'Από αυτήν τη σελίδα μπορείτε να προσθέσετε, να επεξεργαστείτε, να διαγράψετε και να αναδιατάξετε κατηγορίες και κανόνες. Μια κατηγορία είναι μια ομάδα από συναφείς κανόνες. Κάθε κατηγορία μπορεί να έχει απεριόριστο αριθμό κανόνων.',
	'ACP_BOARDRULES_CATEGORY'				=> 'Κατηγορία κανόνα',
	'ACP_BOARDRULES_RULE'					=> 'Κανόνας',
	'ACP_BOARDRULES_SELECT_LANGUAGE'		=> 'Επιλέξτε γλώσσα',
	'ACP_BOARDRULES_CREATE_RULE'			=> 'Δημιουργία κανόνα',
	'ACP_BOARDRULES_CREATE_RULE_EXPLAIN'	=> 'Χρησιμοποιώντας τη φόρμα παρακάτω, μπορείτε να δημιουργήσετε έναν νέο κανόνα, ο οποίος θα εμφανίζεται στα μέλη σας.',
	'ACP_BOARDRULES_EDIT_RULE'				=> 'Επεξεργασία κανόνα',
	'ACP_BOARDRULES_EDIT_RULE_EXPLAIN'		=> 'Χρησιμοποιώντας τη φόρμα παρακάτω, μπορείτε να ενημερώσετε έναν υπάρχοντα κανόνα, ο οποίος θα εμφανίζεται στα μέλη σας.',
	'ACP_RULE_SETTINGS'						=> 'Ρυθμίσεις κανόνα',
	'ACP_RULE_PARENT'						=> 'Κανόνας γονέας',
	'ACP_RULE_NO_PARENT'					=> 'Κανένας γονέας',
	'ACP_RULE_TITLE'						=> 'Τίτλος κανόνα',
	'ACP_RULE_TITLE_EXPLAIN'				=> 'Οι τίτλοι κανόνων εμφανίζονται στη σελίδα κανόνων για κατηγορίες κανόνων μόνο. Οι τίτλοι κανόνων χρησιμοποιούνται επίσης για να αναγνωρίζετε τους κανόνες σας όταν τους διαχειρίζεστε στον ΠΕΔ.',
	'ACP_RULE_ANCHOR'						=> 'Δεσμός άγκυρας κανόνα',
	'ACP_RULE_ANCHOR_EXPLAIN'				=> 'Οι δεσμοί άγκυρας είναι προαιρετικοί και χρησιμοποιούνται ως σημεία συνδέσμων άγκυρας στη σελίδα κανόνων. Θα πρέπει να είναι φιλικοί ως προς URL (να μην περιέχουν κενά ή ειδικούς χαρακτήρες), θα πρέπει να ξεκινάνε με ένα γράμμα, και πρέπει να είναι μοναδικοί.',
	'ACP_RULE_MESSAGE'						=> 'Μήνυμα κανόνα',
	'ACP_RULE_MESSAGE_EXPLAIN'				=> 'Το μήνυμα κανόνα εμφανίζεται στη σελίδα κανόνων για κάθε κανόνα (κατηγορίες δεν εμφανίζουν ένα μήνυμα κανόνα).',
	'ACP_RULE_MESSAGE_DISABLED'				=> 'Αυτή είναι μια κατηγορία που εμπεριέχει κανόνες, ο επεξεργαστής μηνύματος έχει απενεργοποιηθεί.',
	'ACP_ADD_RULE'							=> 'Δημιουργία νέου κανόνα',
	'ACP_DELETE_RULE_CONFIRM'				=> 'Είστε σίγουρος (-η) ότι θέλετε να αφαιρέσετε αυτόν τον κανόνα;',
	'ACP_RULE_ADDED'						=> 'Ο κανόνας προστέθηκε με επιτυχία.',
	'ACP_RULE_DELETED'						=> 'Ο κανόνας αφαιρέθηκε με επιτυχία.',
	'ACP_RULE_EDITED'						=> 'Ο κανόνας επεξεργάστηκε με επιτυχία.',
	'ACP_RULE_TITLE_EMPTY'					=> 'Πρέπει να εισάγετε έναν τίτλο για αυτόν τον κανόνα.',
));
