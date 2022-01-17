<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Data_model');
    }
    public function index()
    {
        $data['tabelproduk'] = $this->Data_model->tampildata();
        $data['judul'] = 'Home';
        $this->load->view("templates/header", $data);
        $this->load->view("templates/topbar", $data);
        $this->load->view("home/index", $data);
        $this->load->view("templates/footer");
    }
    public function tambah()
    {
        $data['judul'] = 'Tambah Produk';
        $this->form_validation->set_rules(
            'id_produk',
            'ID_Produk',
            'required|trim|is_unique[tb_produk.id_produk]',
            [
                'required' => 'ID Produk harus di isi!',
                'is_unqiue' => 'ID Produk telah terdaftar!'
            ]
        );
        $this->form_validation->set_rules(
            'nama_produk',
            'Nama_Produk',
            'required|trim',
            [
                'required' => 'Nama Produk harus di isi!'
            ]
        );
        $this->form_validation->set_rules(
            'harga',
            'Harga',
            'required|trim',
            [
                'required' => 'Harga harus di isi!'
            ]
        );
        $this->form_validation->set_rules(
            'kategori',
            'Kategori',
            'required|trim',
            [
                'required' => 'Kategori harus di isi!'
            ]
        );
        $this->form_validation->set_rules(
            'status',
            'Status',
            'required|trim',
            [
                'required' => 'Status harus di isi!'
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view("templates/topbar", $data);
            $this->load->view('home/tambah_produk', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Data_model->tambahproduk();
            redirect('home');
        }
    }
    public function edit($id_produk)
    {
        $data['judul'] = 'Edit Produk';
        $data['produk'] = $this->Data_model->tampildatabyid($id_produk);
        $this->form_validation->set_rules(
            'id_produk',
            'ID_Produk',
            'required|trim',
            [
                'required' => 'ID Produk harus di isi!'
            ]
        );
        $this->form_validation->set_rules(
            'nama_produk',
            'Nama_Produk',
            'required|trim',
            [
                'required' => 'Nama Produk harus di isi!'
            ]
        );
        $this->form_validation->set_rules(
            'harga',
            'Harga',
            'required|trim',
            [
                'required' => 'Harga harus di isi!'
            ]
        );
        $this->form_validation->set_rules(
            'kategori',
            'Kategori',
            'required|trim',
            [
                'required' => 'Kategori harus di isi!'
            ]
        );
        $this->form_validation->set_rules(
            'status',
            'Status',
            'required|trim',
            [
                'required' => 'Status harus di isi!'
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view("templates/topbar", $data);
            $this->load->view('home/edit_produk', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Data_model->editproduk();
            redirect('home');
        }
    }
    public function hapus($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('tb_produk');
        redirect('home');
    }
}
