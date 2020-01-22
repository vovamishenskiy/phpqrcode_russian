<?php
include ('qrlib.php');

QRcode::png('text');

$tempDir = EXAMPLE_TMP_SERVERPATH;

$codeContents = 'testtext';

$fileName = 'qrtest.png';

$pngAbsoluteFilePath = $tempDir.$fileName;
$urlRelativeFilePath = EMAPLE_TMP_URLRELPATH.$fileName;

QRcode::png($codeContents, $pngAbsoluteFilePath);
?>