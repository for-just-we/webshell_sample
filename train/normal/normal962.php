<?php
defined('IN_PHPCMS') or exit('No permission resources.'); 

/**
 * 
 * 视频修改接收接口 在vms系统中修改视频时，会调用此接口更新这些视频
 * 
 * @author				chenxuewang
 * @link				http://www.phpcms.cn http://www.ku6.cn
 * @copyright			CopyRight (c) 2006-2012 酷溜网（北京）科技有限公司
 * @license			http://www.phpcms.cn/license/
 * 
 * 
 * *************************************
 *              			           *
 *                 参数说明            *
 *                                     *
 * ************************************* 
 * 
 * title, description, tag, vid, picpath, size, timelen, status, playnum
 * 
 * title, 视频标题
 * 
 * descrption 视频简介
 * 
 * tag 视频标签
 * 
 * vid，视频vid，视频的唯一的标示符。区分视频
 * 
 * picpath 视频缩略图
 * 
 * size 视频大小
 * 
 * timelen 视频播放时长
 * 
 * status 视频目前的状态
 * 
 * playnum 视频播放次数
 * 
 * 
 * 
 * ************************************
 *              			          *
 *                 返 回 值           *
 *                                    *
 * ************************************ 
 * 
 * 接口执行后，应返回相应的值通知vms系统
 * 返回值格式 json数据，array('msg'=>'Edit Success', 'code'=>'100')
 */

//加载数据模型
$video_store_db = pc_base::load_model('video_store_model');


//验证信息
$data = array();

$vid = $_POST['vid'];
if (!$vid) {
	echo json_encode(array('msg'=>'Vid do not empty', 'code'=>4));
	exit;
}

if ($_POST['size'])			
	$data['size'] = $_POST['size'];



echo json_encode(array('msg'=>'Edit successful', 'code'=>200,'vid'=>$vid));
?>