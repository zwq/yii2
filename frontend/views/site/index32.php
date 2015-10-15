<?php
use \yii\helpers\Html;

?>
<div class="newHome-head-center">
        <div class="wrap pr" style="z-index: 5">
            <h1>
            	<a href="http://www.xzhuang.com/index.php" class="newHome-logo">校妆网</a>        
            </h1>
			<!--<div class="slogan"><a class="slo_txt"><span>妆B技术哪家强？</span></a></div>-->
            <div class="newHome-query">
                <div class="clearfix" style="height: 45px; overflow: hidden">
                    <form action="http://www.xzhuang.com/goods/category/" name="formSearch" method="get" onsubmit="setSearchKeyWord();">
                        <input name="key" id="" class="searchin" value="skin79" autocomplete="off" type="text">
                        <input value="" class="searchbtss" type="submit">
                    </form>
                </div>

                <ul class="clearfix hot-word">
                    <li style="margin-right: 0">热门：</li>
                    <li><a href="http://www.xzhuang.com/?brand-270.html" target="_blank">SKIN79</a></li>
                    <li><a href="http://www.xzhuang.com/?brand-732.html" target="_blank">SUNSHOP</a></li>
                    <li><a href="http://www.xzhuang.com/goods/category/?key=%E4%B9%B3%E6%B6%B2" target="_blank">乳液</a></li>
                    <li><a href="http://www.xzhuang.com/?gallery-346-grid.html" target="_blank">护肤套装</a></li>
                    <li><a href="http://www.xzhuang.com/goods/category/?key=%E4%BF%9D%E6%B9%BF%E8%A1%A5%E6%B0%B4" target="_blank">保湿补水</a></li>
                    <li><a href="http://www.xzhuang.com/goods/category/?key=%E9%9D%A2%E8%86%9C" target="_blank">面膜</a></li>
                    <li><a href="http://www.xzhuang.com/goods/category/?key=BB%E9%9C%9C" target="_blank">BB霜</a></li>
                    <li><a href="http://www.xzhuang.com/goods/category/?key=%E7%BE%8E%E7%99%BD" target="_blank">美白</a></li>
                    <!--<li style="_margin-right: 0"><a href="http://www.xzhuang.com/static/actives/mengzhemengsong.html" target="_blank">清仓</a></li>-->
                </ul>
            </div>
            <ul class="newHome-query-link"></ul>

            <div class="newHome-icon-tip">
                <!--<img src="http://image.xzhuang.com/static/index/image/newHome-icon-tip.png" alt=""/>-->
                <ul>
                    <li><i class="i3"></i>满98免运费</li>
                    <li><i class="i2"></i>校园服务</li>
                    <li><i class="i1"></i>100%正品</li>
                </ul>
            </div>
        </div>
    </div>
<!--navbar start-->
<?php
echo \Yii::$app->view->renderFile("@app/views/site/navbar.php",['navbar'=>$navbar]);
?>
<!--navbar end-->
