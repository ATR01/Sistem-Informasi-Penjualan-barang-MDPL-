<?php
require_once(APPPATH.'vendor/mike42/escpos-php/autoload.php');
use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

$b=$data->row_array();
$connector = new WindowsPrintConnector("POS58");
$printer = new Printer($connector);
$printer -> setJustification(Printer::JUSTIFY_CENTER);
$testStr =($b['barang_id']);
$hri = array (
    Printer::BARCODE_TEXT_BELOW => $b['barang_nama'],
    );
foreach ($hri as $position => $caption) {
    $printer->text($caption . "\n");
    $printer->setBarcodeTextPosition($position);
    $printer->barcode($testStr, Printer::BARCODE_CODE93);
    $printer->feed();
}
$printer->cut();
$printer->close();
?>
