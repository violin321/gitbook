此页面book.js
 ========
##js主体
<!-- toc -->
若安装的gitbook没有book.js,请手动创建在与SU MARRY.md相同的文件夹中
```
{
    "title": "violin@-@",
    "description": "gitbook百宝箱",
    "author": "violin",
    "language": "zh-hans",
    "root": ".",

    "plugins": [
        "back-to-top-button",
         "advanced-emoji",
         "todo",
        "donate",
        "github",
        "tbfed-pagefooter@^0.0.1",
        "theme-comscore",
        "-lunr", 
      "-search", 
      "search-plus",
      "code",
      "mygitalk",
      "anchor-navigation-ex",
     
       "pageview-count"
    ],

    "pluginsConfig": {
         
        "mygitalk": {
        "clientID": "52d0d7925c9ac196d33d",
        "clientSecret": "5379c2c6e99247a52d1e3315ff76af7db5807849",
        "repo": "talk",
        "owner": "violin321",
        "admin": ["violin321"],
        "distractionFreeMode": false
},  
        "anchor-navigation-ex": {
            "showLevel": false, 
            "showGoTop": false 
        },
  "code": {
           "copyButtons": true
  },
    	    "tbfed-pagefooter": {
            "copyright": "Copyright © violin@-@ 2019",
            "modify_label": "该文件修订时间：",
            "modify_format": "YYYY-MM-DD HH:mm:ss"
        },
        "donate": {
            "wechat": "http://violin.site/wp-content/uploads/2019/08/2019080815032647-e1565281573216.png",
            "alipay": "http://violin.site/wp-content/uploads/2019/08/2019080815032575-e1565281604245.jpg",
            "title": "",
            "button": "打赏",
            "alipayText": "支付宝打赏",
            "wechatText": "微信打赏"
        },
           "github": {
          "url": "https://github.com/violin321"
        }   ,     
        "github-buttons": {
            "repo": "violin321",
            "types": ["star" ],
            "size": "small"
        }
        
    }
}
```
##备注

添加此gitbook中的todo插件，默认的 checkbox 会向右偏移 2em，如果不希望偏移，可以在 website.css 里加上下面的代码:
```
input[type=checkbox]{
    margin-left: -2em;
}
```
🧐🧐