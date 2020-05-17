<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <div class="form-row">
        <div class="col-sm-6 col-lg-4 mb-3">
            <div class="card card-body h-100">
                <div class="form-group">
                    <label for="especiedomicilio">1 - Qual a especie de domicílio?</label>
                    <select class="form-control" name="especiedomicilio" id="especiedomicilio">
                        <option value="DP" selected="selected">Domicílio particular permanentemente ocupado</option>
                        <option value="DI">Domicílio particular improvisado</option>
                        <option value="DC">Domicílio coletivo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="domiciliopermanente">2 - Para domicilios permanentemente ocupados:</label>
                    <select class="form-control" name="domiciliopermanente" id="domiciliopermanente">
                        <option value="PDJ" selected="selected">Próprio de algum morador (já pago) </option>
                        <option value="PDM">Próprio de algum morador (ainda pagando) </option>
                        <option value="ALU">Alugado </option>
                        <option value="CPE">Cedido por empregador </option>
                        <option value="OU">Outra condição </option>
                    </select>
                </div>
            </div>
            <!-- ./card card-body h-100 -->
        </div>
        <!-- ./col-sm-6 col-lg-4 mb-3 -->
        <div class="col-sm-6 col-lg-4 mb-3">
            <div class="card card-body h-100">
                <div class="form-group">
                    <label for="qtdBanheiro">3 - Quantos banheiros com chuveiro ou banheira e vaso sanitário?</label>
                    <input class="form-control mask-num-short" name="qtdBanheiro" id="qtdBanheiro" type="text"> </div>
                <div class="form-group">
                    <label for="qtdExclusivo">4 - Quantos Banheiros de uso exclusivo dos moradores?</label>
                    <input class="form-control mask-num-short" name="qtdExclusivo" id="qtdExclusivo" type="text"> </div>
            </div>
            <!-- ./card card-body h-100 -->
        </div>
        <!-- ./col-sm-6 col-lg-4 mb-3 -->
        <div class="col-sm-6 col-lg-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <label>5 - Utiliza sanitário ou buraco para dejeções(Cercado por paredes de qualquer material)? </label>
                    <label class="custom-control d-block">
                        <input type="radio" name="utiliza" value="S" checked> Sim</label>
                    <label class="custom-control d-block">
                        <input type="radio" name="utiliza" value="S" checked> Não</label>
                </div>
                <footer class="card-footer small mb-auto"> Detalhe.: A palavra SANITÁRIO pode ser CONHECIDO como: casinha, patente, latrina privada, sentina, retrete, casa-de-força, cambrone </footer>
            </div>
            <!-- ./card h-100 -->
        </div>
        <!-- ./col-sm-6 col-lg-4 mb-3 -->
        <div class="col-sm-6 col-lg-4 mb-3">
            <div class="card card-body h-100">
                <div class="form-group">
                    <label for="esgoto">6 - Esgoto do banheiro ou sanitário é lançado (jogado) em:</label>
                    <select class="form-control" name="esgoto" id="esgoto">
                        <option value="FR">Fossa Rudimentar</option>
                        <option value="FS" selected="selected">Fossa séptica</option>
                        <option value="RI">Rio, lago ou mar</option>
                        <option value="OU">Outros</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="abastecimento">7 - A forma de abastecimento de água utilizada</label>
                    <select class="form-control" name="abastecimento" id="abastecimento">
                        <option value="RG" selected="selected">Rede geral de distribuição </option>
                        <option value="AD">Água da chuva armazenada em cisterna</option>
                        <option value="PN">Poço ou nascente na aldeia</option>
                        <option value="CC">Carro ou caminhão-pipa</option>
                        <option value="PF">Poço ou nascente fora da propriedade</option>
                        <option value="RI">Rios, açudes e lagos</option>
                        <option value="OU">Outras formas </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="lixo">8 - O lixo do domicílio</label>
                    <select class="form-control" name="lixo" id="lixo">
                        <option value="CD" selected="selected">Coletado diretamente por serviço de limpeza</option>
                        <option value="CE">Colocado em caçamba pública</option>
                        <option value="EN">Enterrado</option>
                        <option value="JT">Jogado em terreno baldio</option>
                        <option value="QU">Queimado</option>
                        <option value="JR">Jogado em rio, lago ou mar</option>
                        <option value="OU"> Tem outro destino</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="energiaeletrica">9 - Existe energia elétrica no domicílio?</label>
                    <select class="form-control" name="energiaeletrica" id="energiaeletrica">
                        <option value="SC" selected="selected">Sim, de companhia distribuidora</option>
                        <option value="SO">Sim, de outras fontes </option>
                        <option value="NE">Não existe energia elétrica </option>
                    </select>
                </div>
            </div>
            <!-- ./card card-body h-100 -->
        </div>
        <!-- col-sm-6 col-lg-4 mb-3 -->
        <div class="col-sm-6 col-lg-4 mb-3">
            <div class="card card-body h-100">
                <div class="form-group">
                    <label for="localidade">10 - Em que localidade da cidade seu domicílio se encontra?</label>
                    <select name="localidade" id="localidade" class="form-control">
                        <option value="BP" selected="selected">Bairro na periferia da cidade</option>
                        <option value="BC">Bairro no centro expandido da cidade </option>
                        <option value="CR">Condomínio residencial fechado </option>
                        <option value="CH">Conjunto habitacional (CDHU, COHAB, Cingapura, BNH, etc.)</option>
                        <option value="FC">Favela / Cortiço </option>
                        <option value="RR">Região rural (chácara, sítio, fazenda, aldeia, etc.) </option>
                        <option value="OU">Outros </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="outrolocalidade">Se é Outros, informe quais?</label>
                    <input class="form-control mt-2" name="outrolocalidade" id="outrolocalidade" type="text" disabled> </div>
                <div class="form-group">
                    <label for="quemmora">11 - Com quem você mora?</label>
                    <select name="quemmora" id="quemmora" class="form-control">
                        <option value="PA">Pais</option>
                        <option value="CO" selected="selected">Cônjugue </option>
                        <option value="CD">Companheiro domésticos </option>
                        <option value="SO">Sozinho</option>
                        <option value="OU">Outros </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="qtdIrmaos">12 - Quantos irmãos e meio-irmãos nascidos vivos você teve no total?</label>
                    <input class="form-control mask-num-short" id="qtdIrmaos" name="qtdIrmaos" type="text"> </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3">
            <div class="card card-body h-100">
                <div class="form-group">
                    <label for="atualmente">13 - Atualmente você:</label>
                    <select name="atualmente" id="atualmente" class="form-control">
                        <option value="AE">Apenas estuda</option>
                        <option value="TE">Trabalha e estuda</option>
                        <option value="AT">Apenas trabalha </option>
                        <option value="ED">Está desempregado </option>
                        <option value="EL">Está de licença ou incapacitado de estudar / trabalhar </option>
                        <option value="NT" selected="selected">Não trabalha nem estuda</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="trabalho">14 - No seu trabalho principal, você é ou era:</label>
                    <select name="trabalho" id="trabalho" class="form-control">
                        <option value="NT" selected="selected">Nunca Trabalhou</option>
                        <option value="EA">Empregado assalariado (exceto empregado doméstico)</option>
                        <option value="ED">Empregado doméstico mensalista ou diarista</option>
                        <option value="EQ">Empregado que ganha por produção (comissão) </option>
                        <option value="ER">Estagiário remunerado </option>
                        <option value="BO">Bolsista</option>
                        <option value="TP">Trabalha por conta própria, é autônomo </option>
                        <option value="EN">É dono de negócio, empregador </option>
                        <option value="TE">Trabalha em negócio familiar sem remuneração</option>
                        <option value="PS">Presta serviço militar obrigatório, assistencial ou religioso com alguma remuneração. </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ocupacao">15 - Qual era o seu trabalho ou ocupação principal</label>
                    <input class="form-control" name="ocupacao" id="ocupacao" type="text" disabled="disabled"> </div>
            </div>
            <!-- ./card card-body h-100 -->
        </div>
        <!-- ./col-sm-6 col-lg-4 mb-3 -->
        <div class="col-sm-6 mb-3">
            <div class="card card-body h-100">
                <div class="form-group">
                    <label for="renda">16 - Qual a sua renda mensal:</label>
                    <select name="renda" id="renda" class="form-control">
                        <option value="SR">Sem renda </option>
                        <option value="A0" selected="selected">Até 954: Menos de 1 salário mínimo</option>
                        <option value="A1">Entre R$ 954 e R$ 1907: De um a menos de dois salários mínimos</option>
                        <option value="A2">Entre R$ 1908 e R$ 2861: De dois a menos de três salários mínimos</option>
                        <option value="A3">Entre R$ 2862 e R$ 3815: De três a menos de quatro salários mínimos</option>
                        <option value="A4">Entre R$ 3816 e R$ 4769: De quatro a menos de cinco salários mínimos</option>
                        <option value="A5">Entre R$ 4770 e R$ 5723: De cinco a menos de seis salários mínimos</option>
                        <option value="A6">Entre R$ 5724 e R$ 6677: De seis a menos de sete salários mínimos</option>
                        <option value="A7">Entre R$ 6678 e R$ 7631: De sete a menos de oito salários mínimos</option>
                        <option value="A8">Entre R$ 7632 e R$ 8585: De oito a menos de nove mínimos</option>
                        <option value="A9">Entre R$ 8586 e R$ 9539: De nove a dez salários mínimos</option>
                        <option value="A10">Maior que R$ 9540: Acima de dez salários mínimos </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="rendafamilia">17 - Qual é renda familiar mensal ? (soma daqueles que moram)</label>
                    <select name="rendafamilia" id="rendafamilia" class="form-control">
                        <option value="SR">Sem renda </option>
                        <option value="A0" selected="selected">Até 954: Menos de 1 salário mínimo</option>
                        <option value="A1">Entre R$ 954 e R$ 1907: De um a menos de dois salários mínimos</option>
                        <option value="A2">Entre R$ 1908 e R$ 2861: De dois a menos de três salários mínimos</option>
                        <option value="A3">Entre R$ 2862 e R$ 3815: De três a menos de quatro salários mínimos</option>
                        <option value="A4">Entre R$ 3816 e R$ 4769: De quatro a menos de cinco salários mínimos</option>
                        <option value="A5">Entre R$ 4770 e R$ 5723: De cinco a menos de seis salários mínimos</option>
                        <option value="A6">Entre R$ 5724 e R$ 6677: De seis a menos de sete salários mínimos</option>
                        <option value="A7">Entre R$ 6678 e R$ 7631: De sete a menos de oito salários mínimos</option>
                        <option value="A8">Entre R$ 7632 e R$ 8585: De oito a menos de nove mínimos</option>
                        <option value="A9">Entre R$ 8586 e R$ 9539: De nove a dez salários mínimos</option>
                        <option value="A10">Maior que R$ 9540: Acima de dez salários mínimos </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="participacao">18 - Qual a sua participação na vida econômica do grupo familiar?</label>
                    <select name="participacao" id="participacao" class="form-control">
                        <option value="NT" selected="selected">Não trabalho e sou sustentado por minha família ou outras pessoas</option>
                        <option value="TS">Trabalho e sou sustentado parcialmente por minha família ou outras pessoas</option>
                        <option value="TR">Trabalho e sou responsável apenas por meu próprio sustento </option>
                        <option value="TP">Trabalho, sou responsável por meu próprio sustento e ainda contribuo parcialmente para o sustento da família</option>
                        <option value="TE">Trabalho e sou o principal responsável pelo sustento da família </option>
                        <option value="RA">Recebo auxílio do governo</option>
                        <option value="OU">Outra situação</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="qtdcontribuicao">19 - Quantas pessoas (contando com você) contribuem para a renda da sua família?</label>
                    <select name="qtdcontribuicao" id="qtdcontribuicao" class="form-control col-md-4">
                        <option value="1" selected="selected">Um</option>
                        <option value="2">Dois</option>
                        <option value="3">Três</option>
                        <option value="4">Quatro</option>
                        <option value="5">Cinco</option>
                        <option value="6">Seis</option>
                        <option value="7">Sete</option>
                        <option value="8">Oito</option>
                        <option value="9">Nove</option>
                        <option value="10">Dez</option>
                        <option value="MM">Mais</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="qtdpessoarenda">20 - Quantas pessoas (contando com você) vivem da renda da sua família?</label>
                    <select name="qtdpessoarenda" id="qtdpessoarenda" class="form-control col-md-4">
                        <option value="1">Um</option>
                        <option value="2">Dois</option>
                        <option value="3" selected="selected">Três</option>
                        <option value="4">Quatro</option>
                        <option value="5">Cinco</option>
                        <option value="6">Seis</option>
                        <option value="7">Sete</option>
                        <option value="8">Oito</option>
                        <option value="9">Nove</option>
                        <option value="10">Dez</option>
                        <option value="MM">Mais</option>
                    </select>
                </div>
            </div>
            <!-- ./card card-body h-100 -->
        </div>
        <!-- ./col-sm-6 mb-3 -->
        <div class="col-sm-6 mb-3">
            <div class="card card-body h-100">
                <div class="form-group">
                    <label for="escolaridade">21 - Qual o seu grau máximo de escolaridade?</label>
                    <select class="form-control" name="escolaridade" id="escolaridade">
                        <option value="NN">Nenhum </option>
                        <option value="FI">Ensino Fundamental incompleto</option>
                        <option value="FC" selected="selected">Ensino fundamental completo </option>
                        <option value="MI">Ensino médio incompleto</option>
                        <option value="MC">Ensino médio completo </option>
                        <option value="SI">Ensino superior incompleto </option>
                        <option value="SC">Ensino superior completo</option>
                        <option value="ES">Especialização</option>
                        <option value="ME">Mestrado </option>
                        <option value="DO">Doutorado </option>
                        <option value="PD">Pós-Doutorado </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ensino">22 - Você cursou ensino médio e fundamental em:</label>
                    <select class="form-control" name="ensino" id="ensino">
                        <option value="EP" selected="selected">Escolas públicas em sua totalidade </option>
                        <option value="ME">A maior parte em escolas públicas</option>
                        <option value="MP">Metade em escolas públicas, metade em escolas privadas </option>
                        <option value="MR">A maior parte em escolas privadas</option>
                        <option value="ER">Escolas privadas inteiramente </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="escolaridadepai">23 - Qual o grau máximo de escolaridade do seu pai?</label>
                    <select class="form-control" name="escolaridadepai" id="escolaridadepai">
                        <option value="NN">Nenhum </option>
                        <option value="FI">Ensino Fundamental incompleto</option>
                        <option value="FC" selected="selected">Ensino fundamental completo </option>
                        <option value="MI">Ensino médio incompleto</option>
                        <option value="MC">Ensino médio completo </option>
                        <option value="SI">Ensino superior incompleto </option>
                        <option value="SC">Ensino superior completo</option>
                        <option value="ES">Especialização</option>
                        <option value="ME">Mestrado </option>
                        <option value="DO">Doutorado </option>
                        <option value="PD">Pós-Doutorado </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="escolaridademae">24 - Qual o grau máximo de escolaridade da seu mãe?</label>
                    <select class="form-control" name="escolaridademae" id="escolaridademae">
                        <option value="NN">Nenhum </option>
                        <option value="FI"> Ensino Fundamental incompleto</option>
                        <option value="FC" selected="selected">Ensino fundamental completo </option>
                        <option value="MI">Ensino médio incompleto</option>
                        <option value="MC">Ensino médio completo </option>
                        <option value="SI">Ensino superior incompleto </option>
                        <option value="SC">Ensino superior completo</option>
                        <option value="ES">Especialização</option>
                        <option value="ME">Mestrado </option>
                        <option value="DO">Doutorado </option>
                        <option value="PD">Pós-Doutorado </option>
                    </select>
                </div>
            </div>
            <!-- ./card card-body h-100 -->
        </div>
        <!-- col-md-6 mb-3 -->
        <div class="col-md-12">
            <div class="card h-100">
                <div class="card-header">Quantidade de Bens</div>
                <div class="form-row card-body">
                    <div class="form-group col-sm-6 col-md-4 col-lg-3">
                        <label for="aparelhoSom">25 - Aparelhos de som?</label>
                        <input class="form-control mask-num-short" name="aparelhoSom" id="aparelhoSom" type="text" value="0"> </div>
                    <div class="form-group col-sm-6 col-md-4 col-lg-3">
                        <label for="dvd">26 - DVD players? </label>
                        <input class="form-control mask-num-short" name="dvd" id="dvd" type="text" value="0"> </div>
                    <div class="form-group col-sm-6 col-md-4 col-lg-3">
                        <label for="geladeira">27 - Geladeiras?</label>
                        <input class="form-control mask-num-short" name="geladeira" id="geladeira" type="text" value="0"> </div>
                    <div class="form-group col-sm-6 col-md-4 col-lg-3 mt-md-auto">
                        <label for="freezer">28 - Freezer independentes?</label>
                        <input class="form-control mask-num-short" name="freezer" id="freezer" type="text" value="0"> </div>
                    <div class="form-group col-sm-6 col-md-4 col-lg-3 mt-sm-auto">
                        <label for="maquinaLavar">29 - Máquinas de lavar roupa?</label>
                        <input class="form-control mask-num-short" name="maquinaLavar" id="maquinaLavar" type="text" value="0"> </div>
                    <div class="form-group col-sm-6 col-md-4 col-lg-3">
                        <label for="computador">30 - Computadores / notebooks?</label>
                        <input class="form-control mask-num-short" name="computador" id="computador" maxlength="2" type="text" value="0"> </div>
                    <div class="form-group col-sm-6 col-md-4 col-lg-3 mt-lg-auto">
                        <label for="tablet">31 - Tablets?</label>
                        <input class="form-control mask-num-short" name="tablet" id="tablet" type="text" value="0"> </div>
                    <div class="form-group col-sm-6 col-md-4 col-lg-3 mt-lg-auto">
                        <label for="telefonefixo">32 - Telefones fixos?</label>
                        <input class="form-control mask-num-short" name="telefonefixo" id="telefonefixo" type="text" value="0"> </div>
                    <div class="form-group col-sm-6 col-md-4 col-lg-3">
                        <label for="telefonecelular">33 - Telefones celeular?</label>
                        <input class="form-control mask-num-short mt-lg-auto" name="telefonecelular" id="telefonecelular" type="text" value="0"> </div>
                    <div class="form-group col-sm-6 col-md-4 col-lg-3">
                        <label for="tvassinatura">34 - TV por assinatuta?</label>
                        <input class="form-control mask-num-short mt-lg-auto" name="tvassinatura" id="tvassinatura" type="text" value="0"> </div>
                    <div class="form-group col-sm-6 col-md-4 col-lg-3">
                        <label for="automoveis">35 - Automóveis? </label>
                        <input class="form-control mask-num-short" name="automoveis" id="automoveis" type="text" value="0"> </div>
                    <div class="form-group col-sm-6 col-md-4 col-lg-3">
                        <label for="motocicletas">36 - Motocicletas?</label>
                        <input class="form-control mask-num-short" name="motocicletas" id="motocicletas" type="text" value="0"> </div>
                    <div class="form-group col-sm-6 col-lg-5 mb-3">
                        <label for="convenio">37 - Você ou família tem plano de saúde?</label>
                        <br>
                        <select class="form-control col-sm-5" name="convenio" id="convenio">
                            <option value="S">Sim</option>
                            <option value="N" selected="selected">Não</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6 col-lg-5 mb-3 mt-lg-auto">
                        <label for="internet">38 - Você tem acesso a internet?</label>
                        <br>
                        <select class="form-control col-sm-5" name="internet" id="internet">
                            <option value="S" selected="selected">Sim</option>
                            <option value="N">Não</option>
                        </select>
                    </div>
                </div>
                <!-- ./form-row -->
            </div>
            <!-- ./card card-body h-100 -->
        </div>
    </div>
    <!-- ./form-row -->