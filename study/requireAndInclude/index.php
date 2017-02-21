<?php
/**
 * Created by PhpStorm.
 * User: leixianhua
 * Date: 17/2/21
 * Time: 下午4:43
 */
//
//require一个文件存在错误的话，那么程序就会中断执行了，并显示致命错误
//include一个文件存在错误的话，那么程序不会中端，而是继续执行，并显示一个警告错误
include('emtyAndIsSsset.php');

//依然会执行
echo 'ttttssssssss\r';