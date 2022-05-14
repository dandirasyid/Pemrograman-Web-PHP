<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Dosen extends CI_Controller{
        public function index(){
          $this->load->model('dosen_model', 'dsn1');
          $this->dsn1->id='1';
          $this->dsn1->nidn='010001'; 
          $this->dsn1->nama='Dandi Rasyid';
          $this->dsn1->gender='L';
          $this->dsn1->pendidikan="S1 STT Terpadu Nurul Fikri";
          
          $this->load->model('dosen_model', 'dsn2');
          $this->dsn2->id='2';
          $this->dsn2->nidn='020001'; 
          $this->dsn2->nama='Rajendra';
          $this->dsn2->gender='L';
          $this->dsn2->pendidikan="S1 Institut Teknologi Bandung";

          $list_dsn = [$this->dsn1, $this->dsn2];
          $data['list_dsn'] = $list_dsn;

          $this->load->view('header');
          $this->load->view('dosen/index', $data);
          $this->load->view('footer');
        }
        
        public function create(){
          $data ['judul'] = 'Form Kelola Dosen';
          $this->load->view('layout/header');
          $this->load->view('layout/sidebar');
          $this->load->view('dosen/create', $data);
          $this->load->view('layout/footer');
        }
        
        public function save(){
          $this->load->model('dosen_model','dsn1');

          $this->dsn1->nidn= $this->input->post('nidn');
          $this->dsn1->nama= $this->input->post('nama');
          $this->dsn1->gender= $this->input->post('jk');
          $this->dsn1->pendidikan= $this->input->post('pendidikan');
          $this->dsn1->prodi= $this->input->post('prodi');

          $data ['dsn1'] = $this->dsn1;
          $this->load->view('layout/header');
          $this->load->view('layout/sidebar');
          $this->load->view('dosen/view', $data);
          $this->load->view('layout/footer');
        }
    }
?>