<?php
require $_SERVER['DOCUMENT_ROOT']."/common/Call_Back_Service.php";

$URI_Preffix="/zh-cn/";
$URI_INFO=$_SERVER['REQUEST_URI'];

$SqlResult=GetSqlData($conn);
$records=array();
while( $record = mysqli_fetch_array($SqlResult)){
       $records[]=$record;
}

$lz=GetServiceName($conn,"1");
?>
<div class="mdui-drawer mdui-shadow-1 mc-drawer" id="drawer">
      <div class="mdui-list">
      <a href="/zh-cn" class="mdui-list-item mdui-ripple <?php if ($URI_INFO=="/zh-cn/") {echo "mdui-list-item-active";}?>">
        <i class="mdui-list-item-icon mdui-icon material-icons">home</i>
        <div class="mdui-list-item-content">首页</div>
      </a>
      <div class="mdui-divider"></div>
      <?php foreach($records as $row) : ?>
      <a href="<?php if($URI_INFO!==$URI_Preffix.$row['uri']."/"){ echo $URI_Preffix.$row['uri'];}?>" class="mdui-list-item mdui-ripple <?php if($URI_INFO==$URI_Preffix.$row['uri']."/"){ echo "mdui-list-item-active";}?>">
        <i class="mdui-list-item-icon mdui-icon material-icons"><?php echo $row['icon']?></i>
        <div class="mdui-list-item-content"><?php echo $row['name'] ?></div>
      </a>
      <?php endForeach;?>
      <li class="mdui-subheader">联系方式</li>
      <a href="https://jq.qq.com/?_wv=1027&k=hFdySg2N" class="mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">email</i>
        <div href="https://jq.qq.com/?_wv=1027&k=hFdySg2N" class="mdui-list-item-content">QQ群</div>
      </a>
      <li class="mdui-subheader">友情链接/Link</li>
      <a href="https://www.miaofile.com" class="mdui-list-item mdui-ripple">
        <i class="fa-brands fa-internet-explorer mdui-list-item-icon"></i>
        <div class="mdui-list-item-content">储存猫</div>
      </a>
     </div>
     <div class="copyright">
      <p>
        <br>© 2022
        <br>TCB Work's
        <br>Minecraft Server.
        <br>Design with by TCB Work's HTML.
        <br>Powered by
        <a href="https://mdui.org" target="_blank">MDUI&Ali-a.cn</a>
      </p>
    </div>
  </div>