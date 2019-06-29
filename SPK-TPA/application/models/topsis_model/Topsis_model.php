<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topsis_model extends CI_Model {

    public function pembagi()
    {
        $data=$this->db->query("SELECT * from pembagi");
        return $data->result();
    }

    public function ternormalisasi()
    {
        $data=$this->db->query("SELECT nama_daerah, normalisasi.id_daerah, kelerengan, lahan, longsor, hujan, hidrogeologi, tanah, banjir from normalisasi, daerah where normalisasi.id_daerah = daerah.id_daerah");
        return $data->result();
    }

    public function terbobot()
    {
        $data=$this->db->query("SELECT nama_daerah, iddaerah, kelerengan, lahan, longsor, hujan, hidrogeologi, tanah, banjir from terbobot, daerah where terbobot.iddaerah = daerah.id_daerah");
        return $data->result();
	}
	
	public function amax()
    {
        $data=$this->db->query("SELECT * from a_max");
        return $data->result();
	}

	public function amin()
    {
        $data=$this->db->query("SELECT * from a_min");
        return $data->result();
	}

	public function dmax()
    {
        $data=$this->db->query("SELECT nama_daerah, iddaerah, dmax, dmin from d, daerah where d.iddaerah = daerah.id_daerah");
        return $data->result();
	}

	public function dmin()
    {
        $data=$this->db->query("SELECT dmin from d");
        return $data->result();
	}

	public function v()
    {
        $data=$this->db->query("SELECT nama_daerah, v from daerah, v where v.iddaerah = daerah.id_daerah order by v desc");
        return $data->result();
	}

	public function maksimal()
    {
        $data=$this->db->query("SELECT max(v) as max from v");
        return $data->row();
	}
}
