<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ship_beli extends MY_Controller {

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
	 * map to /index.php/welcome/<method_name>`1
	 * @see https://codeigniter.com/ship_beli_guide/general/urls.html
	 */
	public function index()
	{
		// $data['judul'] = $this->data['judul']; 
  		$data['konten'] = 'ship_beli/ship_beli_view';
  		$this->load->view('template_view',$data);	
	}
}
