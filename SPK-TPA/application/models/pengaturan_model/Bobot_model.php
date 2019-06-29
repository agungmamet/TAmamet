<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Bobot_model extends CI_Model
{
	public function bobot()
    {
        $data=$this->db->query("SELECT id_bobot, kelerengan, penggunaan_lahan, rawan_longsor, curah_hujan, hidrogeologi, jenis_tanah, rawan_banjir, nama_admin from bobot, administrator where bobot.editby = administrator.id_admin");
        return $data->result();
    }

    public function hitungdata()
    {
		$data= $this->db->query("SELECT count(*) as count FROM bobot");
        return $data->row(); 
    }

     public function tambah_bobot($data)
    {
        $this->db->insert('bobot',$data);
    }

    public function edit_bobot($id)
    {       
        $data = $this->db->query("SELECT * FROM bobot where id_bobot = $id");
        return $data->result();
    }
    
    public function update_bobot($where,$data,$table)
    {       
        $this->db->where($where);
        $this->db->update($table,$data);
    }

        public function hapus_bobot($id)
    {
        $this->db->where('id_bobot',$id);
        $this->db->delete('bobot');
    }
}