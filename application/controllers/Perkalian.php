<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perkalian extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		
// if(isset($_POST['hitung'])){
// 	$bil1 = $_POST['bil1'];
// 	$bil2 = $_POST['bil2'];
// 	$operasi = $_POST['operasi'];
// 	switch ($operasi) {
// 		case 'kali':
// 			$hasil = $bil1*$bil2;
// 		break;			
// 	}
// }
		// $data['hasil'] = $hasil;
		$this->load->view('perkalian');
	}
	
	public function kali(){
		$bil1 = $this->input->post('bil1');
		$bil2 = $this->input->post('bil2');
		$hasil = $bil1 * $bil2;
		$data['hasil'] = $hasil;
		$this->load->view('perkalian', $data);


	}
}
