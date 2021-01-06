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

	function add($uid, $friendid, $comment='') {
		$direction = $this->db->result_first("SELECT direction FROM ".UC_DBTABLEPRE."friends WHERE uid='$friendid' AND friendid='$uid' LIMIT 1");
		if($direction == 1) {
			$this->db->query("INSERT INTO ".UC_DBTABLEPRE."friends SET uid='$uid', friendid='$friendid', comment='$comment', direction='3'", 'SILENT');
			$this->db->query("UPDATE ".UC_DBTABLEPRE."friends SET direction='3' WHERE uid='$friendid' AND friendid='$uid'");
			return 1;
		} elseif($direction == 2) {
			return 1;
		} elseif($direction == 3) {
			return -1;
		} else {
			$this->db->query("INSERT INTO ".UC_DBTABLEPRE."friends SET uid='$uid', friendid='$friendid', comment='$comment', direction='1'", 'SILENT');
			return $this->db->insert_id();
		}
	}

}

?>