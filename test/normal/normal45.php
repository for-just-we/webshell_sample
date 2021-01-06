<?php
$admin = array();
// 是否需要密码验证, true 为需要验证, false 为直接进入.下面选项则无效
$admin['check'] = true;
// 如果需要密码验证,请修改登陆密码
$admin['pass']  = 'angel';

//如您对 cookie 作用范围有特殊要求, 或登录不正常, 请修改下面变量, 否则请保持默认
// cookie 前缀
$admin['cookiepre'] = '';
// cookie 作用域
$admin['cookiedomain'] = '';
// cookie 作用路径
$admin['cookiepath'] = '/';
// cookie 有效期
$admin['cookielife'] = 86400;

exit;
?>