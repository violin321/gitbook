#[oneindex](http://violin.site/oneindex)(点此预览)
##介绍
***********
oneindex是大佬@donwa基于onedrive的api接口创建的php程序，可以直接列出onedrive目录

项目在github上开源：https://github.com/donwa/oneindex

仅支持企业版、教育版onedrive，不支持个人版onedrive

要求PHP 5.6+ 需打开curl支持

###优点：

1.占用服务器空间，不走服务器流量

2.响应式，自适应移动设备展示

3.支持可以在onedrive的视频、音频在线播放

4.支持代码在线查看

5.直链，可以作为视频床、图床

##安装部署
***********
1.下载上传oneindex程序上传到服务器空间

2.设置oneindex目录下congfig 和 cache目录可读写

3.访问oneindex地址，点击右上角获取应用ID 和 密钥。点击自动跳转！

4.按页面提示完成安装、登录，开始使用
##特殊文件实现功能
***********
在文件夹底部添加说明:  

>在 OneDrive 的文件夹中添加README.md文件，使用 Markdown 语法。

在文件夹头部添加说明:  

>在 OneDrive 的文件夹中添加HEAD.md 文件，使用 Markdown 语法。

加密文件夹:  

>在 OneDrive 的文件夹中添加.password文件，填入密码，密码不能为空。  

直接输出网页:

>在 OneDrive 的文件夹中添加index.html 文件，程序会直接输出网页而不列目录。
配合 文件展示设置-直接输出 效果更佳。

##魔改优化
************
###1.优化
[可选]推荐配置，非必需。后台定时刷新缓存，可增加前台访问的速度。
```
# 每小时刷新一次token
0 * * * * /具体路径/php /程序具体路径/one.php token:refresh

# 每十分钟后台刷新一遍缓存
*/10 * * * * /具体路径/php /程序具体路径/one.php cache:refresh
```
###2.主题*（此部分待完善）*
###3.点击出现社会主义核心价值观
```
<!-- 社会主义核心价值观开始 -->
	
	<style>
    .text-popup {
        animation: textPopup 1s;
        color: #ff6651;
        user-select: none;
        white-space: nowrap;
        position: absolute;
        z-index: 99;
    }
    @keyframes textPopup {
        0%, 100% {
            opacity: 0;
        }
        5% {
            opacity: 1;
        }
        100% {
            transform: translateY(-50px);    
        }
    }
</style>
<script>
(function (arr, options) {
    if (!arr || !arr.length) {
        return;    
    }
    let index = 0;
    document.documentElement.addEventListener('click', function (event) {
        let x = event.pageX, y = event.pageY;
        let eleText = document.createElement('span');
        eleText.className = 'text-popup';
        this.appendChild(eleText);
        if (arr[index]) {
            eleText.innerHTML = arr[index];
        } else {
            index = 0;
            eleText.innerHTML = arr[0];
        }
        // 动画结束后删除自己
        eleText.addEventListener('animationend', function () {
            eleText.parentNode.removeChild(eleText);
        });
        // 位置
        eleText.style.left = (x - eleText.clientWidth / 2) + 'px';
        eleText.style.top = (y - eleText.clientHeight) + 'px';
        // index递增
        index++;
    });    
})(['富强', '民主', '文明', '和谐', '自由', '平等', '公正', '法治', '爱国', '敬业', '诚信', '友善']);
</script>
	
	 <!-- 社会主义核心价值观over -->
```
###4.北京时间显示
```
<br />
<center>
<font face="微软雅黑" color=#000000 >北京时间</font>
<div id="show_time">  
<script>  
//这里代码多了几行，但是不会延迟显示，速度比较好，格式可以自定义，是理想的时间显示
setInterval("fun(show_time)",1);
function fun(timeID){ 
var date = new Date();  //创建对象  
var y = date.getFullYear();     //获取年份  
var m =date.getMonth()+1;   //获取月份  返回0-11  
var d = date.getDate(); // 获取日  
var w = date.getDay();   //获取星期几  返回0-6   (0=星期天) 
var ww = ' 星期'+'日一二三四五六'.charAt(new Date().getDay()) ;//星期几
var h = date.getHours();  //时
var minute = date.getMinutes()  //分
var s = date.getSeconds(); //秒
var sss = date.getMilliseconds() ; //毫秒
if(m<10){
m = "0"+m;
}
if(d<10){
d = "0"+d;
}
if(h<10){
h = "0"+h;
}
if(minute<10){
minute = "0"+minute;
}
if(s<10){
s = "0"+s;
}
if(sss<10){
sss = "00"+sss;
}else if(sss<100){
sss = "0"+sss;
}
document.getElementById(timeID.id).innerHTML =  y+"年"+m+"月"+d+"日"+"   "+h+":"+minute+":"+s+"."+sss+"  "+ww;
  }
</script>  
</div>
</center>
<br />
```