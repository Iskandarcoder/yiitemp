<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

$lang = Yii::$app->language;

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
<body>
<?php $this->beginBody() ?>

<div class="wrap">
  <div class="top-menu">
    <div class="container">
      <div class="row">
        <a href="#">
          <div class="col-sm-3 idgov">          
            <img src="/images/oneidlogo.png" id="oneid">
            <h5><?= Yii::t('app', 'id.gov.uz orqali avtorizatsiya'); ?></h5>          
          </div>
        </a>
  
        <div class="col-sm-offset-6 col-sm-3"> 
          <div class="dropdown"  id="mylang">
            <div aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle">
            <span><b><?= Yii::t('app', 'lang'); ?></b></span> <i class="fa fa-caret-down"></i></div>
            <ul class="dropdown-menu">
              <li><?= Html::a('O\'zbekcha', array_merge(
                                  \Yii::$app->request->get(),
                                  [\Yii::$app->controller->route, 'language' => 'uz']
                                ),
                                [
                                  'class' => 'language'
                                ]
                              ); ?></li>                
              <li><?= Html::a('Русский', array_merge(
                                  \Yii::$app->request->get(),
                                  [\Yii::$app->controller->route, 'language' => 'ru']
                                ),
                                [
                                  'class' => 'language'
                                ]
                              ); ?></li>   
            </ul>                    
          </div>     
        </div>
      </div>
    </div>
  </div>

  <div id="block-header" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-sm-5"><h4><?= Yii::t('app', 'O\'ZBEKISTON RESPUBLIKASI <br/> TASHQI ISHLAR VAZIRLIGI'); ?></h4></div>
          <div class="col-sm-2"><a href="<?= Url::to(['/']) ?>"><img src="/images/logos.png" class="ramz" /></a></div>
          <div class="col-sm-5"><h4><?= Yii::t('app', 'INTERAKTIV KONSULLIK'); ?></br><?= Yii::t('app', 'XIZMATLARI'); ?></h4></div>
        </div>
    </div>
  </div>
  
  <nav class="header_menu navbar navbar-inverse text-center">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>                   
      </div>
      <div  class="navbar-collapse collapse"> 
        <ul  class="nav navbar-nav" id="menu">
          <div class="col-sm-4">
            <li><a href="<?= Url::to(['/']) ?>"><i class="fa fa-home"></i> <?= Yii::t('app', 'Bosh sahifa'); ?></a></li>
          </div> 
          <div class="col-sm-4">
            <li><a href="<?= Url::to(['/site/about']);?>"><i class="fa fa-fort-awesome"></i> <?= Yii::t('app', 'Xorijdagi vakolatxonalar'); ?></a></li>
          </div> 
          <div class="col-sm-4">
            <li><a href="<?= Url::to(['/site/question']);?>"><i class="fa fa-comments"></i> <?= Yii::t('app', 'Ko\'p beriladigan savollar'); ?></a></li>
          </div> 
        </ul>
      </div>
    </div>
  </nav>

    
        <div id="mySidenav" class="sidenav hidden-xs hidden-sm">
             <a href="?action=sorov" id="about"><p><?= Yii::t('app', 'So\'rovnoma'); ?></p> <i class="fa fa-check-square-o fa-2x"></i></a> 
             <a href="?action=liniya" id="blog"><p><?= Yii::t('app', 'Onlayn murojaat'); ?></p> <i class="fa fa-comments-o fa-2x"></i></a>
             <a href="?action=pol_ist" id="projects"><p><?= Yii::t('app', 'Foydali manbalar'); ?></p> <i class="fa fa-external-link fa-2x"></i></a>
             <a href="?action=stat" id="contact"><p><?= Yii::t('app', 'Statistika'); ?></p> <i class="fa fa-line-chart fa-2x"></i></a>
        </div>
        <div id="wrapper">
        <?= $content ?>
        </div>

</div>



<footer class="footer">
    <div id="block-footer">
    <div class="container">
<br />
<div class="row  text-center">
<div class="col-sm-4">  
<?= Yii::t('app', '© 2018 O`zbekiston Respublikasi <br/> Tashqi ishlar vazirligi'); ?>
<br /><br />
</div>
<div class="col-sm-5">
<?= Yii::t('app', '100029, Toshkent, Islom Karimov ko`chasi, 9'); ?><br />
<?= Yii::t('app', 'Telefon: (+998 71) 233-45-01'); ?><br />
<?= Yii::t('app', 'Faks: (+998 71) 239-15-17'); ?>
<br /><br />
</div>
<div class="col-sm-3">
<a href=""><i class="fa fa-facebook-square fa-3x"></i></a>
<a href=""><i class="fa fa-twitter-square fa-3x"></i></a>
<a href=""><i class="fa fa-facebook-square fa-youtube-square fa-3x"></i></a>
<br /><br />
</div>
</div>
<hr/>
<div class="row">
    <div class="col-sm-7"><h5><?= Yii::t('app', 'Agar matnda xatoliklarni aniqlasangiz, ma\'muriyatni xabardor qilish uchun xatoliklarni belgilab, Ctrl+Enter tugmalarini bosing'); ?></h5></div>
    <div class="col-sm-5">
<div class="myvidgits">
<!-- START WWW.UZ TOP-RATING -->
    <script language="javascript" type="text/javascript">
    <!--
    top_js="1.0";top_r="id=456&r="+escape(document.referrer)+"&pg="+escape(window.location.href);document.cookie="smart_top=1; path=/"; top_r+="&c="+(document.cookie?"Y":"N")
    //-->
    </script>
    <script language="javascript1.1" type="text/javascript">
    <!--
    top_js="1.1";top_r+="&j="+(navigator.javaEnabled()?"Y":"N")
    //-->
    </script>
    <script language="javascript1.2" type="text/javascript">
    <!--
    top_js="1.2";top_r+="&wh="+screen.width+'x'+screen.height+"&px="+
    (((navigator.appName.substring(0,3)=="Mic"))?screen.colorDepth:screen.pixelDepth)
    //-->
    </script>
    <script language="javascript1.3" type="text/javascript">
    <!--
    top_js="1.3";
    //-->
    </script>
    <script language="JavaScript" type="text/javascript">
    <!--
    top_rat="&col=FFFFFF&t=000000&p=000000";top_r+="&js="+top_js+"";document.write('<a href="http://www.uz/rus/toprating/cmd/stat/id/456" target=_top><img src="https://cnt0.www.uz/plugins/top_rating/count/cnt.png?'+top_r+top_rat+'" width=88 height=31 border=0 alt="Топ рейтинг www.uz"></a>')//-->
    </script>

    
    <noscript>&lt;A href="http://www.uz/rus/toprating/cmd/stat/id/456" target=_top&gt;&lt;IMG height=31 src="http://www.uz/plugins/top_rating/count/nojs_cnt.png?id=456&amp;pg=http%3A//mfa.uz&amp;&amp;col=FFFFFF&amp;amp;t=000000&amp;amp;p=000000" width=88 border=0 alt="Топ рейтинг www.uz"&gt;&lt;/A&gt;</noscript>
</div>
<div class="myvidgits">
        <script type="text/javascript" src="/js/orphus.js"></script>
    <a href="http://orphus.ru" id="orphus" target="_blank"><img alt="Orphus tizimi" src="/images/orphus.gif"/></a>
     </div>
<div class="myvidgits">
         <a href="http://mfa.uz"><img src="/images/mfa.jpg" style="width: 88px" /></a>
     </div>
     </div>
     
</div>

<br /> 
</div>
</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>

<?php $this->endPage() ?>


