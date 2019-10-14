<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk_model extends CI_Model
{
    private $_table = "penduduk";

    public $nik;
    public $no_kk;
    public $nama;
    public $tmp_lahir;
    public $tgl_lahir;
    public $jenis_kelamin;
    public $alamat, $rt, $rw, $kelurahan, $kecamatan, $agama, $status_perkawinan, $pekerjaan, $kwarganegaraan, $kabupaten, $provinsi;

    public function rules()
    {
        return [
            ['field' => 'nik',
            'label' => 'Nik',
            'rules' => 'numeric'],

            ['field' => 'no_kk',
            'label' => 'No KK',
            'rules' => 'numeric'],

            ['field' => 'nama',
            'label' => 'Nama Penduduk',
            'rules' => 'required'],

            ['field' => 'tmp_lahir',
            'label' => 'Tempat Lahir',
            'rules' => 'required'],

            ['field' => 'tgl_lahir',
            'label' => 'Tanggal Lahir',
            'rules' => 'required'],

            ['field' => 'jenis_kelamin',
            'label' => 'Jenis Kelamin',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Nama Penduduk',
            'rules' => 'required'],

            ['field' => 'rt',
            'label' => 'rt',
            'rules' => 'required'],

            ['field' => 'rw',
            'label' => 'rw',
            'rules' => 'required'],

            ['field' => 'kelurahan',
            'label' => 'Kelurahan',
            'rules' => 'required'],

            ['field' => 'kecamatan',
            'label' => 'Kecamatan',
            'rules' => 'required'],

            ['field' => 'agama',
            'label' => 'Agama',
            'rules' => 'required'],

            ['field' => 'status_perkawinan',
            'label' => 'Status Perkawinan',
            'rules' => 'required'],
            
            ['field' => 'kwarganegaraan',
            'label' => 'kwarganegaraan',
            'rules' => 'required'],

            ['field' => 'kabupaten',
            'label' => 'Nama Kabupaten',
            'rules' => 'required'],

            ['field' => 'provinsi',
            'label' => 'Nama Provinsi',
            'rules' => 'required'],


            ['field' => 'pekerjaan',
            'label' => 'Pekerjaan',
            'rules' => 'required']
        ];
    }

    public function getData()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->db->insert($this->_table, $post);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->description = $post["description"];
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("nik" => $id));
    }
}