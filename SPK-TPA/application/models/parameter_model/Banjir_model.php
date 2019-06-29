<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Banjir_model extends CI_Model
{
	public function joinbanjir()
    {
        $data=$this->db->query("SELECT id_klasifikasi, rawan_banjir, nilai_klasifikasi.editby, nama_daerah, nama_admin from nilai_klasifikasi, daerah, administrator where daerah.id_daerah = nilai_klasifikasi.id_daerah and administrator.id_admin = nilai_klasifikasi.editby");
        return $data->result();
    }

    public function bobot()
    {
		$data= $this->db->query("SELECT rawan_banjir from bobot");
        return $data->row(); 
    }

    public function tambah_banjir($data)
    {
        $this->db->insert('nilai_klasifikasi',$data);
    }

    public function idbobot()
    {
        return $this->db->get('bobot')->result();
    }

    public function tampilkecamatan()
    {
        return $this->db->get('daerah')->result(); 
    }

    public function edit_banjir($id)
    {       
        $data = $this->db->query("SELECT id_klasifikasi, rawan_banjir, nama_daerah from nilai_klasifikasi, daerah where daerah.id_daerah = nilai_klasifikasi.id_daerah and id_klasifikasi=$id");
        return $data->result();
    }

    public function update_banjir($where,$data,$table)
    {       
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_banjir($id)
    {
        $this->db->where('id_klasifikasi',$id);
        $this->db->delete('nilai_klasifikasi');
    }
}