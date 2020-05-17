<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <div class="form-row">
        <div class="col-lg-6 mb-3">
            <div class="card card-body h-100">
                <div class="form-group">
                    <label for="cpf">1 - CPF do Responsável</label>
                    <input class="form-control mask-cpf" id="cpf" name="cpf" type="text">
                    <input type="hidden" id="url_submit_cpf" value="<?php echo base_url('cadastro/jqueryCPF'); ?>"> </div>
                <div class="form-group">
                    <label for="cuidador">2 - Nome Completo</label>
                    <input class="form-control" id="cuidador" name="cuidador" type="text" maxlength="100"> </div>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="pele">3 - Cor de Pele</label>
                        <select class="form-control" id="pele" name="pele">
                            <option value="BR">Branco</option>
                            <option value="PA" selected="selected">Pardo</option>
                            <option value="PR">Preto</option>
                            <option value="AM">Amarelo (Oriental)</option>
                            <option value="VE">Vermelho (Indígena)</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-8">
                        <label for="email">4 - Email</label>
                        <input class="form-control" id="email" name="email" type="email" maxlength="100"> </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="tel">5 - Telefone</label>
                        <input class="form-control mask-tel" id="tel" name="tel" type="tel"> </div>
                    <div class="form-group col-sm-6">
                        <label for="cel">6 - Celular</label>
                        <input class="form-control mask-cel" id="cel" name="cel" type="tel"> </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="dtnasc">7 - Data de Nascimento</label>
                        <input class="form-control mask-date" id="dtnasc" name="dtnasc" type="text" placeholder="dd/mm/aaaa"> </div>
                    <div class="form-group col-sm-6">
                        <label for="genero">8 - Gênero</label>
                        <select class="form-control" id="genero" name="genero">
                            <option value="F" selected="selected">Feminino</option>
                            <option value="M">Masculino</option>
                            <option value="N">Não Prefiro Dizer</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- ENDEREÇO -->
        <div class="col-lg-6 mb-3">
            <div class="card card-body h-100">
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="cep">9 - CEP <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/buscaCepEndereco.cfm" tabindex="-1" target="_blank" class="small" rel="noopener">Não sei?</a></label>
                        <input class="form-control mask-cep" id="cep" name="cep" type="text"> </div>
                    <div class="form-group col-sm-8">
                        <label for="endereco">10 - Endereço</label>
                        <input class="form-control" id="endereco" name="endereco" type="text" maxlength="100"> </div>
                </div>
                <!-- ./form-row -->
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="numero">11 - Número</label>
                        <input class="form-control" id="numero" name="numero" type="text"> </div>
                    <div class="form-group col-sm-8">
                        <label for="compl">12 - Complemento</label>
                        <input class="form-control" id="compl" name="compl" type="text" maxlength="80"> </div>
                </div>
                <!-- ./form-row -->
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="bairro">13 - Bairro</label>
                        <input class="form-control" id="bairro" name="bairro" type="text" maxlength="80"> </div>
                    <div class="form-group col-sm-6">
                        <label for="cidade">14 - Cidade</label>
                        <input class="form-control" id="cidade" name="cidade" type="text" maxlength="80"> </div>
                </div>
                <!-- ./form-row -->
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="municipio">15 - Tipos de Áreas</label>
                        <select class="form-control" id="municipio" name="municipio">
                            <option value="U" selected="selected">Urbano (Cidade)</option>
                            <option value="R">Rural (fazenda, sitio, chácara, aldeia, vila agrícola, etc)</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="estado">16 - Estado do endereço</label>
                        <select class="form-control" id="estado" name="estado">
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
                            <option value="SP" selected="selected">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="nacionalidade">17 - Nacionalidade</label>
                        <select class="form-control" id="nacionalidade" name="nacionalidade">
                            <option value="1" selected="selected">BRASIL</option>
                            <option value="2">PORTUGAL</option>
                            <optgroup label="Países mais requisitados">
                                <option value="3">ESTADOS UNIDOS</option>
                                <option value="4">HAITI</option>
                                <option value="5">JAPÃO</option>
                                <option value="6">VENEZUELA</option>
                                <option value="7">PARAGUAI</option>
                                <option value="8">ITÁLIA</option>
                                <option value="9">ESPANHA</option>
                                <option value="10">ARGENTINA</option>
                                <option value="11">CHILE</option>
                                <option value="12">URUGUAI</option>
                                <option value="13">PERU</option>
                            </optgroup>
                            <optgroup label="Outros países">
                                <option value="14">AFEGANISTÃO</option>
                                <option value="15">ACROTÍRI E DECELIA</option>
                                <option value="16">ÁFRICA DO SUL</option>
                                <option value="17">ALBÂNIA</option>
                                <option value="18">ALEMANHA</option>
                                <option value="19">AMERICAN SAMOA</option>
                                <option value="20">ANDORRA</option>
                                <option value="21">ANGOLA</option>
                                <option value="22">ANGUILLA</option>
                                <option value="23">ANTÍGUA E BARBUDA</option>
                                <option value="24">ANTILHAS NEERLANDESAS</option>
                                <option value="25">ARÁBIA SAUDITA</option>
                                <option value="26">ARGÉLIA</option>
                                <option value="27">ARMÉNIA</option>
                                <option value="28">ARUBA</option>
                                <option value="29">AUSTRÁLIA</option>
                                <option value="30">ÁUSTRIA</option>
                                <option value="31">AZERBAIJÃO</option>
                                <option value="32">BAHAMAS</option>
                                <option value="33">BANGLADECHE</option>
                                <option value="34">BARBADOS</option>
                                <option value="35">BARÉM</option>
                                <option value="36">BASSAS DA ÍNDIA</option>
                                <option value="37">BÉLGICA</option>
                                <option value="38">BELIZE</option>
                                <option value="39">BENIM</option>
                                <option value="40">BERMUDAS</option>
                                <option value="41">BIELORRÚSSIA</option>
                                <option value="42">BOLÍVIA</option>
                                <option value="43">BÓSNIA E HERZEGOVINA</option>
                                <option value="44">BOTSUANA</option>
                                <option value="45">BRUNEI DARUSSALAM</option>
                                <option value="46">BULGÁRIA</option>
                                <option value="47">BURQUINA FASO</option>
                                <option value="48">BURUNDI</option>
                                <option value="49">BUTÃO</option>
                                <option value="50">CABO VERDE</option>
                                <option value="51">CAMARÕES</option>
                                <option value="52">CAMBOJA</option>
                                <option value="53">CANADÁ</option>
                                <option value="54">CATAR</option>
                                <option value="55">CAZAQUISTÃO</option>
                                <option value="56">CENTRO-AFRICANA REPÚBLICA</option>
                                <option value="57">CHADE</option>
                                <option value="58">CHINA</option>
                                <option value="59">CHIPRE</option>
                                <option value="60">COLÔMBIA</option>
                                <option value="61">COMORES</option>
                                <option value="62">CONGO</option>
                                <option value="63">CONGO REPÚBLICA DEMOCRÁTICA</option>
                                <option value="64">COREIA DO NORTE</option>
                                <option value="65">COREIA DO SUL</option>
                                <option value="66">COSTA DO MARFIM</option>
                                <option value="67">COSTA RICA</option>
                                <option value="68">CROÁCIA</option>
                                <option value="69">CUBA</option>
                                <option value="70">DINAMARCA</option>
                                <option value="71">DOMÍNICA</option>
                                <option value="72">EGIPTO</option>
                                <option value="73">EMIRADOS ÁRABES UNIDOS</option>
                                <option value="74">EQUADOR</option>
                                <option value="75">ERITREIA</option>
                                <option value="76">ESLOVÁQUIA</option>
                                <option value="77">ESLOVÉNIA</option>
                                <option value="78">ESTÓNIA</option>
                                <option value="79">ETIÓPIA</option>
                                <option value="80">FAIXA DE GAZA</option>
                                <option value="81">FIJI</option>
                                <option value="82">FILIPINAS</option>
                                <option value="83">FINLÂNDIA</option>
                                <option value="84">FRANÇA</option>
                                <option value="85">GABÃO</option>
                                <option value="86">GÂMBIA</option>
                                <option value="87">GANA</option>
                                <option value="88">GEÓRGIA</option>
                                <option value="89">GIBRALTAR</option>
                                <option value="90">GRANADA</option>
                                <option value="91">GRÉCIA</option>
                                <option value="92">GRONELÂNDIA</option>
                                <option value="93">GUADALUPE</option>
                                <option value="94">GUAM</option>
                                <option value="95">GUATEMALA</option>
                                <option value="96">GUERNSEY</option>
                                <option value="97">GUIANA</option>
                                <option value="98">GUIANA FRANCESA</option>
                                <option value="99">GUINÉ</option>
                                <option value="100">GUINÉ EQUATORIAL</option>
                                <option value="101">GUINÉ-BISSAU</option>
                                <option value="102">HONDURAS</option>
                                <option value="103">HONG KONG</option>
                                <option value="104">HUNGRIA</option>
                                <option value="105">IÉMEN</option>
                                <option value="106">ILHA BOUVET</option>
                                <option value="107">ILHA CHRISTMAS</option>
                                <option value="108">ILHA DE CLIPPERTON</option>
                                <option value="109">ILHA DE JOÃO DA NOVA</option>
                                <option value="110">ILHA DE MAN</option>
                                <option value="111">ILHA DE NAVASSA</option>
                                <option value="112">ILHA EUROPA</option>
                                <option value="113">ILHA NORFOLK</option>
                                <option value="114">ILHA TROMELIN</option>
                                <option value="115">ILHAS ASHMORE E CARTIER</option>
                                <option value="116">ILHAS CAIMAN</option>
                                <option value="117">ILHAS COCOS (KEELING)</option>
                                <option value="118">ILHAS COOK</option>
                                <option value="119">ILHAS DO MAR DE CORAL</option>
                                <option value="120">ILHAS FALKLANDS (ILHAS MALVINAS)</option>
                                <option value="121">ILHAS FEROE</option>
                                <option value="122">ILHAS GEÓRGIA DO SUL E SANDWICH DO SUL</option>
                                <option value="123">ILHAS MARIANAS DO NORTE</option>
                                <option value="124">ILHAS MARSHALL</option>
                                <option value="125">ILHAS PARACEL</option>
                                <option value="126">ILHAS PITCAIRN</option>
                                <option value="127">ILHAS SALOMÃO</option>
                                <option value="128">ILHAS SPRATLY</option>
                                <option value="129">ILHAS VIRGENS AMERICANAS</option>
                                <option value="130">ILHAS VIRGENS BRITÂNICAS</option>
                                <option value="131">ÍNDIA</option>
                                <option value="132">INDONÉSIA</option>
                                <option value="133">IRÃO</option>
                                <option value="134">IRAQUE</option>
                                <option value="135">IRLANDA</option>
                                <option value="136">ISLÂNDIA</option>
                                <option value="137">ISRAEL</option>
                                <option value="138">JAMAICA</option>
                                <option value="139">JAN MAYEN</option>
                                <option value="140">JERSEY</option>
                                <option value="141">JIBUTI</option>
                                <option value="142">JORDÂNIA</option>
                                <option value="143">KIRIBATI</option>
                                <option value="144">KOWEIT</option>
                                <option value="145">LAOS</option>
                                <option value="146">LESOTO</option>
                                <option value="147">LETÓNIA</option>
                                <option value="148">LÍBANO</option>
                                <option value="149">LIBÉRIA</option>
                                <option value="150">LÍBIA</option>
                                <option value="151">LISTENSTAINE</option>
                                <option value="152">LITUÂNIA</option>
                                <option value="153">LUXEMBURGO</option>
                                <option value="154">MACAU</option>
                                <option value="155">MACEDÓNIA</option>
                                <option value="156">MADAGÁSCAR</option>
                                <option value="157">MALÁSIA</option>
                                <option value="158">MALAVI</option>
                                <option value="159">MALDIVAS</option>
                                <option value="160">MALI</option>
                                <option value="161">MALTA</option>
                                <option value="162">MARROCOS</option>
                                <option value="163">MARTINICA</option>
                                <option value="164">MAURÍCIA</option>
                                <option value="165">MAURITÂNIA</option>
                                <option value="166">MAYOTTE</option>
                                <option value="167">MÉXICO</option>
                                <option value="168">MIANMAR</option>
                                <option value="169">MICRONÉSIA</option>
                                <option value="170">MOÇAMBIQUE</option>
                                <option value="171">MOLDÁVIA</option>
                                <option value="172">MÓNACO</option>
                                <option value="173">MONGÓLIA</option>
                                <option value="174">MONTENEGRO</option>
                                <option value="175">MONTSERRAT</option>
                                <option value="176">NAMÍBIA</option>
                                <option value="177">NAURU</option>
                                <option value="178">NEPAL</option>
                                <option value="179">NICARÁGUA</option>
                                <option value="180">NÍGER</option>
                                <option value="181">NIGÉRIA</option>
                                <option value="182">NIUE</option>
                                <option value="183">NORUEGA</option>
                                <option value="184">NOVA CALEDÓNIA</option>
                                <option value="185">NOVA ZELÂNDIA</option>
                                <option value="186">OMÃ</option>
                                <option value="187">PAÍSES BAIXOS</option>
                                <option value="188">PALAU</option>
                                <option value="189">PALESTINA</option>
                                <option value="190">PANAMÁ</option>
                                <option value="191">PAPUÁSIA-NOVA GUINÉ</option>
                                <option value="192">PAQUISTÃO</option>
                                <option value="193">POLINÉSIA FRANCESA</option>
                                <option value="194">POLÓNIA</option>
                                <option value="195">PORTO RICO</option>
                                <option value="196">QUÉNIA</option>
                                <option value="197">QUIRGUIZISTÃO</option>
                                <option value="198">REINO UNIDO</option>
                                <option value="199">REPÚBLICA CHECA</option>
                                <option value="200">REPÚBLICA DOMINICANA</option>
                                <option value="201">ROMÉNIA</option>
                                <option value="202">RUANDA</option>
                                <option value="203">RÚSSIA</option>
                                <option value="204">SAHARA OCCIDENTAL</option>
                                <option value="205">SALVADOR</option>
                                <option value="206">SAMOA</option>
                                <option value="207">SANTA HELENA</option>
                                <option value="208">SANTA LÚCIA</option>
                                <option value="209">SANTA SÉ</option>
                                <option value="210">SÃO CRISTÓVÃO E NEVES</option>
                                <option value="211">SÃO MARINO</option>
                                <option value="212">SÃO PEDRO E MIQUELÃO</option>
                                <option value="213">SÃO TOMÉ E PRÍNCIPE</option>
                                <option value="214">SÃO VICENTE E GRANADINAS</option>
                                <option value="215">SEICHELES</option>
                                <option value="216">SENEGAL</option>
                                <option value="217">SERRA LEOA</option>
                                <option value="218">SÉRVIA</option>
                                <option value="219">SINGAPURA</option>
                                <option value="220">SÍRIA</option>
                                <option value="221">SOMÁLIA</option>
                                <option value="222">SRI LANCA</option>
                                <option value="223">SUAZILÂNDIA</option>
                                <option value="224">SUDÃO</option>
                                <option value="225">SUÉCIA</option>
                                <option value="226">SUÍÇA</option>
                                <option value="227">SURINAME</option>
                                <option value="228">SVALBARD</option>
                                <option value="229">TAILÂNDIA</option>
                                <option value="230">TAIWAN</option>
                                <option value="231">TAJIQUISTÃO</option>
                                <option value="232">TANZÂNIA</option>
                                <option value="233">TERRITÓRIO BRITÂNICO DO OCEANO ÍNDICO</option>
                                <option value="234">TERRITÓRIO DAS ILHAS HEARD E MCDONALD</option>
                                <option value="235">TIMOR-LESTE</option>
                                <option value="236">TOGO</option>
                                <option value="237">TOKELAU</option>
                                <option value="238">TONGA</option>
                                <option value="239">TRINDADE E TOBAGO</option>
                                <option value="240">TUNÍSIA</option>
                                <option value="241">TURKS E CAICOS</option>
                                <option value="242">TURQUEMENISTÃO</option>
                                <option value="243">TURQUIA</option>
                                <option value="244">TUVALU</option>
                                <option value="245">UCRÂNIA</option>
                                <option value="246">UGANDA</option>
                                <option value="247">USBEQUISTÃO</option>
                                <option value="248">VANUATU</option>
                                <option value="249">VIETNAME</option>
                                <option value="250">WALLIS E FUTUNA</option>
                                <option value="251">ZÂMBIA</option>
                                <option value="252">ZIMBABUÉ</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="estadoOrigem">18 - Estado de origem</label>
                        <select class="form-control" name="estadoOrigem" id="estadoOrigem">
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
                            <option value="SP" selected="selected">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="0" disabled="disabled">Imigrante</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- Estado Cível -->
        <div class="col-sm-5 col-lg-6 mb-3">
            <div class="card card-body h-100">
                <label>19 - Estado Cível</label>
                <label class="custom-control">
                    <input name="estadocivil" value="CA" type="radio" checked> Casado(a)</label>
                <label class="custom-control">
                    <input name="estadocivil" value="DI" type="radio"> Divorciado(a)</label>
                <label class="custom-control">
                    <input name="estadocivil" value="SE" type="radio"> Separado(a)</label>
                <label class="custom-control">
                    <input name="estadocivil" value="VI" type="radio"> Viúvo(a)</label>
                <label class="custom-control">
                    <input name="estadocivil" value="UE" type="radio"> União Estável</label>
            </div>
        </div>
        <div class="col-sm-7 col-lg-6 mb-3">
            <div class="card card-body h-100">
                <div class="form-group">
                    <label for="observacao">20 - Observação</label>
                    <textarea class="form-control" id="observacao" name="observacao" rows="5" maxlength="300"></textarea>
                </div>
            </div>
        </div>
    </div>
