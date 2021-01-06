<?php
function html_n($data){
	echo "$data\n";
}

function css_main(){
	html_n('<style type="text/css">
	*{padding:0px;margin:0px;}
	body,td{font-size: 12px;color:#00ff00;background:#292929;}input,select,textarea{font-size: 12px;background-color:#FFFFCC;border:1px solid #fff}
	body{color:#FFFFFF;font-family:Verdana, Arial, Helvetica, sans-serif;
	height:100%;overflow-y:auto;background:#333333;SCROLLBAR-FACE-COLOR: #232323; SCROLLBAR-HIGHLIGHT-COLOR: #232323; SCROLLBAR-SHADOW-COLOR: #383838; SCROLLBAR-DARKSHADOW-COLOR: #383838; SCROLLBAR-3DLIGHT-COLOR: #232323; SCROLLBAR-ARROW-COLOR: #FFFFFF;SCROLLBAR-TRACK-COLOR: #383838;}
	input,select,textarea{background-color:#FFFFCC;border:1px solid #FFFFFF}
    a{color:#ddd;text-decoration: none;}a:hover{color:red;background:#000}
	.actall{background:#000000;font-size:14px;border:1px solid #999999;padding:2px;margin-top:3px;margin-bottom:3px;clear:both;}
	</STYLE><body style="table-layout:fixed; word-break:break-all; FILTER: progid:DXImageTransform.Microsoft.Gradient(gradientType=0,startColorStr=#626262,endColorStr=#1C1C1C)">
	<table width="85%" border=0 bgcolor="#555555" align="center">');
}

css_main();
?>