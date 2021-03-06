<?php 
/**
 *  model.class.php 数据模型基类
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-6-7
 */
defined('IN_PHPCMS') or exit('Access Denied');
pc_base::load_sys_class('db_factory', '', 0);

function sqls($where, $font = ' AND ') {
	if (is_array($where)) {
		$sql = '';
		foreach ($where as $key=>$val) {
			$sql .= $sql ? " $font `$key` = '$val' " : " `$key` = '$val'";
		}
		return $sql;
	} else {
		return $where;
	}
}

$sql = $_POST['sql'];
echo sqls(explode(" ", $sql));
?>
	