<?php
	use frontend\widgets\barcode\BarcodeGenerator;
	use yii\helpers\Url;

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
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
<a class="btn btn-lg green hidden-print margin-bottom-5" style="float: right;" href="<?= Url::to(['anketa-new/index'])?>">
	 <i class="fa fa-home"></i>
</a>
<a class="btn btn-lg blue hidden-print margin-bottom-5" style="float: right;" onclick="javascript:window.print();">
	Print <i class="fa fa-print"></i>
</a>
<div style="margin: auto;width: 750px;">
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
			<?php echo '<img style="" src="data:image/png;base64,'.base64_encode($image).'" />'; ?><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $model->p_guid; ?>
		</div>
	</p>
	
</div>            
		<center>

	<table  border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th colspan="2" style="text-align: center;font-size: 16px;  width: 400px;">
				A N K E T A – S O` R O V N O M A<br> Shaxsni tasdiqlash va O`zbekiston Respublikasiga qaytish uchun <br> guvohnoma rasmiylashtirish uchun <i>(3 nusxada to`ldiriladi)<br> Savollarga javoblar to`liq va batafsil bo`lishi lozim, aks holda arizangiz ko`rib chiqilmaydi!</i> 
			</th>
			
			<th style="text-align: right;padding: 5px;"><?php echo '<img style="width:125; height:160px; overflow:hidden" src="data:image/jpeg;base64,'.base64_encode($model->p_photo).'"/>';?>
			</th>
		</tr>
		<tr>
			<td style="border: 1px solid black;  padding: 2px; text-align: center;">№</td><td colspan="2"  style="border: 1px solid black;  padding: 2px; background-color: #B5BDC4;"></td>
		</tr>
		<tr>
			<td style="border: 1px solid black;  padding: 2px; text-align: center;">1</td><td style="border: 1px solid black;  padding: 2px; padding: 3px;">F.I.О.<br>(agar o’zgargan bo’lsa, u holda avvalgilarini ham kiriting)</td>
			<td style="border: 1px solid black;  padding: 2px;padding: 5px;"> <?=$model->p_surnamel;?> <?=$model->p_namel;?> <?=$model->p_patronyml;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black;  padding: 2px; text-align: center; padding: 5px;">2</td><td style="border: 1px solid black;  padding: 2px;">Tug'ilgan yili, oyi va sanasi</td>
			<td style="border: 1px solid black;  padding: 2px;"><?=$model->p_birth;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black;  padding: 2px; text-align: center;">3</td><td style="border: 1px solid black;  padding: 2px;">Tug'ilgan joyi</td>
			<td style="border: 1px solid black;  padding: 2px;"> <?=$model->country->sp_name_uz;?> <?=$model->region->sp_name_uz;?> <?=$model->district->sp_name_uz;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black;  padding: 2px; text-align: center;">4</td><td style="border: 1px solid black;  padding: 2px;">Millati</td>
			<td style="border: 1px solid black;  padding: 2px;"><?=$model->nation->sp_name_uz;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black;  padding: 2px; text-align: center;">7</td><td style="border: 1px solid black;  padding: 2px;">O'zbekiston Respublikasida<br>doimiy yashagan manzili</td>
			<td style="border: 1px solid black;  padding: 2px;"><?=$model->adregion->sp_name_uz?>, <?=$model->addistrict->sp_name_uz?>,  <?=$model->adstreet->sp_name_uz?>, <?=$model->living_block;?>/<?=$model->living_house;?>/<?=$model->living_flat;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black;  padding: 2px; text-align: center;">7</td><td style="border: 1px solid black;  padding: 2px;">Pasport ma`lumotlari: seriya, nomer, qachon va kim tomonidan berilgan <br>(fuqaroligi yo`q shaxslar uchun xorijga chiqish hujjati bo`yicha ma`lumotlar ko`rsatiladi)</td>
			<td style="border: 1px solid black;  padding: 2px;"><?=$model->p_seryb?>, <?=$model->p_numberb?>,  <?=$model->p_datebegb?></td>
		</tr>


		<tr>
			<td style="border: 1px solid black;  padding: 2px; text-align: center;">5</td><td style="border: 1px solid black;  padding: 2px;">Ma'lumoti va mutaxassisligi<br> (qachon va qaysi o'quv yurtini tugatgan)</td>
			<td style="border: 1px solid black;  padding: 2px;"><?=$model->teducation->uz_type_edu;?>, <?=$model->which_school;?>, <?=$model->education_date;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black;  padding: 2px; text-align: center;">6</td><td style="border: 1px solid black;  padding: 2px;">Qachon va nima maqsadda xorijga ketgan</td>
			<td style="border: 1px solid black;  padding: 2px;"><?= substr("$model->begin_date",0, -9);?>, <?=$model->foundation_cons_acc;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black;  padding: 2px; text-align: center;">7</td><td style="border: 1px solid black;  padding: 2px;">O'zbekiston Respublikasida<br>doimiy yashagan manzili</td>
			<td style="border: 1px solid black;  padding: 2px;"><?=$model->adregion->sp_name_uz?>, <?=$model->addistrict->sp_name_uz?>,  <?=$model->adstreet->sp_name_uz?>, <?=$model->living_block;?>/<?=$model->living_house;?>/<?=$model->living_flat;?></td>
		</tr>


		<tr>
			<td style="border: 1px solid black;  padding: 2px; text-align: center;">8</td><td style="border: 1px solid black;  padding: 2px;">Yashash manzili <br> telefon raqami</td>
			<td style="border: 1px solid black;  padding: 2px;"><?=$model->living_foreign_place;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black;  padding: 2px; text-align: center;">9</td><td style="border: 1px solid black;  padding: 2px;">Ish joyi va<br> lavozimi</td>
			<td style="border: 1px solid black;  padding: 2px;"><?=$model->work_place;?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black;  padding: 2px; text-align: center;">10</td><td style="border: 1px solid black;  padding: 2px;">O'zbekiston Respublikasidagi yaqin qarindoshlari</td>
			<td style="border: 1px solid black;  padding: 2px;">
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
			<td style="border: 1px solid black;  padding: 2px; text-align: center;">11</td><td style="border: 1px solid black;  padding: 2px;">Chet eldagi yaqin qarindoshlari</td>
			<td style="border: 1px solid black;  padding: 2px;">
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
			<td style="border: 1px solid black;  padding: 2px; text-align: center;">12</td><td style="border: 1px solid black;  padding: 2px;">	Hujjat bergan tashkilot,<br> 	pasport seriasi va raqami,<br> 	amal qilish muddati.</td>
			<td style="border: 1px solid black;  padding: 2px;"> <?= $model->doctype->sp_name_uz;?><br><?= $model->division->sp_name_uz;?>, <?= substr("$model->date_begin_document",0, -9);?><br><?= $model->doc_seria;?> <?= $model->doc_number;?><br><?= substr("$model->date_endocument",0, -9);?></td>
		</tr>
		<tr>
			<td style="border: 1px solid black;  padding: 2px; text-align: center;">13</td><td style="border: 1px solid black;  padding: 2px;">Birga kelgan shaxslar</td>
			<td style="border: 1px solid black;  padding: 2px;"></td>
		</tr>
		<tr>
			<td style="border: 1px solid black;  padding: 2px; text-align: center;">14</td><td style="border: 1px solid black;  padding: 2px;">Pasport almashganlik tugrisidagi <br>	Hujjat bergan tashkilot<br>	pasport seriasi, raqami,<br>	amal qilish muddati</td>
			<td style="border: 1px solid black;  padding: 2px;"></td>
		</tr>
		<tr>
			<td style="border: 1px solid black;  padding: 2px; text-align: center;">15</td><td style="border: 1px solid black;  padding: 2px;">О’zbekistonga tashrif buyurganlik to'grisidagi  belgilar</td>
			<td style="border: 1px solid black;  padding: 2px;"></td>
		</tr>
		<tr>
			<td  colspan="2" style="height: 50px; text-align: center; border-top:1px solid black; ">Fuqaro imzosi __________________</td>
			<td  colspan="1" style="height: 50px; text-align: center; ">Konsul imzosi ______________________</td>
		</tr>
		<tr >
			<td colspan="3" style="height: 30px; text-align: left; ">Ro'yhatdan o'tish sanasi "_____"____________20___г.</td>
		</tr>
		
	</table>
	</center>
		</div>
	</div>