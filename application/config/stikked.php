<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Site Name
 * 
 * The name of your site
 *
*/
$config['site_name'] = 'Urdu Notepad';

/**
 * Database connection
 * 
 * Credentials for your database
 * The database structure will be created automatically
 *
*/
$config['db_hostname'] = 'localhost';
$config['db_database'] = 'ursite';
$config['db_username'] = 'root';
$config['db_password'] = '1234';

/**
 * Combine JS & CSS files
 * 
 * htdocs/static/asset/ folder must be writeable
 *
*/
$config['combine_assets'] = false;

/**
 * Key for Cron
 *
 * The password required to run the cron job
 * Example cron: 00, 30 * * * * curl --silent --compressed http://yoursite.com/cron/key &> /dev/null
 *
**/
$config['cron_key'] = '';

/**
 * gw.gd config
 *
 * Your own instance of the gw.gd URL-shortener (Download: https://github.com/neofutur/gwgd)
 * Default: http://gw.gd/
 *
**/
$config['gwgd_url'] = '';

/**
 * Credentials for the backup URL
 *
 * Basic auth user & pass for the backup URL, accessible via http://yoursite.com/backup
 *
**/
$config['backup_user'] = 'admin';
$config['backup_pass'] = '1234';

/**
 * Pastes Per Page
 *
 * Number of pastes per page, on the recent pastes listings.
 *
**/
$config['per_page'] = 10;

/**
 * Anti spam
 *
 * private_only: No recent pastes will be displayed.
 * enable_captcha: Users must enter a captcha to post.
 * blocked_words: Comma separated list, e.g. '.es.tl, mycraft.com, yourbadword'
 *
**/
$config['private_only'] = false;
$config['enable_captcha'] = false;
$config['blocked_words'] = '';

//spamadmin: accessible via /spamadmin (only active when user + pass is set)
$config['spamadmin_user'] = 'admin';
$config['spamadmin_pass'] = '1234';

/**
 * Default language
 *
 * Preselected language. See application/config/geshi_languages.php for valid values (array keys)
 *
**/
$config['default_language'] = 'text';

/**
 * Name for anonymous poster
 *
 * What name is to be set for anonymous posters
 * DO NOT SET BLANK
 * Set to random for a random paste to be generated
 * NOTE: if changed only pastes from then on will be updated.
 *
**/
$config['unknown_poster'] = 'random';

/**
 * Name for untitled pastes
 *
 * What name is to be set for untitled pastes.
 * DO NOT SET BLANK
 * NOTE: if changed only pastes from then on will be updated.
**/
$config['unknown_title'] = 'بلا عنوان';

/**
 * To require LDAP authentication or not.
 *
 * Weather to require LDAP authenticaiton or not.
 * Set to either 'true' to require authentication or 'false' not to.
 * NOTE: if changed, set LDAP settings in auth_ldap.php
**/ 
$config['require_auth'] = false;
 
/**
 * Override the displayed URL
 *
 * Display this URL in a paste's detail view instead of the main URL - e.g. if you use mod_rewrite
 * Variable $id: the paste_id
 * Example: 'http://example.com/$id'
 *
**/
$config['displayurl_override'] = '';

/**
 *
 *
 *  Words used for when unknown_poster is set to random
 *
 *
**/
$config['nouns'] = array('فرد');

$config['adjectives'] = array('نامعلوم');
