<?php 

/**
 * 
 */
class Overview extends CI_Controller
{
	
	public function Index()
	{
		$this->load->view('admin/dashboard');
	}

	public function Daftar()
	{
		$this->load->view('admin/penduduk/data');
	}
}

 ?>