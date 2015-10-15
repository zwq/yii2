<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .help-block-error{color:red}
</style>
<!--<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>-->
<?=Html::cssFile("@web/css/login/index.css")?>
<?=Html::cssFile("@web/css/login/css.css")?>
<?=Html::cssFile("@web/css/login/style.css")?>
<?=Html::cssFile("@web/css/login/xz_detail.css")?>
<?php //echo Url::toRoute('site/login',"https")?>
<!---登陆 begin-->
<div class="AllWrapInside">
<a href="<?php echo Url::toRoute(['site/index', 'src' => 'ref1', '#' => 'name'])?>">使用QQ快速登录</a>
<!--    <form action="<?php echo Url::toRoute('site/login')?>" method="post" id="form_signin" autocomplete="off" class="loginform">
        <input name="isfastbuy" value="" type="hidden">-->

        <!--    <div class="RegisterWrap" style="width: 420px; float: left;">
              <h4 style="float: left; font-size: 22px; color: rgb(255, 115, 64); font-family: '微软雅黑';">欢迎回到校妆网！</h4>
              <div style="clear: both;"></div>
              <div class="intro" ><div class="customMessages">如果您已是校妆网会员，请直接登录。<br/></div></div>
                            <div id="formlogin" class="form" style="border: 0px none;">
                <input name="forward" value="" type="hidden">
                <table cellpadding="0" cellspacing="0" border="0" width="100%" class="loginBox">
                  <tbody>
                    <tr>
                      <th>用户名：</th>
                      <td> <input type="text" class="x-input inputstyle input_name" id="username" name="username" value="" placeholder="请输入用户名或会员卡号" maxlength="18" tabindex="1" />
                                              </td>
                    </tr>
                    <tr>
                      <th>密 码：</th>
                      <td><input type="password" class="x-input inputstyle input_pwd" id="password" name="password" placeholder="请输入密码" maxlength="20" tabindex="2" />
                                                <a class="link"  href="/cas/forgotPassword">忘记密码？</a></td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <input class="btn_login02 activate" value="登录" tabindex="4" type="submit">
                        <input class="btn_reg" onclick="location.href='http://www.xzhuang.com/cas/sign/up'" type="button">
                        <input name="forward" value="" type="hidden">
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="login_other">
                  <div class="til">
                        合作网站账号登录：<br>
                    <a href="/cas/third/oauth2/domain/qq?continue=%2F"  title="使用QQ账号直接登陆"><img src="http://image.xzhuang.com/static/cas/img/qq_logo_1.png" alt="QQ账号直接登陆"><span>QQ</span></a> &nbsp;&nbsp;
                  </div>
                </div>
              </div>
              <input name="ref_url" value="http://www.xzhuang.com/?passport-aHR0cDosLHd3dy54emh1YW5nLmNvbSw;xie;bWVtYmVyLmh0bWw=-55So5oi35ZCN5oiW5a G56CB5pyJ6K v77yM6K 36YeN5paw6L6T5YWl-login.html" type="hidden">
              <input name="paike" value="" type="hidden">
            </div>-->
        <!--左边登录框[[-->
             <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
        <div class="denglu_in" id="formlogin">
            <div class="land">
                <h2>登录校妆网</h2><span>还没校妆网账号，请<a href="http://www.xzhuang.com/cas/sign/up">免费注册</a></span>
            </div>
            <!--用户名-->
            <div class="land_input">
                <i class="i1"></i>
                  <?= $form->field($model, 'username')->textInput(['class'=>' input_name','style'=>"color:#000;padding:0px;height:40px",'placeholder'=>'请输入用户名或会员卡号']) ?>
                <!--<input type="text" class="x-input inputstyle input_name" id="username" name="username" value="" placeholder="请输入用户名或会员卡号" maxlength="18" tabindex="1" />-->
            </div>
            <!--密码-->
            <div class="land_input">
                <i class="i2"></i>
                 <?= $form->field($model, 'password')->passwordInput(['class'=>'input_pwd','style'=>"padding:0px;height:40px",'placeholder'=>'请输入密码']) ?>
                <!--<input type="password" class="x-input inputstyle input_pwd" id="password" name="password" placeholder="请输入密码" maxlength="20" tabindex="2" />-->
            </div>
            <!--忘记密码-->
            <div class="forget">
                <span>
                 <?= $form->field($model, 'rememberMe')->checkbox() ?> 记住用户名   
<!--                    <input type="checkbox" class="checkbox" />记住用户名-->
                </span>
                <a class="link"  href="/cas/forgotPassword">忘记密码？</a>
            </div>
            <div class="dl_denglu">
               <input value="登录" tabindex="4" type="submit">
            </div>
            <div class="dl_no dl_nos">
                <p>无需注册，即可登录</p>
                <div class="dl_fr">
                    <a href="#" class="dl_fr1">新浪</a>
                    <a href="/cas/third/oauth2/domain/qq?continue=" class="dl_fr2" title="使用QQ账号直接登陆">QQ</a>
                    <a href="#" class="dl_fr3">微信</a>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
        <!--左边登录框]]-->

        <!--  <div class="fl"> <!--<div style="padding-top:10px;margin-left:50px;"><a href="http://www.xzhuang.com/?page-hcy.html" target="_blank"><img width="310" height="111" src="http://test.xzhuang.com/themes/1316402713/block/images/newzchcy.jpg"></a></div> <div class="login_log"> <span style="color:#333;font-size:12px">还不是校妆网会员，<a href="http://test.xzhuang.com/?passport-login.html" style="color:#FF7340; text-decoration:none">立即注册！</a></span> <p>免费注册成为校妆网用户，立即享受实惠又放心的购物乐趣</p> <span style="width:104px;height:20px; text-align:center; display:block;background:url(http://test.xzhuang.com/themes/1316402713/block/images/newzcbtnbg.jpg); line-height:20px; margin:0 auto; color:#FF7340;"><a href="http://test.xzhuang.com/?passport-login.html" style="color:#FF7340;">注册只需十秒钟</a></span></div>-->
        <!--<div class="loginfl_left"><img src="http://image.xzhuang.com/static/cas/img/nloginx.jpg"></div>-->

        <!-- <div class="loginfl_right" style="width: 500px"><a href="http://www.xzhuang.com/static/actives/dacu.html" target="_blank"><img src="http://image.xzhuang.com/upload/20150601/1343006f376027942706c06d77771df31a0c18.jpg"/></a></div> </div>&ndash;&gt;-->
        <div class="dengluimg"><a href="http://www.xzhuang.com/static/actives/dacu.html" target="_blank"><img src="http://image.xzhuang.com/upload/20150601/1343006f376027942706c06d77771df31a0c18.jpg"/></a></div>

        <div class="clearfix" style="clear: none;"></div>
        <input type="hidden" name="continue" value="/" />
    <!--</form>-->
</div>

<div class="minifooter"> Copyright 2008-2013 www.xzhuang.com All Rights Reserved 京ICP备09019932号 </div>
<!--<div class="backToTopv3"><a href="http://se.360.cn/" target="_blank"><img src="/statics/images/backheadv3.png" width="27" height="176"></a></div> <div class="backToTopv4"><a href="http://www.xzhuang.com/?page-mkcase20130315.html" target="_blank"><img src="/statics/images/360xf.jpg" width="141" height="178"></a></div>-->



<!---登陆 end-->

