<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengurangan extends CI_Controller {

	public function index()
	{
		$this->load->view('pengurangan');
	}
	public function kurang()
	{
		$angka1 = $this->input->post('angka1');
		$angka2 = $this->input->post('angka2');
		$hasil = $angka1 + $angka2;
		$data['hasil'] = $hasil;
		$this->load->view('pengurangan', $data);

	}

}

/* End of file Kalkulator.php */
/* Location: ./application/controllers/Kalkulator.php */