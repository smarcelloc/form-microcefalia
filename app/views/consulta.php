<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!doctype html>
<html lang="pt-br">
<head>
    <title>Microcefalia - Consulta</title>
    <?php $this->load->view('components/head'); ?>
</head>
<body class="pt-56">
    <?php $this->load->view('components/navbar', ['menu' => 2]); ?>
    <?php $this->load->view('components/alert') ?>
    
    <div class="container py-5">
        <div class="row mb-3">
            <div class="col-12 col-md-6 form-group">
                <!--[if lt IE 9]> <label for="estado">Selecione um estado:</label><![endif]-->
                <select id="estado" class="form-control">
                    <option selected disabled>Selecione um estado</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espirito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
            <div class="col-12 col-md-6 form-group">
                <!--[if lt IE 9]> <label for="pesquisar">Pesquisar dados do cuidador:</label><![endif]-->
                <input type="text" id="pesquisar" class="form-control" placeholder="Pesquisar dados do cuidador" aria-label="Pesquisar dados do cuidador">
            </div>
        </div>
        <div class="table-responsive mb-3">
            <table class="table table-sm" id="table-cuidador">
                <thead>
                    <tr>
                        <th scope="row">#</th>
                        <th scope="col">Ação</th>
                        <th scope="col">Cuidador</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Telefones</th>
                        <th scope="col">Endereço</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
   
    <?php $this->load->view('components/script'); ?>
</body>
</html>