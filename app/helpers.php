<?php
/*
 * @file    helpers.php
 * @Description   自定义的函数都存放在这里
 * @author  Everythone
 */

/*
 * @name route_class
 * @param 无
 * @Description 将当前请求的路由名称转换为CSS类名称
 */
function route_class() {
	return str_replace('.', '-', Route::currentRouteName());
}
?>
