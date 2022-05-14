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
    }
?>