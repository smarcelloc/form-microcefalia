<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_model extends CI_Model{
    
    public function existe_cpf($cpf) {
        return $this->db->get_where('Cuidador',['cpf' => $cpf], 1)->num_rows() != 0;
    }
    
    public function registro($tabela,$dados, $where) {
        if(!$this->db->get_where($tabela, $where, 1)->num_rows())
            return $this->db->insert($tabela, $dados);
        return true;
    }

    public function registro_direto($tabela,$dados) {
        return $this->db->insert($tabela, $dados);
    }
    
    public function get_nacio($nacio) {
        if($this->db->get_where('Nacio',['idnacio' => $nacio], 1)->num_rows())
            return $nacio;
        return 1;
    }
}
