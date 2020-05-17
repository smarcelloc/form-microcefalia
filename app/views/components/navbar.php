<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Navigation -->
<nav class="navbar navbar-dark navbar-expand bg-dark fixed-top w-100 shadow-sm" id="navbar-menu">
    <h1 class="navbar-brand mb-0">Microcefalia</h1>
    <div class="navbar-nav ml-sm-0 ml-auto">
        <a class="nav-item nav-link <?php if($menu == 1) echo 'active';?>" href="<?php echo base_url('cadastro') ?>">
          <i class="icon-cadastro"></i>
          <span class="sr-sm-only">Cadastro</span> 
          <?php if($menu == 1) echo '<span class="sr-only">(current)</span>';?>
      </a>
        <a class="nav-item nav-link <?php if($menu == 2) echo 'active';?>" href="<?php echo base_url('consulta') ?>">
          <i class="icon-consulta"></i>
          <span class="sr-sm-only">Consulta</span> 
          <?php if($menu == 2) echo '<span class="sr-only">(current)</span>';?>
        </a>
    </div>
</nav>
