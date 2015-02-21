<?php
/**
*
* topfive [English]
*
* @package language Top Five
* @copyright (c) 2014 RMcGirr83
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

$lang = array_merge($lang, array(
	// ACP
	'TF_ACP'		=> 'Top Five επέκταση',
	'TF_ACTIVE'		=> 'Ενεργοποιημένο',
	'TF_TITLE'		=> 'Top Five επέκταση ρυθμίσεις',
	'TF_VERSION'	=> 'Top Five έκδοση',
	'TOPFIVE_MOD'	=> 'Top Five',
	'TF_CONFIG'		=> 'Ρυθμίσεις',
	'TF_SELECT'		=> 'Top Five',
	'TF_SAVED'		=> 'Αλλαγές αποθηκεύτηκαν',
	'TF_HOWMANY'	=> 'Πόσα',
	'TF_HOWMANY_EXPLAIN'	=> 'Πόσα θα θέλατε να εμφανίζονται...ελάχιστο που απαιτείται είναι 5, μέγιστο είναι 100',
	'TF_IGNORE_USERS'		=> 'Αγνόηση ανενεργών μελών',
	'TF_IGNORE_USERS_EXPLAIN'	=> 'Θα εξαιρούνται ανενεργά μέλη από την εμφάνιση σε κορυφαίους συγγραφείς και νεώτερες δημοσιεύσεις',
	'TF_IGNORE_FOUNDER'		=> 'Αγνόηση Ιδρυτή (ων)',
	'TF_IGNORE_FOUNDER_EXPLAIN'	=> 'Θα εξαιρούνται ιδρυτές από την εμφάνιση σε κορυφαίους συγγραφείς και νεώτερες δημοσιεύσεις',
	'TF_LOCATION'	=> 'Θέση στη Δ. Συζήτηση',
	'TF_LOCATION_EXPLAIN'	=> 'Πού θέλετε το mod να εμφανίζεται στη σελίδα ευρετηρίου',
	'TF_SHOW_ADMINS_MODS'	=> 'Να συμπεριλαμβάνονται Διαχειριστές και Συντονιστές',
	'TF_SHOW_ADMINS_MODS_EXPLAIN'	=> 'Θα εμφανίζει διαχειριστές και συντονιστές στους κορυφαίους συγγραφείς',
	'TOO_SMALL_TOP_FIVE_HOW_MANY'	=> 'Ο αριθμός της τιμής προς εμφάνιση είναι πολύ μικρός.',
	'TOO_LARGE_TOP_FIVE_HOW_MANY'	=> 'Ο αριθμός της τιμής προς εμφάνιση είναι πολύ μεγάλος.',
	'TOP_OF_FORUM'	=> 'Στο πάνω μέρος της Δ. Συζήτησης',
	'BOTTOM_OF_FORUM'	=> 'Στο κάτω μέρος της Δ. Συζήτησης',

));
