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
				A N K E T A – S O` R O V N O M A<br>Shaxsni tasdiqlash va O`zbekiston Respublikasiga qaytish <br>guvohnomasi rasmiylashtirish uchun  
				<i style="font-weight: normal;"> (3 nusxada to`ldiriladi)
				Savollarga javoblar to`liq va batafsil bo`lishi lozim, aks holda arizangiz ko`rib chiqilmaydi!</i>
			</th>
			
			<th style="text-align: right;padding: 5px;"><?php echo '<img style="width:125; height:170px; overflow:hidden" src="data:image/jpeg;base64,'.base64_encode($model->p_photo).'"/>';?></th>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">№</td><td colspan="2"  style="border: 1px solid black; padding:5px; background-color: #B5BDC4;"></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">1</td><td style="border: 1px solid black; padding:5px; padding: 5px;">F.I.О.<br>(agar o’zgargan bo’lsa, u holda avvalgilarini ham kiriting)</td>
			<td style="border: 1px solid black; padding:5px;padding: 5px;"> <?=$model->p_surnamel;?> <?=$model->p_namel;?> <?=$model->p_patronyml;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center; padding: 5px;">2</td><td style="border: 1px solid black; padding:5px;">Tug'ilgan yili, oyi va sanasi</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->p_birth;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">3</td><td style="border: 1px solid black; padding:5px;">Tug'ilgan joyi</td>
			<td style="border: 1px solid black; padding:5px;"> <?=$model->country->sp_name_uz;?> <?=$model->region->sp_name_uz;?> <?=$model->district->sp_name_uz;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">4</td><td style="border: 1px solid black; padding:5px;">Millati</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->nation->sp_name_uz;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">5</td><td style="border: 1px solid black; padding:5px;">O`zbekiston Respublikasidagi doimiy yashash joyi <br>(Respublika/shaxar /viloyat, tuman, ko`cha, uy, xonadon, tel,е-mail)</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->country->sp_name_uz;?>, <?=$model->region->sp_name_uz;?>, <?=$model->district->sp_name_uz;?>, <?=$model->street->sp_name_uz;?>, <?=$model->p_korpus;?>, <?=$model->p_house;?>, <?=$model->p_flat;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">6</td><td style="border: 1px solid black; padding:5px;">Pasport ma`lumotlari: seriya, nomer, qachon va kim tomonidan<br>berilgan (fuqaroligi yo`q shaxslar uchun xorijga chiqish hujjati<br>bo`yicha ma`lumotlar ko`rsatiladi)</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->doctype->sp_name_uz;?>, <?=$model->p_seryb;?> <?=$model->p_numberb;?> 
				<?=$model->p_datebegb;?> <?=$model->p_issuedbyb;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">7</td><td style="border: 1px solid black; padding:5px;">Vatanga qaytish guvohnomasi olish uchun sabab ( hujjat<br>yo`qolganligi, muddati o`tganligi, yaroqsizligi  yoki yo`qligi<br>sababini to`liqroq ko`rsating)</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->sertcause->sp_name_uz;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">8</td><td style="border: 1px solid black; padding:5px;">Arizachining pasportiga kiritilgan shaxslar va u bilan birga ushbu <br>davlatga kelgan hamrohlari</td>
			<td style="border: 1px solid black; padding:5px;"></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">9</td><td style="border: 1px solid black; padding:5px;">Tashrif maqsadi (sayyohat, mehmonga, xizmat safari, biznes, ishga<br>joylashish, o`qish va h.k.). Kelgan sanasi. Ushbu davlat vizasini<br>olish joyi va sanasi. Sayyohlik bilan kelganlar uchun: yuborgan 
			sayyohlik agentligining nomi, manzili va telefonlanlari ko`rsatilsin. 
			Taklif qiluvchi tashkilot, uning rahbari, manzili, telefon va e-maili,
			xizmat safari guvohnomasi yoki boshqa hujjatlar. </td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->reasonb->sp_name_uz;?>, <?=$model->p_work;?>, <?=$model->p_dateout;?></td>
		</tr>
		
		
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">10</td><td style="border: 1px solid black; padding:5px;">Agar arizachi tashrif buyurgan davlat huquqtartibot organlari<br> 
			tomonidan ushlangan bo`lsa, to`liq ravishda qo`lga olinish vaqti,<br> 
			joyi va sabablari ko`rasatilsin.</td>
			<td style="border: 1px solid black; padding:5px;"></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">11</td><td style="border: 1px solid black; padding:5px;">Tashrif buyurgan davlatdagi yashash manzili va ish joyi (kontakt<br> 
			telefonlari va e-mail)</td>
			<td style="border: 1px solid black; padding:5px;"><?=$model->p_work;?>, <?=$model->p_addressout;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">12</td><td style="border: 1px solid black; padding:5px;">O`zbekistonga qaytish rejalashtirilgan sana va yo`nalishi (kun, oy,<br> 
			yil va qaytish yo`nalishi)</td>
			<td style="border: 1px solid black; padding:5px;"><?= substr($model->p_dateenter, 0, 10);?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; padding:5px; text-align: center;">13</td><td style="border: 1px solid black; padding:5px;">O`zbekistonda yashovchi yaqin qarindoshlari xaqida ma`lumot<br>
			(F.I.Sh., ish joyi, tug`ilgan sanasi, yashash manzili,telefon va e-mail)</td>
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
			<td colspan="3" style="padding: 5px; text-align: justify;">Ushbu anketa-so`rovnomada ko`rsatilgan barcha ma`lumotlar to`g`ri va haqoniyligini tasdiqlayman. Yolg`on  yoki  noto`g`ri  ma`lumotlar taqdim  etilgan  holatlarda  O`zbekiston  Respublikasiga  qaytish guvohnomasi <b>berilmasligi</b> haqida ogohlantirildim. Men, ushbu  guvohnomani  O’zbekistonga  qaytganimdan  so`ng, <b>10 kun ichida</b>  o`zim  yashayotgan hududagi ichki ishlar bo`limiga topshirish majburiyatini olaman.</td>
		</tr>
		<tr>
			<td  colspan="3" style="height: 50px; border-bottom: 1px solid black; text-align: left; ">Arizachi F.I.Sh. va imzosi: </td>

		</tr>
		<tr>
			<td  colspan="3" style="height: 50px; text-align: left; border-bottom: 1px solid black; text-align: left; ">Konsullik xodimining F.I.Sh. va imzosi: </td>
		</tr>
		<tr >
			<td colspan="2" style="height: 40px; text-align: left; ">To`ldirilgan sana  "_____"____________20___г.</td>
			<td colspan="3" style="height: 40px; text-align: left; ">Qabul qilingan sana "_____"____________20___г.</td>
		</tr>
		
	</table><br>
	<?php// echo date('d.m.Y')." yil";?>
	</center>
