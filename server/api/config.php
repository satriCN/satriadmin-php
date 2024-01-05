<?php
/**
 * 数据库连接和配置文件
 *
 * @version 1.0.0
 * @author 夏创高科技软件产业（辽宁）有限公司
 * @link https://satri.cn
 * @license MIT
 */

// 数据库连接配置
$servername = "localhost"; // 不要动，默认为本地即可
$username = "数据库用户名"; // 修改为数据库用户名
$password = "数据库密码"; // 修改为数据库用户密码

// 服务端配置
$host = "服务端域名"; // 修改为域名，以“/”结尾，例如 https://admin.satri.cn/

// 以下按需配置
// 腾讯云配置
$tencentSecretId = ""; // 腾讯云账户SecretId
$tencentSecretKey = ""; // 腾讯云账户SecretKey

// 微信小程序配置
$appid = ""; // 微信小程序appid
$appsecret = ""; // 微信小程序appsecret

// 创建数据库连接
$conn = mysqli_connect($servername, $username, $password);

// 检查连接
if (!$conn) {
    die("连接失败：" . mysqli_connect_error());
}

// 选择数据库
mysqli_select_db($conn, ''); // 单引号''内修改为数据库名

// 输出成功信息
// echo "连接成功";
