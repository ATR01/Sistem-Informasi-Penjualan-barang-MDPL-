<?php
require_once(APPPATH.'vendor/mike42/escpos-php/autoload.php');
use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;


$b=$data->row_array();
$connector = new WindowsPrintConnector("POS58"); //
$printer = new Printer($connector);
$testStr =($b['barang_id']);
$sizes = array(
    8 => "(maximum)");
foreach ($sizes as $size => $label) {
    $printer -> qrCode($testStr, Printer::QR_ECLEVEL_L, $size);
    $printer -> text($b['barang_nama']);
    $printer -> setJustification();
    $printer -> feed(2);


}
$printer -> close();
?>
