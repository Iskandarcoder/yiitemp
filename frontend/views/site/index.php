<?php $lang = Yii::$app->language;?>
<?php use yii\helpers\Url;?>
<div class="vibor container well well-lg">
<h5><?= Yii::t('app', 'O`zbekiston Respublikasi fuqarolari uchun interaktiv xizmatlar'); ?></h5>
<div class="k-uslugi">

<div class="row">
  <div class="col-sm-3">
    <a href="?action=sert_doc">
      <button type="button" class="btn btn-labeled btn-lg btn-info">
        <span class="btn-label"><i class="fa fa-2x fa-file-text-o"></i></span><?= Yii::t('app', 'Sertifikat</br>olish'); ?>
        <div class="overlay">
          <div class="text"><?= Yii::t('app', 'O`zbekiston Respublikasi<br/>fuqarolarining<br/>O`zbekiston Respublikasiga<br/>qaytish guvohnomasi'); ?></div>
        </div>
      </button>
    </a>
  </div>

  <div class="col-sm-3">
    <a href="?action=vku_doc">
      <button type="button" class="btn btn-labeled btn-lg btn-info">
        <span class="btn-label"><i class="fa fa-2x fa-vcard-o"></i></span><?= Yii::t('app', 'Vaqtincha</br>konsullik</br>hisobi'); ?>
        <div class="overlay">
          <div class="text"><?= Yii::t('app', 'O`zbekiston Respublikasi<br/>fuqarolarining xorijdagi konsullik<br/>muassasalarida vaqtincha konsullik<br/>hisobiga olish tartibi'); ?></div>
        </div>
      </button>
    </a>
  </div>

  <div class="col-sm-3">
    <a href="<?= Url::to(['/kus/index'])?>">
      <button type="button" class="btn btn-labeled btn-lg btn-info">
        <span class="btn-label"><i class="fa fa-2x fa-id-card-o"></i></span><?= Yii::t('app', 'Doimiy</br>konsullik</br>hisobi'); ?>
        <div class="overlay">
          <div class="text"><?= Yii::t('app', 'O`zbekiston Respublikasi<br/>fuqarolarining xorijdagi konsullik<br/>muassasalarida doimiy konsullik<br/>hisobiga olish tartibi'); ?></div>
        </div>
      </button>
    </a>
  </div>

  <div class="col-sm-3">
    <a href="?action=istreb">
      <button type="button" class="btn btn-labeled btn-lg btn-info">
        <span class="btn-label"><i class="fa fa-2x fa-newspaper-o"></i></span><?= Yii::t('app', 'Hujjatlarni</br>olish'); ?>
        <div class="overlay">
          <div class="text"><?= Yii::t('app', 'O`zbekiston Respublikasidan<br/>hujjatlarni so`rab<br/>olish tartibi'); ?></div>
        </div>
      </button>
    </a>
  </div>  
</div>

<div class="row">
<div class="col-sm-3">
    <a href="?action=pasp">
      <button type="button" class="btn btn-labeled btn-lg btn-info">
        <span class="btn-label"><i class="fa fa-2x fa-address-book-o fa-2x"></i></span><?= Yii::t('app', 'Pasportni</br>rasmiylashtirish'); ?>
        <div class="overlay">
          <div class="text"><?= Yii::t('app', 'O`zbekiston Respublikasi<br/>fuqarosi biometrik<br/>pasportini rasmiylashtirish<br/>tartibi'); ?></div>
        </div>
      </button>
    </a>
  </div>

  <div class="col-sm-3">
    <a href="?action=smrt">
      <button type="button" class="btn btn-labeled btn-lg btn-info">
        <span class="btn-label"><img src="/images/dead.png" class="dead"></span><?= Yii::t('app', 'O`lim haqidagi</br>guvohnoma'); ?>
        <div class="overlay">
          <div class="text"><?= Yii::t('app', 'O`zbekiston Respublikasi<br/>fuqarosining o`limi<br/>to`g`risidagi guvohnomani<br/>rasmiylashtirish tartibi'); ?></div>
        </div>
      </button>
    </a>
  </div>

  <div class="col-sm-3">
    <a href="?action=rz">
      <button type="button" class="btn btn-labeled btn-lg btn-info">
        <span class="btn-label"><i class="fa fa-2x fa-map-signs"></i></span><?= Yii::t('app', 'Xorijga</br>vaqtincha</br>chiqish'); ?>
        <div class="overlay">
          <div class="text"><?= Yii::t('app', 'Xorijga chiqsh uchun<br/>ruxsat yozuvini<br/>rasmiylashtirish (RE’Yo)<br/>tartibi'); ?></div>
       </div>
      </button>
    </a>
  </div>

  <div class="col-sm-3">
    <a href="?action=pmj">
      <button type="button" class="btn btn-labeled btn-lg btn-info">
        <span class="btn-label"><i class="fa fa-2x fa-map-marker"></i></span><?= Yii::t('app', 'Xorijga</br>doimiy</br>yashash'); ?>
        <div class="overlay">
          <div class="text"><?= Yii::t('app', 'Xorijga doimiy<br/>yashashga chiqish yozuvini<br/>rasmiylashtirish (DYa) tartibi'); ?></div>
        </div>
      </button>
    </a>
  </div>
</div>

<div class="row">
    <div class="col-sm-3 col-md-offset-1-and-half">
    <a href="?action=vixod">
      <button type="button" class="btn btn-labeled btn-lg btn-info">
        <span class="btn-label"><i class="fa fa-2x fa-share-square-o"></i></span><?= Yii::t('app', 'Fuqarolikdan</br>chiqish'); ?>
        <div class="overlay">
          <div class="text"><?= Yii::t('app', 'O`zbekiston Respublikasi<br/>fuqaroligidan chiqishni<br/>rasmiylashtirish tartibi'); ?></div>
        </div>
      </button>
    </a>
  </div>

  <div class="col-sm-3">
    <a href="?action=ngraj">
      <button type="button" class="btn btn-labeled btn-lg btn-info">
        <span class="btn-label"><i class="fa fa-2x fa-user-secret"></i></span><?= Yii::t('app', 'Fuqarolikni</br>tekshirish'); ?>
        <div class="overlay">
          <div class="text"><?= Yii::t('app', 'O`zbekiston Respublikasi<br/>fuqaroligiga mansub-mansub<br/>emaslikni aniqlash tartibi'); ?></div>
        </div>
      </button>
    </a>
  </div>

  <div class="col-sm-3">
    <a href="?action=apost">
      <button type="button" class="btn btn-labeled btn-lg btn-info">
        <span class="btn-label"><i class="fa fa-2x fa-file-photo-o"></i></span><?= Yii::t('app', 'Apostil</br>qo`yish'); ?>
        <div class="overlay">
          <div class="text"><?= Yii::t('app', 'Apostil qo`yish va<br/>hujjatlarni legallashtirish'); ?></div>
        </div>
      </button>
    </a>
  </div>
</div>

</div>
 <input  id="ses_name" type="hidden"  value = "<?php  echo $_SESSION['login'];?>" />
 </div>
 <?php
$this->registerJs("$(document).ready(function($){

    User_Session();
         $('#Chiqish').click( function(){
    $.ajax({
        type: 'POST',
        url:  '/uz/Chiqish.php',
        success: function(){
                          $('#ses_name').val('');
                          User_Session();
                      }
                  });
    }); 
})");
?>