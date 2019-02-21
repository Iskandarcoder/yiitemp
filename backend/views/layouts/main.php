<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="page-md page-header-fixed page-quick-sidebar-over-content page-full-width">
<?php $this->beginBody() ?>
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="<?= Url::to(['/']) ?>" style="color: white;font-weight: bold; font-size: 30px;">
                ConsulUzb
            <!-- <img src="../../assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/> -->
            </a>
        </div>

        <div class="hor-menu hidden-sm hidden-xs">
            <ul class="nav navbar-nav">
                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
                <li class="classic-menu-dropdown">
                    <a href="<?= Url::to(['kus/index'])?>">
                    DKR <span class="selected">
                    </span>
                    </a>
                </li>
                <li class="classic-menu-dropdown">
                    <a href="<?= Url::to(['vkus/index'])?>">
                    VKR <span class="selected">
                    </span>
                    </a>
                </li>
                <li class="classic-menu-dropdown">
                    <a href="<?= Url::to(['anketa-new/index'])?>">
                    ShT <span class="selected">
                    </span>
                    </a>
                </li>
                <li class="classic-menu-dropdown">
                    <a href="<?= Url::to(['sert/index'])?>">
                    Tasdiq Sert <span class="selected">
                    </span>
                    </a>
                </li>
                <li class="classic-menu-dropdown">
                    <a href="<?= Url::to(['chiqish/index'])?>">
                    Fuqarolikdan chiqish <span class="selected">
                    </span>
                    </a>
                </li>
                <li class="classic-menu-dropdown">
                    <a href="<?= Url::to(['deport/index'])?>">
                    Deportatsiya <span class="selected">
                    </span>
                    </a>
                </li>
                <li class="classic-menu-dropdown">
                    <a href="<?= Url::to(['lish-sv/index'])?>">
                    Qamoqdagi fuqarolar <span class="selected">
                    </span>
                    </a>
                </li>
                <li class="classic-menu-dropdown">
                    <a href="<?= Url::to(['dead/index'])?>">
                    Vafot etgangar <span class="selected">
                    </span>
                    </a>
                </li>
                <li class="classic-menu-dropdown">
                    <a href="<?= Url::to(['pn-pravo/index'])?>">
                    Jabrlanuvchi <span class="selected">
                    </span>
                    </a>
                </li>
                <li class="classic-menu-dropdown">
                    <a href="<?= Url::to(['lost-doc/index'])?>">
                    Hujjat yo'qotgan <span class="selected">
                    </span>
                    </a>
                </li>
                <li class="classic-menu-dropdown">
                    <a href="<?= Url::to(['user/signup'])?>">
                    User <span class="selected">
                    </span>
                    </a>
                </li>
                <li>
                    <?= Html::a('O\'zbekcha', array_merge(
                                  \Yii::$app->request->get(),
                                  [\Yii::$app->controller->route, 'language' => 'uz']
                                ),
                                [
                                  'class' => 'language'
                                ]
                              ); ?>
                </li>
                <li>
                    <?= Html::a('Русский', array_merge(
                                  \Yii::$app->request->get(),
                                  [\Yii::$app->controller->route, 'language' => 'ru']
                                ),
                                [
                                  'class' => 'language'
                                ]
                              ); ?>
                </li>
            </ul>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>

        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
            <a class="btn btn-danger btn-flat" style="margin-top: 5px; float: right; margin-right:10px;" href="<?= Url::to(['site/logout'])?>" data-method="post">Chiqish</a>
        
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
        <?= $content ?>
    
<div class="page-footer">
    <div class="page-footer-inner">
         <span style="color: black;">2018 &copy; URIKT Iskandar Ikromov</span>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<script src="<?= Url::to("/admin/js/admin/consul/consul.js"); ?>"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
