<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->model('Karyawan_model');
    }
	public function index()
	{
		$data['judul'] = 'Data Karyawan';
		$data['karyawan'] = $this->Karyawan_model->getAllKaryawan();
        if($this->input->post('cari')){
            $data['karyawan']=$this->Karyawan_model->cariData();
        }
		$this->load->view('templates/header',$data);
		$this->load->view('Karyawan/index',$data);
		$this->load->view('templates/footer');
	}
	public function tambah()
	{
        $data['judul'] = 'Tambah Data';
        $data['jabatan'] = ['Backend','FrondEnd','UI/UX','Sistem Analis','DevOps','Fullstack'];
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('lulusan', 'Lulusan', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('hp', 'No Hp', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header',$data);
            $this->load->view('Karyawan/karyawan_tambah');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->Karyawan_model->tambahDataKaryawan();
			$this->session->set_flashdata('flash','Ditambahkan');
            redirect('karyawan');
        }
       
	}
	public function hapus($id)
	{
		$this->Karyawan_model->hapusData($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('karyawan');
	}
    public function detail($id){
        $data['karyawan'] = $this->Karyawan_model->getKaryawanById($id);
        $data['judul'] ='Detail Data Karyawan';
        $this->load->view('templates/header',$data);
        $this->load->view('Karyawan/Karyawan_detail',$data);
        $this->load->view('templates/footer');
    }
    public function ubah($id)
        {
            $data['judul'] = 'Ubah Data';
            $data['karyawan'] = $this->Karyawan_model->getKaryawanById($id);
            $data['jabatan'] = ['Backend','FrondEnd','UI/UX','Sistem Analis','DevOps','Fullstack'];
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('tempat', 'Tempat', 'required');
            $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
            $this->form_validation->set_rules('lulusan', 'Lulusan', 'required');
            $this->form_validation->set_rules('agama', 'Agama', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('hp', 'No Hp', 'required|numeric');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/header',$data);
                $this->load->view('Karyawan/karyawan_edit',$data);
                $this->load->view('templates/footer');
            }
            else
            {
                $this->Karyawan_model->ubahdata($id);
                $this->session->set_flashdata('flash','DiUbah');
                redirect('karyawan');
            }
        }
}
