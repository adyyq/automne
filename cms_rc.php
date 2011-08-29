<?php
// +----------------------------------------------------------------------+
// | Automne (TM)														  |
// +----------------------------------------------------------------------+
// | Copyright (c) 2000-2010 WS Interactive								  |
// +----------------------------------------------------------------------+
// | Automne is subject to version 2.0 or above of the GPL license.		  |
// | The license text is bundled with this package in the file			  |
// | LICENSE-GPL, and is available through the world-wide-web at		  |
// | http://www.gnu.org/copyleft/gpl.html.								  |
// +----------------------------------------------------------------------+
// | Author: Antoine Pouch <antoine.pouch@ws-interactive.fr> &            |
// | Author: S�bastien Pauchet <sebastien.pauchet@ws-interactive.fr>      |
// +----------------------------------------------------------------------+

/**
  * AUTOMNE rc file : contains all default constants
  * 
  * @package Automne
  * @subpackage config
  * @author Antoine Pouch <antoine.pouch@ws-interactive.fr> &
  * @author S�bastien Pauchet <sebastien.pauchet@ws-interactive.fr> &
  * @author C�dric Soret <cedric.soret@ws-interactive.fr>
  */
  
//check this file for inclusion
if (!defined('APPLICATION_USER_TYPE')) {
	die('Cannot include /cms_rc.php directly. You must include /cms_rc_frontend.php or /cms_rc_admin.php.');
}

//include general configuration file
if (@file_exists(dirname(__FILE__)."/config.php")) {
	@include_once(dirname(__FILE__)."/config.php");
	define('APPLICATION_CONFIG_LOADED', true);
} elseif(!isset($_SERVER['SCRIPT_NAME']) || pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_BASENAME) != 'install.php') {
	die('Cannot find config.php file, please run Automne installation again ...');
} else {
	define('APPLICATION_CONFIG_LOADED', false);
}

//check PHP version requirement
if (version_compare(phpversion(), "5.2.0", "<")) {
	die('Automne require PHP version 5.2.0 minimum. Your current version is : '.phpversion());
}

// ****************************************************************
// ** EDITABLE CONSTANT (add new values in config.php file)      **
// **             /!\ DO NOT EDIT THIS FILE /!\                  **
// ****************************************************************

/**
  *	Application default language
  *	Default : "fr"
  */
if (!defined("APPLICATION_DEFAULT_LANGUAGE")) {
	define("APPLICATION_DEFAULT_LANGUAGE", "fr");
}

/**
  *	Application default encoding
  * supported values are iso-8859-1 or utf-8
  *	Default : "utf-8"
  */
if (!defined("APPLICATION_DEFAULT_ENCODING")) {
	define("APPLICATION_DEFAULT_ENCODING", "utf-8");
}

/**
  *	Cookie expiration, in days.
  *	Default : 15 (days)
  */
if (!defined("APPLICATION_COOKIE_EXPIRATION")) {
	define("APPLICATION_COOKIE_EXPIRATION", 15);
}

/**
  *	Administration session timeout, in seconds.
  *	Default : 3600 (60 minutes)
  */
if (!defined("APPLICATION_SESSION_TIMEOUT")) {
	define("APPLICATION_SESSION_TIMEOUT", 3600);
}

/**
  *	Application error reporting level
  *	Default : E_ALL or E_ALL & ~E_NOTICE in old Automne version
  */
if (!defined("APPLICATION_ERROR_REPORTING")) {
	define("APPLICATION_ERROR_REPORTING", E_ALL);
}
/**
  *	Application memory limit level
  *	Default : 64M
  */
if (!defined("APPLICATION_MEMORY_LIMIT")) {
	define("APPLICATION_MEMORY_LIMIT", "64M");
}

/**
  *	Database host.
  *	Default : "localhost"
  */
if (!defined("APPLICATION_DB_HOST")) {
	define("APPLICATION_DB_HOST", "localhost");
}

/**
  *	Database name.
  *	Default : "automne4"
  */
if (!defined("APPLICATION_DB_NAME")) {
	define("APPLICATION_DB_NAME", "automne4");
}

/**
  *	Database user.
  *	Default : "automne"
  */
if (!defined("APPLICATION_DB_USER")) {
	define("APPLICATION_DB_USER", "automne");
}

/**
  *	Database password.
  *	Default : "automne"
  */
if (!defined("APPLICATION_DB_PASSWORD")) {
	define("APPLICATION_DB_PASSWORD", "automne");
}

/**
  *	Database port.
  *	Default : empty string for standard MySQL port (3306)
  */
if (!defined("APPLICATION_DB_PORT")) {
	define("APPLICATION_DB_PORT", '');
}

/**
  *	Database dsn.
  * Default : "mysql:host=".APPLICATION_DB_HOST.";dbname=".APPLICATION_DB_NAME
  */
if (!defined("APPLICATION_DB_DSN")) {
	define("APPLICATION_DB_DSN", "mysql:host=".APPLICATION_DB_HOST.";dbname=".APPLICATION_DB_NAME . (APPLICATION_DB_PORT ? ';port='.APPLICATION_DB_PORT : ''));
}

/**
  *	Database persistent connection status.
  *	Default : false
  */
if (!defined("APPLICATION_DB_PERSISTENT_CONNNECTION")) {
	define("APPLICATION_DB_PERSISTENT_CONNNECTION", false);
}

/**
  *	Activate HTML Compression for Automne pages
  *	Default : true
  */
if (!defined("ENABLE_HTML_COMPRESSION")) {
	define("ENABLE_HTML_COMPRESSION", true);
}

/**
 * Activate Google Chrome Frame support for Automne administration
 * Default : false
 */
if (!defined('APPLICATION_GCF_SUPPORT')) {
	define('APPLICATION_GCF_SUPPORT', false);
}

/**
  *	XHTML DTD used in page generation.
  *	Default : XHTML 1.0 transitionnal : "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"\n\t\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">"
  */
if (!defined("APPLICATION_XHTML_DTD")) {
	define("APPLICATION_XHTML_DTD", "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"\n\t\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">");
}

/**
  *	Embedly service API key
  * This key allow usage of embed.ly service for any URL.
  * Get a free account at http://app.embed.ly/pricing/free
  *	Default : nothing
  */
if (!defined("OEMBED_EMBEDLY_KEY")) {
	define("OEMBED_EMBEDLY_KEY", "");
}

/**
  *	Proxy used to access external services
  * Used to access oembed webservices for example
  *	Default : nothing (leave blank for none)
  */
if (!defined('APPLICATION_PROXY_HOST')) {
	define('APPLICATION_PROXY_HOST', '');
	if (!defined('APPLICATION_PROXY_PORT')) {
		define('APPLICATION_PROXY_PORT', '');
	}
}

/**
  *	Does system application run on Windows platform
  *	Default : strtolower(substr(PHP_OS, 0, 3)) === 'win'
  */
if (!defined("APPLICATION_IS_WINDOWS")) {
	define("APPLICATION_IS_WINDOWS", (strtolower(substr(PHP_OS, 0, 3)) === 'win'));
}

/**
  *	Default timezone used by the application
  */
if (!defined("APPLICATION_DEFAULT_TIMEZONE")) {
	define("APPLICATION_DEFAULT_TIMEZONE", 'Europe/Paris');
}

/**
  * Define execution Type
  */
if (!defined("APPLICATION_EXEC_TYPE")) {
	define("APPLICATION_EXEC_TYPE", (strtolower(php_sapi_name()) != 'cli' ? 'http' : 'cli'));
}

/**
  *	Path of the REAL document root
  *	Default : $_SERVER["DOCUMENT_ROOT"]
  */
if (defined('APPLICATION_EXEC_TYPE') && APPLICATION_EXEC_TYPE == 'cli') {
	//We are in CLI mode, we must calculate the document root first
	$_SERVER["DOCUMENT_ROOT"] = dirname(__FILE__);
	if (defined('PATH_REALROOT_WR')) {
		$_SERVER["DOCUMENT_ROOT"] = realpath(substr($_SERVER["DOCUMENT_ROOT"], 0, - strlen(PATH_REALROOT_WR)));
	}
} else {
	if ($_SERVER["DOCUMENT_ROOT"] != realpath($_SERVER["DOCUMENT_ROOT"])) {
		//rewrite server document root if needed
		if (realpath($_SERVER["DOCUMENT_ROOT"])) {
			$_SERVER["DOCUMENT_ROOT"] = realpath($_SERVER["DOCUMENT_ROOT"]);
		} else {
			$_SERVER["DOCUMENT_ROOT"] = dirname(__FILE__);
			if (defined('PATH_REALROOT_WR')) {
				$_SERVER["DOCUMENT_ROOT"] = realpath(substr($_SERVER["DOCUMENT_ROOT"], 0, - strlen(PATH_REALROOT_WR)));
			}
		}
	}
}

/**
  *	Path of Automne document root
  *	Default : ''
  */
if (!defined('PATH_REALROOT_WR')) {
	if (!is_dir($_SERVER["DOCUMENT_ROOT"].'/automne/admin')) {
		define('PATH_REALROOT_WR', str_replace(realpath($_SERVER["DOCUMENT_ROOT"]), '', realpath(dirname(__FILE__))));
	} else {
		define("PATH_REALROOT_WR", '');
	}
}
if (!defined('PATH_REALROOT_FS')) {
	define("PATH_REALROOT_FS", $_SERVER["DOCUMENT_ROOT"].PATH_REALROOT_WR);
}


/**
  *	Strip PHP extension from generated page links
  * To use this function, you must add the following lines in your .htaccess
  *
  * RewriteEngine On
  * RewriteCond %{REQUEST_FILENAME} !-f
  * RewriteCond %{REQUEST_FILENAME} !-d
  * RewriteRule ^([^\.]+)$ $1.php [NC,L]
  *	Default : false. 
  */
if (!defined("STRIP_PHP_EXTENSION")) {
	define("STRIP_PHP_EXTENSION", false);
}

/**
  *	FrontEnd not found page URL (404)
  * wrong users privilege or session time out redirect to this page
  * this page is declared in root htaccess too
  *	Default : /404.php
  */
if (!defined("PATH_SPECIAL_PAGE_NOT_FOUND_WR")) {
	define("PATH_SPECIAL_PAGE_NOT_FOUND_WR", PATH_REALROOT_WR.'/404'.(!STRIP_PHP_EXTENSION ? '.php' : ''));
}

/**
  *	FrontEnd forbidden page URL (403)
  * wrong users privilege or session time out redirect to this page
  *	Default : /403.php
  */
if (!defined("PATH_FORBIDDEN_WR")) {
	define("PATH_FORBIDDEN_WR", PATH_REALROOT_WR.'/403'.(!STRIP_PHP_EXTENSION ? '.php' : ''));
}

/**
  *	FrontEnd login page URL
  * Frontend login page
  *	Default : /403.php
  */
if (!defined("PATH_FRONTEND_SPECIAL_LOGIN_WR")) {
	define("PATH_FRONTEND_SPECIAL_LOGIN_WR", PATH_FORBIDDEN_WR);
}

/**
  *	Path to the PHP CLI executable under windows
  *	Default : "c:\php\php-win.exe"
  */
if (!defined("PATH_PHP_CLI_WINDOWS")) {
	define("PATH_PHP_CLI_WINDOWS", 'c:\php\php-win.exe');
}

/**
  *	Path to the PHP CLI executable under unix systems
  * Use this constant only if you cannot locate php cli with command "which php"
  * ie : php is not under the declared PATH var or executable name is not php
  *	Default : ""
  */
if (!defined("PATH_PHP_CLI_UNIX")) {
	define("PATH_PHP_CLI_UNIX", '');
}

/**
  *	Path to the PHP temp.
  * Required on Windows system.
  * Empty if session.save_path is useable on Unix system.
  * 
  *	Default : 'c:\tmp\\' (windows) or '\tmp' (unix) or $_SERVER["DOCUMENT_ROOT"]."/tmp"
  */
if (!defined("PATH_PHP_TMP")) {
	define("PATH_PHP_TMP", '');
}

/**
  * Defines files and directories permissions when written (used for PHP 
  * files, so check your security configuration) 
  *	Default : directory : 0775 and file : 0664
  */
if (!defined("FILES_CHMOD")) {
	define("FILES_CHMOD", "0664");
}
if (!defined("DIRS_CHMOD")) {
	define("DIRS_CHMOD", "0775");
}

/**
  *	Application Main root page DB ID
  *	Default : 1
  */
if (!defined("APPLICATION_ROOT_PAGE_ID")) {
	define("APPLICATION_ROOT_PAGE_ID", 1);
}

/**
  *	Does application enforces workflow for the resources ?
  *	Default : true
  */
if (!defined("APPLICATION_ENFORCES_WORKFLOW")) {
	define("APPLICATION_ENFORCES_WORKFLOW", true);
}

/**
  * Define User Login if APPLICATION_ENFORCES_ACCESS_CONTROL is True (default login, need to be declared in admin profileuser)
  */
if (!defined("DEFAULT_USER_LOGIN")) {
	define("DEFAULT_USER_LOGIN", "anonymous");
}
/**
  * Define User Password if APPLICATION_ENFORCES_ACCESS_CONTROL is True (default password, need to be declared in admin profileuser)
  */
if (!defined("DEFAULT_USER_PASSWORD")) {
	define("DEFAULT_USER_PASSWORD", "anonymous");
}

/**
  * Define minimum user password length
  * Default : 5 caracters
  */
if (!defined("MINIMUM_PASSWORD_LENGTH")) {
	define("MINIMUM_PASSWORD_LENGTH", 5);
}

/**
  *	Application cookie path
  * Used to share authentification cookie between multiple sub domains
  * Use value like : ".domain.tld" (do not forget the trailing dot)
  *	Default : "". 
  */
if (!defined("APPLICATION_COOKIE_DOMAIN")) {
	define("APPLICATION_COOKIE_DOMAIN", '');
}

/**
  *	Application oembed frame domain
  * Used to display oembed objets with a specific cookieless frame to avoid XSS
  * Use specific domain for this usage (like embed.yourdomain.org)
  *	Default : "". 
  */
if (!defined("APPLICATION_EMBED_DOMAIN")) {
	define("APPLICATION_EMBED_DOMAIN", '');
}

/**
  *	Allow redirection from a page to an external web site
  *	Default : true
  */
if (!defined("ALLOW_EXTERNAL_PAGE_REDIRECTION")) {
	define("ALLOW_EXTERNAL_PAGE_REDIRECTION", true);
}

/**
  *	Automne default email address
  *	Default : root@localhost
  */
if (!defined("AUTOMNE_DEFAULT_EMAIL")) {
	define("AUTOMNE_DEFAULT_EMAIL", "root@localhost");
}

//rewrite some server conf if HTTP_X_FORWARDED exists
if (isset($_SERVER["HTTP_X_FORWARDED_HOST"])) {
	$_SERVER["HTTP_HOST"] = $_SERVER["HTTP_X_FORWARDED_HOST"];
}
if (isset($_SERVER["HTTP_X_FORWARDED_SERVER"])) {
	$_SERVER["HTTP_SERVER"] = $_SERVER["HTTP_X_FORWARDED_SERVER"];
}
if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
	$_SERVER["REMOTE_ADDR"] = $_SERVER["HTTP_X_FORWARDED_FOR"];
} elseif (isset($_SERVER["HTTP_CLIENT_IP"])) {
	$_SERVER["REMOTE_ADDR"] = $_SERVER["HTTP_CLIENT_IP"];
}

/**
  *	Main path where the CMS lies
  *	Default : "/automne"
  */
if (!defined("PATH_MAIN_WR")) {
	define("PATH_MAIN_WR", PATH_REALROOT_WR."/automne");
}
if (!defined("PATH_MAIN_FS")) {
	define("PATH_MAIN_FS", PATH_REALROOT_FS."/automne");
}

/**
  *	Block files (files uploaded that represents blocks content)
  *	Default : PATH_REALROOT_WR."/files"
  */
if (!defined("PATH_MODULES_FILES_WR")) {
	define("PATH_MODULES_FILES_WR", PATH_REALROOT_WR."/files");
}
if (!defined("PATH_MODULES_FILES_FS")) {
	define("PATH_MODULES_FILES_FS", $_SERVER["DOCUMENT_ROOT"].PATH_MODULES_FILES_WR);
}
/**
  * PATH to the module files of the standard module
  */
if (!defined("PATH_MODULES_FILES_STANDARD_WR")) {
	define ('PATH_MODULES_FILES_STANDARD_WR', PATH_MODULES_FILES_WR."/standard");
}
if (!defined("PATH_MODULES_FILES_STANDARD_FS")) {
	define ('PATH_MODULES_FILES_STANDARD_FS', PATH_MODULES_FILES_FS."/standard");
}
/**
  *	Pages main root, where the pages from the main website will be located. 
  * Other websites are set to use subdirectories of this one.
  *	Default : PATH_MAIN_xx."/web"
  */
if (!defined("PATH_PAGES_WR")) {
	define("PATH_PAGES_WR", PATH_REALROOT_WR."/web");
}
if (!defined("PATH_PAGES_FS")) {
	define("PATH_PAGES_FS", $_SERVER["DOCUMENT_ROOT"].PATH_PAGES_WR);
}

/**
  *	HTML Pages main root, where the html pages from the main website will be located. 
  * Other websites are set to use subdirectories of this one.
  *	Default : PATH_MAIN_xx."/html"
  */
if (!defined("PATH_PAGES_HTML_WR")) {
	define("PATH_PAGES_HTML_WR", PATH_MAIN_WR."/html");
}
if (!defined("PATH_PAGES_HTML_FS")) {
	define("PATH_PAGES_HTML_FS", $_SERVER["DOCUMENT_ROOT"].PATH_PAGES_HTML_WR);
}

/**
  *	Packages path (where are the declaration files of the core packages)
  *	Default : PATH_MAIN_xx."/classes"
  */
if (!defined("PATH_PACKAGES_WR")) {
	define("PATH_PACKAGES_WR", PATH_MAIN_WR."/classes");
}
if (!defined("PATH_PACKAGES_FS")) {
	define("PATH_PACKAGES_FS", PATH_MAIN_FS."/classes");
}

/**
  *	phpMyAdmin index path
  *	Default : PATH_MAIN_xx."/phpMyAdmin/index.php"
  */
if (!defined("PATH_PHPMYADMIN_WR")) {
	define("PATH_PHPMYADMIN_WR", PATH_MAIN_WR."/phpMyAdmin/index.php");
}
if (!defined("PATH_PHPMYADMIN_FS")) {
	define("PATH_PHPMYADMIN_FS", PATH_MAIN_FS."/phpMyAdmin/index.php");
}

/**
  *	Modules path (where are the declaration files of the modules)
  *	Default : PATH_MAIN_xx."/classes/modules"
  */
if (!defined("PATH_MODULES_WR")) {
	define("PATH_MODULES_WR", PATH_MAIN_WR."/classes/modules");
}
if (!defined("PATH_MODULES_FS")) {
	define("PATH_MODULES_FS", PATH_MAIN_FS."/classes/modules");
}

/**
  *	Templates path (where are the declaration files of the templates)
  *	Default : PATH_MAIN_xx."/templates"
  */
if (!defined("PATH_TEMPLATES_WR")) {
	define("PATH_TEMPLATES_WR", PATH_MAIN_WR."/templates");
}
if (!defined("PATH_TEMPLATES_FS")) {
	define("PATH_TEMPLATES_FS", PATH_MAIN_FS."/templates");
}

/**
  *	Templates rows definition files paths (where are the definition files of the rows)
  *	Default : PATH_MAIN_xx."/templates/rows"
  */
if (!defined("PATH_TEMPLATES_ROWS_WR")) {
	define("PATH_TEMPLATES_ROWS_WR", PATH_MAIN_WR."/templates/rows");
}
if (!defined("PATH_TEMPLATES_ROWS_FS")) {
	define("PATH_TEMPLATES_ROWS_FS", PATH_MAIN_FS."/templates/rows");
}

if (!defined("PATH_MAIL_TEMPLATES_FS")) {
	define("PATH_MAIL_TEMPLATES_FS", PATH_TEMPLATES_FS.'/mail/mail.xml');
}
if (!defined("PATH_PRINT_TEMPLATES_FS")) {
	define("PATH_PRINT_TEMPLATES_FS", PATH_TEMPLATES_FS.'/print.xml');
}

/**
  *	CSS file paths (where is css definition files)
  *	Default : DOCUMENT_ROOT."/css"
  */
if (!defined("PATH_CSS_WR")) {
	define("PATH_CSS_WR", PATH_REALROOT_WR."/css");
}
if (!defined("PATH_CSS_FS")) {
	define("PATH_CSS_FS", PATH_REALROOT_FS."/css");
}
/**
  *	JS file paths (where is js definition files)
  *	Default : DOCUMENT_ROOT."/js"
  */
if (!defined("PATH_JS_WR")) {
	define("PATH_JS_WR", PATH_REALROOT_WR."/js");
}
if (!defined("PATH_JS_FS")) {
	define("PATH_JS_FS", PATH_REALROOT_FS."/js");
}
/**
  *	Path where the htaccess templates originally lies
  *	Default : PATH_TEMPLATES_FS."/htaccess"
  */
if (!defined("PATH_HTACCESS_FS")) {
	define("PATH_HTACCESS_FS",  PATH_TEMPLATES_FS."/htaccess");
}
/**
  *	SOAP file paths (where is soap definition files)
  *	Default : DOCUMENT_ROOT."/soap"
  */
if (!defined("PATH_SOAP_WR")) {
	define("PATH_SOAP_WR", PATH_REALROOT_WR."/soap");
}
if (!defined("PATH_SOAP_FS")) {
	define("PATH_SOAP_FS", PATH_REALROOT_FS."/soap");
}
if (extension_loaded('soap')) {
	/**
	  * SOAP constants
	  */
	if (!defined("ATM_SOAP_VERSION")) {
		define('ATM_SOAP_VERSION', SOAP_1_2);
	}
	if (!defined("ATM_SOAP_CLASS")) {
		define('ATM_SOAP_CLASS', 'CMS_soap');
	}
}
/*
  *	Administration default language
  *	Default : APPLICATION_DEFAULT_LANGUAGE
  */
if (!defined("ADMINISTRATION_DEFAULT_LANGUAGE")) {
	define("ADMINISTRATION_DEFAULT_LANGUAGE", APPLICATION_DEFAULT_LANGUAGE);
}

/**
  *	Number of simultaneous sub_scripts for the regenerator
  *	Default : "2"
  *	Max : "10"
  */
if (!defined("REGENERATION_THREADS")) {
	define("REGENERATION_THREADS", "2");
}

/**
  *	Automne UPDATE.DENY File
  *	Default : PATH_MAIN_WR."/UPDATE.DENY"
  */
if (!defined("UPDATE_DENY")) {
	define("UPDATE_DENY", PATH_MAIN_WR."/UPDATE.DENY");
}

/**
  *	Administration path
  *	Default : PATH_MAIN_xx."/cms"
  */
if (!defined("PATH_ADMIN_WR")) {
	define("PATH_ADMIN_WR", PATH_MAIN_WR."/admin");
}
if (!defined("PATH_ADMIN_FS")) {
	define("PATH_ADMIN_FS", PATH_MAIN_FS."/admin");
}

/**
  * Modules administration path
  * Default : PATH_ADMIN_xx."/modules"
  */
if (!defined("PATH_ADMIN_MODULES_WR")) {
	define("PATH_ADMIN_MODULES_WR", PATH_ADMIN_WR."/modules");
}
if (!defined("PATH_ADMIN_MODULES_FS")) {
	define("PATH_ADMIN_MODULES_FS", PATH_ADMIN_FS."/modules");
}

/**
  *	Administration images path
  *	Default : PATH_ADMIN_xx."/img"
  */
if (!defined("PATH_ADMIN_IMAGES_WR")) {
	define("PATH_ADMIN_IMAGES_WR", PATH_ADMIN_WR."/img");
}
if (!defined("PATH_ADMIN_IMAGES_FS")) {
	define("PATH_ADMIN_IMAGES_FS", PATH_ADMIN_FS."/img");
}

/**
  *	Administration css path
  *	Default : PATH_ADMIN_xx."/css"
  */
if (!defined("PATH_ADMIN_CSS_WR")) {
	define("PATH_ADMIN_CSS_WR", PATH_ADMIN_WR."/css");
}
if (!defined("PATH_ADMIN_CSS_FS")) {
	define("PATH_ADMIN_CSS_FS", PATH_ADMIN_FS."/css");
}

/**
  *	Administration js path
  *	Default : PATH_ADMIN_xx."/js"
  */
if (!defined("PATH_ADMIN_JS_WR")) {
	define("PATH_ADMIN_JS_WR", PATH_ADMIN_WR."/js");
}
if (!defined("PATH_ADMIN_JS_FS")) {
	define("PATH_ADMIN_JS_FS", PATH_ADMIN_FS."/js");
}

/**
  *	Administration special pages paths : login page
  *	Default : PATH_ADMIN_xx."/index.php"
  */
if (!defined("PATH_ADMIN_SPECIAL_LOGIN_WR")) {
	define("PATH_ADMIN_SPECIAL_LOGIN_WR", PATH_ADMIN_WR."/index.php");
}

/**
  *	This constant was used before Automne V4 for admin session management purposes.
  * Now it is used to set some PHP vars for old V3 modules compatibility
  *	Default : PATH_ADMIN_xx."/compat-v3.php"
  */
if (!defined("PATH_ADMIN_SPECIAL_SESSION_CHECK_FS")) {
	define("PATH_ADMIN_SPECIAL_SESSION_CHECK_FS", PATH_ADMIN_FS."/compat-v3.php");
}

/**
  *	Administration special pages paths : page templates client spaces edition
  *	Default : PATH_ADMIN_WR."/serverResponse.php"
  */
if (!defined("PATH_ADMIN_SPECIAL_SERVER_RESPONSE_WR")) {
	define("PATH_ADMIN_SPECIAL_SERVER_RESPONSE_WR", PATH_ADMIN_WR."/serverResponse.php");
}

/**
  *	Temp path (where automne updates patch are uncompressed, etc.)
  *	Default : PATH_MAIN_xx."/tmp"
  */
if (!defined("PATH_TMP_WR")) {
	define("PATH_TMP_WR", PATH_MAIN_WR."/tmp");
}
if (!defined("PATH_TMP_FS")) {
	define("PATH_TMP_FS", PATH_MAIN_FS."/tmp");
}
/**
  *	Upload path (where automne files are uploaded)
  *	Default : PATH_MAIN_xx."/upload"
  */
if (!defined("PATH_UPLOAD_WR")) {
	define("PATH_UPLOAD_WR", PATH_MAIN_WR."/upload");
}
if (!defined("PATH_UPLOAD_FS")) {
	define("PATH_UPLOAD_FS", PATH_MAIN_FS."/upload");
}
if (!defined("PATH_UPLOAD_VAULT_FS")) {
	define("PATH_UPLOAD_VAULT_FS", PATH_MAIN_FS."/upload-vault");
}
/**
  *	Cache path (where automne files are cached)
  *	Default : PATH_MAIN_xx."/cache"
  */
if (!defined("PATH_CACHE_WR")) {
	define("PATH_CACHE_WR", PATH_MAIN_WR."/cache");
}
if (!defined("PATH_CACHE_FS")) {
	define("PATH_CACHE_FS", PATH_MAIN_FS."/cache");
}
/**
  *	Logs path (where automne logs are stored)
  *	Default : PATH_LOGS_FS."/logs"
  */
if (!defined("PATH_LOGS_FS")) {
	define("PATH_LOGS_FS", PATH_MAIN_FS."/logs");
}
/**
  *	Pages templates description images path
  *	Default : PATH_TEMPLATES_xx."/images"
  */
if (!defined("PATH_TEMPLATES_IMAGES_WR")) {
	define("PATH_TEMPLATES_IMAGES_WR", PATH_TEMPLATES_WR."/images");
}
if (!defined("PATH_TEMPLATES_IMAGES_FS")) {
	define("PATH_TEMPLATES_IMAGES_FS", PATH_TEMPLATES_FS."/images");
}

/**
  * Pages linx files path, where the linx files are located. 
  * Other websites are set to use subdirectories of this one.
  *	Default : PATH_MAIN_xx."/linx"
  */
if (!defined("PATH_PAGES_LINXFILES_WR")) {
	define("PATH_PAGES_LINXFILES_WR", PATH_MAIN_WR."/linx");
}
if (!defined("PATH_PAGES_LINXFILES_FS")) {
	define("PATH_PAGES_LINXFILES_FS", PATH_MAIN_FS."/linx");
}

/**
  * Windows Binary and bat files path, where usefull binary files are located. 
  *	Default : PATH_MAIN_xx."/bin"
  */
if (!defined("PATH_WINDOWS_BIN_WR")) {
	define("PATH_WINDOWS_BIN_WR", PATH_MAIN_WR."/bin");
}
if (!defined("PATH_WINDOWS_BIN_FS")) {
	define("PATH_WINDOWS_BIN_FS", PATH_MAIN_FS."/bin");
}

/**
  *	Automne general chmod configuration file
  *	Default : PATH_PACKAGES_WR."/scripts/automneChmod"
  */
if (!defined("PATH_AUTOMNE_CHMOD_SCRIPT_FS")) {
	define("PATH_AUTOMNE_CHMOD_SCRIPT_FS", PATH_PACKAGES_FS."/files/htaccess.txt");
}
if (!defined("PATH_AUTOMNE_CHMOD_SCRIPT_WR")) {
	define("PATH_AUTOMNE_CHMOD_SCRIPT_WR", PATH_PACKAGES_WR."/files/htaccess.txt");
}
/**
  *	Automne mime types file
  *	Default : PATH_PACKAGES_FS."/files/mime.types"
  */
if (!defined("PATH_AUTOMNE_MIMETYPE_FS")) {
	define("PATH_AUTOMNE_MIMETYPE_FS", PATH_PACKAGES_FS."/files/mime.types");
}
/**
  *	Automne mime types file
  *	Default : PATH_PACKAGES_FS."/files/mime.types"
  */
if (!defined("PATH_AUTOMNE_WHITELIST_FS")) {
	define("PATH_AUTOMNE_WHITELIST_FS", PATH_PACKAGES_FS."/files/whitelist.txt");
}
/**
  * Special profile users ID
  */
if (!defined("ROOT_PROFILEUSER_ID")) {
	define("ROOT_PROFILEUSER_ID", 1);
}
if (!defined("ANONYMOUS_PROFILEUSER_ID")) {
	define("ANONYMOUS_PROFILEUSER_ID", 3);
}
/**
  *	Files extensions denied for upload, comma separated
  *	Default : 'exe,php,pif,vbs,bat,com,scr,reg,html,htm,php3,php4,php5,php6,phps,phtml,shtml,sh,py,pl,js,cgi,asp,jsp,aspx,plx,perl'
  */
if (!defined('FILE_UPLOAD_EXTENSIONS_DENIED')) {
	define('FILE_UPLOAD_EXTENSIONS_DENIED', 'exe,php,pif,vbs,bat,com,scr,reg,html,htm,php3,php4,php5,php6,phps,phtml,shtml,xhtml,sh,py,pl,prl,js,cgi,asp,jsp,aspx,plx,perl,rb,phpt,inc,htaccess,htpasswd,cfm,cfc');
}
/**
  *	Files extensions allowed for upload, comma separated
  * This constant extend the whitelist in /automne/classes/files/whitelist.txt
  *	Default : ''
  */
if (!defined('FILE_UPLOAD_EXTENSIONS_ALLOWED')) {
	define('FILE_UPLOAD_EXTENSIONS_ALLOWED', '');
}
/**
  * Check remote IP mask format ?
  *	Default : true
  */
if (!defined("CHECK_REMOTE_IP_MASK")) {
    define("CHECK_REMOTE_IP_MASK", true);
}
/**
  * Does modules datas can be cached ?
  *	Default : true
  */
if (!defined("CACHE_MODULES_DATAS")) {
    define("CACHE_MODULES_DATAS", true);
}
/**
  * Default lifetime for modules cache
  *	Default : 86400 (24h)
  */
if (!defined("CACHE_MODULES_DEFAULT_LIFETIME")) {
    define("CACHE_MODULES_DEFAULT_LIFETIME", 86400);
}
/**
  *	Does session token must be checked. Used to protect form actions from CSRF attacks
  *	Default : true
  */
if (!defined('SESSION_TOKEN_CHECK')) {
	define('SESSION_TOKEN_CHECK', true);
}
/**
  *	Set max session token age. Used to protect form actions from CSRF attacks
  *	Default : 1800 seconds
  */
if (!defined('SESSION_TOKEN_MAXAGE')) {
	define('SESSION_TOKEN_MAXAGE', 1800);
}
/**
  *	Set max expired token age. Used to protect form actions from CSRF attacks
  *	Default : 180 seconds
  */
if (!defined('SESSION_EXPIRED_TOKEN_MAXAGE')) {
	define('SESSION_EXPIRED_TOKEN_MAXAGE', 180);
}
/**
  *	Enable logging (in the cms_error_log) of all generated email (not limited to sent ones)
  *	Default : false
  */
if (!defined('LOG_APPLICATION_MAIL')) {
	define('LOG_APPLICATION_MAIL', false);
}
/**
  *	Enable profiling with xhprof (must be installed)
  *	Default : false
  */
if (!defined('APPLICATION_ENABLE_PROFILING')) {
	define('APPLICATION_ENABLE_PROFILING', false);
}
/**
  *	xhprof root. Used when profiling is active
  *	Default : false
  */
if (!defined('APPLICATION_XHPROF_ROOT_FS')) {
	define('APPLICATION_XHPROF_ROOT_FS', '/smb/clients/automne4/www-rev/lib/xhprof');
}
/**
  *	xhprof root. Used when profiling is active
  *	Default : false
  */
if (!defined('APPLICATION_XHPROF_URI')) {
	define('APPLICATION_XHPROF_URI', 'http://automne4.lib/xhprof/');
}

// ****************************************************************
// ** CONSTANTS ARE NOT EDITABLE BEYOND THIS POINT               **
// ****************************************************************

/**
  *	Modules treatment hooks (code)
  */
define("MODULE_TREATMENT_PAGECONTENT_HEADER_CODE", 1);
define("MODULE_TREATMENT_PAGECONTENT_FOOTER_CODE", 2);
define("MODULE_TREATMENT_EDITOR_CODE", 4);
define("MODULE_TREATMENT_EDITOR_JSCODE", 8);
define("MODULE_TREATMENT_ROWS_EDITION_LABELS", 16);
define("MODULE_TREATMENT_TEMPLATES_EDITION_LABELS", 32);
define("MODULE_TREATMENT_BEFORE_VALIDATION_TREATMENT", 64);
define("MODULE_TREATMENT_AFTER_VALIDATION_TREATMENT", 128);
define("MODULE_TREATMENT_EDITOR_PLUGINS", 256);
define("MODULE_TREATMENT_ALERTS", 512);
/**
  *	Modules treatment hooks (xml parsing)
  */
define("MODULE_TREATMENT_PAGECONTENT_TAGS", 1);
define("MODULE_TREATMENT_CLIENTSPACE_TAGS", 2);
define("MODULE_TREATMENT_BLOCK_TAGS", 4);
define("MODULE_TREATMENT_LINXES_TAGS", 8);
define("MODULE_TREATMENT_WYSIWYG_INNER_TAGS", 16);
define("MODULE_TREATMENT_WYSIWYG_OUTER_TAGS", 32);
define("MODULE_TREATMENT_PAGEHEADER_TAGS", 64);

/**
  *	Paths are either relative to Filesystem root or Webroot
  *	Default : "WR" and "FS"
  */
define("PATH_RELATIVETO_WEBROOT", 1);
define("PATH_RELATIVETO_FILESYSTEM", 2);
/**
  * Resource locations. 
  * 	Userspace : resource can be used (edited, seen) by users
  * 	Archived : resource in in archive tables. Can't be seen by users except for administrators that can restore it.
  * 	Deleted : Resource is in deletion tables. Can't be seen by nobody.
  * 	Edition : resource is currently edited. Only valid for pages, and not reported in the array of available locations
  */
define("RESOURCE_LOCATION_USERSPACE", 1);
define("RESOURCE_LOCATION_ARCHIVED", 2);
define("RESOURCE_LOCATION_DELETED", 3);
define("RESOURCE_LOCATION_EDITION", 4);
/**
  * Resource possible editions. Multiple editions are added and stored in one variable.
  * 	Basedata : the base data of the resource was edited.
  * 	Content : the content of the resource was edited.
  * 	Siblingsorder : the siblings order was rearranged.
  * 	location : The proposedFor location was set
  */
define("RESOURCE_EDITION_BASEDATA", 1);
define("RESOURCE_EDITION_CONTENT", 2);
define("RESOURCE_EDITION_SIBLINGSORDER", 4);
define("RESOURCE_EDITION_LOCATION", 8);
define("RESOURCE_EDITION_MOVE", 16);
/**
  * Resource publications statuses.
  * 	Nevervalidated : the page was created and no validator moved it into public space.
  * 	validated : It has been already validated, but is not currently into its "window" of publication" defined by its publication dates.	
  * 	Public : It has been validated and is currently visible by the public
  */
define("RESOURCE_PUBLICATION_NEVERVALIDATED", 0);
define("RESOURCE_PUBLICATION_VALIDATED", 1);
define("RESOURCE_PUBLICATION_PUBLIC", 2);
/**
  * Resource data location : edited, edition, public, archived, deleted and "/dev/null", the infamous black hole
  */
define("RESOURCE_DATA_LOCATION_EDITED", "edited");
define("RESOURCE_DATA_LOCATION_EDITION", "edition");
define("RESOURCE_DATA_LOCATION_PUBLIC", "public");
define("RESOURCE_DATA_LOCATION_ARCHIVED", "archived");
define("RESOURCE_DATA_LOCATION_DELETED", "deleted");
define("RESOURCE_DATA_LOCATION_DEVNULL", "/dev/null");
/**
  * Link types : internal, external or none. Useful for module resources making links to pages or external websites
  */
define("RESOURCE_LINK_TYPE_NONE", 0);
define("RESOURCE_LINK_TYPE_INTERNAL", 1);
define("RESOURCE_LINK_TYPE_EXTERNAL", 2);
define("RESOURCE_LINK_TYPE_FILE", 3);
/**
* Clearance Modules permission levels
* Default : 0
*/
define("CLEARANCE_MODULE_NONE", 0);
define("CLEARANCE_MODULE_VIEW", 1);
define("CLEARANCE_MODULE_EDIT", 2);
define("CLEARANCE_MODULE_MANAGE", 3);
/**
* Clearance Pages permission levels
*/
define("CLEARANCE_PAGE_NONE", 0);
define("CLEARANCE_PAGE_VIEW", 1);
define("CLEARANCE_PAGE_EDIT", 2);
/**
* Clearance Administration permission levels
*/
define("CLEARANCE_ADMINISTRATION_EDITVALIDATEALL", 1);
define("CLEARANCE_ADMINISTRATION_REGENERATEPAGES", 2);
define("CLEARANCE_ADMINISTRATION_TEMPLATES", 4);
define("CLEARANCE_ADMINISTRATION_EDIT_TEMPLATES", 8);
define("CLEARANCE_ADMINISTRATION_VIEWLOG", 16);
define("CLEARANCE_ADMINISTRATION_EDITUSERS", 32);
define("CLEARANCE_ADMINISTRATION_VIEWCALENDAR", 64);
define("CLEARANCE_ADMINISTRATION_STATS", 128);
define("CLEARANCE_ADMINISTRATION_DUPLICATE_BRANCH", 256);
/**
* Alert Levels
*/
define("ALERT_LEVEL_VALIDATION", 1);
define("ALERT_LEVEL_PROFILE", 2);
define("ALERT_LEVEL_PAGE_ALERTS", 4);
/**
  * Validation option constants : ACCEPT, REFUSE and TRANSFER
  */
define("VALIDATION_OPTION_ACCEPT", 1);
define("VALIDATION_OPTION_REFUSE", 2);
define("VALIDATION_OPTION_TRANSFER", 4);
/**
 * Visualization modes for a page : HTML from public or edited or edition tables ; form mode ; clientSpaces edition mode.
 */
define("PAGE_VISUALMODE_FORM", 1);
define("PAGE_VISUALMODE_HTML_PUBLIC", 2);
define("PAGE_VISUALMODE_HTML_EDITED", 3);
define("PAGE_VISUALMODE_HTML_EDITION", 4);
define("PAGE_VISUALMODE_CLIENTSPACES_FORM", 5);
define("PAGE_VISUALMODE_PRINT", 6);
define("PAGE_VISUALMODE_HTML_PUBLIC_INDEXABLE", 7);
/**
 * Page https status
 * Defined in top of generated pages
 */
if (!defined('PAGE_SSL_MODE')) {
	define('PAGE_SSL_MODE', false);
}
//augment memory_limit
if (ini_get('memory_limit') < (int) APPLICATION_MEMORY_LIMIT) {
	@ini_set('memory_limit', APPLICATION_MEMORY_LIMIT);
}
//try to change some misconfigurations
@ini_set('magic_quotes_gpc', 0);
@ini_set('magic_quotes_runtime', 0);
@ini_set('magic_quotes_sybase', 0);
@ini_set('allow_call_time_pass_reference', 0);
//set default timezone
date_default_timezone_set(APPLICATION_DEFAULT_TIMEZONE);
//set PHP default encoding for utf-8
if (strtolower(APPLICATION_DEFAULT_ENCODING) == 'utf-8') {
	@ini_set('mbstring.internal_encoding', 'UTF-8');
}

//set error reporting level
error_reporting(APPLICATION_ERROR_REPORTING);

//set default Apache Content-Type if header is not already sent
if (!headers_sent()) {
	header('Content-Type: text/html; charset='.APPLICATION_DEFAULT_ENCODING);
}
//load standard config file parameters (PATH_MODULES_FS.'/standard_rc.xml')
require_once(PATH_PACKAGES_FS."/modules/readStandardParam.php");
//set default level of output compression (if any)
@ini_set('zlib.output_compression_level',6);

/**
  *	Automne version number
  */
if (!defined("AUTOMNE_VERSION") && file_exists(PATH_MAIN_FS."/VERSION")) {
	define("AUTOMNE_VERSION", file_get_contents(PATH_MAIN_FS."/VERSION"));
} else if(!defined("AUTOMNE_VERSION") && !file_exists(PATH_MAIN_FS."/VERSION")) {
	define("AUTOMNE_VERSION", 'Unknown');
}
/**
  *	Automne subversion number. Used to avoid JS and CSS browser cache
  */
if (!defined("AUTOMNE_LASTUPDATE") && file_exists(PATH_MAIN_FS.'/.bzr/branch/last-revision')) {
	//Extract last update from bazaar last-revision
	preg_match('/-([0-9]{14})-/', file_get_contents(PATH_MAIN_FS.'/.bzr/branch/last-revision'), $match);
	if (isset($match[1])) {
		define("AUTOMNE_LASTUPDATE", strtotime ($match[1]));
	}
}
if (!defined("AUTOMNE_LASTUPDATE") && file_exists(PATH_MAIN_FS."/SUBVERSION")) {
	//Extract last update from Automne last update file
	define("AUTOMNE_LASTUPDATE", file_get_contents(PATH_MAIN_FS."/SUBVERSION"));
} else if(!defined("AUTOMNE_LASTUPDATE") && !file_exists(PATH_MAIN_FS."/SUBVERSION")) {
	define("AUTOMNE_LASTUPDATE", 0);
}

//include base packages
require_once(PATH_PACKAGES_FS."/common/grandfather.php");
//log PHP Errors
@ini_set('log_errors', 1);
@ini_set('error_log', PATH_MAIN_FS.'/'.CMS_grandFather::ERROR_LOG);

/**
  * Set PHP error handler
  */
set_error_handler (array('CMS_grandFather','PHPErrorHandler'));

/**
  * Set Automne autoload handler
  */
spl_autoload_register (array('CMS_grandFather','autoload'));

/**
  * Set shutdown function (only if debug or admin)
  */
if (SYSTEM_DEBUG || APPLICATION_USER_TYPE == 'admin') {
	register_shutdown_function(array('CMS_view','quit'));
}

/**
  * Debug mode configuration changes.
  */
if (SYSTEM_DEBUG) {
	//Display errors in Debug Mode
	if (function_exists("ini_set")) {
		@ini_set("display_errors", "1");
		@ini_set('output_buffering','Off');
		if (extension_loaded('soap')) {
			/**
			  * SOAP cache
			  * Disabled if SYSTEM_DEBUG is true
			  */
			@ini_set('soap.wsdl_cache_enabled', '0');
			@ini_set('soap.wsdl_cache_ttl', '1');
		}
	}
	//Usefull function to dump a var.
	function pr($data,$useVarDump = false) {
		//$data .= ' ('.io::getCallInfos().')';
		$view = CMS_view::getInstance();
		if (!$useVarDump) {
			$view->addRawData(print_r($data,true));
		} else {
			ob_start();
			var_dump($data);
			$rawdata = ob_get_contents();
			ob_end_clean();
			$view->addRawData($rawdata);
		}
	}
} else {
	//Remove all errors in Production.
	//Errors are logged in cms_error_log file
	if (function_exists("ini_set")) {
		@ini_set("display_errors", "0");
		@ini_set('output_buffering','On');
		if (extension_loaded('soap')) {
			/**
			  * SOAP cache
			  * Enabled if SYSTEM_DEBUG is false
			  */
			@ini_set('soap.wsdl_cache_enabled', '1');
			@ini_set('soap.wsdl_cache_ttl', '86400'); // 1 day
		}
	} elseif(function_exists("error_reporting")) {
		error_reporting(0);
	}
	//Usefull function to dump a var : Do nothing if debug is inactive
	function pr($data,$useVarDump = false){}
}
//launch stats recording
if (STATS_DEBUG && APPLICATION_EXEC_TYPE != 'cli') {
	CMS_stats::start();
}

/**
  * If magic quotes is active, rewrite all super globals
  */
if (get_magic_quotes_gpc()) {
	// Strip slashes in content 
	function atm_stripslashes($value) {
		$value = is_array($value) ? array_map('CMS_stripslashes', $value) : stripslashes($value) ;
		return $value;
	}
	$_POST = array_map('atm_stripslashes', $_POST);
	$_GET = array_map('atm_stripslashes', $_GET);
	$_COOKIE = array_map('atm_stripslashes', $_COOKIE);
	$_REQUEST = array_map('atm_stripslashes', $_REQUEST);
}

/**
  * If application APPLICATION_DEFAULT_ENCODING is not UTF-8, we need to decode all ajax requests
  */
if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
	&& strtolower(APPLICATION_DEFAULT_ENCODING) != 'utf-8' 
	&& $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
	function atm_utf8_decode_callback (&$input, $index = '') {
		if (is_string($input)) {
			//decode UTF8 with support of CP1252
			$input = io::utf8Decode($input);
			return $input;
		} elseif (is_array($input)) {
			array_walk_recursive($input, 'atm_utf8_decode_callback');
			return $input;
		}
		return $input;
	}
	$_POST = array_map('atm_utf8_decode_callback', $_POST);
	$_GET = array_map('atm_utf8_decode_callback', $_GET);
	$_COOKIE = array_map('atm_utf8_decode_callback', $_COOKIE);
	$_REQUEST = array_map('atm_utf8_decode_callback', $_REQUEST);
}

/**
  * Launch output compression if enabled
  */
function atm_compress_handler( $p_buffer, $p_mode ) {
	if (ENABLE_HTML_COMPRESSION															//conf must accept HTML compression
			 && APPLICATION_EXEC_TYPE == 'http'											//current mode must be HTTP (not CLI)
			 && !headers_sent()															//headers must not already sent
			 && 'ob_gzhandler' != ini_get('output_handler')								//gzip should not already defined as output handler
			 && extension_loaded( 'zlib' )												//gzip extension must exists
			 && strpos( strtolower(@$_SERVER['HTTP_ACCEPT_ENCODING']), 'gzip') !== false//client must handle gzip
			 && !ini_get('zlib.output_compression')) {									//no output compression should already defined at PHP level
		if (!defined('HTML_COMPRESSION_STARTED')) {
			define('HTML_COMPRESSION_STARTED', true);
		}
		return ob_gzhandler( $p_buffer, $p_mode );
	} else {
		return $p_buffer;
	}
}

/**
  * Force page regeneration for given URL (need to be logged and to have regen rights)
  */
function atm_regen() {
	global $cms_user;
	if (isset($_SERVER['REQUEST_URI']) && isset($_REQUEST['atm-regen']) && isset($cms_user) && is_object($cms_user) && $cms_user->hasAdminClearance(CLEARANCE_ADMINISTRATION_REGENERATEPAGES)) {
	    $p = CMS_tree::analyseURL($_SERVER['REQUEST_URI']);
	    if ($p && is_object($p) && !$p->hasError()) {
	        $p->regenerate(true);
	    }
	}
}

//Function to start Automne session (deprecated, use CMS_session::init() instead)
function start_atm_session() {
	//nothing
}

//function to get current time in microsecond
function getmicrotime() {
	return CMS_stats::getmicrotime();
}

// Start output buffering for compression so we don't prevent
// headers from being sent if there's a blank line in an included file
if (!defined('HTML_COMPRESSION_STARTED') && APPLICATION_EXEC_TYPE != 'cli') {
	ob_start( 'atm_compress_handler' );
}

//Session operations
if (APPLICATION_CONFIG_LOADED && APPLICATION_EXEC_TYPE == 'http') {
	//Start Automne session	
	CMS_session::init();
	//load current user if exists
	$cms_user = CMS_session::getUser();
	if ($cms_user) {
		$cms_language = $cms_user->getLanguage();
	} else {
		unset($cms_user);
	}
}

//force module standard loading
if (!class_exists('CMS_module_standard')) {
	die('Cannot find standard module ...');
}

//regenerate current page if needed
atm_regen();
?>
