<?php
class Data_model extends CI_Model
{
    public function dataproduk()
    {
        $url = "https://gist.githubusercontent.com/FastPrintProg3/dec91c65f573d09a6e7836c65ae54e73/raw";
        $get_url = file_get_contents($url);
        $array = json_decode($get_url, true);
        foreach ($array as $a) {
            $this->db->insert('tb_produk', array(
                'id_produk' => $a['id_produk'],
                'nama_produk' => $a['nama_produk'],
                'harga' => $a['harga'],
                'kategori' => $a['kategori'],
                'status' => $a['status']
            ));
        }
    }
    public function tampildata()
    {
        return $this->db->get('tb_produk')->result_array();
    }
    public function tampildatabyid($id_produk)
    {
        return $this->db->get_where('tb_produk', ['id_produk' => $id_produk])->row_array();
    }
    public function tambahproduk()
    {
        $data = [
            'id_produk' => htmlspecialchars($this->input->post('id_produk', true)),
            'nama_produk' => htmlspecialchars($this->input->post('nama_produk', true)),
            'harga' => htmlspecialchars($this->input->post('harga', true)),
            'kategori' => htmlspecialchars($this->input->post('kategori', true)),
            'status' => htmlspecialchars($this->input->post('status', true))
        ];
        $this->db->insert('tb_produk', $data);
    }
    public function editproduk()
    {
        $data = [
            'nama_produk' => htmlspecialchars($this->input->post('nama_produk', true)),
            'harga' => htmlspecialchars($this->input->post('harga', true)),
            'kategori' => htmlspecialchars($this->input->post('kategori', true)),
            'status' => htmlspecialchars($this->input->post('status', true))
        ];
        $this->db->where('id_produk', $this->input->post('id_produk'));
        $this->db->update('tb_produk', $data);
    }
}
