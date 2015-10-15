<?php 

use yii\helpers\Url;

?>

<div class="newHome-head-top">
        <div class="wrap" style="z-index: 20">
            <ul class="clearfix newHome-head-subnav">
                <li class="clearfix"><!--<span class="lecturer-query-icon"></span>--><a href="http://www.xzhuang.com/cas/card" class="vip-activation" target="_blank">会员卡激活</a> | </li>
                <li class="clearfix"><a href="http://www.xzhuang.com/beautiful/index" class="lecturer-query" target="_blank">讲师查询</a> | </li>
                <li class="clearfix"><a href="http://www.xzhuang.com/school" class="lecturer-query" target="_blank">校园活动</a></li>
            </ul>

            <div class="service"><div class="serv"></div>客户服务 </div>
            <div class="service_unfold">
                <div class="serv2"></div>
                <span>客户服务</span>
                <a href="http://www.xzhuang.com/pages/helpcenter.htm" target="_blank">帮助中心</a>
                <a href="http://www.xzhuang.com/pages/help_suggestion.htm" target="_blank">用户反馈</a>
            </div>
            <div class="line"></div>
            <div class="myxz"><div class="serv"></div>我的校妆</div>
            <div class="myxz_unfold">
                <div class="serv2"></div>
                <span onclick="window.open('http://www.xzhuang.com/cas/panel')">我的校妆</span>
                <a href="http://www.xzhuang.com/cas/user/coupon" target="_blank">我的优惠券</a>
                <a href="http://www.xzhuang.com/cas/user/point" target="_blank">我的积分</a>
                <a href="http://www.xzhuang.com/cas/user/store" target="_blank">我的储值</a>
                <a href="http://www.xzhuang.com/cas/user/pinglun" target="_blank">我的咨询</a>
                <a href="http://www.xzhuang.com/cas/user/favorite" target="_blank">商品收藏</a>
            </div>
            <div class="myorder"><a href="http://www.xzhuang.com/cas/order" target="_blank">我的订单</a></div>
            <div class="line2"></div>
            <div class="myorder_unfold">
                <div class="serv2"></div>
                <span>我的订单</span>
            </div>


            <div class="welcome" id="loginInfo">
                <?php if(\Yii::$app->user->isGuest):?>
               <a href="<?php echo \Yii::$app->urlManager->createUrl('site/login'); ?>" style="color:#e73a77">【登录】</a>&nbsp;<a href="http://www.xzhuang.com/?passport-signup.html">【注册】</a>
               <?php else:?>
                <a href="javascript:void(0)" style="color:#e73a77">【<?php echo Yii::$app->user->identity->username ?>】</a>&nbsp;
                <a href="<?= Url::to(['site/logout']);?>" style="color:#e73a77">【退出】</a>&nbsp;
               <?php endif;?>
            </div>
        </div>
    </div>