<?php 
class M_pelanggan extends CI_Model{

	function hapus_pelanggan($kode){
		$hsl=$this->db->query("DELETE FROM tbl_pelanggan where pelanggan_id='$kode'");
		return $hsl;
	}

	function update_pelanggan($kode,$nama,$alamat,$notelp){
		$hsl=$this->db->query("UPDATE tbl_pelanggan set pelanggan_nama='$nama',pelanggan_alamat='$alamat',pelanggan_notlpn='$notelp' where pelanggan_id='$kode'");
		return $hsl;
	}

	function tampil_pelanggan(){
		$hsl=$this->db->query(" SELECT * from tbl_pelanggan order by pelanggan_id desc");
		return $hsl;
	}

	function simpan_pelanggan($kopel,$nama,$alamat,$notelp){
		$hsl=$this->db->query("INSERT INTO tbl_pelanggan(pelanggan_id,pelanggan_nama,pelanggan_alamat,pelanggan_notlpn) VALUES ('$kopel','$nama','$alamat','$notelp')");
		return $hsl;
	}
	function get_pelanggan($kobar){
		$hsl=$this->db->query("SELECT * FROM tbl_pelanggan where pelanggan_id='$kopel'");
		return $hsl;
	}
	function get_kopel(){
		$q = $this->db->query("SELECT MAX(RIGHT(pelanggan_id,4)) AS kd_max FROM tbl_pelanggan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        return "P".$kd;
	}

}