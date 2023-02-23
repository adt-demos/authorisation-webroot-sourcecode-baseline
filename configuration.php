<?php
/**
 * @package    Joomla.Installation
 *
 * @copyright  (C) 2005 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 *
 * -------------------------------------------------------------------------
 * THIS SHOULD ONLY BE USED AS A LAST RESORT WHEN THE WEB INSTALLER FAILS
 *
 * If you are installing Joomla! manually ie not using the web browser installer
 * then rename this file to configuration.php eg
 *
 * UNIX -> mv configuration.php-dist configuration.php
 * Windows -> rename configuration.php-dist configuration.php
 *
 * Now edit this file and configure the parameters for your site and
 * database.
 *
 * Finally move this file to the root folder of your Joomla installation eg
 *
 * UNIX -> mv configuration.php ../
 * Windows -> copy configuration.php ../
 *
 */
class JConfig
{
	/* Site Settings */
	public $offline = false;
	public $offline_message = 'This site is down for maintenance.<br> Please check back again soon.';
	public $display_offline_message = 1;
	public $offline_image = '';
	public $sitename = 'Joomla!';            // Name of Joomla site
	public $editor = 'tinymce';
	public $captcha = 0;
	public $list_limit = 20;
	public $access = 1;
	public $frontediting = 1;

	/* Database Settings */
        public $dbtype = 'mysqli';
   public $host = 'XXXDBHOSTXXX:XXXDBPORTXXX';
       public $user = 'XXXUSERNAMEXXX';
   public $password = 'XXXPASSWORDXXX';
        public $db = 'XXXDATABASEXXX';
        public $dbprefix = 'xnr0j_';
	public $dbencryption = 0;
	public $dbsslverifyservercert = false;
	public $dbsslkey = '';
	public $dbsslcert = '';
	public $dbsslca = '';
	public $dbsslcipher = '';

	/* Server Settings */
        public $secret = 'nzy2ulx6q5ycc5cn';
        public $gzip = '1';
	public $error_reporting = 'default';
	public $helpurl = 'https://help.joomla.org/proxy?keyref=Help{major}{minor}:{keyref}&lang={langcode}';
	public $tmp_path = '/tmp';                // This path needs to be writable by Joomla!
	public $log_path = '/administrator/logs'; // This path needs to be writable by Joomla!
	public $live_site = '';                   // Optional, full URL to Joomla install.
        public $force_ssl = '2';

	/* Locale Settings */
	public $offset = 'UTC';

	/* Session settings */
	public $lifetime = 15;                    // Session time
	public $session_handler = 'database';
        public $shared_session = '0';
	public $session_filesystem_path = '';
	public $session_memcached_server_host = 'localhost';
	public $session_memcached_server_port = 11211;
	public $session_metadata = true;
	public $session_redis_persist = 1;
	public $session_redis_server_auth = '';
	public $session_redis_server_db = 0;
	public $session_redis_server_host = 'localhost';
	public $session_redis_server_port = 6379;

	/* Mail Settings */
	public $mailonline  = true;
        public $mailer = 'smtp';
      public $mailfrom = 'webmaster@nuocial.org.uk';
      public $fromname = 'The GreatApplication Webmaster';
	public $massmailoff = false;
      public $replyto = 'webmaster@nuocial.org.uk';
  public $replytoname = 'The GreatApplication Webmaster';
	public $sendmail    = '/usr/sbin/sendmail';
      public $smtpauth= '1';
      public $smtpuser = 'e4ede4955d6247547a4465cb9fc15939';
      public $smtppass = '44fb82e653409e60eae2afb778e62f21';
      public $smtphost= 'in-v3.mailjet.com';
    public $smtpsecure= 'tls';
      public $smtpport= '587';

	/* Cache Settings */
        public $caching = '1';
        public $cachetime = '30';
        public $cache_handler = 'file';
	public $cache_platformprefix = false;
	public $memcached_persist = true;
	public $memcached_compress = false;
	public $memcached_server_host = 'localhost';
	public $memcached_server_port = 11211;
	public $redis_persist = true;
	public $redis_server_host = 'localhost';
	public $redis_server_port = 6379;
	public $redis_server_auth = '';
	public $redis_server_db = 0;

	/* Log Settings */
	public $log_categories = '';
	public $log_category_mode = 0;
	public $log_deprecated = 0;
	public $log_everything = 0;
	public $log_priorities = array('0' => 'all');

	/* CORS Settings */
	public $cors = false;
	public $cors_allow_headers = 'Content-Type,X-Joomla-Token';
	public $cors_allow_methods = '';
	public $cors_allow_origin = '*';

	/* Proxy Settings */
	public $proxy_enable = false;
	public $proxy_host = '';
	public $proxy_port = '';
	public $proxy_user = '';
	public $proxy_pass = '';

	/* Debug Settings */
	public $debug = false;
	public $debug_lang = false;
	public $debug_lang_const = true;

	/* Meta Settings */
	public $MetaDesc = 'Joomla! - the dynamic portal engine and content management system';
	public $MetaAuthor = true;
	public $MetaVersion = false;
	public $MetaRights = '';
	public $robots = '';
	public $sitename_pagetitles = 0;

	/* SEO Settings */
        public $sef = '0';
        public $sef_rewrite = '0';
        public $sef_suffix = '0';
	public $unicodeslugs = false;

	/* Feed Settings */
	public $feed_limit = 10;
	public $feed_email = 'none';

	/* Cookie Settings */
	public $cookie_domain = '';
	public $cookie_path = '';

	/* Miscellaneous Settings */
	public $asset_id = 1;
	public $behind_loadbalancer = false;
}
