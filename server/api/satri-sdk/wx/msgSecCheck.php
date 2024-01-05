<?php
function msgSecCheck($checkContent,$access_token){
    $url = 'https://api.weixin.qq.com/wxa/msg_sec_check?access_token='.$access_token;
    $data = json_encode(array('content'=>$checkContent),JSON_UNESCAPED_UNICODE);
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_HEADER,FALSE);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,TRUE);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    $res = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($res,true);
    if(isset($result['errcode']) && $result['errcode'] == 87014){
        //命中敏感词风控
        $return = false;
    }else if(isset($result['errcode']) && $result['errcode'] != 0){
        // TODO::报错code需单独定义，先上线，以后再说
        $return = false;
    }else{
        $return = true;
    }
    return $return;
}
