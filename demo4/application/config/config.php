<?php
/**
 * 应用配置文件
 * 使用数组方式
 */

return [

    //数据库的连接参数配置
    'db' => [
    'user' => 'root', //用户名
    'pass' => 'root', //密码
    'dbname' => 'mvc_bolg', //数据库
],

    //应用的整体配置
    'app' => [
        'default_platform' => 'home' //默认模块
    ],

    //前台配置
    'home' => [
        'default_controller' => 'Index', //默认的控制器
        'default_action' => 'indexShow', //默认的方法
    ],

    //后台配置
    'admin' => [
    'default_controller' => '', //默认的控制器
    'default_action' => '', //默认的方法
]
];