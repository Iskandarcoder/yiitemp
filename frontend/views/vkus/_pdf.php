<?php

use frontend\widgets\barcode\BarcodeGenerator;
$generator = new BarcodeGenerator();

$barcodeTypes = [
	'ean13' => 'EAN-13',
	'itf14' => 'ITF-14',
	'ean8' => 'EAN-8',
	'ean128' => 'EAN-128',
	'upca' => 'UPCA',
	'upce' => 'UPCE',
	'code39' => 'CODE39',
	'code39ascii' => 'CODE39ASCII',
	'code93' => 'CODE93',
	'code93ascii' => 'CODE93ASCII',
	'code128' => 'CODE128',
	'code128a' => 'CODE128A',
	'code128b' => 'CODE128B',
	'code128c' => 'CODE128C',
	'code128ac' => 'CODE128AC',
	'code128bc' => 'CODE128BC',
	'ean128' => 'EAN128',
	'ean128a' => 'EAN128A',
	'ean128b' => 'EAN128B',
	'ean128c' => 'EAN128C',
	'ean128ac' => 'EAN128AC',
	'ean128bc' => 'EAN128BC',
	'codabar' => 'CODABAR',
	'itf' => 'ITF',
	'qr' => 'QR',
	'qrl' => 'QRL',
	'qrm' => 'QRM',
	'qrq' => 'QRQ',
	'qrh' => 'QRH',
	'dmtx' => 'DMTX',
	'dmtxs' => 'DMTXS',
	'dmtxr' => 'DMTXR',
	'gs1dmtx' => 'GS1DMTX',
	'gs1dmtxs' => 'GS1DMTXS',
	'gs1dmtxr' => 'GS1DMTXR',
];

?>

<p style="text-align: center;"><b><?=$model->division->sp_name_uz;?></b></p>
<p style="text-align: left;">
	<?php
		$image = $generator->render_image('code128', $model->id, [
					'f' => 'png',
					// 'w' => 500,
					'h' => 40,
					'tc' => '#FFFFFF',
					// 'ts' => 5, // shrift
					// 'th' => 15, // barcode bn yozuv orasi
				]);
		
		// $name = 'barcode-id-'.$product->id.'.png';
		// $path = Yii::getAlias('@frontend/web/barcodes/').$name;
		// imagepng($image, $path);
		
		ob_start();
		imagepng($image);
		$image = ob_get_contents();
		ob_end_clean();
	?>
	<div style="text-align: left;">
		<?php echo '<img style="margin-top: -10px;" src="data:image/png;base64,'.base64_encode($image).'" />'; ?>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $model->id; ?>
	</div>
</p>
		<center>

	<table width="800" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th ></th>
			<th  style="text-align: center;font-size: 16px;" ><b>
				РЕГИСТРАЦИОННАЯ КАРТОЧКА <br> граждан Республики Узбекистан<br> (временно пребывающих за границей)</b>
			</th>
			
			<th style="text-align: right;padding: 5px;"><?php echo '<img style="width:125; height:170px; overflow:hidden" src="data:image/jpeg;base64,'.base64_encode($model->photo).'"/>';?></th>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">№</td><td colspan="2"  style="border: 1px solid black; padding:5px; background-color: #B5BDC4;"></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">1</td><td style="border: 1px solid black; padding:5px; padding: 5px;">Ф.И.О.<br>(если меняли фамилию, имя,<br> то перечислите все фамилии,<br> имена, которыми пользовались)</td>
			<td style="border: 1px solid black; padding:5px;padding: 5px;"> <?=$model->surname_latin;?> <?=$model->name_latin;?> <?=$model->patronym_latin;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center; padding: 5px;">2</td><td style="border: 1px solid black; padding:5px;">Число, месяц, год рождения</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->birth_date;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">3</td><td style="border: 1px solid black; padding:5px;">Место рождения</td>
			<td style="border: 1px solid black; padding:5px;"> <?=$model->country->sp_name_uz;?> <?=$model->region->sp_name_uz;?> <?=$model->district->sp_name_uz;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">4</td><td style="border: 1px solid black; padding:5px;">Национальность</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->nation->sp_name_uz;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">5</td><td style="border: 1px solid black; padding:5px;">Образование и специальность, когда<br> и какое учебное заведение окончил(а)</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->teducation->uz_type_edu;?>, <?=$model->which_school;?>, <?=$model->education_date;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">6</td><td style="border: 1px solid black; padding:5px;">Когда и в связи с чем выехал из<br> Республики Узбекистан</td>
			<td style="border: 1px solid black; padding:5px;"><?= substr("$model->begin_date",0, -9);?>, <?=$model->foundation_cons_acc;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">7</td><td style="border: 1px solid black; padding:5px;">Ваш последний адрес<br> местожительства в Республике<br> Узбекистан</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->adregion->sp_name_uz?>, <?=$model->addistrict->sp_name_uz?>, <?=$model->adplace->sp_name_uz?>, <?=$model->adstreet->sp_name_uz?>, <?=$model->living_block;?>/<?=$model->living_house;?>/<?=$model->living_flat;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">8</td><td style="border: 1px solid black; padding:5px;">Адрес местожительства <br> номер телефона</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->living_foreign_place;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">9</td><td style="border: 1px solid black; padding:5px;">Род деятельности и<br> занимаемая должность</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->work_place;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">10</td><td style="border: 1px solid black; padding:5px;">Имеете ли родственников в<br> Республике Узбекистан,<br> их фамилии и адреса</td>
			<td style="border: 1px solid black; padding:5px;">
				<?php
					$inRelatives = $model->inRelative;
					?>
					<?php foreach ($inRelatives as $key => $inRelative): ?>
						<p>
							<?= $inRelative->typerelative->uz_type_relative;?>: <?= $inRelative->fio ?><br>Manzil: <?=$inRelative->address;?>
						</p>
					<?php endforeach ?>
			</td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">11</td><td style="border: 1px solid black; padding:5px;">Имеете ли родственников вне<br> пределов Республики Узбекистан,<br> их фамилии и адреса</td>
			<td style="border: 1px solid black; padding:5px;">
				<?php
					$outRelatives = $model->outRelative;
					?>
					<?php foreach ($outRelatives as $key => $outRelative): ?>
						<p>
							<?= $outRelative->typerelative->uz_type_relative;?>: <?= $outRelative->fio ?><br>Manzil: <?=$outRelative->address;?>
						</p>
					<?php endforeach ?>
			</td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">12</td><td style="border: 1px solid black; padding:5px;">	Наименование органа, выдавшего паспорт,<br> 	номер и серия паспорта,<br> 	срок действия паспорта</td>
			<td style="border: 1px solid black; padding:5px;"> <?= $model->doctype->sp_name_uz;?><br><?= $model->division->sp_name_uz;?>, <?= substr("$model->date_begin_document",0, -9);?><br><?= $model->doc_seria;?> <?= $model->doc_number;?><br><?= substr("$model->date_endocument",0, -9);?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">13</td><td style="border: 1px solid black; padding:5px;">Лица, внесенные в паспорт</td>
			<td style="border: 1px solid black; padding:5px;"></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">14</td><td style="border: 1px solid black; padding:5px;">Отметка об обмене паспорта <br>	наименование органа, выдавшего паспорт, <br>	номер и серия паспорта,<br>	срок действия паспорта</td>
			<td style="border: 1px solid black; padding:5px;"></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">15</td><td style="border: 1px solid black; padding:5px;">Отметки о поездках в Республику Узбекистан</td>
			<td style="border: 1px solid black; padding:5px;"></td>
		</tr>
		<tr>
			<td  colspan="2" style="height: 60px; text-align: center; border-top:1px solid black; ">Подпись лица, принявшего на учет ___________________________</td>
			<td  colspan="1" style="height: 60px; text-align: center; ">Подпись консула ___________________________</td>
		</tr>
		<tr >
			<td colspan="3" style="height: 30px; text-align: left; ">Дата принятия на консульский учет "_____"____________20___г.</td>
		</tr>
		
	</table>
	</center>
