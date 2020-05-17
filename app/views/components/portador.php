<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="form-row">
    <div class="col-lg-8 col-md-12 mb-3">
        <div class="card card-body h-100">
            <div class="form-group">
                <label for="crianca">1 - Nome da criança</label>
                <input class="form-control" name="crianca" id="crianca" type="text" maxlength="100"> </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="pelec">2 - Cor de pele</label>
                    <select class="form-control" id="pelec" name="pelec">
                        <option value="BR">Branco</option>
                        <option value="PA" selected="selected">Pardo</option>
                        <option value="PR">Preto</option>
                        <option value="AM">Amarelo (Oriental)</option>
                        <option value="VE">Vermelho (Indígena)</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="dtnasc_crianca">3 - Data de Nascimento</label>
                    <input class="form-control mask-date" name="dtnasc_crianca" id="dtnasc_crianca" type="text"  placeholder="dd/mm/aaaa"> </div>
            </div>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-lg-8 col-md-12 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>4 - Recebeu orientação sobre cuidados com a boca do bebê ao nascimento?</label>
            <label class="custom-control">
                <input name="cuidaBoca" value="S" checked="checked" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="cuidaBoca" value="N" type="radio"> Não </label>
            <div class="form-group">
                <label for="q_cuidaBoca">Se sim, quais ?</label>
                <input name="q_cuidaBoca" id="q_cuidaBoca" class="form-control" type="text" maxlength="45"> </div>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>5 - Fez pré-natal médico?</label>
            <label class="custom-control">
                <input name="prenatal" value="S" checked="checked" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="prenatal" value="N" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>6 - Recebeu instruções sobre amamentação na maternidade?</label>
            <label class="custom-control">
                <input name="amaMaterna" value="S" checked="checked" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="amaMaterna" value="N" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>7 - O pediatra orientou que procurasse um dentista antes dos 3 anos?</label>
            <label class="custom-control">
                <input name="instruDente" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="instruDente" value="N" checked="checked" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>8 - Alguma doença da mãe durante a gestação?</label>
            <label class="custom-control">
                <input name="doenca" value="S" checked="checked" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="doenca" value="N" type="radio"> Não </label>
            <div class="form-group">
                <label for="q_doenca">Se sim, quais ?</label>
                <input name="q_doenca" id="q_doenca" class="form-control" type="text" maxlength="45"> </div>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>9 - Parto:</label>
            <label class="custom-control">
                <input name="parto" value="NO" checked="checked" type="radio"> Normal</label>
            <label class="custom-control">
                <input name="parto" value="CE" type="radio"> Cesário</label>
            <label class="custom-control">
                <input name="parto" value="FO" type="radio"> Fórceps</label>
            <label class="custom-control">
                <input name="parto" value="PR" type="radio"> Prematuro</label>
            <label class="custom-control">
                <input name="parto" value="BP" type="radio"> Baixo peso</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-lg-8 col-md-12 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>10 - A criança sente dores de cabeça com frequência?</label>
            <label class="custom-control">
                <input name="dorcabeca" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="dorcabeca" value="N" checked="checked" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>11 - Sente dores de ouvido?</label>
            <label class="custom-control">
                <input name="dorouvido" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="dorouvido" value="N" checked="checked" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>12 - Tem infecções de garganta recorrentes?</label>
            <label class="custom-control">
                <input name="infecgarg" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="infecgarg" value="N" checked="checked" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label for="infecgargSim">13 - Caso respondeu SIM à pergunta anterior , qual profissional procurou para sanar o problema:</label>
            <select class="form-control" name="infecgargSim" id="infecgargSim" disabled>
                <option value="MPP">Médico plantonista do pronto-socorro hospitalar</option>
                <option value="MPA">Médico pediatra que acompanha a criança</option>
                <option value="D24">Dentista de clínica de emergência 24 horas</option>
                <option value="DPA">Dentista particular</option>
                <option value="NNC">Não necessitou cuidados profissionais </option>
            </select>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-lg-8 col-md-12 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>14 - Sofreu acidentes ou quedas e bateu o rosto?</label>
            <label class="custom-control">
                <input name="bateurosto" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="bateurosto" value="N" checked="checked" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label for="bateurostoSim">15 - Caso respondeu SIM à pergunta anterior, assinale o que ocorreu na boca da criança após o acidente:</label>
            <select class="form-control" name="bateurostoSim" id="bateurostoSim" disabled>
                <option value="CS">Cortes superficiais</option>
                <option value="CP">Cortes que precisaram de pontos cirúrgicos</option>
                <option value="HE">Hematoma</option>
                <option value="AM">Avulsão (perda) de um ou mais dentes</option>
                <option value="DM">Um ou mais dentes ficaram moles</option>
                <option value="FO">Fratura de ossos</option>
                <option value="DE">Um ou mais dentes intruíram (entraram na gengiva)</option>
            </select>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-lg-8 col-md-12 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>16 - Problemas respiratórios :</label>
            <label class="custom-control">
                <input name="probrespira" value="NO" type="radio" checked> Não Tem </label>
            <label class="custom-control">
                <input name="probrespira" value="RI" type="radio" checked> Rinite </label>
            <label class="custom-control">
                <input name="probrespira" value="BR" type="radio" checked> Bronquite </label>
            <label class="custom-control">
                <input name="probrespira" value="AS" type="radio" checked> Asma </label>
            <label class="custom-control">
                <input name="probrespira" value="SI" type="radio" checked> Sinusite </label>
            <label class="custom-control">
                <input name="probrespira" value="BO" type="radio" checked> Bronquiolite </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-lg-8 col-md-12 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>17 - Problemas Neurológicos relacionados ou não à microcefalia?</label>
            <label class="custom-control">
                <input name="probNeuro" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="probNeuro" value="N" checked="checked" type="radio"> Não </label>
            <div class="form-group">
                <label for="q_probNeuro">Se sim, quais ?</label>
                <input name="q_probNeuro" id="q_probNeuro" class="form-control" type="text" disabled maxlength="45"> </div>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>18 - Toma medicamento de uso contínuo?</label>
            <label class="custom-control">
                <input name="remedio" value="S" checked="checked" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="remedio" value="N" type="radio"> Não </label>
            <div class="form-group mt-lg-auto">
                <label for="q_remedio">Se sim, quais ?</label>
                <input name="q_remedio" id="q_remedio" class="form-control" type="text" maxlength="45"> </div>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>19 - Amamentação seio materno?</label>
            <label class="custom-control">
                <input name="amamentacao" value="S" checked="checked" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="amamentacao" value="N" type="radio"> Não </label>
            <div class="form-group mt-lg-auto">
                <label for="q_amamentacao">Se sim, até que idade?</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label for="s_amamentacao">
                            <select id="s_amamentacao" name="s_amamentacao" class="form-control radius-select">
                                <option value="A" selected="selected">Anos</option>
                                <option value="M">Meses</option>
                            </select>
                        </label>
                    </div>
                    <input name="q_amamentacao" id="q_amamentacao" class="form-control mask-num-short" type="text" aria-label="Digite a idade da amamentação"> </div>
            </div>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>20 - Já foi ao dentista?</label>
            <label class="custom-control">
                <input name="dentista" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="dentista" value="N" checked="checked" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>21 - Se sim a questão anterior, precisou realizar tratamentos?</label>
            <label class="custom-control">
                <input name="tratamento[]" value="RE" type="checkbox" disabled> Restaurações</label>
            <label class="custom-control">
                <input name="tratamento[]" value="PR" type="checkbox" disabled> Profilaxia</label>
            <label class="custom-control">
                <input name="tratamento[]" value="TE" type="checkbox" disabled> Tratamento endodôntico (canal) </label>
            <label class="custom-control">
                <input name="tratamento[]" value="RA" type="checkbox" disabled> Raio x</label>
            <label class="custom-control">
                <input name="tratamento[]" value="AP" type="checkbox" disabled> Aplicação de flúor</label>
            <label class="custom-control">
                <input name="tratamento[]" value="EX" type="checkbox" disabled> Extrações</label>
            <label class="custom-control">
                <input name="tratamento[]" value="TO" type="checkbox" disabled> Tratamento ortopédico funcional (aparelho móvel) </label>
            <label class="custom-control">
                <input name="tratamento[]" value="CF" type="checkbox" disabled> Cirurgia de freio labial </label>
            <label class="custom-control">
                <input name="tratamento[]" value="TP" type="checkbox" disabled> Tratamento para sensibilidade </label>
            <label class="custom-control">
                <input name="tratamento[]" value="OU" type="checkbox" disabled> Outras </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-lg-8 col-md-12 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>22 - Já utilizou flúor?</label>
            <label class="custom-control">
                <input name="flour" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="flour" value="N" checked="checked" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>23 - Quantas vezes ao dia os dentes da criança são limpos?</label>
            <label class="custom-control">
                <input name="dentelimpo" value="1" type="radio"> Um</label>
            <label class="custom-control">
                <input name="dentelimpo" value="2" checked="checked" type="radio"> Dois</label>
            <label class="custom-control">
                <input name="dentelimpo" value="3" type="radio"> Três ou mais </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>24 - O que é utilizado para a limpeza:</label>
            <label class="custom-control">
                <input name="limpeza[]" value="ES" checked="checked" type="checkbox"> Escova </label>
            <label class="custom-control">
                <input name="limpeza[]" value="PA" checked="checked" type="checkbox"> Pasta</label>
            <label class="custom-control">
                <input name="limpeza[]" value="FD" type="checkbox"> Fio dental </label>
            <label class="custom-control">
                <input name="limpeza[]" value="EB" type="checkbox"> Enxague bucal </label>
            <label class="custom-control">
                <input name="limpeza[]" value="GP" type="checkbox"> Gaze ou pano de algodão</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>25 - Sua pasta de dente possui FLUOR?</label>
            <label class="custom-control">
                <input name="pasta" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="pasta" value="N" checked="checked" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label> 26 - Quem coloca a apasta na escova da criança?</label>
            <label class="custom-control">
                <input name="colocaPasta" value="PC" type="radio"> A própria criança </label>
            <label class="custom-control">
                <input name="colocaPasta" value="IM" type="radio"> Irmã(o) mais velho</label>
            <label class="custom-control">
                <input name="colocaPasta" value="AR" checked="checked" type="radio"> Adulto responsável</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>27 - Qual o equivalente à quantidade de creme dental utilizada para a escovação?</label>
            <label class="custom-control">
                <input name="qtdCreme" value="GF" type="radio"> Grão de feijão branco </label>
            <label class="custom-control">
                <input name="qtdCreme" value="GE" type="radio"> Ervilha</label>
            <label class="custom-control">
                <input name="qtdCreme" value="GA" checked="checked" type="radio"> Grão de arroz</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>28 - Desde quando é realizada a limpeza?</label>
            <label class="custom-control">
                <input name="qtdlimpeza" value="AT" checked="checked" type="radio"> Antes de ter dentes </label>
            <label class="custom-control">
                <input name="qtdlimpeza" value="AP" type="radio"> Após os primeiros dente</label>
            <label class="custom-control">
                <input name="qtdlimpeza" value="AI" type="radio"> Após a irrupção de todos os dentes</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>29 - A limpeza dos dentes é feita?</label>
            <label class="custom-control">
                <input name="dentelimpeza" value="LA" type="radio"> Logo após a refeição</label>
            <label class="custom-control">
                <input name="dentelimpeza" value="MH" checked="checked" type="radio"> Meia hora após a refeição</label>
            <label class="custom-control">
                <input name="dentelimpeza" value="AH" type="radio"> Algumas horas após a refeição</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>30 - Teve orientação de higiene pelo dentista?</label>
            <label class="custom-control">
                <input name="orientahigiene" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="orientahigiene" value="N" checked="checked" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>31 - Roé unhas ?</label>
            <label class="custom-control">
                <input name="roeunhas" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="roeunhas" value="N" checked="checked" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>32 - Morde objetos ?</label>
            <label class="custom-control">
                <input name="mordeobjetos" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="mordeobjetos" value="N" checked="checked" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>33 - Morde lábios ou bochehas ?</label>
            <label class="custom-control">
                <input name="mordelabios" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="mordelabios" value="N" checked="checked" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>34 - Ronca ao dormir ?</label>
            <label class="custom-control">
                <input name="ronca" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="ronca" value="N" checked="checked" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>35 - Baba no travesseiro?</label>
            <label class="custom-control">
                <input name="baba" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="baba" value="N" checked="checked" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>36 - O sono é tranquilo?</label>
            <label class="custom-control">
                <input name="sonotranquilo" value="S" checked="checked" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="sonotranquilo" value="N" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>37 - Uso de mamadeira?</label>
            <label class="custom-control">
                <input name="mamadeira" value="S" checked="checked" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="mamadeira" value="N" type="radio"> Não </label>
            <div class="form-group">
                <label for="q_mamadeira">Se sim, até que idade?</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label for="s_mamadeira">
                            <select id="s_mamadeira" name="s_mamadeira" class="form-control radius-select">
                                <option value="A" selected="selected">Anos</option>
                                <option value="M">Meses</option>
                            </select>
                        </label>
                    </div>
                    <input id="q_mamadeira" name="q_mamadeira" class="form-control mask-num-short" type="text" aria-label="Digite a idade que uso mamadeira"> </div>
            </div>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>38 - Uso de chupeta?</label>
            <label class="custom-control">
                <input name="chupeta" value="S" checked="checked" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="chupeta" value="N" type="radio"> Não </label>
            <div class="form-group">
                <label for="q_chupeta">Se sim, até que idade?</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label for="s_chupeta">
                            <select id="s_chupeta" name="s_chupeta" class="form-control radius-select">
                                <option value="A" selected="selected">Anos</option>
                                <option value="M">Meses</option>
                            </select>
                        </label>
                    </div>
                    <input id="q_chupeta" name="q_chupeta" class="form-control mask-num-short" type="text" aria-label="Digite a idade do uso de chupeta"> </div>
            </div>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>39 - Chupa ou chupou dedo?</label>
            <label class="custom-control">
                <input name="chupouDedo" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="chupouDedo" value="N" checked="checked" type="radio"> Não </label>
            <div class="form-group">
                <label for="q_chupouDedo">Se sim, até que idade ?</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label for="s_chupouDedo">
                            <select id="s_chupouDedo" name="s_chupouDedo" class="form-control radius-selectl" disabled>
                                <option value="A">Anos</option>
                                <option value="M">Meses</option>
                            </select>
                        </label>
                    </div>
                    <input id="q_chupouDedo" name="q_chupouDedo" class="form-control mask-num-short" type="text" disabled aria-label="Digite a idade que chupou dedo"> </div>
            </div>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>40 - Formato de chupeta?</label>
            <label class="custom-control">
                <input name="formatoChupeta" value="BR" type="radio"> Bico arredondado</label>
            <label class="custom-control">
                <input name="formatoChupeta" value="BC" checked="checked" type="radio"> Bico achatado</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>41 - Qual é ou era o conteúdo da mamadeira?</label>
            <label class="custom-control">
                <input name="conteudo" value="LP" checked="checked" type="radio"> Leite em pó</label>
            <label class="custom-control">
                <input name="conteudo" value="LI" type="radio"> Leite integral</label>
            <label class="custom-control">
                <input name="conteudo" value="AC" type="radio"> Achocolatado</label>
            <label class="custom-control">
                <input name="conteudo" value="LS" type="radio"> Leite semidesnatadoo</label>
            <label class="custom-control">
                <input name="conteudo" value="LD" type="radio"> Leite desnatado</label>
            <label class="custom-control">
                <input name="conteudo" value="FP" type="radio"> Fórmulas pediátricas</label>
            <label class="custom-control">
                <input name="conteudo" value="CN" type="radio"> Complementos nutricionais</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>42 - O que utiliza ou utilizava para adoçar o conteúdo da mamadeira?</label>
            <label class="custom-control">
                <input name="adocar" value="AC" checked="checked" type="radio"> Açucar</label>
            <label class="custom-control">
                <input name="adocar" value="AD" type="radio"> Adoçante</label>
            <label class="custom-control">
                <input name="adocar" value="ME" type="radio"> Mel</label>
            <label class="custom-control">
                <input name="adocar" value="NA" type="radio"> Não acrescenta nada para adoçar</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label for="qtdPessoas">43 - Quantas pessoas fazem a refeição junto com a criança?</label>
            <input class="form-control mask-num-short" name="qtdPessoas" id="qtdPessoas" type="text"> </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>44 - Com que frequência ingere os seguintes Bife ?</label>
            <label class="custom-control">
                <input name="ingerebife" value="MA" type="radio"> Mais de 4x por semana</label>
            <label class="custom-control">
                <input name="ingerebife" value="P4" type="radio"> Por 4x por semana</label>
            <label class="custom-control">
                <input name="ingerebife" value="ME" type="radio"> Menos de 4x </label>
            <label class="custom-control">
                <input name="ingerebife" value="RA" checked="checked" type="radio"> Raramente</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>45 - Se ingere bife, precisa cortar muito pequeno?</label>
            <label class="custom-control">
                <input name="cortapequeno" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="cortapequeno" value="N" checked="checked" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>46 - Com que frequência ingere frutas com casca?</label>
            <label class="custom-control">
                <input name="frutas" value="MA" type="radio"> Mais de 4x por semana</label>
            <label class="custom-control">
                <input name="frutas" value="P4" type="radio"> Por 4x por semana</label>
            <label class="custom-control">
                <input name="frutas" value="ME" type="radio"> Menos de 4x </label>
            <label class="custom-control">
                <input name="frutas" value="RA" checked="checked" type="radio"> Raramente</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>47 - Com que frequência ingere legumes e verduras cruas?</label>
            <label class="custom-control">
                <input name="legumes" value="MA" type="radio"> Mais de 4x por semana</label>
            <label class="custom-control">
                <input name="legumes" value="P4" type="radio"> Por 4x por semana</label>
            <label class="custom-control">
                <input name="legumes" value="ME" type="radio"> Menos de 4x </label>
            <label class="custom-control">
                <input name="legumes" value="RA" checked="checked" type="radio"> Raramente</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>48 - Com que frequência ingere legumes ou verduras cozidas?</label>
            <label class="custom-control">
                <input name="legumescoz" value="MA" type="radio"> Mais de 4x por semana</label>
            <label class="custom-control">
                <input name="legumescoz" value="P4" type="radio"> Por 4x por semana</label>
            <label class="custom-control">
                <input name="legumescoz" value="ME" type="radio"> Menos de 4x </label>
            <label class="custom-control">
                <input name="legumescoz" value="RA" checked="checked" type="radio"> Raramente</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>49 - Com que frequência ingere salgadinhos industrializados?</label>
            <label class="custom-control">
                <input name="ingeresalg" value="MA" type="radio"> Mais de 4x por semana</label>
            <label class="custom-control">
                <input name="ingeresalg" value="P4" type="radio"> Por 4x por semana</label>
            <label class="custom-control">
                <input name="ingeresalg" value="ME" type="radio"> Menos de 4x </label>
            <label class="custom-control">
                <input name="ingeresalg" value="RA" checked="checked" type="radio"> Raramente</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>50 - Com que frequência ingere doces industrializados?</label>
            <label class="custom-control">
                <input name="docesindustr" value="MA" type="radio"> Mais de 4x por semana</label>
            <label class="custom-control">
                <input name="docesindustr" value="P4" type="radio"> Por 4x por semana</label>
            <label class="custom-control">
                <input name="docesindustr" value="ME" type="radio"> Menos de 4x </label>
            <label class="custom-control">
                <input name="docesindustr" value="RA" checked="checked" type="radio"> Raramente</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>51 - Com que frequência ingere Doces caseiros?</label>
            <label class="custom-control">
                <input name="docescaseiros" value="MA" type="radio"> Mais de 4x por semana</label>
            <label class="custom-control">
                <input name="docescaseiros" value="P4" type="radio"> Por 4x por semana</label>
            <label class="custom-control">
                <input name="docescaseiros" value="ME" type="radio"> Menos de 4x </label>
            <label class="custom-control">
                <input name="docescaseiros" value="RA" checked="checked" type="radio"> Raramente</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>52 - Com que frequência ingere biscoito recheado?</label>
            <label class="custom-control">
                <input name="biscoito" value="MA" type="radio"> Mais de 4x por semana</label>
            <label class="custom-control">
                <input name="biscoito" value="P4" type="radio"> Por 4x por semana</label>
            <label class="custom-control">
                <input name="biscoito" value="ME" type="radio"> Menos de 4x </label>
            <label class="custom-control">
                <input name="biscoito" value="RA" checked="checked" type="radio"> Raramente</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>53 - Com que frequência ingere refrigerante?</label>
            <label class="custom-control">
                <input name="refrigerante" value="MA" type="radio"> Mais de 4x por semana</label>
            <label class="custom-control">
                <input name="refrigerante" value="P4" type="radio"> Por 4x por semana</label>
            <label class="custom-control">
                <input name="refrigerante" value="ME" type="radio"> Menos de 4x </label>
            <label class="custom-control">
                <input name="refrigerante" value="RA" checked="checked" type="radio"> Raramente</label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>54 - Ingere líquidos com a refeição?</label>
            <label class="custom-control">
                <input name="ingereliquidos" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="ingereliquidos" value="N" checked="checked" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>55 - Tem dificuldade ou preguiça de comer alimentos duros?</label>
            <label class="custom-control">
                <input name="dificDuro" value="S" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="dificDuro" value="N" checked="checked" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
    <div class="col-md-6 col-lg-4 col-sm-6 mb-3">
        <div class="card card-body h-100">
            <label>56 - Você acharia importante receber, um guia informativo sobre prevenção da doença cárie?</label>
            <label class="custom-control">
                <input name="informativo" value="S" checked="checked" type="radio"> Sim </label>
            <label class="custom-control">
                <input name="informativo" value="N" type="radio"> Não </label>
        </div>
        <!-- ./card card-body h-100 -->
    </div>
    <!-- ./col-md-6 col-lg-4 col-sm-6 mb-3 -->
</div>
<!-- ./form-row -->