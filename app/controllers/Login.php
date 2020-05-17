<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->database(['db_debug' => TRUE]);
        
        if($this->session->userdata('logado'))
            redirect (base_url ('cadastro'));
    }
    
	public function index() {
        $info_page = [
            'csrf_name' => $this->security->get_csrf_token_name(),
            'csrf_hash' => $this->security->get_csrf_hash() 
        ];
		$this->load->view('login', $info_page);
	}
    
    public function autenticar() {
        if(strtolower($this->input->post('usuario')) === USUARIO && password_verify($this->input->post('senha'), SENHA))
            $this->session->set_userdata('logado', TRUE);
        else 
            $this->session->set_flashdata('erro', 'O usuário ou a senha informada estão incorretos.');
        
        redirect(base_url());
    }
}
