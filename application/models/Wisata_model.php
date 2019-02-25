<?php 
class Wisata_model extends CI_Model
{
	function get_wisata()
	{
		$result = $this->db->get('tb_kategori_wisata');
		return $result;
	}

	function save($kat_judul,$kat_konten)
	{
    $data = array(
      'kat_judul' => $kat_judul,
      'kat_konten' => $kat_konten
    );
    $this->db->insert('tb_kategori_wisata',$data);
    }

  function delete($kat_id){
    $this->db->where('kat_id', $kat_id);
    $this->db->delete('tb_kategori_wisata');
	}

	function get_kat_id($kat_id){
    $query = $this->db->get_where('tb_kategori_wisata', array('kat_id' => $kat_id));
    return $query;
	}

	function update($kat_id,$kat_judul,$kat_konten){
    $data = array(
      'kat_judul' => $kat_judul,
      'kat_konten' => $kat_konten
    );
    $this->db->where('kat_id', $kat_id);
    $this->db->update('tb_kategori_wisata', $data);
}
}
 ?>