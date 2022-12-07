<!DOCTYPE html>
<html lang="zh-CN">
  <!--   Header Start   -->
  <head>
    <!--   Html info Start   -->
    <meta name="author" content="" />
    <meta charset="utf-8" />
    <meta name="theme-color" content="#ffffff" />
    <meta name="description" content="TCB Work API" />
    <meta name="keywords" content="TCB Work API,API,接口,免费调用" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TCB Work API</title>
    <!--   Html info End   -->

    <!--   CSS Start   -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="/assets/css/animate.css" rel="stylesheet" />

    <link href="/assets/css/style.css" rel="stylesheet" />
    <link href="/assets/css/responsive.css" rel="stylesheet" />
    <link href="/assets/css/mdui.min.css" rel="stylesheet" />
    <link href="/assets/css/mdui.css" rel="stylesheet" />
    <link href="/assets/css/index.e8409b3c.css" rel="stylesheet" />
    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.0/css/all.css" rel="stylesheet">
    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.0/css/fontawesome.css" rel="stylesheet">
    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" rel="stylesheet">
    <style type="text/css">
       .wrapper1 {position: relative;}
       #input {position: absolute;top: 0;left: 0;opacity: 0;z-index: -10;}
    </style>
    <!--   CSS End   -->
  </head>
  <!--   Header End   -->
  <!-- Body Start -->
  <body class="mdui-drawer-body-left mdui-drawer-full-height" style="padding-top: 100px;">
    <!-- APPBAR Start -->
    <header>
    <div class="mdui-appbar mc-appbar mdui-appbar-fixed mdui-shadow-0"> 
    <div class="mdui-toolbar toolbar mdui-text-color-black mdui-shadow-3"> 
    <button id="toggle" class="drawer mdui-btn mdui-btn-icon mdui-ripple">
      <i class="mdui-icon material-icons">menu</i>
    </button> 
    <a href="javascript:;" class="mdui-typo-title">TCB Work's API</a> 
    <div class="mdui-toolbar-spacer"></div> 
    <a onclick="javascript:location.reload();" class="mdui-btn mdui-btn-icon">
       <i class="mdui-icon material-icons">refresh</i>
    </a> 
    <div class="mdui-contain"> 
     <button class="drawer mdui-btn mdui-btn-icon mdui-ripple" mdui-menu="{target: '#example-2'}">
      <i class="mdui-icon material-icons">language</i>
     </button> 
     <ul class="mdui-menu" id="example-2"> 
      <li class="mdui-menu-item"> <a href="/zh-cn" class="mdui-ripple">
        <i class="mdui-menu-item-icon mdui-icon material-icons">remove_red_eye</i>Chinese/中文</a></li> 
      <li class="mdui-menu-item"> <a href="/en-US" class="mdui-ripple">
        <i class="mdui-menu-item-icon mdui-icon material-icons">remove_red_eye</i>English/英文</a></li> 
     </ul> 
    </div> 
    </div> 
    </div>
    </header>
    <!-- APPBAR End -->

  <?php
  include($_SERVER['DOCUMENT_ROOT']."/common/public/side_bar.php");
  ?>
  <!-- List End -->

  <!-- Home#1 Start -->
  <div id="doc" class="mdui-m-b-2 " style="margin-top: -45px;">
  <div class="mdui-text-center mdui-color-theme-a200 mdui-text-color-white" style="padding-top: 80px; padding-bottom: 80px; background-color:#448aff!important;">
   <div class="mdui-typo-display-1">图片随机API</div>
   <br>
   <div class="mdui-typo-subtitle">快速获取各式各样的图片</div>
  </div>
  </div>
  <nav class="doc-toc mdui-text-color-theme-accent mdui-m-x-2">
  <div class="mdui-typo">
  <blockquote>
    <h3>目录</h3>
    <p>接口说明
        <ul>
            请求说明<br>
            请求参数<br>
            错误代码<br>
        </ul> 
    </p>
  </blockquote>
  </div>
  </nav>
  <div id="api_explanation" class="mdui-text-center mdui-typo-headline mdui-text-color-theme-a400" style="color:#448aff!important;">接口说明</div>
  <div class="mdui-p-x-2 mdui-typo">
  <br>
  <div id="request_explanation" class="mdui-chip">
    <span class="mdui-chip-icon mdui-color-theme-accent">
        <i class="mdui-icon material-icons">short_text</i></span>
        <span class="mdui-chip-title">请求说明</span>
    </div>
  </div>
  <div class="mdui-row-center wrapper1">
   <div class="mdui-col-sm-6" style="width: 100%;">
    <div class="mdui-m-t-2">
     <p><b>请求地址：</b>
     <br/>
     <a id="text" href="https://apimoe.lol/api/image/">https://apimoe.lol/api/image/{机型}/</a>
     <textarea id="input">隐藏按钮</textarea>
     <button onclick="copyText()" class="mdui-btn mdui-btn-icon mdui-ripple url">
    <i class="mdui-icon material-icons">content_copy</i>
    </button>
    <br/>
    <b>返回格式：</b>
    <br/>
    <kbd>Json<br/></kbd>
    <b>请求方式：</b>
    <br/>
    <kbd>GET<br/></kbd>
    <b>请求示例：</b>
    <br/>
    <a id="text1" href="https://apimoe.lol/api/image/?json">https://apimoe.lol/api/image/phone/?json</a>
    <textarea id="input">隐藏按钮</textarea>
    <button onclick="copyText()" class="mdui-btn mdui-btn-icon mdui-ripple url">
    <i class="mdui-icon material-icons">content_copy</i>
    </button>
    <br/>
    <b>返回示例：</b>
    </p>
    </div>
   </div> 
   <div class="mdui-m-t-2">
    <pre class="mdui-shadow-1"><code class="hljs undefined">
    {
      id: 340
      url: "https://random.image.api.tcbmc.cc/2000PXA壁纸405.jpg"
    }
    </code>
   </pre>
   </div>
  </div>
  <div class="mdui-col-sm-6" style="width: 100%; margin-left: 15px; padding-right: 28px">
   <div id="request_param" class="mdui-chip mdui-m-t-2">
    <span class="mdui-chip-icon mdui-color-theme-accent"><i class="mdui-icon material-icons">short_text</i></span> 
    <span class="mdui-chip-title">请求参数</span>
   </div> 
   <div class="mdui-table-fluid mdui-m-t-2 mdui-typo">
    <table class="mdui-table mdui-table-hoverable">
     <thead>
      <tr>
       <th>名称</th> 
       <th>类型</th> 
       <th>是否必填</th> 
       <th>备注</th>
      </tr>
     </thead> 
     <tbody>
     <tr>
        <td>
        <code>phone</code>
        </td>
        <td>
            机型
        </td>
        <td>
            是
        </td>
        <td>
            手机版壁纸调用
        </td>
       </tr>
      <tr>
        <td>
        <code>pc</code>
        </td>
        <td>
            机型
        </td>
        <td>
            是
        </td>
        <td>
            电脑版壁纸调用
        </td>
       </tr>
      <tr>
        <td>
        <code>jk</code>
        </td>
        <td>
            参数
        </td>
        <td>
            是
        </td>
        <td>
            JK少女壁纸调用
        </td>
       </tr>
      <tr>
        <td>
        <code>website</code>
        </td>
        <td>
            参数
        </td>
        <td>
            是
        </td>
        <td>
           网站专门优化图片调用
        </td>
       </tr>
      <tr>
        <td>
        <code>json</code>
        </td>
        <td>
            无
        </td>
        <td>
            是
        </td>
        <td>
            前面要带？
        </td>
       </tr>
      <tr>
        <td>
        <code>id</code>
        </td>
        <td>
            数字
        </td>
        <td>
            是
        </td>
        <td>
            前面要带？
        </td>
       </tr>
     </tbody>
    </table>
   </div>
  </div>
  <div class="mdui-col-sm-6" style="width: 100%; margin-left: 15px; padding-right: 28px">
   <div id="request_param" class="mdui-chip mdui-m-t-2">
    <span class="mdui-chip-icon mdui-color-theme-accent"><i class="mdui-icon material-icons">short_text</i></span> 
    <span class="mdui-chip-title">错误代码</span>
   </div>
  <div class="mdui-table-fluid mdui-m-t-2 mdui-typo">
  <table class="mdui-table mdui-table-hoverable">
   <thead>
    <tr>
     <th>名称</th> 
     <th>说明</th>
    </tr>
   </thead> 
   <tbody>
     <td><code>400</code></td> 
     <td>请求错误！</td>
    </tr> 
    <tr>
     <td><code>403</code></td> 
     <td>请求被服务器拒绝！</td>
    </tr> 
    <tr>
     <td><code>405</code></td> 
     <td>客户端请求的方法被禁止！</td>
    </tr> 
    <tr>
     <td><code>408</code></td> 
     <td>请求时间过长！</td>
    </tr> 
    <tr>
     <td><code>500</code></td> 
     <td>服务器内部出现错误！</td>
    </tr> 
    <tr>
     <td><code>501</code></td> 
     <td>服务器不支持请求的功能，无法完成请求！</td>
    </tr> 
    <tr>
     <td><code>503</code></td> 
     <td>系统维护中！</td>
    </tr>
   </tbody>
  </table>
  </div>
  </div>
  <div class="mdui-col-sm-6" style="width: 100%; margin: -190px; padding-right: 28px">
  </div>
  <a class="mdui-fab mdui-fab-fixed mdui-ripple mdui-color-theme-accent" href="#" id="top" style="margin-bottom:60px; background-color:#448aff!important; color:#ffff">
    <i class="mdui-icon material-icons">expand_less</i>
  </a>
  <!-- JavaScript Start -->
  <script src="/assets/js/mdui.min.js"></script>
  <script src="/assets/js/mdui.js"></script>
  <script src="/assets/js/jquery-3.2.1.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/equal-height.min.js"></script>
  <script src="/assets/js/jquery.appear.js"></script>
  <script src="/assets/js/jquery.easing.min.js"></script>
  <script src="/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="/assets/js/modernizr.custom.js"></script>
  <script src="/assets/js/owl.carousel.min.js"></script>
  <script src="/assets/js/wow.min.js"></script>
  <script src="/assets/js/isotope.pkgd.min.js"></script>
  <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="/assets/js/count-to.js"></script>
  <script src="/assets/js/bootsnav.js"></script>
  <script src="/assets/js/typed.js"></script>
  <script src="/assets/js/YTPlayer.min.js"></script>
  <script src="/assets/js/custom_script.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.0/js/all.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.0/js/fontawesome.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js"></script>
  <script>
    function goTop() {
        $('html, body').animate({scrollTop:0}, 'slow');
    }
  </script>
  <script>
  var $ = mdui.$;

  $('#top').on('click', function () {
    mdui.snackbar({
    message: '好痛！呜呜呜',
    position: 'top'
    });
  });
  </script>
  <script type="text/javascript">
    function copyText() {
      var text = document.getElementById("text").innerText;
      var text = document.getElementById("text1").innerText;
      var input = document.getElementById("input");
      input.value = text; // 修改文本框的内容
      input.select(); // 选中文本
      document.execCommand("copy"); // 执行浏览器复制命令
      alert("复制成功");
    }
  </script>
  <!-- JavaScript End -->

  </body>
  <!-- Body End -->

</html>