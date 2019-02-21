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

<p style="text-align: center;"><b><?=$model->division->sp_name_ru;?></b></p>
<p style="text-align: left;">
	<?php
		$image = $generator->render_image('code128', $model->p_guid, [
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
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $model->p_guid; ?>
	</div>
</p>
		<center>

	<table width="900" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th ></th>
			<th  style="text-align: center;font-size: 14px;" >
				А Н К Е Т А – З А Я В Л Е Н И Е<br>Для подтверждения личности и дальнейшего оформления <br>сертификата на возвращения в Республику Узбекистан  
				<i style="font-weight: normal;"> (заполняется в 3-х экземплярах)
				Ответы на вопросы должны быть полными и подробными, в противном случае заявление
				не будет рассмотрено!</i>
			</th>
			
			<th style="text-align: right;padding: 5px;"><?php echo '<img style="width:125; height:170px; overflow:hidden" src="data:image/jpeg;base64,'.base64_encode($model->p_photo).'"/>';?></th>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">№</td><td colspan="2"  style="border: 1px solid black; padding:5px; background-color: #B5BDC4;"></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">1</td><td style="border: 1px solid black; padding:5px; padding: 5px;">Фамилия, имя и отчество (предыдущие фамилия, имя, отчество)</td>
			<td style="border: 1px solid black; padding:5px;padding: 5px;"> <?=$model->p_surnamel;?> <?=$model->p_namel;?> <?=$model->p_patronyml;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center; padding: 5px;">2</td><td style="border: 1px solid black; padding:5px;">Tug'ilgan yili, oyi va sanasi</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->p_birth;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">3</td><td style="border: 1px solid black; padding:5px;">Дата рождения (день, месяц, год)</td>
			<td style="border: 1px solid black; padding:5px;"> <?=$model->country->sp_name_ru;?> <?=$model->region->sp_name_ru;?> <?=$model->district->sp_name_ru;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">4</td><td style="border: 1px solid black; padding:5px;">Национальность</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->nation->sp_name_ru;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">5</td><td style="border: 1px solid black; padding:5px;">Адрес постоянного места жительства в Республике Узбекистан<br>(страна, город/область, район, улица, дом, кв., телефон,е-mail)</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->country->sp_name_ru;?>, <?=$model->region->sp_name_ru;?>, <?=$model->district->sp_name_ru;?>, <?=$model->street->sp_name_ru;?>, <?=$model->p_korpus;?>, <?=$model->p_house;?>, <?=$model->p_flat;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">6</td><td style="border: 1px solid black; padding:5px;">Паспортные данные: серия, номер, когда и кем выдан (для лиц<br>без гражданства указываются данные проездного документа) </td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->doctype->sp_name_ru;?>, <?=$model->p_seryb;?> <?=$model->p_numberb;?> 
				<?=$model->p_datebegb;?> <?=$model->p_issuedbyb;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">7</td><td style="border: 1px solid black; padding:5px;">Причины обращения за сертификатом на возвращение на<br>Родину (подробно указать причины и обстоятельства<br>утраты, просрочки, порчи или отсутствия документа)</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->sertcause->sp_name_ru;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">8</td><td style="border: 1px solid black; padding:5px;">Лица, внесенные в паспорт заявителя и совместно с ним<br>приехавшие в страну</td>
			<td style="border: 1px solid black; padding:5px;"></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">8</td><td style="border: 1px solid black; padding:5px;">Цель пребывания (туризм, в гости, командировка, бизнес,<br>трудоустройство, учеба и т.д.) Дата прибытия. Место и дата<br>получения визы в страну пребывания. Для туристов указать<br>название турагентства, организовавшего поездку, его адрес,<br>тел. и e-mail.Приглашающая организация, ее руководитель,<br>адрес, тел., e-mail, командировочные или другие документы.</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->reasonb->sp_name_uz;?>, <?=$model->p_work;?>, <?=$model->p_dateout;?></td>
		</tr>
		
		
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">9</td><td style="border: 1px solid black; padding:5px;">В случае задержания заявителя правоохранительными,<br>органами страны пребывания, подробно указать причины,<br>время, место и обстоятельства задержания</td>
			<td style="border: 1px solid black; padding:5px;"></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">10</td><td style="border: 1px solid black; padding:5px;">Адрес места жительства и работы в стране пребывания (адрес,<br>контактные телефоны и e-mail)</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->p_work;?>, <?=$model->p_addressout;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">11</td><td style="border: 1px solid black; padding:5px;">Предполагаемая дата и маршрут возвращения в Узбекистан<br>(день, месяц, год и маршрут следования)</td>
			<td style="border: 1px solid black; padding:5px;"><?= substr($model->p_dateenter, 0, 10);?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">12</td><td style="border: 1px solid black; padding:5px;">Сведения о близких родственниках в Узбекистане<br>(Ф.И.О., место работы, дата рождения, адрес, телефон и e-mail))</td>
			<td style="border: 1px solid black; padding:5px;">
				<?php
					$inRelatives = $model->inRelative;
					?>
					<?php foreach ($inRelatives as $key => $inRelative): ?>
						<p>
							<?= $inRelative->typerelative->ru_type_relative;?>: <?= $inRelative->fio ?><br>Manzil: <?=$inRelative->address;?>
						</p>
					<?php endforeach ?>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="padding: 5px; text-align: justify;">Подтверждаю правильность и верность указанных в настоящей анкете-заявлении сведений. 
Предупрежден о том, что предоставление ложных сведений может повлечь за собой <b>отказ в выдаче сертификата</b> на возвращение в Республику Узбекистан.Я обязуюсь сдать сертификат в органы внутренних дел по месту жительства в РУ <b>не позднее 30 дней</b> после возвращения в Узбекистан.</td>
		</tr>
		<tr>
			<td  colspan="3" style="height: 50px; border-bottom: 1px solid black; text-align: left; ">Ф.И.О. и подпись заявителя: </td>

		</tr>
		<tr>
			<td  colspan="3" style="height: 50px; text-align: left; border-bottom: 1px solid black; text-align: left; ">Ф.И.О. и подпись консульского сотрудника: </td>
		</tr>
		<tr >
			<td colspan="2" style="height: 40px; text-align: left; ">Дата заполнения  "_____"____________20___г.</td>
			<td colspan="3" style="height: 40px; text-align: left; ">Дата приема "_____"____________20___г.</td>
		</tr>
		
	</table><br>
	
	</center>
