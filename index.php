<?php

/**
* ownCloud
*
* @author Frank Karlitschek
* @copyright 2010 Frank Karlitschek karlitschek@kde.org
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either
* version 3 of the License, or any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*
* You should have received a copy of the GNU Affero General Public
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
*
*/

use OCA\friends\Controller\FriendshipController as friendshipController;

$RUNTIME_NOAPPS = true; //no apps, yet

require_once 'lib/base.php';
//$username =$_POST['USERNAME'];
//$interests = $_POST['INTERESTS'];
//$interests = stripslashes($interests);
//$data=json_decode($interests,true);

//error_log($interests);
//error_log($username);
//$obj1 = new friendshipController();
//$obj1->getAndroid($interests);
//friendshipController::getAndroid($interests);
//error_log("getting out of for");	
OC::handleRequest();
