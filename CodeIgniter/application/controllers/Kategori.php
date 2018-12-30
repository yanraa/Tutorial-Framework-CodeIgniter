<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Kategori_Model');
	}

	public function index()
	{
		$data =
		[
			'title' => 'Kategori',
			'sub_title' => 'Daftar Kategori',
			'content' => 'kategori/index',
			'show' => $this->Kategori_Model->index()->result()
		];
		$this->load->view('template/my_template', $data);
	}

	public function add()
	{
		$data =
		[
			'title' => 'Kategori',
			'sub_title' => 'Tambah Kategori',
			'content' => 'kategori/add'
		];
		$this->load->view('template/my_template', $data);	
	}
	public function create()
	{

		$data = array(
			'nama_kategori' => $this->input->post('nama_kategori')
		);


		$create = $this->Kategori_Model->create($data);

		if($create){
			$this->session->set_flashdata('pesan_create', true);
			redirect('kategori');
		}else{
			$this->session->set_flashdata('pesan_create', false);
			redirect('kategori');
		}

	}
}