<!doctype html>
<html>
<head>
<title>惟中有限公司聯絡資訊</title>
<meta name="keywords" content="台灣紅酒酒商,高雄紅酒酒商,,西班牙紅酒，法國紅酒，阿根廷紅酒，義大利紅酒，德國紅酒" />
<meta name="description" content="惟中有限公司聯絡資訊" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="content-language" content="zh-tw">
<link rel="Shortcut Icon" type="image/x-icon" href="favicon.ico"/>

<!-- 主要選單 -->
<link rel="stylesheet" href="css/menu.css">
<!-- commodity 專用 -->
<link rel="stylesheet" href="css/commodity_content.css">
<!-- 聯絡我們 -->
<link rel="stylesheet" href="css/commodity_contact.css">
<!-- 表單驗證 -->
<script src="js/jquery.validate.js"></script>
<script src="js/cmxforms.js"></script>
<script type="text/javascript">
$(function(){
	$("#contact-form").validate();
});
</script>

<!-- google -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82641040-1', 'auto');
  ga('send', 'pageview');

</script>




</head>

<body>
<!-- LINE QRCODE -->
<?php include 'line_win.php';?>

<h1 class="descriptions">聯絡資訊</h1>
<!-- IE8-9顯示。IE6-7放棄 -->
<?php include("ie6789.php"); ?>

<div id="left-flyout-nav" class="layout-left-flyout visible-sm"></div>

<!-- 主要選單 -->
<div class="layout-right-content">
  <header class="the-header">
 <div class="navbar container">

  <!-- 手機板按鈕 -->
  <a class="btn-navbar btn-navbar-navtoggle btn-flyout-trigger" href="#">
    <span class="icon-bar btn-flyout-trigger"></span>
    <span class="icon-bar btn-flyout-trigger"></span>
    <span class="icon-bar btn-flyout-trigger"></span>
  </a>
  
  <div class="company_name"><a href="index_wine.php">惟中有限公司</a></div>
  
  <!-- 主要結構 -->
  <nav class="the-nav nav-collapse clearfix">
    <!-- 金色線條 -->
    <div class="golden"></div>
    
    <div class="the-nav navall">
     <div class="logo"><a href="index_wine.php"><img src="img/logo.jpg" alt="惟中有限公司logo"></a></div>
     <ul class="nav nav-pill">
      
      <li class="dropdown" ><a href="index_wine.php" >首頁</a></li>
      <li class="dropdown"><a href="about.php" >關於惟中</a></li>
      <li class="dropdown">
        <a href="comm_spain.php" >精選原裝‧原瓶進口<b class="caret"></b></a>
        <ul class="subnav">
          <li><a href="comm_spain.php">西班牙 Spain</a></li>
          <li><a href="comm_france.php">法國 France</a></li>
          <li><a href="comm_italy.php">義大利 Italy</a></li>
          <li><a href="comm_germany.php">德國 Germany</a></li>
          <li><a href="comm_australia.php">澳洲 Australia</a></li>
          <li><a href="comm_argentina.php">阿根廷 Argentina</a></li>
        </ul>
      </li>
      
      <li class="dropdown"><a href="quality.php">禮盒組</a></li>
      <li class="dropdown"><a href="news.php" >最新消息</a></li>
      <li class="dropdown"><a href="contact.php" id="location">聯絡資訊</a></li>
    </ul>
    
   <!-- fb+youtube -->
   <ul class="icon_mg">
     <li><a href="index.php"><img src="img/home_icom.png" alt="惟中入口首頁" title="惟中入口首頁"></a></li>
    <li><a href="https://www.facebook.com/174780092729611/photos/174780936062860/" target="_blank"><img src="img/fb_icom.png" alt="惟中fackbook" title="惟中粉絲團fackbook"></a></li>
    <li><a href="https://www.youtube.com/channel/UCtWBcxNYYGyi0GcOegIuqng?guided_help_flow=3" target="_blank"><img src="img/youtube_icom.png" alt="惟中YOUTUBE專用頻道" title="惟中YOUTUBE專用頻道"></a></li>
    <li id="line_iocm"><a href="https://line.me/R/ti/p/%40uoh3691o"><img src="img/line_icom.png" alt="LINE"></a></li>
   </ul>
    
    </div>
    
  </nav>
    
 </div>
</header>
</div>

<!-- 主要內容 -->
<main class="content">
  <!-- 廣告 -->
  <div class="ad">
    <a href="quality_spa01.php"><img src="img/ad_05.jpg" alt="西班牙國寶級藝術大師 Ripolles 獨家典藏限量酒款 Martus 瑪圖斯"></a>
  </div>
  
  <div class="title_s">
   
   <ul>
    <li></li>
    <li><p><a href="index_wine.php">首頁</a> > 聯絡資訊</p></li>
   </ul>
  
  </div>
  
  <h2 class="title_b">聯絡留言 Message</h2>
  
<form id="contact-form" method="post" action="sendpost.php">
  <!-- 內容開始 -->
  <ul class="grid_master">
    <li class="master3"><input name="name" id="sndname" type="text" placeholder="您的姓名 / " tabindex="1" required autofocus></li>
    <li class="master3"><input name="mobile" id="sndphone" type="phone" placeholder="聯絡手機 / " tabindex="2" required></li>
    <li class="master3"><input name="email" id="sendmail" type="email" placeholder="EMAIL  / " tabindex="3" required></li>
    <li class="master1"><textarea name="subject" id="sendbody" placeholder="請您在這裡留下您的留言..." tabindex="4" required></textarea></li>
    <li class="master1"><button name="submit1" type="submit" id="contact-submit">確認送出留言</button></li>
    <li class="master1"></li>
    <li class="master1"><div class="level"></div></li>
    <li class="master1"><h2 class="title_b">聯絡資訊 Contact Us</h2></li>
    <li class="master2">【地址】806 高雄市前鎮區新生路 248 之 39 號</li>
    <li class="master2">【電話】07-815-9877#511 、【手機】0977173391 曾小姐</li>
    
    <li class="master1"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1842.0443475556483!2d120.31789664757376!3d22.575785793476076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDM0JzMyLjYiTiAxMjDCsDE5JzA4LjYiRQ!5e0!3m2!1szh-TW!2stw!4v1468394321450" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></li>
  </ul>
  
</form>
 
</main>


<!-- 至頂 -->
<a href="" id="scroll-to-top"></a>


<footer>
 Copyright © 2016 惟中有限公司 TKM INTL.,CO  高雄市前鎮區新生路248之39號 【TEL】07-815-9877 【FAX】07-815-6711
</footer>

<!-- 警語 -->
<div class="notification">
  <img src="img/title.jpg" alt="飲酒過量。有礙健康。禁止酒駕。未滿18歲禁止飲酒"> 
</div>

<!-- 主要網頁架構用 -->
<script src="js/jquery.js"></script>
<script src="js/jquery.cbFlyout.js"></script>
<script src="js/main.js"></script>


<!-- 至頂轉用 -->
<script type="text/javascript" src="js/illbeback.min.js"></script>
<script type="text/javascript">
	$(function() {
		$("#scroll-to-top").illBeBack();
	});
</script>

<!-- 聯絡我們-->
<script type="text/javascript" src="js/scripts_contact.js"></script>

</body>
</html>