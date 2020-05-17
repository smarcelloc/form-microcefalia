<?php defined('BASEPATH') OR exit('No direct script access allowed');
$m_erro = $this->session->flashdata('erro');
$m_sucesso = $this->session->flashdata('sucesso');

if(!empty($m_erro))
    echo'<div class="alert alert-danger alert-dismissible" role="alert">
            <strong>ERRO!</strong> '.$m_erro.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Fechar mensagem">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
else if(!empty ($m_sucesso))
    echo'<div class="alert alert-success alert-dismissible" role="alert">
            <strong>SUCESSO!</strong> '.$m_sucesso.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Fechar mensagem">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';