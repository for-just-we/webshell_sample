<?php

/*
	[UCenter] (C)2001-2099 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	$Id: friend.php 1059 2011-03-01 07:25:09Z monkey $
*/

!defined('IN_UC') && exit('Access Denied');

class friendmodel {

	var $db;
	var $base;

	function __construct(&$base) {
		$this->friendmodel($base);
	}

	function is_friend($uid, $friendids, $direction = 0) {
		$friendid_str = implode("', '", $friendids);
		$sqladd = '';
		if($direction == 0) {
			$sqladd = "uid='$uid'";
		} elseif($direction == 1) {
			$sqladd = "uid='$uid' AND friendid IN ('$friendid_str') AND direction='1'";
		} elseif($direction == 2) {
			$sqladd = "friendid='$uid' AND uid IN ('$friendid_str') AND direction='1'";
		} elseif($direction == 3) {
			$sqladd = "uid='$uid' AND friendid IN ('$friendid_str') AND direction='3'";
		}
		if($this->db->result_first("SELECT COUNT(*) FROM ".UC_DBTABLEPRE."friends WHERE $sqladd") == count($friendids)) {
			return true;
		} else {
			return false;
		}
	}
}

?>