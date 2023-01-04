<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public function index()
	{

		//echo "Merhaba";
		$this->load->view('welcome_message');
	}


	public function merhaba()
	{
		$this->load->view("abc.php");
	}
	public function islemler()
	{
		echo "Merhaba 2. Öğretim - İşlemler";
	}
}
