<?php
class Obat extends CI_model{

    public function getAllObat(){
        return $this->db->get('obat')->result();
    }

    public function tambahObat(){
        $data = array(
            'id_obat' => $this->input->post('id_obat'),
            'nama_obat' => $this->input->post('nama_obat'),
            'kategori_obat' => $this->input->post('kategori_obat'),
            'harga_obat' => $this->input->post('harga_obat'),
			'deskripsi' => $this->input->post('deskripsi')
        );
        return $this->db->insert('obat',$data);
    }

    public function hapusObat(){
        $id_obat = $this->input->post('id_obat');
        $this->db->where('id_obat',$id_obat);
        return $this->db->delete('obat');
    }

    public function editObat(){
        $id = $this->input->post('id_obat');
        $data=array(
            'id_obat' => $this->input->post('id_obat'),
            'nama_obat' => $this->input->post('nama_obat'),
            'kategori_obat' => $this->input->post('kategori_obat'),
            'harga_obat' => $this->input->post('harga_obat'),
			'deskripsi' => $this->input->post('deskripsi')
        );
     

        $this->db->where('id_obat',$id);
        return $this->db->update('obat',$data);
    }
    
    public function cariObat(){
        $keyword = $this->input->post('keyword',true);
        return $this->db->get('obat')->result_array();
    }
}
?>
