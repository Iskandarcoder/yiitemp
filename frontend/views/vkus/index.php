<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\VkusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Vkuses');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vkus-index">

  
<div class="vku_doc container well well-lg">
<h3>VAQTINCHALIK KONSULLIK HISOBIGA OLISH TARTIBI</h3>

<p>O`zbekiston Respublikasi Prezidentining 2011-yil 5-yanvardagi PF-4262-sonli “O`zbekiston Respublikasida pasport tizimini takomillashtirishga doir qo`shimcha chora-tadbirlar to`g`risida”gi Farmonining 1-ilovasi 51-52 bandlariga ko`ra:</p>
<LI>o`rnatilgan tartibda  xorijga doimiy yashashga chiqqan, shuningdek, vaqtincha chet elda bo`lib turuvchi fuqarolar O`zbekiston Respublikasining xorijdagi konsullik muassasalarida doimiy yoki vaqtincha konsullik ro`yxatiga turadilar.</LI>
<LI>doimiy konsullik ro`yxatiga xorijga doimiy yashashga chiqqan va chet elga chiqishlarini o`rnatilgan tartibda rasmiylashtirgan fuqarolar olinadi.</LI>
<P>Vaqtincha konsullik ro`yxatiga olinmagan fuqarolar chet elda vaqtincha  bo`lgan paytlarida pasportlarini yo`qotgan, amal qilish muddatini o`tkazib yuborgan yoki yaroqsiz holga keltirilgan hollarda tegishli konsullik muassasasiga O`zbekiston Respublikasiga qaytish guvohnomasini (Sertifikat) olish uchun murojaat qiladilar.</P>
<P>Doimiy konsullik hisobiga turish uchun vakolatxona konsullik bo`limiga quyidagi hujjatlarni taqdim etish kerak:</P>
<li> O`zbekiston Respublikasi fuqarosining pasporti asl nusxasi + pasport nusxasi (O`zbekiston Respublikasida ro`yxatga olinganlik to`g`risidagi axborot bilan);<br /></li>
<li> O`zbekiston Respublikasidan doimiy yashshga jo`nab ketish manzil varaqasi va nusxasi (faqat Mustaqil Davlatlar Hamdo`stligi davlatlariga doimiy yashashga ketgan fuqarolar uchun);<br /></li>
<li>doimiy turar joyi mamlakati hududida yashash yoki ro`yxatga olingan joyidan ma’lumotnoma;<br /></li>
<li> 3x4 sm o`lchamli fotosurat – 1 dona;<br /></li>
<li>konsullik hisobiga olish uchun konsullik yig`imi;<br /></li>
<li> elektron tarzda to`ldirilgan konsullik hisobiga olish varag`i.;<br /></li>
<p><a href="/uz/reglament/k_uchet.pdf">Interaktiv xizmat reglamenti</a></p>


<p id="p1"><strong>Izoh</strong>: (Doimiy konsullik hisobiga olish 1 ish kuni ichida rasmiylashtiriladi.)<br /></p>

<hr />
<br />
<br />

<input type="checkbox" id="chk_inst" name="chk_inst" onclick = "InstNext('vvod_pku')";/>
<label for="chk_inst"><span></span> - Yo`riqnoma bilan tanishdim</label>
            

                   <br />
                  <div class="text-center">
            <button id="next" class="btn btn-info btn-lg" disabled=true onclick=location.href="<?= Url::to(['/vkus/create'])?>"> Davom etish</button>
                  </div>
       </div>           
                  
                  
    <script type="text/javascript">
  $(document).ready(function($)
   {
    
      function InstNextPku()  {
    link2="location.href='?action=vvod_pku'";
  if ($('#chk_inst').is(':checked'))
      {
      $("#next").attr("onClick",link2);
      $('#next').attr('disabled',false);                      
       }
     else
     {
          $('#next').attr('disabled','disabled');              
     }
  };
    });
   </script>    
   
   
</div>
