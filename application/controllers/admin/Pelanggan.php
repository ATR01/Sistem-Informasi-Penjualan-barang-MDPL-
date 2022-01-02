<?php 
class Pelanggan extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
        $this->load->model('m_pelanggan');
    }
   function index(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
        $data['data']=$this->m_pelanggan->tampil_pelanggan();
        $this->load->view('admin/v_pelanggan',$data);
    }else{
        echo "Halaman tidak ditemukan";
    }
}
function tambah_pelanggan(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
        $kopel=$this->m_pelanggan->get_kopel();
        $nama=$this->input->post('nama');
        $alamat=$this->input->post('alamat');
        $notelp=$this->input->post('notelp');
        $this->m_pelanggan->simpan_pelanggan($kopel,$nama,$alamat,$notelp);
        redirect('admin/pelanggan');
    }else{
        echo "Halaman tidak ditemukan";
    }
    }
    function edit_pelanggan(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
        $kode=$this->input->post('kode');
        $nama=$this->input->post('nama');
        $alamat=$this->input->post('alamat');
        $notelp=$this->input->post('notelp');
        $this->m_pelanggan->update_pelanggan($kode,$nama,$alamat,$notelp);
        redirect('admin/pelanggan');
    }else{
        echo "Halaman tidak ditemukan";
    }
    }
    function hapus_pelanggan(){
    if($this->session->userdata('akses')=='1'){
        $kode=$this->input->post('kode');
        $this->m_pelanggan->hapus_pelanggan($kode);
        redirect('admin/pelanggan');
    }else{
        echo "Halaman tidak ditemukan";
    }
    }
}