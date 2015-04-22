<?php
/*
 Debian note:
 This file is based on and replaces the include/config.php file normaly
 found in the cacti source. Most cacti configuration is done via the
 web-interface and stored in a mysql database, however, some things need
 to be defined or can be overwritten here.

 Database access settings are automatically generated from 
 /etc/dbconfig-common/cacti.conf by /usr/sbin/dbconfig-generate-include

 By default this file is managed via ucf, so you shouldn't have to
 worry about manual changes being silently discarded.  *However*,
 you'll probably also want to edit the configuration file mentioned
 above too.
*/

/*
 +-------------------------------------------------------------------------+
 | Copyright (C) 2004-2012 The Cacti Group                                 |
 |                                                                         |
 | This program is free software; you can redistribute it and/or           |
 | modify it under the terms of the GNU General Public License             |
 | as published by the Free Software Foundation; either version 2          |
 | of the License, or (at your option) any later version.                  |
 |                                                                         |
 | This program is distributed in the hope that it will be useful,         |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of          |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           |
 | GNU General Public License for more details.                            |
 +-------------------------------------------------------------------------+
 | Cacti: The Complete RRDTool-based Graphing Solution                     |
 +-------------------------------------------------------------------------+
 | This code is designed, written, and maintained by the Cacti Group. See  |
 | about.php and/or the AUTHORS file for specific developer information.   |
 +-------------------------------------------------------------------------+
 | http://www.cacti.net/                                                   |
 +-------------------------------------------------------------------------+
*/

/* make sure these values refect your actual database/host/user/password */
$database_type = "mysql";
$database_default = "cacti";
$database_hostname = "localhost";
$database_username = "cacti";
$database_password = "leniy.org";
$database_port = "";
$database_ssl = false;

/*
   Edit this to point to the default URL of your Cacti install
   ex: if your cacti install as at http://serverip/cacti/ this
   would be set to /cacti/

   Debian addition:
   If used together with a http deamon, it should be configured
   consistently. Using an empty path makes all links relative.
*/
//$url_path = "/cacti/";

/* Default session name - Session name must contain alpha characters */
//$cacti_session_name = "Cacti";

?>
