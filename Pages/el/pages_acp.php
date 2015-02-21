<?php
/**
*
* Pages extension for the phpBB Forum Software package.
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
	// Manage page
	'ACP_PAGES_MANAGE'					=> 'Διαχείριση σελίδες',
	'ACP_PAGES_MANAGE_EXPLAIN'			=> 'Από αυτήν τη σελίδα μπορείτε να προσθέστε, να επεξεργαστείτε και να διαγράψετε προσαρμοσμένες στατικές σελίδες.',
	'ACP_PAGES_CREATE_PAGE'				=> 'Δημιουργία σελίδας',
	'ACP_PAGES_CREATE_PAGE_EXPLAIN'		=> 'Χρησιμοποιώντας την παρακάτω φόρμα μπορείτε να δημιουργήσετε μια νέα προσαρμοσμένη σελίδα για το σύστημα συζητήσεων σας.',
	'ACP_PAGES_EDIT_PAGE'				=> 'Επεξεργασία σελίδας',
	'ACP_PAGES_EDIT_PAGE_EXPLAIN'		=> 'Χρησιμοποιώντας την παρακάτω φόρμα μπορείτε να ενημερώσετε μια υπάρχουσα προσαρμοσμένη σελίδα για το σύστημα συζητήσεων σας.',

	// Display pages list
	'ACP_PAGES_TITLE'					=> 'Τίτλος',
	'ACP_PAGES_DESCRIPTION'				=> 'Περιγραφή',
	'ACP_PAGES_ROUTE'					=> 'Διαδρομή',
	'ACP_PAGES_TEMPLATE'				=> 'Πρότυπο',
	'ACP_PAGES_ORDER'					=> 'Ταξινόμηση',
	'ACP_PAGES_LINK'					=> 'Σύνδεσμος',
	'ACP_PAGES_VIEW'					=> 'Προβολή σελίδας',
	'ACP_PAGES_STATUS'					=> 'Κατάσταση',
	'ACP_PAGES_PUBLISHED'				=> 'Δημοσιεύθηκε',
	'ACP_PAGES_PUBLISHED_NO_GUEST'		=> 'Δημοσιεύθηκε (μόνο μέλη)',
	'ACP_PAGES_PRIVATE'					=> 'Ιδιωτικό',
	'ACP_PAGES_EMPTY'					=> 'Δεν βρέθηκαν σελίδες',

	// Purge icons
	'ACP_PAGES_PURGE_ICONS'				=> 'Εκκαθάριση εικονιδίων',
	'ACP_PAGES_PURGE_ICONS_LABEL'		=> 'Εκκαθάριση προσωρινής μνήμης εικονιδίων σελίδων',
	'ACP_PAGES_PURGE_ICONS_EXPLAIN'		=> 'Όταν προσθέτετε προσαρμοσμένα εικονίδια συνδέσμων σελίδων, μπορεί να χρειαστεί να εκκαθαρίσετε την προσωρινή μνήμη εικονιδίων για να δείτε τα νέα εικονίδια. Παρακαλώ προσαρμοσμένα εικονίδια με όνομα <samp>pages_route.gif</samp>, όπου <samp>route</samp> είναι το όνομα της σελίδας, στους φακέλους phpBB <samp>styles/*/theme/images/</samp>.',

	// Messages shown to user
	'ACP_PAGES_DELETE_CONFIRM'			=> 'Είστε σίγουρος (-η) ότι θέλετε να διαγράψετε αυτήν τη σελίδα;',
	'ACP_PAGES_DELETE_SUCCESS'			=> 'Η σελίδα διαγράφηκε με επιτυχία.',
	'ACP_PAGES_DELETE_ERRORED'			=> 'Η σελίδα δεν μπορεί να διαγραφεί.',
	'ACP_PAGES_ADD_SUCCESS'				=> 'Η σελίδα προστέθηκε με επιτυχία.',
	'ACP_PAGES_EDIT_SUCCESS'			=> 'Η σελίδα ενημερώθηκε με επιτυχία.',

	// Add/edit page
	'ACP_PAGES_SETTINGS'				=> 'Ρυθμίσεις σελίδας',
	'ACP_PAGES_OPTIONS'					=> 'Επιλογές σελίδας',
	'ACP_PAGES_FORM_TITLE'				=> 'Τίτλος σελίδας',
	'ACP_PAGES_FORM_TITLE_EXPLAIN'		=> 'Αυτό είναι ένα απαιτούμενο πεδίο.',
	'ACP_PAGES_FORM_DESC'				=> 'Περιγραφή σελίδας',
	'ACP_PAGES_FORM_DESC_EXPLAIN'		=> 'Αυτό θα εμφανίζεται μόνο στον ΠΕΔ στη λίστα των σελίδων.',
	'ACP_PAGES_FORM_ROUTE'				=> 'Δρομολόγηση συνδέσμου (URL) σελίδας',
	'ACP_PAGES_FORM_ROUTE_EXPLAIN'		=> 'Η <strong>δρομολόγηση</strong> είναι ένα μοναδικό αναγνωριστικό που χρησιμοποιείται στο τέλος του συνδέσμου (URL) μιας σελίδας για να καθορίσει το σύνδεσμο για τη σελίδα, π.χ. <samp>phpBB/page/<strong>route</strong></samp>. Μόνο γράμματα, αριθμοί, παύλες και κάτω παύλες επιτρέπονται. Αυτό είναι ένα απαιτούμενο πεδίο.',
	'ACP_PAGES_FORM_CONTENT'			=> 'Περιεχόμενο σελίδας',
	'ACP_PAGES_FORM_CONTENT_EXPLAIN'	=> 'Περιεχόμενο μπορεί να δημιουργηθεί χρησιμοποιώντας κανονικούς phpBB BBCodes, εικονίδια smilies και magic urls ή μπορείτε να ενεργοποιήσετε τη μέθοδο HTML. Στη μέθοδο HTML, οι BBCodes, τα εικονίδια smilies και magic urls δεν θα λειτουργούν, αλλά μπορείτε ελεύθερα να χρησιμοποιήσετε οποιαδήποτε έγκυρη σύνταξη HTML. Παρακαλώ σημειώστε ότι αυτό το περιεχόμενο θα προστεθεί σε ένα υπάρχον πρότυπο HTML, έτσι δεν θα πρέπει να συμπεριλάβετε DOCTYPE, HTML, BODY ή HEAD ετικέτες. Ωστόσο, όλες οι άλλες HTML ετικέτες μορφοποίησης, συμπεριλαμβανομένων IFRAME, SCRIPT, STYLE, EMBED, VIDEO, κλπ. μπορούν να χρησιμοποιηθούν.',
	'ACP_PAGES_FORM_TEMPLATE'			=> 'Πρότυπο σελίδας',
	'ACP_PAGES_FORM_TEMPLATE_EXPLAIN'	=> 'Προσαρμοσμένα πρότυπα σελίδας με όνομα <samp>pages_*.html</samp> μπορούν να προστεθούν στους phpBB φακέλους <samp>styles/*/template</samp>.',
	'ACP_PAGES_FORM_TEMPLATE_SELECT'	=> 'Επιλέξτε ένα πρότυπο',
	'ACP_PAGES_FORM_ORDER'				=> 'Ταξινόμηση σελίδας',
	'ACP_PAGES_FORM_ORDER_EXPLAIN'		=> 'Οι σελίδες θα ταξινομούνται ανάλογα με αυτό το πεδίο, το οποίο μπορεί να σας βοηθήσει να οργανώσετε τη διάταξη κατά την οποία εμφανίζονται οι σύνδεσμοι. Οι κατώτεροι αριθμοί υπερισχύουν των μεγαλύτερων αριθμών.',
	'ACP_PAGES_FORM_LINKS'				=> 'Θέσεις συνδέσμων σελίδας',
	'ACP_PAGES_FORM_LINKS_EXPLAIN'		=> 'Επιλέξτε μία ή περισσότερες θέσεις όπου μπορεί να εμφανίζεται ο σύνδεσμος προς αυτήν τη σελίδα. Χρησιμοποιήστε CTRL+CLICK (ή CMD+CLICK σε Mac) για να επιλέξετε / από-επιλέξετε περισσότερα του ενός αντικείμενα.',
	'ACP_PAGES_FORM_DISPLAY'			=> 'Εμφάνιση σελίδας',
	'ACP_PAGES_FORM_DISPLAY_EXPLAIN'	=> 'Εάν οριστεί σε Όχι, η σελίδα δεν θα είναι προσβάσιμη. (Σημείωση: Οι διαχειριστές θα εξακολουθούν να είναι σε θέση να έχουν πρόσβαση στη σελίδα, επιτρέποντας τους να κάνουν προεπισκόπηση της σελίδας ενώ την αναπτύσσουν).',
	'ACP_PAGES_FORM_GUESTS'				=> 'Εμφάνιση σελίδας σε επισκέπτες',
	'ACP_PAGES_FORM_GUESTS_EXPLAIN'		=> 'Εάν οριστεί σε Όχι, μόνον εγγεγραμμένα μέλη θα είναι σε θέση να έχουν πρόσβαση στη σελίδα.',
	'ACP_PAGES_FORM_VIEW_PAGE'			=> 'Σύνδεσμος σελίδας',
	'PARSE_HTML'						=> 'Ανάλυση HTML',

	// Page link location names
	'NAV_BAR_LINKS_BEFORE'				=> 'Γραμμή πλοήγησης Πριν Σύνδεσμοι',
	'NAV_BAR_LINKS_AFTER'				=> 'Γραμμή πλοήγησης Μετά Σύνδεσμοι',
	'NAV_BAR_CRUMBS_BEFORE'				=> 'Γραμμή πλοήγησης Πριν Breadcrumbs',
	'NAV_BAR_CRUMBS_AFTER'				=> 'Γραμμή πλοήγησης Μετά Breadcrumbs',
	'FOOTER_TIMEZONE_BEFORE'			=> 'Υποσέλιδο Πριν Ζώνη ώρας',
	'FOOTER_TIMEZONE_AFTER'				=> 'Υποσέλιδο Μετά Ζώνη ώρας',
	'FOOTER_TEAMS_BEFORE'				=> 'Υποσέλιδο Πριν Σύνδεσμος Ομάδα',
	'FOOTER_TEAMS_AFTER'				=> 'Υποσέλιδο Μετά Σύνδεσμος Ομάδα',
	'QUICK_LINK_MENU_BEFORE'			=> 'Γρήγορες συνδέσεις Μενού Κορυφή',
	'QUICK_LINK_MENU_AFTER'				=> 'Γρήγορες συνδέσεις Μενού Κάτω',
));
