<?php
    class Matakuliah extends CI_Controller{
        public function index(){
            // $this->load->model('matakuliah_model','mk1');
            // $this->mk1->id=1;
            // $this->mk1->nama='Pemrograman Web 2';
            // $this->mk1->sks=3;
            // $this->mk1->kode='PW2';

            // $this->load->model('matakuliah_model','mk2');
            // $this->mk2->id=2;
            // $this->mk2->nama='Basis Data';
            // $this->mk2->sks=4;
            // $this->mk2->kode='BD';

            // $this->load->model('matakuliah_model','mk3');
            // $this->mk3->id=3;
            // $this->mk3->nama='Jaringan Komputer';
            // $this->mk3->sks=3;
            // $this->mk3->kode='JK';

            // $list_mk =[$this->mk1, $this->mk2, $this->mk3];
            // $data['list_mk'] = $list_mk;

            $this->load->model('matakuliah_model');
            $matakuliah = $this->matakuliah_model->getAll();
            $data ['matakuliah'] = $matakuliah;

            $this->load->view('layouts/header');
            $this->load->view('matakuliah/index', $data);
            $this->load->view('layouts/footer');

        }

        public function form(){
            $this->load->view('layouts/header');
            $this->load->view('matakuliah/form');
            $this->load->view('layouts/footer');
        }

        public function save(){
            $this->load->model('matakuliah_model', 'matakuliah');

            $_nama = $this->input->post('nama');
            $_sks = $this->input->post('sks');
            $_kode = $this->input->post('kode');

            $data_matakuliah ['nama'] = $_nama;
            $data_matakuliah ['sks'] = $_sks;
            $data_matakuliah ['kode'] = $_kode;

            if((!empty($_idedit))){
                $data_matakuliah ['id'] = $_idedit;
                $this->matakuliah->update($data_matakuliah);
            }else{
                $this->matakuliah->simpan($data_matakuliah);
            }
            redirect('matakuliah', 'refresh');
        }
        
        public function edit($id){
            $this->load->model('matakuliah_model', 'matakuliah');
            $obj_matakuliah = $this->matakuliah->getById($id);
            $data ['obj_matakuliah'] = $obj_matakuliah;

            $this->load->view('layouts/header');
            $this->load->view('matakuliah/edit', $data);
            $this->load->view('layouts/footer');
        }

        public function delete($id){
            $this->load->model('matakuliah_model', 'matakuliah');

            $data_matakuliah['id'] = $id;
            $this->matakuliah->delete($data_matakuliah);
            redirect('matakuliah', 'refresh');
        }
    }
?>