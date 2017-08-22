<?php
	if( $GLOBALS['w.localhost'] ){ini_set('display_errors',1);}
	date_default_timezone_set('Europe/Madrid');

	include_once('inc.common.php');
	common_setBase('base');

	function __autoload( $name ){
		switch( $name ){
			/* INI-Databases */
			case '_mongo':
			case '_mongodb':
				if( class_exists('MongoId') ){include('classes/class._mongo.php');break;}
				include('classes/class._mongodb.php');break;
			case '_sqlite3':	include('classes/class._sqlite3.php');break;
			case '_mysql':		include('classes/class._mysql.php');break;
			/* END-Databases */

			case  '_html_fileg':
			case '__html_fileg':	include('classes/class._html_fileg.php');break;
			case '__strings':	include('inc.strings.php');break;
			case  '_date':
			case '__date':		include('classes/class._date.php');break;
			case  '_params':	include('classes/class._params.php');break;

			case '_shoutbox_sqlite3':	include('classes/class._shoutbox.sqlite3.php');break;
				
		}
	}
