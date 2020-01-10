<?php
class Admin_model extends CI_Model
{

    public function barang_rules()
    {
        return [
            [
                'field' => 'kode',
                'label' => 'Kode Barang',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
            [
                'field' => 'jenisbrg',
                'label' => 'Jenis Barang',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
            [
                'field' => 'merek',
                'label' => 'Merek',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
            [
                'field' => 'model',
                'label' => 'Model',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
            [
                'field' => 'warna',
                'label' => 'Warna',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
            [
                'field' => 'serial',
                'label' => 'Serial Number',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
            [
                'field' => 'deskripsi',
                'label' => 'Deskripsi',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
            [
                'field' => 'status',
                'label' => 'Status',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
            [
                'field' => 'lokasi',
                'label' => 'Lokasi',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ]
        ];
    }
    public function tambah()
    {
        $post = $this->input->post();
        $gambar = $this->_uploadImage();
        $db = $this->db;
        $db->set('kode', $post['kode']);
        $db->set('jenisbrg', $post['jenisbrg']);
        $db->set('merek', $post['merek']);
        $db->set('model', $post['model']);
        $db->set('warna', $post['warna']);
        $db->set('serial', $post['serial']);
        $db->set('deskripsi', $post['deskripsi']);
        $db->set('status', $post['status']);
        $db->set('lokasi', $post['lokasi']);
        $db->set('gambar', $gambar);
        $db->insert('barang');
        redirect('admin');
    }
    public function edit()
    {
        $post = $this->input->post();
        $gambar_lama = $post['gambarLama'];
        if ($_FILES["gambar"]["name"]) {
            $gambar = $this->_uploadImage();
            if ($gambar_lama != $gambar || $gambar_lama != "noimage.png") {
                unlink("assets/img/barang/$gambar_lama");
            }
        } else {
            $gambar = $gambar_lama;
        }
        $db = $this->db;
        $db->set('kode', $post['kode']);
        $db->set('jenisbrg', $post['jenisbrg']);
        $db->set('merek', $post['merek']);
        $db->set('model', $post['model']);
        $db->set('warna', $post['warna']);
        $db->set('serial', $post['serial']);
        $db->set('deskripsi', $post['deskripsi']);
        $db->set('status', $post['status']);
        $db->set('lokasi', $post['lokasi']);
        $db->set('gambar', $gambar);
        $db->where('id', $post['id']);
        $db->update('barang');
        redirect('admin');
    }

    public function hapus()
    {
        $id = $this->input->post('id');
        $barang = $this->db->query("SELECT gambar FROM barang WHERE id = $id")->row();
        if ($barang->gambar != 'noimage.png') {
            unlink("assets/img/barang/$barang->gambar");
        }
        $this->db->where('id', $id);
        $this->db->delete('barang');
        redirect('admin');
    }

    private function _uploadImage()
    {
        $config['upload_path']          = 'assets/img/barang/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        return "noimage.png";
    }
}
