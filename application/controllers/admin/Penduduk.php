<?php 

/**
 * 
 */
class Penduduk extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model("penduduk_model");
        $this->load->library('form_validation');
    }
	
	public function Daftar()
	{
		$data["penduduk"] = $this->penduduk_model->getData();
		$this->load->view('admin/penduduk/data',$data);
	}

	public function Tambah()
	{
		$penduduk = $this->penduduk_model;
        $validation = $this->form_validation;
        $validation->set_rules($penduduk->rules());

        if ($validation->run()) {
            $penduduk->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
		$this->load->view('admin/penduduk/tambah');
	}

	 public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->penduduk_model->delete($id)) {

        	$this->session->set_flashdata('success', 'Data yang telah dihapus tidak bisa dikembalikan.');
            redirect(site_url('admin/penduduk/daftar'));
        }
    }
}

 ?>