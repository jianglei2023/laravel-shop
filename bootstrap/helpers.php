<?php

/*
 * 将当前请求的路由名称转换为CSS类名称
 */
function route_class()
{
    //使用 - 替换 .  Route::currentRouteName()  获取当前请求的路由名称
    return str_replace('.','-',Route::currentRouteName());
}