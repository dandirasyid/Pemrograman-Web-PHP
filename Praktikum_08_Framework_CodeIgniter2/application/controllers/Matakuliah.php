<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Matakuliah extends CI_Controller{
        public function index(){
            $this->load->model('matakuliah_model', 'mk1');
            $this->mk1->id=1;
            $this->mk1->kode='010001';
            $this->mk1->nama='Statistika dan Probabilitas';
            $this->mk1->sks='2';

            $this->load->model('matakuliah_model', 'mk2');
            $this->mk2->id=2;
            $this->mk2->kode='020001';
            $this->mk2->nama='Pemrograman Web 2';
            $this->mk2->sks='3';

            $list_mk = [$this->mk1, $this->mk2];
            $data['list_mk'] = $list_mk;

            $this->load->view('header');
            $this->load->view('matakuliah/index', $data);
            $this->load->view('footer');
        }

        public function create(){
            $data['judul'] = 'Form Kelola Matakuliah';
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('matakuliah/create', $data);
            $this->load->view('layout/footer');
        }

        public function save(){
            $this->load->model('matakuliah_model', 'mk1');

            $this->mk1->kode = $this->input->post('kode');
            $this->mk1->nama = $this->input->post('nama');
            $this->mk1->sks = $this->input->post('sks');

            $data['mk1'] = $this->mk1;
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('matakuliah/view', $data);
            $this->load->view('layout/footer');
        } 
    }
?>