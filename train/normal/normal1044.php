<?php
class form {
	/**
	 * 编辑器
	 * @param int $textareaid
	 * @param int $toolbar 
	 * @param string $module 模块名称
	 * @param int $catid 栏目id
	 * @param int $color 编辑器颜色
	 * @param boole $allowupload  是否允许上传
	 * @param boole $allowbrowser 是否允许浏览文件
	 * @param string $alowuploadexts 允许上传类型
	 * @param string $height 编辑器高度
	 * @param string $disabled_page 是否禁用分页和子标题
	 */
	public  function editor($textareaid = 'content', $toolbar = 'basic', $module = '', $catid = '', $color = '', $allowupload = 0, $allowbrowser = 1,$alowuploadexts = '',$height = 200,$disabled_page = 0, $allowuploadnum = '10') {
		$str ='';
		if(!defined('EDITOR_INIT')) {
			$str = '<script type="text/javascript" src="'.JS_PATH.'ckeditor/ckeditor.js"></script>';
			define('EDITOR_INIT', 1);
		}
		if($toolbar == 'basic') {
			$toolbar = defined('IN_ADMIN') ? "['Source']," : '';
			$toolbar .= "['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],['Maximize'],\r\n";
		} elseif($toolbar == 'full') {
			if(defined('IN_ADMIN')) {
				$toolbar = "['Source',";
			} else {
				$toolbar = '[';
			}
			$toolbar .= "'-','Templates'],
		    ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'],
		    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],['ShowBlocks'],['Image','Capture','Flash','MyVideo'],['Maximize'],
		    '/',
		    ['Bold','Italic','Underline','Strike','-'],
		    ['Subscript','Superscript','-'],
		    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
		    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
		    ['Link','Unlink','Anchor'],
		    ['Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
		    '/',
		    ['Styles','Format','Font','FontSize'],
		    ['TextColor','BGColor'],
		    ['attachment'],\r\n";
		} elseif($toolbar == 'desc') {
			$toolbar = "['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink', '-', 'Image', '-','Source'],['Maximize'],\r\n";
		} else {
			$toolbar = '';
		}
		$str .= "<script type=\"text/javascript\">\r\n";
		$str .= "CKEDITOR.replace( '$textareaid',{";
		$str .= "height:{$height},";
	
		$show_page = ($module == 'content' && !$disabled_page) ? 'true' : 'false';
		$str .="pages:$show_page,subtitle:$show_page,textareaid:'".$textareaid."',module:'".$module."',catid:'".$catid."',\r\n";
		if($allowupload) {
			$authkey = upload_key("$allowuploadnum,$alowuploadexts,$allowbrowser");
			$str .="flashupload:true,alowuploadexts:'".$alowuploadexts."',allowbrowser:'".$allowbrowser."',allowuploadnum:'".$allowuploadnum."',authkey:'".$authkey."',\r\n";
		}
        if($allowupload) $str .= "filebrowserUploadUrl : '".APP_PATH."index.php?m=attachment&c=attachments&a=upload&module=".$module."&catid=".$catid."&dosubmit=1',\r\n";
		if($color) {
			$str .= "extraPlugins : 'uicolor',uiColor: '$color',";
		}
		$str .= "toolbar :\r\n";
		$str .= "[\r\n";
		$str .= $toolbar;
		$str .= "]\r\n";
		//$str .= "fullPage : true";
		$str .= "});\r\n";
		$str .= '</script>';
		$ext_str = "<div class='editor_bottom'>";
		if(!defined('IMAGES_INIT')) {
			$ext_str .= '<script type="text/javascript" src="'.JS_PATH.'swfupload/swf2ckeditor.js"></script>';
			define('IMAGES_INIT', 1);
		}
		$ext_str .= "<div id='page_title_div'>
		<table cellpadding='0' cellspacing='1' border='0'><tr><td class='title'>".L('subtitle')."<span id='msg_page_title_value'></span></td><td>
		<a class='close' href='javascript:;' onclick='javascript:$(\"#page_title_div\").hide();'><span>×</span></a></td>
		<tr><td colspan='2'><input name='page_title_value' id='page_title_value' class='input-text' value='' size='30'>&nbsp;<input type='button' class='button' value='".L('submit')."' onclick=insert_page_title(\"$textareaid\",1)></td></tr>
		</table></div>";
		$ext_str .= "</div>";
		if(is_ie()) 
			$ext_str .= "<div style='display:none'><OBJECT id='PC_Capture' classid='clsid:021E8C6F-52D4-42F2-9B36-BCFBAD3A0DE4'><PARAM NAME='_Version' VALUE='0'><PARAM NAME='_ExtentX' VALUE='0'><PARAM NAME='_ExtentY' VALUE='0'><PARAM NAME='_StockProps' VALUE='0'></OBJECT></div>";
		$str .= $ext_str;
		return $str;
	}
}
?>