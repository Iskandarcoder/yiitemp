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

<?php
	$image = $generator->render_image('code128', $id, [
				'f' => 'png',
				// 'w' => 500,
				'h' => 50,
				'ts' => 5, // shrift
				'th' => 15, // barcode bn yozuv orasi
			]);
	
	// $name = 'barcode-id-'.$product->id.'.png';
	// $path = Yii::getAlias('@frontend/web/barcodes/').$name;
	// imagepng($image, $path);
	
	ob_start();
	imagepng($image);
	$image = ob_get_contents();
	ob_end_clean();
?>
<div style="text-align: center;">
	<?php echo '<img style="margin-top: -10px;" src="data:image/png;base64,'.base64_encode($image).'" />'; ?>
</div>