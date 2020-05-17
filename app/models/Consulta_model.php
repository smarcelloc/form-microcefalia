<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consulta_model extends CI_Model{
    
    public function getCuidador($estado) {
        return $this->db->select('C.nome, C.cpf, C.tel, C.cel, C.Endereco_logradouro, C.Endereco_cep')->from('Cuidador as C')->join('Endereco as E', 'C.Endereco_logradouro = E.logradouro and C.Endereco_cep = E.cep')->where('E.Cidade_estado', $estado)->get()->result();
    }
    
    public function getCuidadorCpf($cpf) {
        return $this->db->select('nome')->get_where('Cuidador',['cpf' => $cpf], 1)->row();
    }
    
    public function getPortador($cpf) {
        return $this->db->select('*')->order_by('idportador', 'desc')->get_where('Portador', ['Cuidador_cpf' => $cpf], 50)->result();
    }
    
    public function reg_portador($dados) {
        return $this->db->insert('Portador', $dados);
    }

    public function existe_cpf($cpf) {
        return $this->db->get_where('Cuidador',['cpf' => $cpf], 1)->num_rows() != 0;
    }
}
