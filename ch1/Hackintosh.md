#Hackintosh(以2019联想y7000p为例)
##一、写在前面
###1.正常工作的功能
- UEFI通过Clover启动。
- 内置键盘（带特殊功能键，小键盘已有驱动方法但驱动不稳定已舍弃）。
- 原生USB3 / USB2
- AppleHDA原生音频，包括耳机。
- 内置摄像头。
- 原生电源管理。
- 电池状态。
- 背光控制（使用hotpatch打补丁实现Fn+功能键调节亮度）。
- 背光键盘。
- 核显驱动（独显已经 hotpatch 屏蔽）。
- 有线以太网卡。
- Mac App Store正常运行。
- CPU变频。
- 睡眠唤醒（鼠标，键盘、电源键唤醒均正常）。
- 触控板。 

###2.不能正常使用的功能
- HDMI ，因为HDMI 端口连接到已禁用的Nvidia卡。

##二、电脑配置
规格|详细信息
---|:--:
电脑型号|联想(Lenovo)拯救者Y7000P 2019英特尔酷睿i7 15.6英寸游戏笔记本电脑(i7-9750H 16G 1TSSD RTX2060 144Hz)
操作系统|预装Windows 10 Home（家庭版）
处理器|Intel 酷睿i7 9750H @ 2.6GHz
内存|16GB DDR4 2666MHz
硬盘|内容
显卡|	NVIDIA GeForce RTX 2060
显示器|内容
声卡|内容
网卡|内容
##三、Windows下制作macOS Mojave安装盘
###准备工具
- U盘大于8G
- U 盘大小不限做 PE 盘
- 无线网络:白果卡BCM943602cs(可选)
- 系统镜像(10.14.6 18G87 双平台(Intel/AMD) 双EFI分区版)下载：[点击前往](https://blog.daliansky.net/macOS-Mojave-10.14.6-18G87-Release-version-with-Clover-5033-original-image.html)
- [etcher](https://www.balena.io/etcher/)

###制作安装镜像
镜像制作：下载etcher，打开镜像，选择U盘，点击Flash即可
![avatar](http://7.daliansky.net/etcher.png)
##四、BIOS设置
###开机按`F2`或者`F12`键进入BIOS设置
- Security
  - Intel SGX: `Disable` or `Software Control` （*视BIOS版本不同操作会有所不同*）
- Boot
  - Boot Mode: `Legacy Support`
  - Boot Priority: `UEFI First`
  - Fast Boot: `Disabled`
- Exit
  - OS Optimized Defaults: `Disabled`
  
###确保设置
- 启用UEFI启动。
- 禁用安全启动。
- SATA模式设置为AHCI。

##五、安装系统 :bangbang: :bangbang: :bangbang:
### :one: 开机，按`F12`选择U盘引导

####1.进入CLOVER主界面，直接回车，开始引导macOS

![avatar](http://7.daliansky.net/Air13/1.png)

####2.这个过程需要1-2分钟,耐心等待，进入安装程序,出现语言选择界面

![avatar](http://7.daliansky.net/Air13/4.png)

####3.选择简体中文、出现安装向导、阅读许可协议，请一直点击继续，

### :two: 出现安装界面，选择安装磁盘
####1.请点击菜单的`磁盘工具`，***在磁盘工具里面所做的操作涉及到你的数据安全，请认真仔细确认后再操作，否则由此造成的一切后果概不承担。***

####2.***请根据你的设备选择相应的磁盘***

####3.*** :heavy_exclamation_mark: 点击`抹掉`， 再三确认您的磁盘是空的或者数据是已经备份过的 :heavy_exclamation_mark: ***

####4.在弹出的窗口中输入：名称： `MAC`（或者任何你想要的名称） ；格式： `Mac OS扩展(日志式)` ；方案：`UID分区图`，在点击`抹掉`按钮之前，***请再次确认你的磁盘已经提前做了数据备份***

####5.点击`抹除`，然后等待操作结束

####6.点击完成，通过菜单选择`退出磁盘工具`或者按窗口左上角红色按钮离开磁盘工具

### :three: 安装
####1.选择`MAC`磁盘（或者上文输入的你想要的名称），点击继续
####2.等待第一次安装，程序会将USB安装盘内的安装文件欲复制到需要安装的磁盘内
####3.重启后继续安装，电脑会重启两到三遍
> ** :bangbang: 系统重启后，CLOVER引导界面会多出几个卷标，请选择`Boot macOS Install form MAC`卷标继续安装** *【如果使用安装镜像自带的默认主题，请选择卷标右下角包含 `APFS` 字样的卷标，其中的MAC是你在执行抹盘过程中定义的名称】* 
**在系统安装过程中，请总是选择`Boot macOS Install form MAC`卷标继续安装，安装完成后，卷标名称将变更为：`Boot macOS form MAC`**


### :four: 设置向导
根据自己的喜好设置

##六、安装后的系统设置
###1.将U盘EFI引导分区复制到磁盘内，实现脱离USB运用，开机选择系统(有两种方法可选)
>[y7000pEFI下载](https://violin.site/gitbook/ch1/Hackintosh_EFI_2.0.3.zip)
（本EFI支持以下机型：
2018款 Y7000/Y7000P 以及国际版 Y530 全系列机型；
2019款 Y7000/Y7000P 以及国际版 Y540 全系列机型）

####[WIN]
#####1.下载[DiskGenius](http://www.diskgenius.cn/)
#####2.EFI分区
打开DiskGenius，挂载EFI分区
![avatar](http://violin.site/gitbook/image/h1.png)
双击左侧目录`ESP`进入
![avatar](http://violin.site/gitbook/image/h2.png)
观察右侧是否有EFI分区，然后复制或者合并上文下载的`y7000pEFI`( :bangbang: 若有请不要直接替换，详情查看下方 :bangbang: )
![avatar](http://violin.site/gitbook/image/h3.png)
> 合并EFI分区
这里有一点需要注意:如果之前安装过Windows系统的话,会存在EFI的目录,只是EFI的目录下面只有BOOT和Microsoft这两个目录,如果希望添加macOS的Clover引导的话,可以将USB的EFI分区里面的EFI目录下面的CLOVER复制到磁盘里的EFI目录下,也就是执行的是合并 的操作,让EFI同时支持WINDOWS和macOS的引导.** :bangbang: 千万不要全部复制,否则有可能造成EFI无法启动Windows.**

> 复制EFI分区(一般不为空，若已经合并了EFI请跳过此步)
如果磁盘上的EFI分区里为空的,可以直接将USB的EFI分区下面的EFI目录直接复制到磁盘上的EFI分区里.

~~####[macOS]~~(待完善)

###2.优化命令
进入终端输入
`sudo sh -c "$(curl -fsSL https://gitee.com/xiaoMGit/Y7000Series_Hackintosh_Fix`
~~##七、写在后面]~~(待完善)
***#未完待续（2019.12.2）***
