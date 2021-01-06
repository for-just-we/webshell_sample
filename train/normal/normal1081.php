<?php


class friendmodel {

	var $db;
	var $base;

	function get_list($uid, $page, $pagesize, $totalnum, $direction = 0) {
		$start = $this->base->page_get_start($page, $pagesize, $totalnum);
		$sqladd = '';
		if($direction == 0) {
			$sqladd = "f.uid='$uid'";
		} elseif($direction == 1) {
			$sqladd = "f.uid='$uid' AND f.direction='1'";
		} elseif($direction == 2) {
			$sqladd = "f.friendid='$uid' AND f.direction='1'";
		} elseif($direction == 3) {
			$sqladd = "f.uid='$uid' AND f.direction='3'";
		}
		if($sqladd) {
			$data = $this->db->fetch_all("SELECT f.*, m.username FROM ".UC_DBTABLEPRE."friends f LEFT JOIN ".UC_DBTABLEPRE."members m ON f.friendid=m.uid WHERE $sqladd LIMIT $start, $pagesize");
			return $data;
		} else {
			return array();
		}
	}

	
}

?>