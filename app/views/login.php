<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!doctype html>
<html lang="pt-br">
<head>
    <title>Microcefalia - Login</title>
    <?php $this->load->view('components/head'); ?>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
     <h1 class="navbar-brand mb-0">Microcefalia</h1>
    </nav>
    <?php $this->load->view('components/alert'); ?>
    
    <div class="col-12 col-sm-10 col-md-8 col-lg-4 mt-5 mx-auto">
        <form action="<?php echo base_url('index.php/login/autenticar') ?>" method="POST">
            <div class="form-group">
                <!--[if lt IE 9]> <label>Usuário:</label><![endif]-->
                <input type="text" name="usuario" class="form-control form-control-lg" placeholder="Usuário" aria-label="Digite o usuário" autofocus required>
            </div>
             <div class="form-group">
                <!--[if lt IE 9]> <label>Senha:</label><![endif]-->
                <input type="password" name="senha" class="form-control form-control-lg" placeholder="Senha" aria-label="Agora, digite a senha" required>
            </div>
            
            <input type="hidden" name="<?php echo $csrf_name ?>" value="<?php echo $csrf_hash ?>">
            
            <button type="submit" class="btn btn-block btn-lg btn-primary">Entrar no Sistema</button>
            
        </form>
    </div>
    
    <?php $this->load->view('components/script'); ?>
</body>
</html>