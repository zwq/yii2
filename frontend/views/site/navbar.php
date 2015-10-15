<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
?>
  <div class="newHome-nav">
        <div class="wrap">
            <ul class="newHome-nav-list clearfix">
                  <li class="allproduct-type">
                     <span id="allproduct-icon"></span>
                    <a href="javascript:void(0)" class="active">全部商品分类</a>
                  </li>
                <?php 
                if(is_array($navbar)):
                    foreach($navbar as $value):
                 ?>
             
                <li>
                    <a href="http://www.xzhuang.com/index.php"><?= Html::encode($value['navname']) ?></a>
                </li>
                <?php endforeach;endif;?>
<!--                <li>
                    <a href="http://www.xzhuang.com/?brand-222.html" target="_blank" style="text-align: left; text-indent: 20px">限时特卖 <span id="temai-icon"></span></a>
                    <a href="http://www.xzhuang.com/static/actives/fengqiangpa.html" target="_blank" style="text-align: left; text-indent: 20px">限时特卖 <span id="temai-icon"></span></a>
                </li>
                <li><a href="http://www.xzhuang.com/trial" target="_blank">领试馆</a></li>
                <li><a href="http://www.xzhuang.com/goods/score" target="_blank"><span id="hot-icon"></span>积分购</a></li>
                <li><a href="http://www.xzhuang.com/goods/grab" target="_blank"><span id="hot-icon"></span>抄底秒</a></li>
                <li><a href="http://www.xzhuang.com/school" target="_blank">校园活动</a></li>
                <li>
                    <a href="http://www.xzhuang.com/?beauty_course.html" target="_blank"><span id="beauty-icon"></span>美堂课</a>
                </li>
                <li><a href="http://www.xzhuang.com/static/actives/download_app.html" target="_blank"><span id="new-icon"></span>手机校妆</a></li>
                <li id="newHome-shopCar" class="pr">
                    <a href="javascript:void(0);" style="text-align: left; text-indent: 130px"><span class="new-cart-number">0</span>购物车</a>
                    <div class="newHome-shopCar">
                        <ul></ul>
                        <div class="newHome-shopCar-all" style="line-height: 78px; text-align: center; color: rgb(102, 102, 102);">谁是你的菜？赶紧挑到碗里来！</div>
                    </div>
                </li>-->
            </ul>
            
            
            
            
            
        </div>
  </div>