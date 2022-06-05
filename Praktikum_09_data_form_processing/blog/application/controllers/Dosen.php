<?php
    class Dosen extends CI_Controller{
        public function index(){
            // $this->load->model('dosen_model','dsn1');

            // $this->dsn1->id=1;
            // $this->dsn1->nidn='0123';
            // $this->dsn1->pendidikan='S2';

            // $this->load->model('dosen_model','dsn2');

            // $this->dsn2->id=2;
            // $this->dsn2->nidn='0124';
            // $this->dsn2->pendidikan='S2';

            // $this->load->model('dosen_model','dsn3');

            // $this->dsn3->id=3;
            // $this->dsn3->nidn='0125';
            // $this->dsn3->pendidikan='S3';

            // $list_dsn= [$this->dsn1, $this->dsn2, $this->dsn3];
            // $data['list_dsn'] = $list_dsn;
            $this->load->model('dosen_model');
            $dosen = $this->dosen_model->getAll();
            $data['dosen'] = $dosen;

            $this->load->view('layouts/header');
            $this->load->view('dosen/index', $data);
            $this->load->view('layouts/footer');
        }

        public function detail($id){
            $this->load->model('dosen_model');
            $dosen1 = $this->dosen_model->getById($id);
            $data['dosen1'] = $dosen1;

            $this->load->view('layouts/header');
            $this->load->view('dosen/detail', $data);
            $this->load->view('layouts/footer');
        }

        public function form(){
            $this->load->view('layouts/header');
            $this->load->view('dosen/form');
            $this->load->view('layouts/footer');
        }

        public function save(){
            $this->load->model('dosen_model','dosen');

            $_nama = $this->input->post('nama');
            $_gender = $this->input->post('gender');
            $_tmp_lahir = $this->input->post('tmp_lahir');
            $_tgl_lahir = $this->input->post('tgl_lahir');
            $_nidn = $this->input->post('nidn');
            $_pendidikan = $this->input->post('pendidikan');

            $data_dosen ['nama'] = $_nama;
            $data_dosen ['gender'] = $_gender;
            $data_dosen ['tmp_lahir'] = $_tmp_lahir;
            $data_dosen ['tgl_lahir'] = $_tgl_lahir;
            $data_dosen ['nidn'] = $_nidn;
            $data_dosen ['pendidikan'] = $_pendidikan;

            if ((!empty($_idedit))) {
                $data_dosen ['id'] = $_idedit;
                $this->dosen->update($data_dosen);
            }else{
                $this->dosen->simpan($data_dosen);
            }
            redirect ('dosen', 'refresh');
        }

        public function edit($id){
            $this->load->model('dosen_model', 'dosen');

            $obj_dosen = $this->dosen->getById($id);
            $data['obj_dosen'] = $obj_dosen;
            $this->load->view('layouts/header');
            $this->load->view('dosen/edit', $data);
            $this->load->view('layouts/footer');
        }

        public function delete($id){
            $this->load->model('dosen_model', 'dosen');

            $data_dosen ['id'] = $id;
            $this->dosen->delete($data_dosen);
            redirect('dosen', 'refresh');
        }
    }
?>  