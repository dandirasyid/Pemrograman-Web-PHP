<?php
    class Mahasiswa extends CI_Controller{
        public function index(){
            // $this->load->model('mahasiswa_model','mhs1');

            // // membuat objek 1 dan nilainya
            // $this->mhs1->id=1;
            // $this->mhs1->nim='0110';
            // $this->mhs1->nama='Dandi Rasyid';
            // $this->mhs1->gender='L';
            // $this->mhs1->ipk=4.00;

            // $this->load->model('mahasiswa_model','mhs2');
            // $this->mhs2->id=1;
            // $this->mhs2->nim='0111';
            // $this->mhs2->nama='Faiz';
            // $this->mhs2->gender='L';
            // $this->mhs2->ipk=3.85;



            // $this->load->model('mahasiswa_model','mhs3');
            // // membuat objek 2 dan nilainya
            // $this->mhs3->id=2;
            // $this->mhs3->nim='0112';
            // $this->mhs3->nama='Nurul';
            // $this->mhs3->gender='P';
            // $this->mhs3->ipk=3.55;

            // $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
            // $data ['list_mhs'] = $list_mhs;
            $this->load->model('mahasiswa_model');
            $mahasiswa = $this->mahasiswa_model->getAll();
            $data ['mahasiswa'] = $mahasiswa;

            $this->load->view('layouts/header');
            $this->load->view('mahasiswa/index', $data);
            $this->load->view('layouts/footer'); 
        }

        public function detail($id){
            $this->load->model('mahasiswa_model');
            $siswa = $this->mahasiswa_model->getById($id);
            $data['siswa'] = $siswa;

            $this->load->view('layouts/header');
            $this->load->view('mahasiswa/detail', $data);
            $this->load->view('layouts/footer');
        }

        public function form(){
            $this->load->view('layouts/header');
            $this->load->view('mahasiswa/form');
            $this->load->view('layouts/footer');
        }

        public function save(){
            $this->load->model('mahasiswa_model', 'mahasiswa');

            $_nim = $this->input->post('nim');
            $_nama = $this->input->post('nama');
            $_gender = $this->input->post('gender');
            $_tmp_lahir = $this->input->post('tmp_lahir');
            $_tgl_lahir = $this->input->post('tgl_lahir');
            $_ipk = $this->input->post('ipk');

            $data_mahasiswa ['nim'] = $_nim;
            $data_mahasiswa ['nama'] = $_nama;
            $data_mahasiswa ['gender'] = $_gender;
            $data_mahasiswa ['tmp_lahir'] = $_tmp_lahir;
            $data_mahasiswa ['tgl_lahir'] = $_tgl_lahir;
            $data_mahasiswa ['ipk'] = $_ipk;

            if ((!empty($_idedit))) {
                $data_mahasiswa ['id'] = $_idedit;
                $this->mahasiswa->update($data_mahasiswa);
            }else{
                $this->mahasiswa->simpan($data_mahasiswa);
            }
            redirect('mahasiswa','refresh'); 
        }

        public function edit($id){
            $this->load->model('mahasiswa_model', 'mahasiswa');

            $obj_mahasiswa = $this->mahasiswa->getById($id);
            $data['obj_mahasiswa'] = $obj_mahasiswa;
            $this->load->view('layouts/header');
            $this->load->view('mahasiswa/edit', $data);
            $this->load->view('layouts/footer');
        }

        public function delete($id){
            $this->load->model('mahasiswa_model', 'mahasiswa');

            $data_mahasiswa ['id'] = $id;
            $this->mahasiswa->delete($data_mahasiswa);
            redirect('mahasiswa', 'refresh');
        }

        public function __construct()
        {
            parent::__construct();
            if (!$this->session->userdata('logged_in')) {
                redirect('/login');
            }
        }
    }
?>