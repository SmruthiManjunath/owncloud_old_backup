###
# ownCloud
#
# @author Sarah Jones
# Copyright (c) 2012 - Bernhard Posselt <nukeawhale@gmail.com>
#
# This file is licensed under the Affero General Public License version 3 or later.
# See the COPYING-README file
#
###

angular.module('Friends').factory '_FriendshipModel',
['_Model',
(_Model) ->

	class FriendshipModel extends _Model

		constructor: ->
			super()
			#@hasForeignKey('user')


	return FriendshipModel
]
