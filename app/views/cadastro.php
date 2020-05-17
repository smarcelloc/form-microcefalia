<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!doctype html>
<html lang="pt-br">
<head>
    <title>Microcefalia - Cadastro</title>
    <?php $this->load->view('components/head'); ?>
</head>
<body class="pt-56">
    <?php $this->load->view('components/navbar', ['menu' => 1]); ?>
    <?php $this->load->view('components/alert'); ?>
    
    <form action="<?php echo base_url('cadastro/registrar') ?>" method="POST" id="form-cadastro" class="container">
        <div class="py-3">
            <h2 class="border-bottom h4 mb-3">Cuidador</h2>
            <?php $this->load->view('components/cuidador'); ?>
        </div>
        <div class="py-3">
            <h2 class="border-bottom h4 mb-3">Portador</h2>
            <?php $this->load->view('components/portador'); ?>
        </div>
        <div class="py-3">
            <h2 class="border-bottom h4 mb-3">Qualidade</h2>
            <?php $this->load->view('components/qualidade'); ?>
        </div>
        <div class="py-3">
            <h2 class="border-bottom h4 mb-3">Socioeconômico</h2>
            <?php $this->load->view('components/socioeconomico'); ?>
        </div>
        <input type="hidden" name="<?php echo $csrf_name ?>" value="<?php echo $csrf_hash ?>">
        <button type="submit" class="btn btn-block btn-lg btn-primary mb-4">Cadastrar Formulário</button>
        <button type="submit" class="btn btn-lg btn-primary rounded-circle position-fixed btn-flouting d-none">
            <i class="icon-enviar"></i>
            <span class="sr-only">Cadastrar Formulário</span>
        </button>
    </form>
   
    <?php $this->load->view('components/script'); ?>
</body>
</html>