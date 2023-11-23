<?php 

class User extends CI_Controller
{
        public function index ()
        {
            $data['user'] = $this->user_model->tampil_data('user')->result();
            $this->load->view('templates_administrator/header');
            $this->load->view('administrator/daftar_user',$data);
            $this->load->view('templates_administrator/footer');
        }
}