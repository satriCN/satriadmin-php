# satriadmin（PHP）通用管理后台
#### 🚀快速开发、✅后台多端自适应、📱手机端、🖥️PC（电脑）端前台
<p align="center">
<a href="https://www.php.net/"><img src="https://img.shields.io/badge/PHP-7-8892bf"></a> <a href="https://www.tslang.cn/"><img src="https://img.shields.io/badge/JavaScript--294e80"></a> <a href="#"><img src="https://img.shields.io/badge/Vue.js-2-4eb883"></a> <a href="#"><img src="https://img.shields.io/badge/Babel-6-ffc018"></a> <a href="#"><img src="https://img.shields.io/badge/ElementUI--409eff"></a> <a href="https://uniapp.dcloud.io/"><img src="https://img.shields.io/badge/uniapp--d85806"></a>
</p>
<p align="center">
<a href="https://mp.weixin.qq.com/"><img src="https://img.shields.io/badge/微信-公众号-05ce66"></a>
<a href="https://mp.weixin.qq.com/"><img src="https://img.shields.io/badge/微信-小程序-05ce66"></a>
 <a href="https://pay.weixin.qq.com/"><img src="https://img.shields.io/badge/微信-支付API2-05ce66"></a>
<a href="https://pay.weixin.qq.com/"><img src="https://img.shields.io/badge/微信-支付API3-05ce66"></a>
</p>
</p>

## 配置方法

### server 服务端

#### 1、部署
修改"server/api/config.php"中相关配置信息；

#### 2、二次开发

##### 

### uniapp 移动端

#### 1、部署

##### 将  修改为  ；
##### 将  修改为  ；

#### 2、二次开发

#####

### pc WEB端

#### 1、部署
在源代码（编译前）中进行二次开发

#### 2、二次开发
##### 路由部分
路由配置在src/main.js中，默认状态下导航守卫为强制登录，视情况修改。
##### 全局变量
全局变量采用Vue.mixin方式挂载。
