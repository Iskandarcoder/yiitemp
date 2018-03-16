<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
$lang = Yii::$app->language;

$this->title = 'Map';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container well well-lg">
<h4>O`zbekistonnig xorijdagi vakolatxonalari</h4>
</br>
	<div id="accordion">
		<?php $i=1;?>
	<?php foreach($embassy as $key =>$item):?>		
		<?php $i++;?>
	  <div class="accords">
	    <div id="heading<?=$i;?>">
	        <button class="btn btn-link accord" data-toggle="collapse" data-target="#collapse<?=$i;?>" -aria-expanded="true" aria-controls="collapse<?=$i;?>">
	          <p><?=$item['name_'.$lang];?></p><i class="fa fa-caret-down"></i>
	        </button>
	    </div>

	    <div id="collapse<?=$i;?>" class="collapse" aria-labelledby="heading<?=$i;?>" data-parent="#accordion">
	      <div class="ac_text">
	        <p><?=$item['text_'.$lang];?></p>
	      </div>
	    </div>	  
	  </div>
	<?php endforeach;?>  

</div>
