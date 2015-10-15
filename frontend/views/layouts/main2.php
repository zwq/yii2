<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
//AppAsset::register($this);
//$this->registerAssetFiles("@web/css/newcommon.css");
?>

<?php $this->beginPage()?>
<!DOCTYPE html>
<html><head lang="<?= Yii::$app->language?>">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title><?= Yii::$app->params['title']?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="化妆品,护肤品,彩妆,香水,精油">
    <meta name="description" content="中国首家大学生化妆品网上购物商城,以销售化妆品、护肤品、香水、彩妆、精油、男士护肤等时尚化妆品为主的高校网络购物平台。正品行货，诚信服务，为您提供愉悦的网上商城购物体验!">
    <meta name="renderer" content="webkit">
    <?= Html::cssFile("@web/css/newcommon.css") ?>
    <?= Html::cssFile("@web/css/home.css") ?>
    </head>
<body>
    <!-- 头部-->
   <?php echo \Yii::$app->view->renderFile('@app/views/layouts/head.php');?>
    <!--内容-->
   <?= $content ?>
   <!--footer -->
   <?php echo \Yii::$app->view->renderFile('@app/views/layouts/footer.php');?>
<!--<script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fae7e5b65434a8e47b8ac5b10a15cc0a5' type='text/javascript'%3E%3C/script%3E"));
</script><script src="%E6%A0%A1%E5%A6%86%E7%BD%91-%E4%B8%AD%E5%9B%BD%E9%AB%98%E6%A0%A1%E6%97%B6%E5%B0%9A%E5%B0%9A%E5%A5%A2%E5%8C%96%E5%A6%86%E5%93%81,%E6%8A%A4%E8%82%A4%E5%93%81,%E5%BD%A9%E5%A6%86,%E9%A6%99%E6%B0%B4,%E7%B2%BE%E6%B2%B9%E8%B4%AD%E7%89%A9%E7%AC%ACE%E7%BD%91_files/h.txt" type="text/javascript"></script>
<script type="text/javascript">
//    window["_BFD"] = window["_BFD"] || {};
//    _BFD.client_id = "Ctest_xiaozhuang";
//    _BFD.script = document.createElement("script");
//    _BFD.script.type = "text/javascript";
//    _BFD.script.async = true;
//    _BFD.script.charset = "utf-8";
//    _BFD.script.src = (('https:' == document.location.protocol?'https://ssl-static1':'http://static1')+'.baifendian.com/service/xiaozhuang/xiaozhuang.js');
//    document.getElementsByTagName("head")[0].appendChild(_BFD.script);
</script>-->




<div class="popNotice" style="position:fixed; right:15px; bottom:0px; z-index:1000; width:107px; height:301px; overflow:hidden">
    <a href="http://www.xzhuang.com/?brand-270.html" target="_blank"><img src="%E6%A0%A1%E5%A6%86%E7%BD%91-%E4%B8%AD%E5%9B%BD%E9%AB%98%E6%A0%A1%E6%97%B6%E5%B0%9A%E5%B0%9A%E5%A5%A2%E5%8C%96%E5%A6%86%E5%93%81,%E6%8A%A4%E8%82%A4%E5%93%81,%E5%BD%A9%E5%A6%86,%E9%A6%99%E6%B0%B4,%E7%B2%BE%E6%B2%B9%E8%B4%AD%E7%89%A9%E7%AC%ACE%E7%BD%91_files/ad30.png"></a>
    <!--<a class="noticeClose" style="position:absolute; width:20px; height:20px; right:12px; top:12px; cursor:pointer"></a>-->
</div>
<!--右侧公告
<script>
$(function(){
	var noticeTimer='';
	function showNotice(){
		$('.popNotice').height(284);
	}
	function hideNotice(){
		$('.popNotice').animate( { height: '40px' } , 400 );
	}
	noticeTimer=setTimeout(hideNotice,5000);
	
	$('.noticeClose').click(function(){
		$('.popNotice').hide();	
	})
	$('.popNotice').hover(function(){
		clearTimeout(noticeTimer);
		showNotice();	
	},function(){
		noticeTimer=setTimeout(hideNotice,5000);	
	})
})

</script>
--右侧公告--><iframe style="height: 0px; width: 0px; float: none; position: absolute; overflow: hidden; z-index: 333333; margin: 0px; padding: 0px; border: 0px none; background: transparent none repeat scroll 0% 0%;" scrolling="no" id="add_speed_bfd" allowtransparency="true" frameborder="0"></iframe><div style="position: absolute; overflow: hidden; height: 0px; width: 0px;" id="bfd_flbox"><object id="bfd_swf_factory" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" height="1" width="1"><param name="allowScriptAccess" value="always"><param name="wmode" value="window"><param name="movie" value="http://static.baifendian.com/api/js/bfd-cookie-factory-1.0.swf?loadCallback=window.CookieData.CallBack"><param name="quality" value="high"><param name="FlashVars" value=""><embed src="%E6%A0%A1%E5%A6%86%E7%BD%91-%E4%B8%AD%E5%9B%BD%E9%AB%98%E6%A0%A1%E6%97%B6%E5%B0%9A%E5%B0%9A%E5%A5%A2%E5%8C%96%E5%A6%86%E5%93%81,%E6%8A%A4%E8%82%A4%E5%93%81,%E5%BD%A9%E5%A6%86,%E9%A6%99%E6%B0%B4,%E7%B2%BE%E6%B2%B9%E8%B4%AD%E7%89%A9%E7%AC%ACE%E7%BD%91_files/bfd-cookie-factory-1.htm" flashvars="" quality="high" wmode="window" name="bfd_swf_factory" allowscriptaccess="always" swliveconnect="true" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" height="1" width="1"></object></div></body><!--[if lt IE 7 ]>
<script type="text/javascript" src="/static/beautiful/js/DD_belatedPNG_0.0.8a.js"></script>
<script type="text/javascript">
    DD_belatedPNG.fix('*');
</script>
<![endif]--></html>
<?php $this->endPage()?>