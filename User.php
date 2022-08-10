<?php
class User extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('Model_user');
  }

  function jurusan(){
    $this->load->view('guru/form_jurusan');
  }

  function tampil(){
    $data['tabel_data']=$this->Model_user->tampil_data()->result();
    $this->load->view('guru/form_tampilan',$data);
  }

  function add(){
    $this->load->view('guru/form_tabel_data');
  }
 
  function create_tabel_data(){
    $this->form_validation->set_rules('hari','hari','required');
    $this->form_validation->set_rules('tanggal','tanggal','required');
    $this->form_validation->set_rules('jam_pelajaran','jam_pelajaran','required');
    $this->form_validation->set_rules('mapel','mapel','required');
    $this->form_validation->set_rules('guru_mengajar','guru_mengajar','required');
    $this->form_validation->set_rules('guru_pengganti','guru_pengganti','required');
    $this->form_validation->set_rules('hadir','hadir','required');
    $this->form_validation->set_rules('absen','absen','required');
    $this->form_validation->set_rules('jumlah','jumlah','required');
    $this->form_validation->set_rules('uraian','uraian','required');

    if($this->form_validation->run() == FALSE){
       $this->add();
    }
    else{
      $data['hari']           = $this->input->post('hari');
      $data['tanggal']        = $this->input->post('tanggal');
      $data['jam_pelajaran']  = $this->input->post('jam_pelajaran');
      $data['mapel']          = $this->input->post('mapel');
      $data['guru_mengajar']  = $this->input->post('guru_mengajar');
      $data['guru_pengganti'] = $this->input->post('guru_pengganti');
      $data['hadir']          = $this->input->post('hadir');
      $data['absen']          = $this->input->post('absen');
      $data['jumlah']         = $this->input->post('jumlah');
      $data['uraian']         = $this->input->post('uraian');

      $this->model_user->simpan_tabel_data($data);
      redirect('user/tampil');
    }
  }

  function edit_tabel(){
    $this->load->view('guru/form_edit_tabel');
  }
 }
 ?>