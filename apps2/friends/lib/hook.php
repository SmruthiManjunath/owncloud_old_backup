<?php
/**
 * ownCloud - Friends
 *
 * @author Smruthi Manjunath
 * @copyright 2013 Smruthi Manjunath smruthi.manjunath@gmail.com
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

use OCA\Friends\Core\FriendsAPI;
use OCA\Friends\Db\LocationMapper;
use OCA\Friends\DependencyInjection\DIContainer;
use OCA\Friends\Db\Friendship;
use OCA\Friends\Db\FriendshipMapper;
use \OCP\Share;
namespace OCA\Friends\Lib;


/*
 * This class contains all hooks
 */
class hook {
	const SHARE_TYPE_USER = 0;
	const SHARE_TYPE_GROUP = 1;
	const SHARE_TYPE_LINK = 3;
	const SHARE_TYPE_EMAIL = 4;
	const SHARE_TYPE_CONTACT = 5;
	const SHARE_TYPE_REMOTE = 6;

//	private static $shareTypeUserAndGroups = -1;
//	private static $shareTypeGroupUserUnique = 2;
//	private static $backends = array();
//	private static $backendTypes = array();
         /*
         * Method called when a User is deleted. This deletes all files shared with friends
         */

        public static function deleteFilesSharedWithFriends($arguments) {

                        // Delete any items shared with the deleted user
		//error_log("In delete files shared with friends".$arguments);
		foreach($arguments as $a){
			//foreach($a as $t){
			//error_log($a->getFriendUid1());
			//error_log(print_r($a->'friendUid1',true));
			error_log("**********************************");
		//}
		}
		error_log(print_r($arguments,true));
		$friendUid1 = $arguments['friendship']->getFriendUid1();
		$friendUid2 = $arguments['friendship']->getFriendUid2();
		error_log(var_dump($arguments));	
                $query = \OC_DB::prepare('DELETE FROM `*PREFIX*share`'
                        .' WHERE `share_with` = ? AND `uid_owner` = ? AND `share_type` = ? ');
                $result = $query->execute(array($friendUid1, $friendUid2,\OCP\Share::SHARE_TYPE_USER));
                // Delete any items the deleted user shared
                $query = \OC_DB::prepare('SELECT `id` FROM `*PREFIX*share` WHERE `uid_owner` = ? AND `share_with` = ?');
                $result = $query->execute(array($friendUid1,$friendUid2));
                while ($item = $result->fetchRow()) {
                        \OCP\Share::delete($item['id']);
        }
	error_log("After deleting files shared with friends");

}
}
