<?php
class form {
	public function select_linkage($keyid = 0, $parentid = 0, $name = 'parentid', $id ='', $alt = '', $linkageid = 0, $property = '') {
		$tree = pc_base::load_sys_class('tree');
		$result = getcache($keyid,'linkage');
		$id = $id ? $id : $name;
		$string = "<select name='$name' id='$id' $property>\n<option value='0'>$alt</option>\n";
		if($result['data']) {
			foreach($result['data'] as $area) {	
				$categorys[$area['linkageid']] = array('id'=>$area['linkageid'], 'parentid'=>$area['parentid'], 'name'=>$area['name']);	
			}
		}
		$str  = "<option value='\$id' \$selected>\$spacer \$name</option>";

		$tree->init($categorys);
		$string .= $tree->get_tree($parentid, $str, $linkageid);
			
		$string .= '</select>';
		return $string;
	}
}
?>