<?php
    $servername="localhost";//不要动，默认为本地即可
    $username="数据库用户名";//修改为数据库用户名
    $password="数据库密码";//修改为数据库用户密码
    $host = "服务端域名";//修改为域名，以“/”结尾，例如https://admin.satri.cn/

    //按需设置下面
    $tencentSecretId = "";//腾讯云账户SecretId
    $tencentSecretKey = "";//腾讯云账户SecretKey
    $appid = "";//微信小程序appid
    $appsecret = "";//微信小程序appsecret
    //创建连接
    $conn=mysqli_connect($servername,$username,$password);
    //检查连接
    if(!$conn){
        die("连接失败：".mysqli_connect_error());
    }
    mysqli_select_db($conn,'');//单引号''内修改为数据库名
    //输出成功
    // echo "连接成功";
