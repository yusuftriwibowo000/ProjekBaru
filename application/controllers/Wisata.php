<?php 
class Wisata extends CI_Controller
{
  function __construct(){
    parent::__construct();
    $this->load->model('wisata_model');
  }
  function index(){
    $data['tb_kategori_wisata'] = $this->wisata_model->get_wisata();
    $this->load->view('wisata_view',$data);
  }
  function add_new(){
    $this->load->view('tambah_view');
  }

  function save(){
    $kat_judul = $this->input->post('kat_judul');
    $kat_konten = $this->input->post('kat_konten');
    $this->wisata_model->save($kat_judul,$kat_konten);
    redirect('wisata');
  }
  function delete(){
    $kat_id = $this->uri->segment(3);
    $this->wisata_model->delete($kat_id);
    redirect('wisata');
  }
  function get_edit(){
    $kat_id = $this->uri->segment(3);
    $result = $this->wisata_model->get_kat_id($kat_id);
    if($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
            'kat_id'     => $i['kat_id'],
            'kat_judul'  => $i['kat_judul'],
            'kat_konten' => $i['kat_konten']
        );
        $this->load->view('edit_view',$data);
    }else{
        echo "Data tidak ditemukan";
    }
  }
  function update(){
    $kat_id = $this->input->post('kat_id');
    $kat_judul = $this->input->post('kat_judul');
    $kat_konten = $this->input->post('kat_konten');
    $this->wisata_model->update($kat_id,$kat_judul,$kat_konten);
    redirect('wisata');
  }
}

 ?>