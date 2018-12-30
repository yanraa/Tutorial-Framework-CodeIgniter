<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Anggota_Model');
	}

	public function index()
	{
		$data =
		[
			'title' => 'Anggota',
			'sub_title' => 'Daftar Anggota',
			'content' => 'anggota/index',
			'show' => $this->Anggota_Model->index()->result()
		];
		$this->load->view('template/my_template', $data);
	}

	public function add()
	{
		$data =
		[
			'title' => 'Anggota',
			'sub_title' => 'Tambah Anggota',
			'content' => 'anggota/add'
		];
		$this->load->view('template/my_template', $data);	
	}

	public function create()
	{

		$data = array(
			'nama_anggota' => $this->input->post('nama_anggota'),
			'gender' => $this->input->post('gender'),
			'no_tlp' => $this->input->post('no_tlp'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
		);


		$create = $this->Anggota_Model->create($data);

		if($create){
			$this->session->set_flashdata('pesan_create', true);
			redirect('anggota');
		}else{
			$this->session->set_flashdata('pesan_create', false);
			redirect('anggota');
		}

	}
}