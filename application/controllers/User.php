<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('User_Model');
	}

	public function index()
	{
		$this->load->view('User/home');
	}
		
	public function sumbangan(){
		$this->load->view('User/sumbangan');
	}

	public function tambah_sumbangan() {
		echo $this->session->flashdata('notif');
		var_dump($this->session->flashdata('data'));
		$this->load->view('User/sumbangan', $this->session->flashdata('data'));
	}

	public function tambah_sumbangan_act() {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $sifat = $this->input->post('sifat');
        $kelulusan = $this->input->post('kelulusan');
        $sumbangan = $this->input->post('sumbangan');
		$keterangan_sumbangan = $this->input->post('keterangan_sumbangan');

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'sifat' => $sifat,
            'kelulusan' => $kelulusan,
            'sumbangan' => $sumbangan,
			'keterangan_sumbangan' => $keterangan_sumbangan
        );

        $this->User_Model->input_sumbangan('sumbangan', $data);

		// redirect(base_url().'user/sumbangan');
    }

	public function home() {
		$this->load->view('User/home');
	}

}
