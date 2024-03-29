<?php
/**
 * 获取微信小程序访问令牌
 *
 * @version 1.0.0
 * @author 夏创高科技软件产业（辽宁）有限公司
 * @link https://yourwebsite.com
 * @license MIT
 *
 * @param string $appsecret 微信小程序的App Secret
 * @param string $appid 微信小程序的App ID
 * @param string $grantType 授权类型，一般为 "client_credential"
 * @return string 返回获取到的微信小程序访问令牌
 */
function get_wx_programe_accesstoken($appsecret,$appid,$grantType){
    // 构建请求 URL
    $url = 'https://api.weixin.qq.com/cgi-bin/token';
    $url .= "?secret={$appsecret}&appid={$appid}&grant_type={$grantType}";

    // 构建请求头
    $headers = [
    'Content-Type: application/json',
    ];
    // 初始化 cURL
    $ch = curl_init();
    // 设置 cURL 选项
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // 执行 cURL 请求
    $response = curl_exec($ch);
    
    // 检查是否有 cURL 错误
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
    }

    // 关闭 cURL 资源
    curl_close($ch);

    // 解析 JSON 数据
    $data = json_decode($response, true);

    // 输出 access_token
    // if (isset($data['access_token'])) {
    //     echo 'Access Token: ' . $data['access_token'];
    // } else {
    //     echo 'Failed to get Access Token';
    // }
    // 参数

    $access_token = $data['access_token']; // 请替换为实际的 access_token
    return $access_token;
}
