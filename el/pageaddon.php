<?php
/**
*
* @package Page adddon
* @copyright (c) 2014 ForumHulp.com
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
	'WYSIWYG_TEXT'	=> 'Αυτή η σελίδα έχει μετατραπεί σε έναν επεξεργαστή WYSIWYG HTML με πρόσθετο σελίδας από <a href="http://forumhulp.com" target="_blank">ForumHulp.com</a>. Οι BBCodes δεν λειτουργούν με αυτό το πρόσθετο. Μπορείτε να προσθέσετε μια σελιδοποίηση / αρίθμηση στις σελίδες σας, εισάγοντας “Page Breaks” από το μενού Insert .'
));
