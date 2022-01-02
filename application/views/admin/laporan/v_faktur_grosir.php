<html>
<title>Faktur Penjualan Barang</title>
<meta charset="utf-8">
<div id="laporan">
<style>

#tabel
{
font-size:15px;
border-collapse:collapse;
}
#tabel  td
{
padding-left:5px;
border: 1px solid black;
}
</style>
</head>
<body onload="window.print()" style='font-family:tahoma; font-size:8pt;'>
<center>
<table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border = '0'>
<?php 
    $b=$data->row_array();
?>
<td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
<span style='font-size:12pt'><b>TOKO PUNGGU JAYA</b></span>
</br>
Alamat Toko Alamat Toko Alamat Toko Alamat Toko Alamat Toko Alamat Toko Alamat Toko Alamat Toko Alamat Toko Alamat Toko </br>Telp : 0594094545
</td>
<td style='vertical-align:top' width='30%' align='left'>
<b><span style='font-size:12pt'>FAKTUR PENJUALAN</span></b>
</br>
No Faktur : <?php echo $b['jual_nofak'];?></br>
Tanggal : <?php echo $b['jual_tanggal'];?></br>
Nama Pelanggan : <?php echo ($b['jual_pembeli']);?></br>
</td>
</table>
<table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border = '0'>
<td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
</table>
<table cellspacing='0' style='width:550px; font-size:8pt; font-family:calibri;  border-collapse: collapse;' border='1'>

<tr align='center'>
<td width='2%'>NO</td>
<td width='20%'>Nama Barang</td>
<td width='13%'>Satuan</td>
<td width='2%'>Qty</td>
<td width='13%'>Harga Jual</td>
<td width='13%'>Discount</td>
<td width='13%'>Total Harga</td>
<?php 
$no=0;
    foreach ($data->result_array() as $i) {
        $no++;
        $nabar=$i['d_jual_barang_nama'];
        $satuan=$i['d_jual_barang_satuan'];
        $harjul=$i['d_jual_barang_harjul'];
        $qty=$i['d_jual_qty'];
        $diskon=$i['d_jual_diskon'];
        $total=$i['d_jual_total'];
?>
<tr>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $nabar;?></td>
        <td><?php echo $satuan;?></td>
        <td><?php echo $qty;?></td>
        <td><?php echo 'Rp '.$harjul;?>,-</td>
        <td><?php echo $diskon;?></td>
        <td style='text-align:right'><?php echo 'Rp '.$total;?>,-</td>
    </tr>
<?php }?>    
<tr>
<td colspan = '6'>
        <div style='text-align:right'>Tunia :</div>
    </td>
<td style='text-align:right'><?php echo 'Rp '.number_format($b['jual_jml_uang']).',-';?></td>
</tr>
<tr>
    <td colspan = '6'>
        <div style='text-align:right'>Kembalian:</div>
    </td>
    <td style='text-align:right'><?php echo 'Rp '.number_format($b['jual_kembalian']).',-';?></td>
</tr>
</table>
<br>
<table style='width:600; font-size:7pt;' cellspacing='2'>
    <tr>
    <td align='center'>Kasir</br></br><br><br><u> ( <?php echo $this->session->userdata('nama');?> )</u></td>
    <td style='border:1px solid black; padding:5px; text-align:left; width:30%'></td>
    <td align='center'>Pembeli</br></br><br><br><u> ( <?php echo ($b['jual_pembeli']);?> )</u></td>
</table>
</center>
</div>
</body>
</html>