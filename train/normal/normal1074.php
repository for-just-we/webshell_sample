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

	function friendmodel(&$base) {
		$this->base = $base;
		$this->db = $base->db;
	}

	function delete($uid, $friendids) {
		$friendids = $this->base->implode($friendids);
		$this->db->query("DELETE FROM ".UC_DBTABLEPRE."friends WHERE uid='$uid' AND friendid IN ($friendids)");
		$affectedrows = $this->db->affected_rows();
		if($affectedrows > 0) {
			$this->db->query("UPDATE ".UC_DBTABLEPRE."friends SET direction=1 WHERE uid IN ($friendids) AND friendid='$uid' AND direction='3'");
		}
		return $affectedrows;
	}
}

?>