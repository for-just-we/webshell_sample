<?php

/*
	[UCenter] (C)2001-2099 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	$Id: friend.php 1059 2011-03-01 07:25:09Z monkey $
*/

class friendmodel {

	var $db;
	var $base;

	function __construct(&$base) {
		$this->friendmodel($base);
	}

	function get_totalnum_by_uid($uid, $direction = 0) {
		$sqladd = '';
		if($direction == 0) {
			$sqladd = "uid='$uid'";
		} elseif($direction == 1) {
			$sqladd = "uid='$uid' AND direction='1'";
		} elseif($direction == 2) {
			$sqladd = "friendid='$uid' AND direction='1'";
		} elseif($direction == 3) {
			$sqladd = "uid='$uid' AND direction='3'";
		}
		$totalnum = $this->db->result_first("SELECT COUNT(*) FROM ".UC_DBTABLEPRE."friends WHERE $sqladd");
		return $totalnum;
	}
}

?>