<?php
/**
* ownCloud - App Template Example
*
* @author Bernhard Posselt
* @copyright 2012 Bernhard Posselt nukeawhale@gmail.com
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

namespace OCA\MultiInstance\Db;


use \OCA\AppFramework\Db\Entity;


class FilecacheUpdate extends Entity {

	public $id;
	public $storage;
	public $pathHash;
	public $updatedAt;
	public $state;

	const VALID = 1;
	const DELETED = 0;

	public function __construct($filePathHash, $fileStorage=null, $updatedAt=null, $state=null){
		if ($fileStorage) {
			$this->setPathHash($filePathHash);
			$this->setStorage($fileStorage);
			$this->setUpdatedAt($updatedAt);
			$this->setState($state);
		}
		else {
			$this->fromRow($filePathHash);
		}
	}

}
