<?php

require_once __DIR__ . '/vendor/autoload.php';


$obj =  new \Zhaoming\tools\ToolsService();

//test124
#解压文件 zip,rar,7z
# MAC系统需要支持 安装 zip,rar,7z 解包工具
//$obj->tools('unzip')->unPackage('/dir/');
#遍历文件及文件夹 ,包含扩展名 md5值 路径 大小
$obj->tools('file')->getDir('/dir/');
