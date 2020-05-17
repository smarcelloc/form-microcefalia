<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!doctype html>
<html lang="pt-br">
<head>
    <title>Microcefalia - Adicionar Portador</title>
    <?php $this->load->view('components/head'); ?>
</head>
<body class="pt-56">
    <nav class="navbar navbar-dark bg-dark fixed-top shadow-sm" id="navbar-menu">
     <h1 class="navbar-brand mb-0">Microcefalia</h1>
     <button class="btn btn-danger text-white" id="btn-fechar">Sair</button>
    </nav>
    <?php $this->load->view('components/alert'); ?>
    
    <div class="container py-5">
        
        <div class="table-responsive mb-3">
            <table class="table table-bordered">
                <tr>
                    <th scope="row">CPF</th>
                    <td scope="col"><?php echo $cpf ?></td>
                </tr>
                <tr>
                    <th scope="row">Cuidador</th>
                    <td scope="col"><?php echo $nome ?></td>
                </tr>
                <tr>
                    <th scope="row">Portadores</th>
                    <td scope="col">
                        <ol type="number" class="pl-3">
                           <?php echo $portador?> 
                        </ol> 
                    </td>
                </tr>
            </table>
        </div>
        
        <form action="<?php echo base_url('consulta/registrar_portador') ?>" method="POST" id="form-portador">
            <h2 class="border-bottom mb-3 h4">Adicionar Portador</h2>
            <?php $this->load->view('components/portador') ?>
            <input type="hidden" name="cpf_cuidador" value="<?php echo $cpf ?>">
            <input type="hidden" name="<?php echo $csrf_name ?>" value="<?php echo $csrf_hash ?>">
            <button type="submit" class="btn btn-block btn-lg btn-success mb-4">Adicionar Portador</button>
            <button type="submit" class="btn btn-lg btn-success rounded-circle position-fixed btn-flouting d-none">
            <i class="icon-enviar"></i>
            <span class="sr-only">Adicionar Portador</span>
        </button>
        </form>
    </div>
   
    <?php $this->load->view('components/script'); ?>
</body>
</html>